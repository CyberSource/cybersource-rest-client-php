<?php
/*
*Purpose : calling the JWtoken 
*/

namespace CyberSource;
require_once '../CybersourceRestclientPHP/autoload.php';
require_once '../CybersourceRestclientPHP/AuthenticationSdk/com/cybersource/jwt/JsonWebTokenHeader.php';
require_once '../CybersourceRestclientPHP/AuthenticationSdk/com/cybersource/core/TokenGenerator.php';
require_once '../CybersourceRestclientPHP/AuthenticationSdk/com/cybersource/core/AuthException.php';
require_once '../CybersourceRestclientPHP/AuthenticationSdk/com/cybersource/payloadDigest/PayloadDigest.php';
//calling the interface
class JsonWebTokenGenerator implements TokenGenerator
{
	private static $logger=null;
	/**
     * Constructor
     */
    public function __construct()
    {
        if(self::$logger === null){
        	self::$logger = new Logger(JsonWebTokenGenerator::class);
    	}
    }
	//calling Signature
	public function generateToken($resourcePath, $payloadData, $method, $merchantConfig)
	{

		$date = date("D, d M Y G:i:s ").GlobalParameter::GMT;
		if($method==GlobalParameter::GET || $method==GlobalParameter::DELETE)
		{
			$jwtBody = array("iat"=>$date);
			
		} 
		else if($method==GlobalParameter::POST || $method==GlobalParameter::PUT)
		{
			$digestObj = new PayloadDigest();
	    	$digest = $digestObj->generateDigest($payloadData);		
			$jwtBody = array("digest"=>$digest,"digestAlgorithm"=>"SHA-256","iat"=>$date);
			
		} 
		else
		{
			$exception = new AuthException(GlobalParameter::INVALID_REQUEST_TYPE_METHOD, 0);
			self::$logger->log($merchantConfig, $exception);
			throw $exception;
		}
		$tokenHeader = $this->accessTokenHeader($jwtBody, $merchantConfig);
		return $tokenHeader;
				
	}

	private function accessTokenHeader($jwtBody, $merchantConfig){
			$gToken = new JsonWebTokenHeader();
			$generateToken = $gToken->getJsonWebToken($jwtBody, $merchantConfig);
			return "Bearer ".$generateToken;
	}

}
?>