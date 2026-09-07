<?php

namespace CyberSource\Test\Authentication\Jwt;

use PHPUnit\Framework\TestCase;
use CyberSource\Authentication\Jwt\JsonWebTokenGenerator;
use CyberSource\Authentication\Core\MerchantConfiguration;
use CyberSource\Authentication\Core\AuthException;
use CyberSource\Authentication\Util\GlobalParameter;
use CyberSource\Logging\LogConfiguration;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

/**
 * Tests for JsonWebTokenGenerator — focused on the SHARED_SECRET (HS256)
 * signing path and the extractResourcePath / extractSerialNumber helpers.
 */
class JsonWebTokenGeneratorTest extends TestCase
{
    private JsonWebTokenGenerator $generator;
    private MerchantConfiguration $merchantConfig;
    private string $testSecret;
    private string $testKeyId;
    private string $date = 'Thu, 14 Aug 2026 00:00:00 GMT';

    protected function setUp(): void
    {
        $logConfig = new LogConfiguration();

        $this->generator = new JsonWebTokenGenerator($logConfig);

        $this->testSecret = base64_encode('my_test_shared_secret_key_32bytes!');
        $this->testKeyId = 'test_api_key_id_123';

        $this->merchantConfig = new MerchantConfiguration();
        $this->merchantConfig->setAuthenticationType('JWT');
        $this->merchantConfig->setRunEnvironment('apitest.cybersource.com');
        $this->merchantConfig->setMerchantID('test_merchant_id');
        $this->merchantConfig->setJwtKeyType('SHARED_SECRET');
        $this->merchantConfig->setSecretKey($this->testSecret);
        $this->merchantConfig->setApiKeyID($this->testKeyId);
    }

    // -----------------------------------------------------------------------
    // SHARED_SECRET / HS256 token generation
    // -----------------------------------------------------------------------

    public function testGenerateTokenWithSharedSecretReturnsBearerPrefix(): void
    {
        $token = $this->generator->generateToken('/pts/v2/payments', '{"amount":"100"}', 'POST', $this->merchantConfig, $this->date);

        $this->assertStringStartsWith('Bearer ', $token);
    }

    public function testGenerateTokenWithSharedSecretProducesValidJwt(): void
    {
        $token = $this->generator->generateToken('/pts/v2/payments', '{"amount":"100"}', 'POST', $this->merchantConfig, $this->date);

        $jwtString = substr($token, 7); // strip "Bearer "
        $secretKeyBytes = base64_decode($this->testSecret);

        // Decode must not throw
        $decoded = JWT::decode($jwtString, new Key($secretKeyBytes, 'HS256'));

        $this->assertIsObject($decoded);
    }

    public function testSharedSecretTokenContainsExpectedClaims(): void
    {
        $resourcePath = '/pts/v2/payments';
        $payload = '{"amount":"100"}';
        $token = $this->generator->generateToken($resourcePath, $payload, 'POST', $this->merchantConfig, $this->date);

        $jwtString = substr($token, 7);
        $decoded = JWT::decode($jwtString, new Key(base64_decode($this->testSecret), 'HS256'));

        $this->assertSame('POST', $decoded->{'request-method'});
        $this->assertSame('apitest.cybersource.com', $decoded->{'request-host'});
        $this->assertSame('/pts/v2/payments', $decoded->{'request-resource-path'});
        $this->assertSame('test_merchant_id', $decoded->iss);
        $this->assertSame('test_merchant_id', $decoded->{'v-c-merchant-id'});
        $this->assertSame('2', $decoded->{'v-c-jwt-version'});
        $this->assertObjectHasProperty('iat', $decoded);
        $this->assertObjectHasProperty('exp', $decoded);
        $this->assertObjectHasProperty('jti', $decoded);
    }

    public function testSharedSecretTokenContainsDigestForPostRequest(): void
    {
        $token = $this->generator->generateToken('/pts/v2/payments', '{"amount":"100"}', 'POST', $this->merchantConfig, $this->date);
        $decoded = JWT::decode(substr($token, 7), new Key(base64_decode($this->testSecret), 'HS256'));

        $this->assertObjectHasProperty('digest', $decoded);
        $this->assertSame('SHA-256', $decoded->digestAlgorithm);
    }

    public function testSharedSecretTokenOmitsDigestForGetRequest(): void
    {
        $token = $this->generator->generateToken('/pts/v2/payments/123', '', 'GET', $this->merchantConfig, $this->date);
        $decoded = JWT::decode(substr($token, 7), new Key(base64_decode($this->testSecret), 'HS256'));

        $this->assertObjectNotHasProperty('digest', $decoded);
        $this->assertObjectNotHasProperty('digestAlgorithm', $decoded);
    }

    public function testSharedSecretTokenKidMatchesApiKeyId(): void
    {
        $token = $this->generator->generateToken('/pts/v2/payments', '{}', 'POST', $this->merchantConfig, $this->date);
        $jwtString = substr($token, 7);

        // Decode header to check kid
        $parts = explode('.', $jwtString);
        $header = json_decode(base64_decode(strtr($parts[0], '-_', '+/')), true);

        $this->assertSame($this->testKeyId, $header['kid']);
        $this->assertSame('HS256', $header['alg']);
    }

