<?php

namespace CyberSource\Utilities\Helpers;

class DataMasker
{
    public static function maskData($postData_json_raw) {
        $maskingArray = array(
            array("securityCode", "[0-9]{3,4}", "xxxxx"),
            array("number", ".*(.{3}[^\s\"])\s?", "xxxxx$1"),
            array("cardNumber", ".*(.{3}[^\s\"])\s?", "xxxxx$1"),
            array("expirationMonth", "[0-1][0-9]", "xxxx"),
            array("expirationYear", "2[0-9][0-9][0-9]", "xxxx"),
            array("account", "(\s*\p{N}\s*)+(\p{N}{4})(\s*)", "xxxxx$2"),
            array("routingNumber","[0-9]+", "xxxxx"),
            array("email", "[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?", "xxxxx"),
            array("firstName", "([a-zA-Z]+( )?[a-zA-Z]*'?-?[a-zA-Z]*( )?([a-zA-Z]*)?)", "xxxxx"),
            array("lastName", "([a-zA-Z]+( )?[a-zA-Z]*'?-?[a-zA-Z]*( )?([a-zA-Z]*)?)", "xxxxx"),
            array("phoneNumber", "(\\+[0-9]{1,2} )?\\(?[0-9]{3}\\)?[ .-]?[0-9]{3}[ .-]?[0-9]{4}", "xxxxx"),
            array("type", "[-A-Za-z0-9 ]+", "xxxxx"),
            array("token", "[-.A-Za-z0-9 ]+", "xxxxx"),
            array("signature", "[-.A-Za-z0-9 ]+", "xxxxx"),
            array("prefix", "(\s*)(\p{N}{4})(\s*)(\p{N}{2})(\s*\p{N}*\s*)", "$2$4xxxxx"),
            array("bin", "(\s*)(\p{N}{4})(\s*)(\p{N}{2})(\s*\p{N}*\s*)", "$2$4xxxxx")
        );

        $postData_json = json_decode($postData_json_raw, true);

        if($postData_json == null) {
            return $postData_json_raw;
        } else {
            $postData_json = self::maskDataIterate($postData_json, $maskingArray);
            return json_encode($postData_json);
        }
    }

    public static function maskAuthenticationData($string) {
        $authenticationMaskingArray = array(
            array("Signature", "This is to mask sensitive data as part of the HTTP Signature request header", "(keyid=\\\"([\\w-]*)\\\"),([\\w\\\"\\-\\(\\),= ]*), (signature=\\\"([\\w\\/=\\+]*)\\\")", "keyid=\"XXXXX\",$3, signature=\"$5\"")
        );

        if($string == null) {
            return $string;
        } else {
            $string = self::maskAuthDataIterate($string, $authenticationMaskingArray);
            return $string;
        }
    }

    public static function maskDataIterate($jsonStructure, $maskingArray) {
        if(!empty($jsonStructure)) {
            foreach ($jsonStructure as $k => $v) {
                if(is_array($v)) {
                    $jsonStructure[$k] = self::maskDataIterate($v, $maskingArray);
                } else
                {
                    foreach ($maskingArray as $i => $j) {
                        $tagName = $j[0];
                        $pattern = "/$j[1]/";
                        $replacement = $j[2];
                        if(strcasecmp($k, $tagName) == 0) {
                            $jsonStructure[$k] = preg_replace($pattern, $replacement, $v);
                        }
                    }
                }
            }
        }

        return $jsonStructure;
    }

    public static function maskAuthDataIterate($input, $authMaskingArray) {
        foreach ($authMaskingArray as $k => $v) {
            $tagName = $v[0];
            $pattern = "/$v[2]/";
            $replacement = $v[3];
            $input = preg_replace($pattern, $replacement, $input);
        }

        return $input;
    }
}
?>