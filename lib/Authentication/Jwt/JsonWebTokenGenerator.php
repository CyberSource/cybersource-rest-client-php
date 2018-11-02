<?php
/*
*Purpose : calling the JWtoken 
*/
namespace CyberSource\Authentication\Jwt;
use CyberSource\Authentication\PayloadDigest\PayloadDigest as PayloadDigest;
use CyberSource\Authentication\Core\TokenGenerator as TokenGenerator;
use CyberSource\Authentication\Core\AuthException as AuthException;
use CyberSource\Authentication\Jwt\JsonWebTokenHeader as JsonWebTokenHeader;
use CyberSource\Authentication\Util\GlobalParameter as GlobalParameter;
use CyberSource\Authentication\Log\Logger as Logger;

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
		else if($method==GlobalParameter::POST || $method==GlobalParameter::PUT || $method==GlobalParameter::PATCH)
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

	public function accessTokenHeader($jwtBody, $merchantConfig){
			$gToken = $this->getJsonWebTokenHeader();
			$generateToken = $gToken->getJsonWebToken($jwtBody, $merchantConfig);
			return "Bearer ".$generateToken;
	}

	protected function getJsonWebTokenHeader() {
		return new JsonWebTokenHeader();
	} 

}
?>