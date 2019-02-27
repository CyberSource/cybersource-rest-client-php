<?php
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../vendor/autoload.php';
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../Resources/ExternalConfiguration.php';

class ProcessCredit
{
    function testProcessCredit($dynamicDataArr, $apiName)
    {
        $commonElement = new CyberSource\ExternalConfiguration();
        $config = $commonElement->ConnectionHost();
        $apiclient = new CyberSource\ApiClient($config);
        $api_instance = new CyberSource\Api\CreditApi($apiclient);
        foreach($dynamicDataArr as $value)
        {
            $testId = $value[0];
            $amount = $value[1];
            $message = $value[2];
            $cliRefInfoArr = [
            "code" => "test_credits"
            ];
            $client_reference_information = new CyberSource\Model\Ptsv2paymentsClientReferenceInformation($cliRefInfoArr);

            $amountDetailsArr = [
                "totalAmount" => $amount,
                "currency" => "usd"
            ];
            $amountDetInfo = new CyberSource\Model\Ptsv2paymentsOrderInformationAmountDetails($amountDetailsArr);
            $billtoArr = [
                "firstName" => "John",
                "lastName" => "Doe",
                "address1" => "1 Market St",
                "postalCode" => "94105",
                "locality" => "san francisco",
                "administrativeArea" => "CA",
                "country" => "US",
                "phoneNumber" => "4158880000",
                "company" => "Visa",
                "email" => "test@cybs.com"
            ];
            $billto = new CyberSource\Model\Ptsv2paymentsOrderInformationBillTo($billtoArr);
            $orderInfoArry = [
                "amountDetails" => $amountDetInfo,
                "billTo" => $billto
            ];

            $order_information = new CyberSource\Model\Ptsv2paymentsOrderInformation($orderInfoArry);
            $paymentCardInfo = [
                "expirationYear" => "2031",
                "number" => "5555555555554444",
                "securityCode" => "123",
                "expirationMonth" => "12",
                "type" => "002"
            ];
            $card = new CyberSource\Model\Ptsv2paymentsPaymentInformationCard($paymentCardInfo);
            $paymentInfoArr = [
                "card" => $card
                
            ];
            $payment_information = new CyberSource\Model\Ptsv2paymentsPaymentInformation($paymentInfoArr);

            $paymentRequestArr = [
                "clientReferenceInformation" => $client_reference_information,
                "orderInformation" => $order_information,
                "paymentInformation" => $payment_information
            ];

            $paymentRequest = new CyberSource\Model\CreateCreditRequest($paymentRequestArr);
            $api_response = list($response,$statusCode,$httpHeader)=null;
            try {

                $api_response = $api_instance->createCredit($paymentRequest);
                if($api_response[0]["status"] != "PENDING" ){

                    $responseMessage = 'Assertion Failed : ' .$api_response[1];
                        
                    }else if(empty($api_response[0]["id"])){
                    $responseMessage = 'Assertion Failed : ' .$api_response[1];
                        
                    }else if($api_response[0]["creditAmountDetails"]["creditAmount"] != $amount){
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
