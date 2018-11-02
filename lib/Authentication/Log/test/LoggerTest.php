<?php

namespace CyberSource;

require_once '../log/Logger.php';
require_once 'TestConfiguration.php'; 

class LoggerTest extends \PHPUnit_Framework_TestCase
{

   
    public function testLoggerLog()
    {

        $call  = new Logger(stdclass::class);
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectHttp();
        $this->assertTrue($call->log($merchantConfig, "message") !== false);
        
    }

    public function testLoggerInitLogFile()
    {
        $call  = new Logger(stdclass::class);
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectHttp();
        $this->assertTrue($call->initLogFile($merchantConfig) !== false);
    }

    public function testLoggerRotateLogFile()
    {
        $call  = new Logger(stdclass::class);
        $this->assertTrue($call->rotateLogFile("../../data/","sample.log","1024") !== false);
    }

    

}