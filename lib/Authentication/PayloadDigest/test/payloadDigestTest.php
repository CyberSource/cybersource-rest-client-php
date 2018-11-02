<?php

namespace CyberSource;

require_once '../log/Logger.php';
require_once 'TestConfiguration.php'; 

class PayloadDigestTest extends \PHPUnit_Framework_TestCase
{

   
    public function testGetPayloadDigest()
    {

        $call  = new PayloadDigest();
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectHttp();
        $filepath ="../../Cybersourceauthentication-sdkPhp/resource/CreatePayment.json";
        $this->assertTrue($call->getPayloadDigest($filepath, $merchantConfig) !== false);
        
    }

      

}