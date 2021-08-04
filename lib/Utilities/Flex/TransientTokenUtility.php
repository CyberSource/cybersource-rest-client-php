<?php

namespace CyberSource\Utilities\Flex;

use CyberSource\Logging\LogFactory as LogFactory;

class TransientTokenUtility
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
    
    /**
     * Parse token for the given jwt string
     */
    public function parseToken($jwt)
    {
        $splitContents = explode(".",$jwt);
        if(sizeof($splitContents) > 1)
        {
            $encodedString  = $splitContents[1];
            $decodedString = base64_decode($encodedString);
            $transientTokenModel= json_decode($decodedString);
            // return Transient token model and make use of that model.
            return $transientTokenModel;
        }
    }
}

?>