<?php

namespace CyberSource\Test\Authentication\Util;

use PHPUnit\Framework\TestCase;
use CyberSource\Authentication\Util\MLEUtility;
use CyberSource\Authentication\Util\MLEException;
use CyberSource\Authentication\Core\MerchantConfiguration;
use CyberSource\Authentication\Util\GlobalParameter;
use SimpleJWT\JWE;
use SimpleJWT\Keys\RSAKey;
use SimpleJWT\Keys\KeySet;

/**
 * Tests for MLEUtility — focused on changes related to shared-secret JWT support
 * and the new error path when MLE cert is not available.
 */
class MLEUtilityTest extends TestCase
{
    // -----------------------------------------------------------------------
    // checkIsMLEForAPI
    // -----------------------------------------------------------------------

    public function testCheckIsMLEForAPIReturnsTrueWhenOptionalAndGloballyEnabled(): void
    {
        $config = new MerchantConfiguration();
        $config->setEnableRequestMLEForOptionalApisGlobally(true);

        $result = MLEUtility::checkIsMLEForAPI($config, 'optional', 'someOperation');
        $this->assertTrue($result);
    }

    public function testCheckIsMLEForAPIReturnsFalseWhenOptionalAndGloballyDisabled(): void
    {
        $config = new MerchantConfiguration();
        $config->setEnableRequestMLEForOptionalApisGlobally(false);

        $result = MLEUtility::checkIsMLEForAPI($config, 'optional', 'someOperation');
        $this->assertFalse($result);
    }

    public function testCheckIsMLEForAPIReturnsTrueWhenMandatory(): void
    {
        $config = new MerchantConfiguration();
        $config->setDisableRequestMLEForMandatoryApisGlobally(false);

        $result = MLEUtility::checkIsMLEForAPI($config, 'mandatory', 'someOperation');
        $this->assertTrue($result);
    }

    public function testCheckIsMLEForAPIReturnsFalseWhenMandatoryButDisabled(): void
    {
        $config = new MerchantConfiguration();
        $config->setDisableRequestMLEForMandatoryApisGlobally(true);

        $result = MLEUtility::checkIsMLEForAPI($config, 'mandatory', 'someOperation');
        $this->assertFalse($result);
    }

    // -----------------------------------------------------------------------
    // checkIsResponseMLEForAPI
    // -----------------------------------------------------------------------

    public function testCheckIsResponseMLEForAPIReturnsFalseByDefault(): void
    {
        $config = new MerchantConfiguration();
        $result = MLEUtility::checkIsResponseMLEForAPI($config, 'someOperation');
        $this->assertFalse($result);
    }

    public function testCheckIsResponseMLEForAPIReturnsTrueWhenGloballyEnabled(): void
    {
        $config = new MerchantConfiguration();
        $config->setEnableResponseMleGlobally(true);

        $result = MLEUtility::checkIsResponseMLEForAPI($config, 'someOperation');
        $this->assertTrue($result);
    }

    // -----------------------------------------------------------------------
    // encryptRequestPayload — no cert available for JWT SHARED_SECRET
    // -----------------------------------------------------------------------

    public function testEncryptRequestPayloadReturnsBodyUnchangedWhenEmpty(): void
    {
        $config = new MerchantConfiguration();
        $result = MLEUtility::encryptRequestPayload($config, '');
        $this->assertSame('', $result);
    }

    public function testEncryptRequestPayloadReturnsNullWhenNull(): void
    {
        $config = new MerchantConfiguration();
        $result = MLEUtility::encryptRequestPayload($config, null);
        $this->assertNull($result);
    }

    public function testEncryptRequestPayloadThrowsWhenNoCertForJwtSharedSecret(): void
    {
        $config = new MerchantConfiguration();
        $config->setAuthenticationType('JWT');
        $config->setRunEnvironment('apitest.cybersource.com');
        $config->setMerchantID('test_merchant');
        $config->setJwtKeyType('SHARED_SECRET');
        $config->setApiKeyID('key_id');
        $config->setSecretKey(base64_encode('secret'));
        // No mleForRequestPublicCertPath provided — should fail

        $this->expectException(MLEException::class);
        $this->expectExceptionMessage('No certificate found for MLE Request');
        MLEUtility::encryptRequestPayload($config, '{"amount":"100"}');
    }

