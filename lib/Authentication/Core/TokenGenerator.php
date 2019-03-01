<?php

namespace CyberSource\Authentication\Core;

interface TokenGenerator
{
    public function generateToken($resourcePath, $payloadData, $method, $merchantConfig);
}

?>