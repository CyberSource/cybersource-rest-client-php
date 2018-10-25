<?php

namespace CyberSource;
require_once '../cybersource-rest-client-php/autoload.php';
interface TokenGenerator
{
    public function generateToken($resourcePath, $payloadData, $method, $merchantConfig);
}

?>