    public function testEncryptRequestPayloadFallsBackForHttpSignature(): void
    {
        $config = new MerchantConfiguration();
        $config->setAuthenticationType('HTTP_SIGNATURE');
        $config->setRunEnvironment('apitest.cybersource.com');
        $config->setMerchantID('test_merchant');
        // No cert path — HTTP_SIGNATURE falls back to non-encrypted

        $body = '{"amount":"100"}';
        $result = MLEUtility::encryptRequestPayload($config, $body);
        $this->assertSame($body, $result);
    }

    // -----------------------------------------------------------------------
    // checkIsMleEncryptedResponse
    // -----------------------------------------------------------------------

    public function testCheckIsMleEncryptedResponseReturnsTrueForValidFormat(): void
    {
        $body = json_encode(['encryptedResponse' => 'eyJhbGciOiJSU0EtT0FFUC0yNTYiLCJlbmMiOiJBMjU2R0NNIn0.abc.def.ghi.jkl']);
        $this->assertTrue(MLEUtility::checkIsMleEncryptedResponse($body));
    }

    public function testCheckIsMleEncryptedResponseReturnsFalseForNonJson(): void
    {
        $this->assertFalse(MLEUtility::checkIsMleEncryptedResponse('not json'));
    }

    public function testCheckIsMleEncryptedResponseReturnsFalseForNull(): void
    {
        $this->assertFalse(MLEUtility::checkIsMleEncryptedResponse(null));
    }

    public function testCheckIsMleEncryptedResponseReturnsFalseForEmptyString(): void
    {
        $this->assertFalse(MLEUtility::checkIsMleEncryptedResponse(''));
    }

    public function testCheckIsMleEncryptedResponseReturnsFalseForMultipleKeys(): void
    {
        $body = json_encode(['encryptedResponse' => 'token', 'extra' => 'data']);
        $this->assertFalse(MLEUtility::checkIsMleEncryptedResponse($body));
    }

    public function testCheckIsMleEncryptedResponseReturnsFalseForWrongKey(): void
    {
        $body = json_encode(['encryptedRequest' => 'token']);
        $this->assertFalse(MLEUtility::checkIsMleEncryptedResponse($body));
    }

    // -----------------------------------------------------------------------
    // generateToken — 'kid' / keyId behaviour after web-token -> simplejwt migration
    //
    // CyberSource MLE encodes the request certificate's subject serialNumber as
    // the JWE 'kid'. SimpleJWT derives the 'kid' header from the selected key's
    // id, so these tests lock down that the serial number flows into the header
    // and that the same id is required to select the key on decryption.
    // -----------------------------------------------------------------------

    /**
     * Returns a path to a minimal OpenSSL config file, creating it on first use.
     * Needed because Windows PHP builds often cannot locate a default openssl.cnf,
     * which makes openssl_pkey_new()/openssl_csr_new() fail.
     */
    private function opensslConfigPath(): string
    {
        static $path = null;
        if ($path === null) {
            $path = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'mle_test_openssl.cnf';
            file_put_contents(
                $path,
                "[req]\ndistinguished_name = dn\n[dn]\n"
            );
        }
        return $path;
    }

