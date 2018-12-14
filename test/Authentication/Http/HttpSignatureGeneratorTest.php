<?php
use CyberSource\Authentication\PayloadDigest\PayloadDigest as PayloadDigest;
use CyberSource\Authentication\Http\HttpSignatureGenerator as HttpSignatureGenerator;
use CyberSource\Authentication\Core\AuthException as AuthException;
use CyberSource\Authentication\Util\GlobalParameter as GlobalParameter;
include_once(dirname(__FILE__)."/../../TestConfiguration.php");

class HttpSignatureGeneratorTest extends \PHPUnit_Framework_TestCase
{
	//Functional Coverage
    public function testHttpSignatureGet()
    {
        $merchantObj = new TestConfiguration();
        $method = "GET";
        $resourcePath="/pts/v2/payments/78532473";
        $merchantConfig = $merchantObj->getMerchantConfigObjectHttp();
        $testClass = $this->getMockBuilder(HttpSignatureGenerator::class)
                         ->setMethods(['accessTokenHeader'])
                         ->getMock();
        $testClass->expects($this->once())
                 ->method('accessTokenHeader')
                 ->with($this->isType('string'),GlobalParameter::GETALGOHEADER, $merchantConfig) 
                 ->willReturn($merchantObj->getResponseObjectHttp());

        //Comparing response        
        $this->assertEquals($merchantObj->getResponseObjectHttp(), $testClass->generateToken($resourcePath,  "" ,$method, $merchantConfig));
    }
    //Functional Coverage
    public function testHttpSignatureDelete()
    {
        $merchantObj = new TestConfiguration();
        $method = "DELETE";
        $resourcePath="/pts/v2/payments/863049820";
        $merchantConfig = $merchantObj->getMerchantConfigObjectHttp();
        $testClass = $this->getMockBuilder(HttpSignatureGenerator::class)
                         ->setMethods(['accessTokenHeader'])
                         ->getMock();
        $testClass->expects($this->once())
                 ->method('accessTokenHeader')
                 ->with($this->isType('string'),GlobalParameter::GETALGOHEADER, $merchantConfig) 
                 ->willReturn($merchantObj->deleteResponseObjectHttp());

        //Comparing response        
        $this->assertEquals($merchantObj->deleteResponseObjectHttp(), $testClass->generateToken($resourcePath,  "" ,$method, $merchantConfig));
    }

    //Functional coverage
    public function testHttpSignaturePost()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectHttp();
        $method = "POST";
        $resourcePath="/pts/v2/payments";
        $payload = new PayloadDigest();
        $filepath ="test/TestResource/CreatePayment.json";
        $payloadData = $payload->getPayloadDigest($filepath, $merchantConfig);
        $testClass = $this->getMockBuilder(HttpSignatureGenerator::class)
                         ->setMethods(['accessTokenHeader'])
                         ->getMock();
        $testClass->expects($this->once())
                 ->method('accessTokenHeader')
                 ->with($this->isType('string'),GlobalParameter::POSTALGOHEADER, $merchantConfig)
                 ->willReturn($merchantObj->postResponseObjectHttp());
        //Comparing response        
        $this->assertEquals($merchantObj->postResponseObjectHttp(), $testClass->generateToken($resourcePath, $payloadData, $method, $merchantConfig));
    }

    //Functional coverage
    public function testHttpSignaturePutSignature()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectHttp();
        $method = "PUT";
        $resourcePath="/pts/v2/payments/103400552342";
        $payload = new PayloadDigest();
        $filepath ="test/TestResource/CreatePayment.json";
        $payloadData = $payload->getPayloadDigest($filepath, $merchantConfig);
        $testClass = $this->getMockBuilder(HttpSignatureGenerator::class)
                         ->setMethods(['accessTokenHeader'])
                         ->getMock();
        $testClass->expects($this->once())
                 ->method('accessTokenHeader')
                 ->with($this->isType('string'),GlobalParameter::POSTALGOHEADER, $merchantConfig)
                 ->willReturn($merchantObj->putResponseObjectHttp());
        //Comparing response        
        $this->assertEquals($merchantObj->putResponseObjectHttp(), $testClass->generateToken($resourcePath, $payloadData, $method, $merchantConfig));
    }

    //Functional coverage
    public function testHttpSignaturePATCHSignature()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectHttp();
        $method = "PATCH";
        $resourcePath="/pts/v2/payments";
        $payload = new PayloadDigest();
        $filepath ="test/TestResource/CreatePayment.json";
        $payloadData = $payload->getPayloadDigest($filepath, $merchantConfig);
        $testClass = $this->getMockBuilder(HttpSignatureGenerator::class)
                         ->setMethods(['accessTokenHeader'])
                         ->getMock();
        $testClass->expects($this->once())
                 ->method('accessTokenHeader')
                 ->with($this->isType('string'),GlobalParameter::POSTALGOHEADER, $merchantConfig)
                 ->willReturn($merchantObj->patchResponseObjectHttp());
        //Comparing response        
        $this->assertEquals($merchantObj->patchResponseObjectHttp(), $testClass->generateToken($resourcePath, $payloadData, $method, $merchantConfig));
    }

    public function testHttpSignGeneratorInvalidMethod()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectHttp();
        $method = "GETS";
        $resourcePath="/pts/v2/payments/5293014742106817204104";
        $httpObj = new HttpSignatureGenerator();
        $this->expectException(AuthException::class);
        $httpObj->generateToken($resourcePath, "", $method, $merchantConfig);      
        
    }


}