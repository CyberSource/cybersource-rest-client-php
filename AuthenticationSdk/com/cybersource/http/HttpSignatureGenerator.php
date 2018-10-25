<?php
/*
*Purpose : Generating token for HTTP Signature
*/
namespace CyberSource;
require_once '../cybersource-rest-client-php/autoload.php';
require_once '../cybersource-rest-client-php/AuthenticationSdk/com/cybersource/payloadDigest/PayloadDigest.php';
require_once '../cybersource-rest-client-php/AuthenticationSdk/com/cybersource/core/TokenGenerator.php';
require_once '../cybersource-rest-client-php/AuthenticationSdk/com/cybersource/core/AuthException.php'; 
class HttpSignatureGenerator implements TokenGenerator
{
	private static $logger=null;
	/**
     * Constructor
     */
    public function __construct()
    {
    	if(self::$logger === null){
        	self::$logger = new Logger(HttpSignatureGenerator::class);
    	}
    }

	//Signature Creation function
	public function generateToken($resourcePath, $payloadData, $method, $merchantConfig) //add 
	{
		$host = $merchantConfig->getHost();
		$date = date("D, d M Y G:i:s ").GlobalParameter::GMT;
		$methodHeader = strtolower($method);
		$signatureString ="";
		if($method==GlobalParameter::GET || $method==GlobalParameter::DELETE){
			
			//signature creation for GET/DELETE
			$signatureString = "host: ".$host."\ndate: ".$date."\n(request-target): ".$methodHeader." ".$resourcePath."\nv-c-merchant-id: ".$merchantConfig->getMerchantID();
			$headerString = GlobalParameter::GETALGOHEADER;		
			
		} else if($method==GlobalParameter::POST || $method==GlobalParameter::PUT){
			//signature creation for POST/PUT
			if(empty($payloadData)){
				$exception = new AuthException(GlobalParameter::FILE_NOT_FOUND, 0);
				 self::$logger->log($merchantConfig, $exception);
				throw $exception;
			}
			//Get digest data
			$digestCon = new PayloadDigest();
	    	$digest = $digestCon->generateDigest($payloadData);
			$signatureString = "host: ".$host."\ndate: ".$date."\n(request-target): ".$methodHeader." ".$resourcePath."\ndigest: ".GlobalParameter::SHA256DIGEST.$digest."\nv-c-merchant-id: ".$merchantConfig->getMerchantID();
			$headerString = GlobalParameter::POSTALGOHEADER;
			
		}
		else
		{
			$exception = new AuthException(GlobalParameter::INVALID_REQUEST_TYPE_METHOD, 0);
			self::$logger->log($merchantConfig, $exception);
			throw $exception;
		}
		return $this->accessTokenHeader($signatureString, $headerString, $merchantConfig);
	}
	//Purpose: using for access and return the signature token
	private function accessTokenHeader($signatureString, $headerString, $merchantConfig){

		$signatureByteString = utf8_encode($signatureString);
		$decodeKey = base64_decode($merchantConfig->getSecreteKey());
		$signature = base64_encode(hash_hmac(GlobalParameter::SHA256, $signatureByteString, $decodeKey, true));	
		$signatureHeader = array(
			'keyid="'.$merchantConfig->getApiKeyID().'"',
			'algorithm="'.GlobalParameter::HMACSHA256.'"',
			'headers="'.$headerString.'"',
			'signature="'.$signature.'"'
		);
		return GlobalParameter::SIGNATURE.implode(", ",$signatureHeader);
	}

}
?>