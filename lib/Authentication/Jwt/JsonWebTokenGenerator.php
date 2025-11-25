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
use CyberSource\Logging\LogFactory as LogFactory;
use CyberSource\Authentication\Util\MLEUtility as MLEUtility;

//calling the interface
class JsonWebTokenGenerator implements TokenGenerator
{
    private static $logger = null;
    
    /**
     * Constructor
     */
    public function __construct(\CyberSource\Logging\LogConfiguration $logConfig)
    {
        if (self::$logger === null) {
            self::$logger = (new LogFactory())->getLogger(\CyberSource\Utilities\Helpers\ClassHelper::getClassName(get_class($this)), $logConfig);
        }
    }

    //calling Signature
    public function generateToken($resourcePath, $payloadData, $method, $merchantConfig, $isResponseMLEForAPI=false)
    {
        $date = gmdate("D, d M Y G:i:s ").GlobalParameter::GMT;
        if($method==GlobalParameter::GET || $method==GlobalParameter::DELETE)
        {
            $jwtBody = array("iat"=>$date);
            if (!empty($isResponseMLEForAPI)) {
                $jwtBody['v-c-response-mle-kid'] = MLEUtility::validateAndAutoExtractResponseMleKid($merchantConfig);
            }
        }
        else if($method==GlobalParameter::POST || $method==GlobalParameter::PUT || $method==GlobalParameter::PATCH)
        {
            $digestObj = new PayloadDigest($merchantConfig->getLogConfiguration());
            $digest = $digestObj->generateDigest($payloadData);
            $jwtBody = array("digest"=>$digest,"digestAlgorithm"=>"SHA-256","iat"=>$date);
            if (!empty($isResponseMLEForAPI)) {
                $jwtBody['v-c-response-mle-kid'] = MLEUtility::validateAndAutoExtractResponseMleKid($merchantConfig);
            }
        }
        else
        {
            $exception = new AuthException(GlobalParameter::INVALID_REQUEST_TYPE_METHOD, 0);
            self::$logger->error("AuthException : " . GlobalParameter::INVALID_REQUEST_TYPE_METHOD);
            self::$logger->close();
            throw $exception;
        }
        $tokenHeader = $this->accessTokenHeader($jwtBody, $merchantConfig);
        self::$logger->close();
        return $tokenHeader;
    }

    public function accessTokenHeader($jwtBody, $merchantConfig){
        $gToken = $this->getJsonWebTokenHeader($merchantConfig);
        $generatedToken = $gToken->getJsonWebToken($jwtBody, $merchantConfig); 
        return "Bearer ".$generatedToken;
    }

    protected function getJsonWebTokenHeader($merchantConfig) {
        return new JsonWebTokenHeader($merchantConfig->getLogConfiguration());
    }
}
?>