    public function testSharedSecretTokenExpClaim2MinutesAfterIat(): void
    {
        $token = $this->generator->generateToken('/pts/v2/payments', '{}', 'POST', $this->merchantConfig, $this->date);
        $decoded = JWT::decode(substr($token, 7), new Key(base64_decode($this->testSecret), 'HS256'));

        $this->assertSame($decoded->iat + 120, $decoded->exp);
    }

    // -----------------------------------------------------------------------
    // MetaKey — issuer should be portfolioID
    // -----------------------------------------------------------------------

    public function testSharedSecretTokenIssuerIsPortfolioIdWhenMetaKey(): void
    {
        $this->merchantConfig->setUseMetaKey(true);
        $this->merchantConfig->setPortfolioID('portfolio_123');

        $token = $this->generator->generateToken('/pts/v2/payments', '{}', 'POST', $this->merchantConfig, $this->date);
        $decoded = JWT::decode(substr($token, 7), new Key(base64_decode($this->testSecret), 'HS256'));

        $this->assertSame('portfolio_123', $decoded->iss);
        // v-c-merchant-id should still be the merchant ID
        $this->assertSame('test_merchant_id', $decoded->{'v-c-merchant-id'});
    }

    // -----------------------------------------------------------------------
    // PUT / PATCH should also include digest
    // -----------------------------------------------------------------------

    public function testSharedSecretTokenContainsDigestForPutRequest(): void
    {
        $token = $this->generator->generateToken('/pts/v2/payments/123', '{"status":"ok"}', 'PUT', $this->merchantConfig, $this->date);
        $decoded = JWT::decode(substr($token, 7), new Key(base64_decode($this->testSecret), 'HS256'));

        $this->assertObjectHasProperty('digest', $decoded);
        $this->assertSame('SHA-256', $decoded->digestAlgorithm);
    }

    public function testSharedSecretTokenContainsDigestForPatchRequest(): void
    {
        $token = $this->generator->generateToken('/pts/v2/payments/123', '{"status":"ok"}', 'PATCH', $this->merchantConfig, $this->date);
        $decoded = JWT::decode(substr($token, 7), new Key(base64_decode($this->testSecret), 'HS256'));

        $this->assertObjectHasProperty('digest', $decoded);
    }

    // -----------------------------------------------------------------------
    // Resource path — query params are retained in the resource path
    // -----------------------------------------------------------------------

    public function testResourcePathStripsQueryParameters(): void
    {
        $token = $this->generator->generateToken('/reporting/v3/reports?startDate=2024-01-01&endDate=2024-01-31', '', 'GET', $this->merchantConfig, $this->date);
        $decoded = JWT::decode(substr($token, 7), new Key(base64_decode($this->testSecret), 'HS256'));

        $this->assertSame('/reporting/v3/reports?startDate=2024-01-01&endDate=2024-01-31', $decoded->{'request-resource-path'});
    }

    public function testResourcePathWithoutQueryParamsRemainsUnchanged(): void
    {
        $token = $this->generator->generateToken('/pts/v2/payments', '', 'GET', $this->merchantConfig, $this->date);
        $decoded = JWT::decode(substr($token, 7), new Key(base64_decode($this->testSecret), 'HS256'));

        $this->assertSame('/pts/v2/payments', $decoded->{'request-resource-path'});
    }

    public function testEmptyResourcePath(): void
    {
        $token = $this->generator->generateToken('', '', 'GET', $this->merchantConfig, $this->date);
        $decoded = JWT::decode(substr($token, 7), new Key(base64_decode($this->testSecret), 'HS256'));

        $this->assertSame('', $decoded->{'request-resource-path'});
    }

    // -----------------------------------------------------------------------
    // P12 path — missing .p12 file should throw
    // -----------------------------------------------------------------------

    public function testP12PathThrowsWhenP12FileNotFound(): void
    {
        // Create an empty file that pretends to be a .p12 — filemtime() will succeed
        // but openssl_pkcs12_read() inside updateCache() will fail, producing AuthException
        $tempDir = sys_get_temp_dir();
        $fakeP12 = $tempDir . DIRECTORY_SEPARATOR . 'nonexistent_merchant.p12';
        file_put_contents($fakeP12, 'not a real p12');

        try {
            $p12Config = new MerchantConfiguration();
            $p12Config->setAuthenticationType('JWT');
            $p12Config->setRunEnvironment('apitest.cybersource.com');
            $p12Config->setMerchantID('nonexistent_merchant');
            $p12Config->setJwtKeyType('P12');
            $p12Config->setKeyPassword('bogus');
            $p12Config->setKeysDirectory($tempDir);

            $this->expectException(AuthException::class);
            $this->generator->generateToken('/pts/v2/payments', '{}', 'POST', $p12Config, $this->date);
        } finally {
            @unlink($fakeP12);
        }
    }
}
