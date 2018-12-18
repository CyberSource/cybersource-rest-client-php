<?php
use CyberSource\Authentication\PayloadDigest\PayloadDigest as PayloadDigest;
use CyberSource\Authentication\Util\GlobalParameter as GlobalParameter;
use CyberSource\Authentication\Core\Authentication as Authentication;
use CyberSource\Authentication\Core\AuthException as AuthException;
include_once(dirname(__FILE__)."/../../TestConfiguration.php");

class AuthenticationTest extends \PHPUnit_Framework_TestCase
{

    public function testGetJwtGenerateToken()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectJwt();
        $method = "GET";
        $resourcePath="/pts/v2/payments/5293014742106817204104";
       
        $tokenGeneratorMock = $this->getMockBuilder(JsonWebTokenGenerator::class)
                         ->setMethods(['generateToken'])
                         ->getMock();
        $tokenGeneratorMock->expects($this->once())
                 ->method('generateToken')
                 ->with($resourcePath, "", $method, $merchantConfig) 
                 ->willReturn($merchantObj->getResponseObjectJwt());
        $testClass = $this->getMockBuilder(Authentication::class)
                         ->setMethods(['getTokenGenerator'])
                         ->getMock();

        $testClass->expects($this->once())
                 ->method('getTokenGenerator')
                 ->with($merchantConfig) 
                 ->willReturn($tokenGeneratorMock);
        //Comparing response        
        $this->assertEquals($merchantObj->getResponseObjectJwt(), $testClass->generateToken($resourcePath, "", $method, $merchantConfig));
    }


    public function testPostJwtGenerateToken()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectJwt();
        $method = "POST"; 
        $resourcePath="/pts/v2/payments/5293014742106817204104";
        $payload = new PayloadDigest();
        $filepath ="test/TestResource/CreatePayment.json";
        $payloadData = $payload->getPayloadDigest($filepath, $merchantConfig);
       
        $tokenGeneratorMock = $this->getMockBuilder(JsonWebTokenGenerator::class)
                         ->setMethods(['generateToken'])
                         ->getMock();
        $tokenGeneratorMock->expects($this->once())
                 ->method('generateToken')
                 ->with($resourcePath, $payloadData, $method, $merchantConfig) 
                 ->willReturn($merchantObj->postResponseObjectJwt());
        $testClass = $this->getMockBuilder(Authentication::class)
                         ->setMethods(['getTokenGenerator'])
                         ->getMock();

        $testClass->expects($this->once())
                 ->method('getTokenGenerator')
                 ->with($merchantConfig) 
                 ->willReturn($tokenGeneratorMock);
        //Comparing response        
        $this->assertEquals($merchantObj->postResponseObjectJwt(), $testClass->generateToken($resourcePath, $payloadData, $method, $merchantConfig));
    }

    public function testPutJwtGenerateToken()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectJwt();
        
        $method = "PUT"; 
        $resourcePath="/pts/v2/payments/5293014742106817204104";
        $payload = new PayloadDigest();
        $filepath ="test/TestResource/PutPayment.json";
        $payloadData = $payload->getPayloadDigest($filepath, $merchantConfig);
       
        $tokenGeneratorMock = $this->getMockBuilder(JsonWebTokenGenerator::class)
                         ->setMethods(['generateToken'])
                         ->getMock();
        $tokenGeneratorMock->expects($this->once())
                 ->method('generateToken')
                 ->with($resourcePath, $payloadData, $method, $merchantConfig) 
                 ->willReturn($merchantObj->putResponseObjectJwt());
        $testClass = $this->getMockBuilder(Authentication::class)
                         ->setMethods(['getTokenGenerator'])
                         ->getMock();

        $testClass->expects($this->once())
                 ->method('getTokenGenerator')
                 ->with($merchantConfig) 
                 ->willReturn($tokenGeneratorMock);
        //Comparing response        
        $this->assertEquals($merchantObj->putResponseObjectJwt(), $testClass->generateToken($resourcePath, $payloadData, $method, $merchantConfig));
    }

    public function testGetHttpGenerateToken()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectHttp();
        
        $method = "GET";
        $resourcePath="/pts/v2/payments/5293014742106817204104";
       
        $tokenGeneratorMock = $this->getMockBuilder(HttpSignatureGenerator::class)
                         ->setMethods(['generateToken'])
                         ->getMock();
        $tokenGeneratorMock->expects($this->once())
                 ->method('generateToken')
                 ->with($resourcePath, "", $method, $merchantConfig) 
                 ->willReturn($merchantObj->getResponseObjectHttp());
        $testClass = $this->getMockBuilder(Authentication::class)
                         ->setMethods(['getTokenGenerator'])
                         ->getMock();

        $testClass->expects($this->once())
                 ->method('getTokenGenerator')
                 ->with($merchantConfig) 
                 ->willReturn($tokenGeneratorMock);
        //Comparing response        
        $this->assertEquals($merchantObj->getResponseObjectHttp(), $testClass->generateToken($resourcePath, "", $method, $merchantConfig));
    }


    public function testPostHttpGenerateToken()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectHttp();
        
        $method = "POST"; 
        $resourcePath="/pts/v2/payments/5293014742106817204104";
        $payload = new PayloadDigest();
        $filepath ="test/TestResource/CreatePayment.json";
        $payloadData = $payload->getPayloadDigest($filepath, $merchantConfig);
       
        $tokenGeneratorMock = $this->getMockBuilder(HttpSignatureGenerator::class)
                         ->setMethods(['generateToken'])
                         ->getMock();
        $tokenGeneratorMock->expects($this->once())
                 ->method('generateToken')
                 ->with($resourcePath, $payloadData, $method, $merchantConfig) 
                 ->willReturn($merchantObj->postResponseObjectHttp());
        $testClass = $this->getMockBuilder(Authentication::class)
                         ->setMethods(['getTokenGenerator'])
                         ->getMock();

        $testClass->expects($this->once())
                 ->method('getTokenGenerator')
                 ->with($merchantConfig) 
                 ->willReturn($tokenGeneratorMock);
        //Comparing response        
        $this->assertEquals($merchantObj->postResponseObjectHttp(), $testClass->generateToken($resourcePath, $payloadData, $method, $merchantConfig));
    }

    public function testPutHttpGenerateToken()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectHttp();
        
        $method = "PUT"; 
        $resourcePath="/pts/v2/payments/5293014742106817204104";
        $payload = new PayloadDigest();
        $filepath ="test/TestResource/PutPayment.json";
        $payloadData = $payload->getPayloadDigest($filepath, $merchantConfig);
       
        $tokenGeneratorMock = $this->getMockBuilder(HttpSignatureGenerator::class)
                         ->setMethods(['generateToken'])
                         ->getMock();
        $tokenGeneratorMock->expects($this->once())
                 ->method('generateToken')
                 ->with($resourcePath, $payloadData, $method, $merchantConfig) 
                 ->willReturn($merchantObj->putResponseObjectHttp());
        $testClass = $this->getMockBuilder(Authentication::class)
                         ->setMethods(['getTokenGenerator'])
                         ->getMock();

        $testClass->expects($this->once())
                 ->method('getTokenGenerator')
                 ->with($merchantConfig) 
                 ->willReturn($tokenGeneratorMock);
        //Comparing response        
        $this->assertEquals($merchantObj->putResponseObjectHttp(), $testClass->generateToken($resourcePath, $payloadData, $method, $merchantConfig));
    } 


    public function testGetAuthenticationHttpSignature()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectHttp();
        $method = "GET";
        $resourcePath="/pts/v2/payments/5293014742106817204104";

        $testClass = $this->getMockBuilder(Authentication::class)
                         ->setMethods(['generateToken'])
                         ->getMock();
        $testClass->expects($this->once())
                 ->method('generateToken')
                 ->with($resourcePath, "", $method, $merchantConfig) 
                 ->willReturn($merchantObj->getResponseObjectHttp()); 
        //Comparing response        
        $this->assertEquals($merchantObj->getResponseObjectHttp(), $testClass->generateToken($resourcePath, "", $method, $merchantConfig));
    }
   
    public function testGetNullMerchantConfig()
    {
        $merchantObj = null;
        $authObject = new Authentication();
        $method = "GET";
        $resourcePath="/pts/v2/payments/5293014742106817204104";
        $this->expectException(CyberSource\Authentication\Core\AuthException::class);
        $authObject->generateToken($resourcePath, "", $method, $merchantObj);      
        
    }

    public function testGetNullAuthTypeMerchantConfig()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectAuthNull();
        $authObject = new Authentication();
        $this->expectException(CyberSource\Authentication\Core\AuthException::class);
        $authObject->getTokenGenerator($merchantConfig);      
        
    }



}