    /**
     * Builds a self-signed X.509 cert whose subject contains the given
     * serialNumber, returning the cert PEM and (optionally) the private key PEM.
     */
    private function makeSelfSignedCertWithSerial(string $serial, ?string &$privateKeyPem = null): string
    {
        $configArgs = [
            'config'           => $this->opensslConfigPath(),
            'private_key_bits' => 2048,
            'private_key_type' => OPENSSL_KEYTYPE_RSA,
        ];

        $pkey = openssl_pkey_new($configArgs);
        $this->assertNotFalse($pkey, 'Failed to generate RSA key pair: ' . openssl_error_string());
        openssl_pkey_export($pkey, $privateKeyPem, null, $configArgs);

        $dn = [
            'commonName'   => 'mle-kid-test',
            'serialNumber' => $serial,
        ];
        $csr  = openssl_csr_new($dn, $pkey, ['config' => $this->opensslConfigPath(), 'digest_alg' => 'sha256']);
        $this->assertNotFalse($csr, 'Failed to create CSR: ' . openssl_error_string());
        $x509 = openssl_csr_sign($csr, null, $pkey, 1, ['config' => $this->opensslConfigPath(), 'digest_alg' => 'sha256']);
        $this->assertNotFalse($x509, 'Failed to self-sign certificate: ' . openssl_error_string());
        openssl_x509_export($x509, $certPem);

        // Fail fast (with a clear message) if this OpenSSL build did not encode
        // the serialNumber subject attribute.
        $parsed = openssl_x509_parse($certPem);
        $this->assertArrayHasKey('serialNumber', $parsed['subject'], 'serialNumber not present in cert subject');
        $this->assertSame($serial, $parsed['subject']['serialNumber']);

        return $certPem;
    }

    /** Ensures the static logger is initialised so error paths cannot fatal on a null logger. */
    private function ensureLogger(): void
    {
        $prop = new \ReflectionProperty(MLEUtility::class, 'logger');
        $prop->setAccessible(true);
        if ($prop->getValue() === null) {
            $logger = (new \CyberSource\Logging\LogFactory())
                ->getLogger('MLEUtility', new \CyberSource\Logging\LogConfiguration());
            $prop->setValue(null, $logger);
        }
    }

    /** Invokes the private static MLEUtility::generateToken via reflection. */
    private function invokeGenerateToken(string $certPem, string $body, ?string $contentType = null): string
    {
        $this->ensureLogger();
        $method = new \ReflectionMethod(MLEUtility::class, 'generateToken');
        $method->setAccessible(true);
        return $method->invoke(null, $certPem, $body, $contentType);
    }

    private function decodeProtectedHeader(string $compactJwe): array
    {
        $parts = explode('.', $compactJwe);
        $this->assertCount(5, $parts, 'Expected JWE compact serialization with 5 segments');
        $json = base64_decode(strtr($parts[0], '-_', '+/'));
        $header = json_decode($json, true);
        $this->assertIsArray($header, 'Protected header is not valid JSON');
        return $header;
    }

    public function testGenerateTokenSetsKidToCertificateSerialNumber(): void
    {
        $serial = '7000000000000000123456';
        $cert = $this->makeSelfSignedCertWithSerial($serial);

        $token  = $this->invokeGenerateToken($cert, '{"amount":"100"}', 'application/json');
        $header = $this->decodeProtectedHeader($token);

        $this->assertSame($serial, $header['kid'], 'JWE kid must equal the certificate serial number');
        $this->assertSame('RSA-OAEP-256', $header['alg']);
        $this->assertSame('A256GCM', $header['enc']);
    }

    // -----------------------------------------------------------------------
    // generateToken — JWE 'cty' header must describe the actual request
    // Content-Type selected for the API operation, not a hardcoded value.
    // -----------------------------------------------------------------------

    /**
     * @dataProvider contentTypeProvider
     */
    public function testGenerateTokenSetsCtyToExactContentType(string $contentType): void
    {
        $cert = $this->makeSelfSignedCertWithSerial('8000000000000000111222');

        $token  = $this->invokeGenerateToken($cert, '{"amount":"100"}', $contentType);
        $header = $this->decodeProtectedHeader($token);

        $this->assertSame($contentType, $header['cty'],
            "The JWE 'cty' header must equal the exact Content-Type selected by the API operation.");
    }

    public function contentTypeProvider(): array
    {
        return [
            'plain json' => ['application/json'],
            'hal json' => ['application/hal+json'],
            'json with charset' => ['application/json; charset=utf-8'],
        ];
    }

    public function testGenerateTokenOmitsCtyWhenContentTypeNotSupplied(): void
    {
        $cert = $this->makeSelfSignedCertWithSerial('8000000000000000333444');

        $token  = $this->invokeGenerateToken($cert, '{"amount":"100"}');
        $header = $this->decodeProtectedHeader($token);

        $this->assertArrayNotHasKey('cty', $header,
            "No 'cty' header should be present when the caller does not supply a content type.");
    }

