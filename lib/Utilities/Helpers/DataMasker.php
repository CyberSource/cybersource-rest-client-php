<?php

namespace CyberSource\Utilities\Helpers;

class DataMasker
{
    public static function maskData($postData_json_raw) {
        $maskingArray = array(
            "number",
            "expirationMonth",
            "expirationYear",
            "securityCode",
            "account",
            "routingNumber",
            "email",
            "firstName",
            "lastName",
            "phoneNumber",
            "type",
            "securityCode",
            "token",
            "signature"
        );

        $postData_json = json_decode($postData_json_raw, true);

        if($postData_json == null) {
            return $postData_json_raw;
        } else {
            $postData_json = self::maskDataIterate($postData_json, $maskingArray);
            return json_encode($postData_json);
        }
    }

    public static function maskDataIterate($jsonStructure, $maskingArray) {
        if(!empty($jsonStructure)) {
            foreach ($jsonStructure as $k => $v) {
                if(is_array($v)) {
                    $jsonStructure[$k] = self::maskDataIterate($v, $maskingArray);
                } else
                {
                    // print_r($maskingArray);
                    if(in_array($k, $maskingArray)) {
                        $jsonStructure[$k]="XXXXX";
                    }
                }
            }
        }
        // print_r($jsonStructure);
        return $jsonStructure;
    }
}
?>