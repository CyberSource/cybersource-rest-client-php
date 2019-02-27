<?php

require_once __DIR__. DIRECTORY_SEPARATOR .'../../../vendor/autoload.php';
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../Resources/ExternalConfiguration.php';

class ProcessAuthorizationReversal
{
    function testProcessAuthorizationReversal($dynamicDataArr, $apiName)
    {
        $commonElement = new CyberSource\ExternalConfiguration();
        $config = $commonElement->ConnectionHost();
        $apiclient = new CyberSource\ApiClient($config);
        $api_instance = new CyberSource\Api\ReversalApi($apiclient);
        foreach($dynamicDataArr as $value)
        {
            $testId = $value[0];
            $id = $value[1];
            $amount = $value[2];
            $message = $value[3];
            require_once __DIR__. DIRECTORY_SEPARATOR .'ProcessPayment.php';
            // $id = ProcessPayment("notallow");
            // $id="5510962017406310204001";
            
            $cliRefInfoArr = [
                'code' => 'TC50171_3'
            ];
            $client_reference_information = new CyberSource\Model\Ptsv2paymentsClientReferenceInformation($cliRefInfoArr);

            $amountDetailsArr = [
                "totalAmount" => $amount
            ];
            $amountDetInfo = new CyberSource\Model\Ptsv2paymentsidreversalsReversalInformationAmountDetails($amountDetailsArr);
            $reversalInformationArr = [
                "amountDetails" => $amountDetInfo,
                "reason" => "testing"
            ];
            $reversalInformation = new CyberSource\Model\Ptsv2paymentsidreversalsReversalInformation($reversalInformationArr);
            
            $paymentRequestArr = [
                "clientReferenceInformation" => $client_reference_information,
                "reversalInformation" => $reversalInformation
            ];

            $paymentRequest = new CyberSource\Model\AuthReversalRequest($paymentRequestArr);
            
            $api_response = list($response,$statusCode,$httpHeader)=null;
            try {
                $api_response = $api_instance->authReversal($id, $paymentRequest);
                echo "\n test \n";
                print_r($api_response[0]["status"]);
                echo "Resp \n";
                if($api_response[0]["status"] != "REVERSED" ){
                    echo "\n Entered reversed...!!! \n";
                    $responseMessage = 'Assertion Failed : ' .$api_response[1];
                        
                    }else if(empty($api_response[0]["id"])){
                    $responseMessage = 'Assertion Failed : ' .$api_response[1];
                        
                    }else if($api_response[0]["reversalAmountDetails"]["reversedAmount"] != $amount){
                    $responseMessage = 'Assertion Failed : '.$api_response[1];
                    } else {
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
