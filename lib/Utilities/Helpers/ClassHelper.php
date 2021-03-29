<?php

namespace CyberSource\Utilities\Helpers;

class ClassHelper
{
    public static function getClassName($fullyQualifiedName) {
        $explosion = explode('\\', $fullyQualifiedName);
        return end($explosion);
    }
}
?>