<?php
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../vendor/autoload.php';
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../Resources/ExternalConfiguration.php';

class RefundPayment
{
    function testRefundPayment($dynamicDataArr, $apiName)
    {
        $commonElement = new CyberSource\ExternalConfiguration();
        $config = $commonElement->ConnectionHost();
        $apiclient = new CyberSource\ApiClient($config);
        $api_instance = new CyberSource\Api\RefundApi($apiclient);
        foreach($dynamicDataArr as $value)
        {
            $testId = $value[0];
            $id = $value[1];
            $amount = $value[2];
            $message = $value[3];
            $cliRefInfoArr = [
            "code" => "test_refund_payment"
            ];
            $client_reference_information = new CyberSource\Model\Ptsv2paymentsClientReferenceInformation($cliRefInfoArr);
            $amountDetailsArr = [
                "totalAmount" => $amount,
                "currency" => "USD"
            ];
            $amountDetInfo = new CyberSource\Model\Ptsv2paymentsOrderInformationAmountDetails($amountDetailsArr);
            
            $orderInfoArry = [
                "amountDetails" => $amountDetInfo
            ];

            $order_information = new CyberSource\Model\Ptsv2paymentsOrderInformation($orderInfoArry);
            $paymentRequestArr = [
                "clientReferenceInformation" => $client_reference_information,
                "orderInformation" => $order_information
            ];

            $paymentRequest = new CyberSource\Model\RefundPaymentRequest($paymentRequestArr);           
            $api_response = list($response,$statusCode,$httpHeader)=null;
            try {
                $api_response = $api_instance->refundPayment($paymentRequest, $id);
                if($api_response[0]["status"] != "PENDING" ){

                    $responseMessage = 'Assertion Failed : ' .$api_response[1];
                    
                }else if(empty($api_response[0]["id"])){
                    $responseMessage = 'Assertion Failed : ' .$api_response[1];
                    
                }else if($api_response[0]["orderInformation"]["amountDetails"]["authorizedAmount"] != $amount){
                    $responseMessage = 'Assertion Failed : '.$api_response[1];
                } else {
                    $responseMessage = "Pass :".$api_response[0]["status"]. " - ".$api_response[0]["id"];
                }

                } catch (Cybersource\ApiException $e) {
                    $reasonArr=  $e->getResponseObject();
                    $respArr = explode(" ", $e->getMessage());
                    if(isset($reasonArr["reason"])){
                        $responseMessage = $respArr[0].  $reasonArr["reason"];
                    }
                    else {
                        $responseMessage = $respArr[0];
                    }

                }
                $commonElement->CallTestLogging($testId, $apiName, $responseMessage, $message);
        }
    }    

}

?>  
