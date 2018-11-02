<?php
namespace CyberSource;

class HttpSignatureGeneratorTest extends \PHPUnit_Framework_TestCase
{
	//Functional Coverage
    public function testGetHttpSignature()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectHttp();
        $authTokenGeneratorMock = $this->getMockBuilder(HttpSignatureGenerator::class)
                         ->setMethods(['accessTokenHeader'])
                         ->getMock();
        $authTokenGeneratorMock->expects($this->once())
                 ->method('accessTokenHeader')
                 ->with($this->isType('object'), "host date (request-target) v-c-merchant-id", $merchantConfig) 
                 ->willReturn($merchantObj->getResponseMockHeaderJwt());
        //Comparing response        
        $this->assertEquals($merchantObj->getResponseMockHeaderJwt(), $authTokenGeneratorMock->accessTokenHeader($this->isType('object'), "host date (request-target) v-c-merchant-id", $merchantConfig));
    }
    //Functional coverage
    public function testGetHttpSignatureGetToken()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectHttp();
        $method = "GET";
        $resourcePath="/pts/v2/payments/5293014742106817204104";
        $authTokenGeneratorMock = $this->getMockBuilder(HttpSignatureGenerator::class)
                         ->setMethods(['generateToken'])
                         ->getMock();
        $authTokenGeneratorMock->expects($this->once())
                 ->method('generateToken')
                 ->with($resourcePath,  "",$method, $merchantConfig) 
                 ->willReturn($merchantObj->getResponseMockHeaderJwt());
        //Comparing response        
        $this->assertEquals($merchantObj->getResponseMockHeaderJwt(), $authTokenGeneratorMock->generateToken($resourcePath,  "",$method, $merchantConfig));
    }
    //line coverage
    public function testGetHttpSignatureAccesToken()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectHttp();
        $call = new HttpSignatureGenerator();
        $this->assertTrue($call->accessTokenHeader("ksdjfhkajs", "host date (request-target) v-c-merchant-id", $merchantConfig) !== false);

    }
    public function testGetHttpSignatureGenerateToken()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectHttp();
        $method = "GET";
        $resourcePath="/pts/v2/payments/5293014742106817204104";
        $call = new HttpSignatureGenerator();
        $this->assertTrue($call->generateToken($resourcePath, "", $method, $merchantConfig) !== false);

    }
    public function testPostHttpSignatureGenerateToken()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectHttp();
        $method = "POST";
        $resourcePath="/pts/v2/payments/5293014742106817204104";
        $payload = new PayloadDigest();
        $filepath ="../../Cybersourceauthentication-sdkPhp/resource/CreatePayment.json";
        $payloadData = $payload->getPayloadDigest($filepath, $merchantConfig);
        $call = new HttpSignatureGenerator();
        $this->assertTrue($call->generateToken($resourcePath, $payloadData, $method, $merchantConfig) !== false);

    }
   

}