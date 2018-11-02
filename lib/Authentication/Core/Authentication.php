<?php
/*
Purpose : This is focusly on split the services HTTP or JWT 
*/
namespace CyberSource\Authentication\Core;
use CyberSource\Authentication\Http\HttpSignatureGenerator as HttpSignatureGenerator;
use CyberSource\Authentication\Jwt\JsonWebTokenGenerator as JsonWebTokenGenerator;
use CyberSource\Authentication\Util\GlobalParameter as GlobalParameter;
use CyberSource\Authentication\Log\Logger as Logger;

class Authentication 
{
	private static $logger=null;
	/**
	* Constructor
	*/
	public function __construct()
	{
		if(self::$logger === null){
			self::$logger = new Logger(Authentication::class);
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