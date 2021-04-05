<?php
/*
*Purpose : Gnerate the JWT token
*/
namespace CyberSource\Authentication\Jwt;

use CyberSource\Authentication\Util\GlobalParameter as GlobalParameter;
use CyberSource\Authentication\Core\AuthException as AuthException;
use Firebase\JWT\JWT as JWT;
use CyberSource\Logging\LogFactory as LogFactory;

require_once 'vendor/autoload.php';

class JsonWebTokenHeader 
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

    //Get the JasonWeb Token
    public function getJsonWebToken($jwtBody, $merchantConfig) 
    {
        $merchantID = $merchantConfig->getMerchantID();
        $keyPass = $merchantConfig->getKeyPassword();
        $keyalias = $merchantConfig->getKeyAlias();
        $keyDir = $merchantConfig->getKeysDirectory();
        $keyFileName = $merchantConfig->getKeyFileName();
        if(empty($keyalias)){
            $keyalias = $merchantID;
        } 
        else if(($keyalias != $merchantID))
        {
            $keyalias = $merchantID;
            $warning_msg = GlobalParameter::KEY_ALIAS_INCORRECT;
        }
        if(empty($keyFileName)){
            $keyFileName = $merchantID;
        } 
        
        if(empty($keyDir)){
            $keyDir = GlobalParameter::KEY_DIR_PATH_DEFAULT;
        }
        if(empty($keyPass)){
            $keyPass = $merchantID;
        }
        if(!empty($warning_msg)){
            trigger_error($warning_msg, E_USER_WARNING);
            self::$logger->warning($warning_msg);
        }

        $filePath = $keyDir.$keyFileName.".p12";
        //get certificate from p12
        if (file_exists($filePath)) 
        {
            $cert_store = file_get_contents($filePath);
            $cacheKey = $keyFileName."_".strtotime(date("F d Y H:i:s", filemtime($filePath)));
        }
        else
        { 
            $exception = new AuthException(GlobalParameter::KEY_FILE_INCORRECT, 0);
            self::$logger->error("AuthException : " . GlobalParameter::KEY_FILE_INCORRECT);
            self::$logger->close();
            throw $exception;
        }

        if(!empty($cacheKey))
            $cache_cert_store = apcu_fetch($cacheKey);
        if($cache_cert_store ==false ){
            $cache_cert_store="";
            $result = apcu_store("$cacheKey", $cert_store);
            $cache_cert_store = apcu_fetch($cacheKey);
        }
        //read the certificate from cert obj    
        if (openssl_pkcs12_read($cache_cert_store, $cert_info, $keyPass)) 
        {
            //Creating public key using certificate Not working in decryption
            $certdata= openssl_x509_parse($cert_info['cert'],1);
            $privateKey = $cert_info['pkey']; 
            $publicKey = $this->PemToDer($cert_info['cert']); 
            $x5cArray = array($publicKey);
            $headers = array(
                "v-c-merchant-id" => $keyalias,
                "x5c" => $x5cArray
            );
            
            self::$logger->close();
            return JWT::encode($jwtBody, $privateKey, GlobalParameter::RS256, "", $headers);
        }
        else
        {
            $exception = new AuthException(GlobalParameter::INCORRECT_KEY_PASSWORD, 0);
            self::$logger->error("AuthException : " . GlobalParameter::INCORRECT_KEY_PASSWORD);
            self::$logger->close();
            throw $exception;
        }
    }

    public function PemToDer($Pem){
        $lines = explode("\n", trim($Pem));
        unset($lines[count($lines)-1]);
        unset($lines[0]);
        return implode("\n", $lines);
    }    
}
?>