    public function testGenerateTokenOmitsCtyWhenContentTypeIsBlank(): void
    {
        $cert = $this->makeSelfSignedCertWithSerial('8000000000000000555666');

        $token  = $this->invokeGenerateToken($cert, '{"amount":"100"}', '   ');
        $header = $this->decodeProtectedHeader($token);

        $this->assertArrayNotHasKey('cty', $header);
    }

    public function testEncryptRequestPayloadThreadsContentTypeIntoCty(): void
    {
        $serial = '8000000000000000777888';
        $cert = $this->makeSelfSignedCertWithSerial($serial);
        $certPath = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'mle-cty-test-' . bin2hex(random_bytes(8)) . '.pem';
        file_put_contents($certPath, $cert);

        try {
            $config = new MerchantConfiguration();
            $config->setAuthenticationType('HTTP_SIGNATURE');
            $config->setRunEnvironment('apitest.cybersource.com');
            $config->setMerchantID('test_merchant');
            $config->setMleForRequestPublicCertPath($certPath);

            $result = MLEUtility::encryptRequestPayload($config, '{"amount":"100"}', 'application/hal+json');
            $decoded = json_decode($result, true);
            $this->assertArrayHasKey('encryptedRequest', $decoded);

            $header = $this->decodeProtectedHeader($decoded['encryptedRequest']);
            $this->assertSame('application/hal+json', $header['cty']);
            $this->assertSame($serial, $header['kid']);
        } finally {
            @unlink($certPath);
        }
    }

    public function testGenerateTokenKidTracksDifferentSerials(): void
    {
        $headerA = $this->decodeProtectedHeader(
            $this->invokeGenerateToken($this->makeSelfSignedCertWithSerial('1111111111'), '{}')
        );
        $headerB = $this->decodeProtectedHeader(
            $this->invokeGenerateToken($this->makeSelfSignedCertWithSerial('2222222222'), '{}')
        );

        $this->assertSame('1111111111', $headerA['kid']);
        $this->assertSame('2222222222', $headerB['kid']);
        $this->assertNotSame($headerA['kid'], $headerB['kid']);
    }

    public function testGenerateTokenKidResolvesForDecryption(): void
    {
        $serial = '9000000000000000999';
        $privateKeyPem = null;
        $cert = $this->makeSelfSignedCertWithSerial($serial, $privateKeyPem);

        $payload = '{"orderInformation":{"amountDetails":{"totalAmount":"100"}}}';
        $token   = $this->invokeGenerateToken($cert, $payload);

        // SimpleJWT reads RSA private keys in PKCS#1; convert from the PKCS#8
        // output of openssl_pkey_export.
        $pkcs1 = \phpseclib3\Crypt\PublicKeyLoader::load($privateKeyPem)->toString('PKCS1');

        $privateKey = new RSAKey($pkcs1, 'pem');
        // The decrypt-side key MUST carry the same id as the JWE 'kid' (serial)
        // for SimpleJWT to select it — this is the core kid-resolution contract.
        $privateKey->setKeyId($serial);

        $keySet = new KeySet();
        $keySet->add($privateKey);

        $jwe = JWE::decrypt($token, $keySet, 'RSA-OAEP-256');

        $this->assertSame($serial, $jwe->getHeader('kid'));
        $this->assertSame($payload, $jwe->getPlaintext());
    }

    public function testGenerateTokenDecryptionFailsWhenKidDoesNotMatchKey(): void
    {
        $serial = '5000000000000000555';
        $privateKeyPem = null;
        $cert = $this->makeSelfSignedCertWithSerial($serial, $privateKeyPem);

        $token = $this->invokeGenerateToken($cert, '{"amount":"100"}');

        $pkcs1 = \phpseclib3\Crypt\PublicKeyLoader::load($privateKeyPem)->toString('PKCS1');
        $privateKey = new RSAKey($pkcs1, 'pem');
        // Deliberately use a mismatched key id; SimpleJWT must not select it.
        $privateKey->setKeyId('not-the-serial');

        $keySet = new KeySet();
        $keySet->add($privateKey);

        $this->expectException(\Exception::class);
        JWE::decrypt($token, $keySet, 'RSA-OAEP-256');
    }
}

