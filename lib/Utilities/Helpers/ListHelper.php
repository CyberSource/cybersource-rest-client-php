<?php

namespace CyberSource\Utilities\Helpers;

class ListHelper
{
    public static function toString($array) {
        return implode("\n", array_map(
            function ($v, $k) {
                if(is_array($v)){
                    return $k."[] = ".implode("&".$k."[] = ", $v);
                }else{
                    if (is_int($k)) {
                        return $v;
                    }
                    return $k." = ".$v;
                }
            },
            $array,
            array_keys($array)
        ));
    }
}
?>