<?php
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../vendor/autoload.php';
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../Resources/ExternalConfiguration.php';

class VoidCapture
{
    function testVoidCapture($dynamicDataArr, $apiName)
    {
        $commonElement = new CyberSource\ExternalConfiguration();
        $config = $commonElement->ConnectionHost();
        $apiclient = new CyberSource\ApiClient($config);
        $api_instance = new CyberSource\Api\VoidApi($apiclient);
        foreach($dynamicDataArr as $value)
        {
            $testId = $value[0];
            $id = $value[1];
            $statusInput = $value[2];
            $message = $value[3];
            $cliRefInfoArr = [
                'code' => 'test_void'
            ];
            $client_reference_information = new CyberSource\Model\Ptsv2paymentsClientReferenceInformation($cliRefInfoArr);

            $paymentRequestArr = [
                "clientReferenceInformation" => $client_reference_information
            ];

            $paymentRequest = new CyberSource\Model\VoidCaptureRequest($paymentRequestArr);        
            $api_response = list($response,$statusCode,$httpHeader)=null;
            try {
                $api_response = $api_instance->voidCapture($paymentRequest, $id);
                if($api_response[0]["status"] != $statusInput ){

                    $responseMessage = 'Assertion Failed : ' .$api_response[1];
                        
                    }else if(empty($api_response[0]["id"])){
                    $responseMessage = 'Assertion Failed : ' .$api_response[1];
                        
                    }else {
                        $responseMessage = "Pass :".$api_response[1]. " - ".$api_response[0]["id"];
                    }

                } catch (Cybersource\ApiException $e) {
                    $reasonArr=  $e->getResponseObject();
                    $respArr = explode(" ", $e->getMessage());                   
                    $responseMessage =  'Failed : '.$respArr[0] ;
                    $message = $reasonArr["message"];

                }
                $commonElement->CallTestLogging($testId, $apiName, $responseMessage, $message);
        }
    }    
}

?>	
