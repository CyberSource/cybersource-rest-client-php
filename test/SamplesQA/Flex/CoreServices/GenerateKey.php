<?php

require_once __DIR__. DIRECTORY_SEPARATOR .'../../../vendor/autoload.php';
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../Resources/ExternalConfiguration.php';

class GenerateKey
{
    function testGenerateKey($dynamicDataArr, $apiName)
    {
        $commonElement = new CyberSource\ExternalConfiguration();
        $config = $commonElement->ConnectionHost();
        $apiclient = new CyberSource\ApiClient($config);
        $api_instance = new CyberSource\Api\KeyGenerationApi($apiclient);
        foreach($dynamicDataArr as $value)
        {
            $testId = $value[0];
            $encryptionType = $value[1];
            $message = $value[2];
            $flexRequestArr = [
            'encryptionType' => "None",
            ];
            $flexRequest = new CyberSource\Model\KeyParameters($flexRequestArr);
            $api_response = list($response, $statusCode, $httpHeader)=null;

            try {
                $api_response = $api_instance->generatePublicKey($flexRequest);
                print_r($api_response);
                if($api_response[1] !=200 ){
                        
                    $responseMessage = 'Assertion Failed : ' .$api_response[1];
                        
                    }else if(empty($api_response[0]["keyId"])){
                    $responseMessage = 'Assertion Failed : ' .$api_response[1];
                        
                    }else {
                    $responseMessage = "Pass :".$api_response[0]["status"]. " - ".$api_response[0]["id"];
                    }

                } catch (Cybersource\ApiException $e) {
                    $reasonArr=  $e->getResponseObject();
                    $respArr = explode(" ", $e->getMessage());
                    if(isset($reasonArr["reason"]))
                    $responseMessage = $respArr[0].  $reasonArr["reason"];
                    else 
                    $responseMessage = $respArr[0];

                }
                $commonElement->CallTestLogging($testId, $apiName, $responseMessage, $message);
        }
    }    
}

?>	
