<?php
use CyberSource\Authentication\PayloadDigest\PayloadDigest as PayloadDigest;
use CyberSource\Authentication\Jwt\JsonWebTokenGenerator as JsonWebTokenGenerator;
use CyberSource\Authentication\Jwt\JsonWebTokenHeader as JsonWebTokenHeader;
use CyberSource\Authentication\Core\AuthException as AuthException;
include_once(dirname(__FILE__)."/../../TestConfiguration.php");

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

    public function testPostJWTGenerator()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectJwt();
        $method = "POST";
        $resourcePath="/pts/v2/payments";
        $payload = new PayloadDigest();
        $filepath ="test/TestResource/CreatePayment.json";
        $payloadData = $payload->getPayloadDigest($filepath, $merchantConfig);

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
        $this->assertEquals("Bearer ".$merchantObj->getResponseMockHeaderJwt(), $tokenGeneratorMock->generateToken($resourcePath, $payloadData, $method, $merchantConfig));
    }

    public function testPutJWTGenerator()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectJwt();
        $method = "PUT";
        $resourcePath="/pts/v2/payments/54534531";
        $payload = new PayloadDigest();
        $filepath ="test/TestResource/PutPayment.json";
        $payloadData = $payload->getPayloadDigest($filepath, $merchantConfig);

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
        $this->assertEquals("Bearer ".$merchantObj->getResponseMockHeaderJwt(), $tokenGeneratorMock->generateToken($resourcePath, $payloadData, $method, $merchantConfig));
    } 


    public function testGetNullMerchantConfig()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectJwt();
        $method = "GETS";
        $resourcePath="/pts/v2/payments/5293014742106817204104";
        $jwtObj = new JsonWebTokenGenerator();
        $this->expectException(AuthException::class);
        $jwtObj->generateToken($resourcePath, "", $method, $merchantConfig);      
        
    }


}