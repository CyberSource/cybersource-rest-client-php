<?php
/*
*Purpose : Generating token for HTTP Signature
*/
namespace CyberSource\Authentication\Http;
use CyberSource\Authentication\PayloadDigest\PayloadDigest as PayloadDigest;
use CyberSource\Authentication\Core\TokenGenerator as TokenGenerator;
use CyberSource\Authentication\Core\AuthException as AuthException;
use CyberSource\Authentication\Util\GlobalParameter as GlobalParameter;
use CyberSource\Logging\LogFactory as LogFactory;
 
class HttpSignatureGenerator implements TokenGenerator
{
    private static $logger = null;
    
    /**
     * Constructor
     */
    public function __construct(\CyberSource\Logging\LogConfiguration $logConfig)
    {
        if (self::$logger === null) {
            self::$logger = (new LogFactory())->getLogger(\CyberSource\Utilities\Helpers\ClassHelper::getClassName(get_class()), $logConfig);
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
            if($merchantConfig->getUseMetaKey())
            {
                $signatureString = "host: ".$host."\ndate: ".$date."\n(request-target): ".$methodHeader." ".$resourcePath."\nv-c-merchant-id: ".$merchantConfig->getPortfolioID();
            }
            else
            {
                $signatureString = "host: ".$host."\ndate: ".$date."\n(request-target): ".$methodHeader." ".$resourcePath."\nv-c-merchant-id: ".$merchantConfig->getMerchantID();
            }
            $headerString = GlobalParameter::GETALGOHEADER;
        } else if($method==GlobalParameter::POST || $method==GlobalParameter::PUT || $method==GlobalParameter::PATCH){
            //signature creation for POST/PUT
            if(empty($payloadData)){
                $exception = new AuthException(GlobalParameter::MISSING_REQUEST, 0);
                self::$logger->error("AuthException : " . GlobalParameter::MISSING_REQUEST);
                self::$logger->close();
                throw $exception;
            }
            //Get digest data
            $digestCon = new PayloadDigest($merchantConfig->getLogConfiguration());
            $digest = $digestCon->generateDigest($payloadData);
            if($merchantConfig->getUseMetaKey())
            {
                $signatureString = "host: ".$host."\ndate: ".$date."\n(request-target): ".$methodHeader." ".$resourcePath."\ndigest: ".GlobalParameter::SHA256DIGEST.$digest."\nv-c-merchant-id: ".$merchantConfig->getPortfolioID();
            }
            else
            {
                $signatureString = "host: ".$host."\ndate: ".$date."\n(request-target): ".$methodHeader." ".$resourcePath."\ndigest: ".GlobalParameter::SHA256DIGEST.$digest."\nv-c-merchant-id: ".$merchantConfig->getMerchantID();
            }
            $headerString = GlobalParameter::POSTALGOHEADER;
        }
        else
        {
            $exception = new AuthException(GlobalParameter::INVALID_REQUEST_TYPE_METHOD, 0);
            self::$logger->error("AuthException : " . GlobalParameter::INVALID_REQUEST_TYPE_METHOD);
            self::$logger->close();
            throw $exception;
        }

        self::$logger->close();
        return $this->accessTokenHeader($signatureString, $headerString, $merchantConfig);
    }
    //Purpose: using for access and return the signature token
    protected function accessTokenHeader($signatureString, $headerString, $merchantConfig){
        $signatureByteString = utf8_encode($signatureString);
        $decodeKey = base64_decode($merchantConfig->getSecretKey());
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