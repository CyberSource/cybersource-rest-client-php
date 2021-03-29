<?php

namespace CyberSource\Utilities\Flex;

use CyberSource\Logging\LogFactory as LogFactory;

class TokenVerification
{
    private static $MyLogger=null;
    
    /**
     * Constructor
     */
    public function __construct(\CyberSource\Logging\LogConfiguration $logConfig=null)
    {
        if (self::$MyLogger === null) {
            self::$MyLogger = (new LogFactory())->getLogger(\CyberSource\Utilities\Helpers\ClassHelper::getClassName(get_class()), $logConfig);
        }
    }
    
    public function verifyToken($publicKey, $postParam)
    {
        $dataString = "";
        $arraySting = explode(",", $postParam[0]['signedFields']);
        $lastElement = end($arraySting);
        $postParam = json_decode($postParam[0]);
        foreach ($arraySting as $value) {
            $dataString .= $postParam->$value;
            if($lastElement != $value){
                $dataString .= ",";
            }
        }
        $signature = base64_decode($postParam->signature);
        $signatureVerify = openssl_verify($dataString, $signature, $publicKey, "sha512");
        if ($signatureVerify == 1) {
            self::$MyLogger->close();
            return "true";
        } elseif ($signatureVerify == 0) {
            self::$MyLogger->close();
            return "false";
        } else {
            self::$MyLogger->warning("Error in checking signature\n");
        }
    }
}

?>