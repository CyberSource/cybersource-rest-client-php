<?php
use CyberSource\Authentication\Log\Logger as Logger;
use CyberSource\Authentication\Core\AuthException as AuthException;
include_once(dirname(__FILE__)."/../../TestConfiguration.php");


class LoggerTest extends \PHPUnit_Framework_TestCase
{

    
    public function testLoggerFunctionMerchantNull()
    {
        $logObj = new Logger(stdclass::class);
        $this->expectException(AuthException::class);
        $logObj->log(null, "Empty"); 
    }
    

}