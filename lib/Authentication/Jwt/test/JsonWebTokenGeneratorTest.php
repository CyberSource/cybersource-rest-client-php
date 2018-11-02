<?php
namespace CyberSource;
require_once '../core/Authentication.php';
require_once 'TestConfiguration.php'; 
require_once '../payloadDigest/PayloadDigest.php';
require_once '../authentication-sdk/util/PropertiesUtil.php';
require_once '../authentication-sdk/util/GlobalParameter.php';
class JsonWebTokenGeneratorTest extends \PHPUnit_Framework_TestCase
{

    public function testGetJWTGenerator()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectJwt();
        $method = "GET";
        $resourcePath="/pts/v2/payments/5293014742106817204104";

        $JsonWebTokenGeneratorMock = $this->getMockBuilder(JsonWebTokenHeader::class)
                                    ->setMethods(['getJsonWebToken'])
                                    ->getMock();
        $JsonWebTokenGeneratorMock->expects($this->once())
                 ->method('getJsonWebToken')
                 ->with($this->isType('array'), $merchantConfig) 
                 ->willReturn($merchantObj->getResponseMockHeaderJwt());
        $tokenGeneratorMock = $this->getMockBuilder(JsonWebTokenGenerator::class)
                         ->setMethods(['getJsonWebTokenHeader'])
                         ->getMock();
        $tokenGeneratorMock->expects($this->once())
                 ->method('getJsonWebTokenHeader')
                 ->willReturn($JsonWebTokenGeneratorMock);
        //Comparing response        
        $this->assertEquals("Bearer ".$merchantObj->getResponseMockHeaderJwt(), $tokenGeneratorMock->generateToken($resourcePath, "", $method, $merchantConfig));
    } 

    //line coverage
    
    public function testGetJWTSignatureGenerateToken()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectJwt();
        $method = "GET";
        $resourcePath="/pts/v2/payments/5293014742106817204104";
        $call = new JsonWebTokenGenerator();
        $this->assertTrue($call->generateToken($resourcePath, "", $method, $merchantConfig) !== false);

    }
    public function testPostJWTSignatureGenerateToken()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectJwt();
        $method = "POST";
        $resourcePath="/pts/v2/payments/5293014742106817204104";
        $payload = new PayloadDigest();
        $filepath ="../../Cybersourceauthentication-sdkPhp/resource/CreatePayment.json";
        $payloadData = $payload->getPayloadDigest($filepath, $merchantConfig);
        $call = new JsonWebTokenGenerator();
        $this->assertTrue($call->generateToken($resourcePath, $payloadData, $method, $merchantConfig) !== false);

    }
    



}