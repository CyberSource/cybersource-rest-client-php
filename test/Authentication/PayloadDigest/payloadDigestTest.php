<?php
use CyberSource\Authentication\PayloadDigest\PayloadDigest as PayloadDigest;
use CyberSource\Authentication\Core\AuthException as AuthException;
include_once(dirname(__FILE__)."/../../TestConfiguration.php");

class PayloadDigestTest extends \PHPUnit_Framework_TestCase
{

   
    public function testGetPayloadDigestJwt()
    {

        $call  = new PayloadDigest();
        $filepath ="test/TestResource/TestPayload.json";
        $testClass = new TestConfiguration();
        $testClassIns = $testClass->getMerchantConfigObjectJwt();
        $this->assertEquals('{"clientReferenceInformation": { "code": "TC50171_3"} }', $call->getPayloadDigest($filepath, $testClassIns));
        
    }

    public function testGetPayloadDigestHttp()
    {

        $call  = new PayloadDigest();
        $filepath ="test/TestResource/TestPayload.json";
        $testClass = new TestConfiguration();
        $testClassIns = $testClass->getMerchantConfigObjectHttp();
        $this->assertEquals('{"clientReferenceInformation": { "code": "TC50171_3"} }', $call->getPayloadDigest($filepath, $testClassIns));
        
    }

      

}