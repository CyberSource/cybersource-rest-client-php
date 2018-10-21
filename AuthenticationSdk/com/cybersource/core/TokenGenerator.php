<?php

namespace CyberSource;
require_once '../CybersourceRestclientPHP/autoload.php';
interface TokenGenerator
{
    public function generateToken($resourcePath, $payloadData, $method, $merchantConfig);
}

?>