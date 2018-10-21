<?php
/*
Purpose : This is focusly on split the services HTTP or JWT 
*/

namespace CyberSource;

require_once '../CybersourceRestclientPHP/autoload.php';
require_once '../CybersourceRestclientPHP/AuthenticationSdk/com/cybersource/http/HttpSignatureGenerator.php';
require_once '../CybersourceRestclientPHP/AuthenticationSdk/com/cybersource/jwt/JsonWebTokenGenerator.php';
require_once '../CybersourceRestclientPHP/AuthenticationSdk/com/cybersource/util/GlobalParameter.php';

class Authentication 
{
	private static $logger=null;
	/**
	* Constructor
	*/
	public function __construct()
	{
		if(self::$logger === null){
			self::$logger = new Logger(HttpConnection::class);
		}
	}

	//call http signature and jwt
	function generateToken($resourcePath, $inputData, $method, $merchantConfig)
	{  
		if(is_null($merchantConfig))
		{
			$exception = new AuthException(GlobalParameter::MERCHANTCONFIGERR, 0);
			self::$logger->log($config, $exception);
			throw $exception;
		}
	
		$tokenGenerator = $this->getTokenGenerator($merchantConfig->getAuthenticationType());
		return $tokenGenerator->generateToken($resourcePath, $inputData, $method, $merchantConfig);		
	}

	function getTokenGenerator($authType) {
		if($authType == GlobalParameter::HTTP_SIGNATURE) {
			return new HttpSignatureGenerator();
		} else if($authType == GlobalParameter::JWT){
			return new JsonWebTokenGenerator();
		} else {
			$exception = new AuthException(GlobalParameter::AUTH_ERROR, 0);
			self::$logger->log($config, $exception);
			throw $exception;
		}
	}
	
}



?>