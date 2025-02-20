<?php

namespace CyberSource\Authentication\Util;

use \Exception;

/**
 * MLEException Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 */

class MLEException extends Exception
{
    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}