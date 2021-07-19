<?php
/*
*Purpose : Generating token for OAuth
*/
namespace CyberSource\Authentication\OAuth;
use CyberSource\Authentication\Core\TokenGenerator as TokenGenerator;
use CyberSource\Authentication\Core\AuthException as AuthException;
use CyberSource\Authentication\Log\Logger as Logger;
use CyberSource\Authentication\Util\GlobalParameter as GlobalParameter;
 
class OAuthTokenGenerator implements TokenGenerator
{
	private static $logger = null;
	/**
     * Constructor
     */
    public function __construct()
    {
    	if(self::$logger === null){
        	self::$logger = new Logger(OAuthTokenGenerator::class);
    	}
    }

	//Generate OAuth Token Function
	public function generateToken($resourcePath, $payloadData, $method, $merchantConfig) //add 
	{		
        $accessToken = $merchantConfig->getAccessToken();
        if(isset($accessToken))
		    return "Bearer ".$accessToken;
	}
	

}
?>