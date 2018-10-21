<?php
/*
Purpose: finding and Convertng request object
*/

namespace CyberSource;

require_once '../CybersourceRestclientPHP/autoload.php';
require_once '../CybersourceRestclientPHP/AuthenticationSdk/com/cybersource/util/GlobalParameter.php';
require_once '../CybersourceRestclientPHP/AuthenticationSdk/com/cybersource/core/AuthException.php'; 

class PayloadDigest
{
	private static $logger=null;
	/**
     * Constructor
     */
    public function __construct()
    {
        if(self::$logger === null){
        	self::$logger = new Logger(PayloadDigest::class);
    	}
    }
	
	//Reading the payload Data
	public function getPayloadDigest($filePath, $merchantConfig)
	{
		$authType = $merchantConfig->getAuthenticationType();
		if(file_exists($filePath)){ 
			
			$inputData = file_get_contents($filePath);
			$postString = str_replace("\r", "", $inputData);
			return $postString;
		}
		else
		{
			$warning_message = "Input Json is not valid, So its taking Payload Data.";
            trigger_error($warning_message, E_USER_WARNING);//
            self::$logger->log($config, $warning_message); 
			throw $exception;
			
		}

	}
	//Generated Encoded Payload Data
	public function generateDigest($payLoad)
	{

		$utf8EncodedString = utf8_encode($payLoad);
		$digestEncode = hash("sha256", $utf8EncodedString, true); 
		return base64_encode($digestEncode);
	}
}


?>