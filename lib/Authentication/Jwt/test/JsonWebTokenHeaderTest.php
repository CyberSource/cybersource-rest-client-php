<?php
namespace CyberSource;
require_once '../core/Authentication.php';
require_once 'TestConfiguration.php'; 
require_once '../payloadDigest/PayloadDigest.php';
require_once '../authentication-sdk/util/PropertiesUtil.php';
require_once '../authentication-sdk/util/GlobalParameter.php';
class JsonWebTokenHeaderTest extends \PHPUnit_Framework_TestCase
{

    public function testGetJWTHeader()
    {
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectJwt();
        $authTokenGeneratorMock = $this->getMockBuilder(JsonWebTokenHeader::class)
                         ->setMethods(['getJsonWebToken'])
                         ->getMock();
        $authTokenGeneratorMock->expects($this->once())
                 ->method('getJsonWebToken')
                 ->with($this->isType('object'), $merchantConfig) 
                 ->willReturn($merchantObj->getResponseMockHeaderJwt());
        //Comparing response        
        $this->assertEquals($merchantObj->getResponseMockHeaderJwt(), $authTokenGeneratorMock->getJsonWebToken($this->isType('object'), $merchantConfig));

    }

    


}