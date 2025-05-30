<?php
/*
*Purpose : Gnerate the JWT token
*/
namespace CyberSource\Authentication\Jwt;

use CyberSource\Authentication\Util\GlobalParameter as GlobalParameter;
use CyberSource\Authentication\Core\AuthException as AuthException;
use Firebase\JWT\JWT as JWT;
use CyberSource\Logging\LogFactory as LogFactory;
use CyberSource\Authentication\Util\Cache as Cache;

class JsonWebTokenHeader 
{
    private static $logger = null;
    private static $cache = null;
    
    /**
     * Constructor
     */
    public function __construct(\CyberSource\Logging\LogConfiguration $logConfig)
    {
        if (self::$logger === null) {
            self::$logger = (new LogFactory())->getLogger(\CyberSource\Utilities\Helpers\ClassHelper::getClassName(get_class($this)), $logConfig);
        }

        self::$cache = new Cache();
    }

    //Get the JasonWeb Token
    public function getJsonWebToken($jwtBody, $merchantConfig) 
    {
        $merchantID = $merchantConfig->getMerchantID();
        $keyalias = $merchantConfig->getKeyAlias();

        if(empty($keyalias)){
            $keyalias = $merchantID;
        } 
        else if(($keyalias != $merchantID))
        {
            $keyalias = $merchantID;
            $warning_msg = GlobalParameter::KEY_ALIAS_INCORRECT;
        }
        if(!empty($warning_msg)){
            trigger_error($warning_msg, E_USER_WARNING);
            self::$logger->warning($warning_msg);
        }

        try {
            $cacheData = self::$cache->grabFileFromP12($merchantConfig);
        } catch (AuthException $e) {
            self::$logger->error("Failed to grab file from P12: " . $e->getMessage());
            throw $e;
        }

        if (!empty($cacheData['private_key']) && !empty($cacheData['publicKey'])) {
            $privateKey = $cacheData['private_key'];
            $publicKey = $cacheData['publicKey'];
        } else {
            self::$logger->error("AuthException: " . GlobalParameter::EMPTY_PRIVATE_OR_PUBLIC_KEY_ERROR);
            throw new AuthException("AuthException: " . GlobalParameter::EMPTY_PRIVATE_OR_PUBLIC_KEY_ERROR);
        }

        $x5cArray = array($publicKey);
        $headers = array(
                "v-c-merchant-id" => $keyalias,
                "x5c" => $x5cArray
            );
        self::$logger->close();
        return JWT::encode($jwtBody, $privateKey, GlobalParameter::RS256, "", $headers);
    }
  
}
?>
