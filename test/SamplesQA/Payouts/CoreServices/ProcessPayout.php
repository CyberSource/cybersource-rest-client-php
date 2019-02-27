<?php
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../vendor/autoload.php';
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../Resources/ExternalConfiguration.php';

class ProcessPayout
{
    function testProcessPayout($dynamicDataArr, $apiName)
    {
        $commonElement = new CyberSource\ExternalConfiguration();
        $config = $commonElement->ConnectionHost();
        $apiclient = new CyberSource\ApiClient($config);
        $api_instance = new CyberSource\Api\ProcessAPayoutApi($apiclient);
        foreach($dynamicDataArr as $value)
        {
            $testId = $value[0];
            $cleintRefInfoCode = $value[1];
            $businessAppId = $value[2];
            $amount = $value[3];
            $message = $value[4];
            $cliRefInfoArr = [
                "code" => "33557799"
            ];
            $client_reference_information = new CyberSource\Model\PtsV2PaymentsPost201ResponseClientReferenceInformation($cliRefInfoArr);

            $recipientInformationArr = [
                "firstName" => "John",
                "lastName" => "Doe",
                "address1" => "Paseo Padre Boulevard",
                "locality" => "Foster City",
                "administrativeArea" => "CA",
                "country" => "US",
                "postalCode" => "94400",
                "phoneNumber" => "6504320556"
            ];
            $recipientInformation = new CyberSource\Model\Ptsv2payoutsRecipientInformation($recipientInformationArr);
            $accountArr = [
                "fundsSource" => "01",
                "number" => "1234567890123456789012345678901234"
            ];
            $account = new CyberSource\Model\Ptsv2payoutsSenderInformationAccount($accountArr);
            $senderInformationArr = [
                "referenceNumber" => "1234567890",
                "account" => $account,
                "name" => "Company Name",
                "address1" => "900 Metro Center Blvd",
                "locality" => "Foster City",
                "administrativeArea" => "CA",
                "countryCode" => "US"
            ];
            $senderInformation = new CyberSource\Model\Ptsv2payoutsSenderInformation($senderInformationArr);

            $processingInformationArr = [
                "businessApplicationId" => "FD",
                "commerceIndicator" => "internet"
            ];
            $processingInformation = new CyberSource\Model\Ptsv2payoutsProcessingInformation($processingInformationArr);

            $amountDetailsArr = [
                "totalAmount" => "100.00",
                "currency" => "USD"
            ];
            $amountDetInfo = new CyberSource\Model\Ptsv2payoutsOrderInformationAmountDetails($amountDetailsArr);
            
            $orderInfoArry = [
                "amountDetails" => $amountDetInfo
            ];

            $order_information = new CyberSource\Model\Ptsv2payoutsOrderInformation($orderInfoArry);

            $merchantDescriptorArr = [
                "name" => "Sending Company Name",
                "locality" => "FC",
                "country" => "US",
                "administrativeArea" => "CA",
                "postalCode" => "94440"
                
            ];
            $merchantDescriptor = new CyberSource\Model\Ptsv2payoutsMerchantInformationMerchantDescriptor($merchantDescriptorArr);
            $merchantInformationArr = [
                "merchantDescriptor" => $merchantDescriptor
                
            ];
            $merchantInformation = new CyberSource\Model\Ptsv2payoutsMerchantInformation($merchantInformationArr);

            $paymentCardInfo = [
                "type" => "001",
                "number" => "4111111111111111",
                "expirationMonth" => "12",
                "expirationYear" => "2025",
                "sourceAccountType" => "CH"
            ];
            $card = new CyberSource\Model\Ptsv2payoutsPaymentInformationCard($paymentCardInfo);
            $paymentInfoArr = [
                "card" => $card
                
            ];
            $payment_information = new CyberSource\Model\Ptsv2payoutsPaymentInformation($paymentInfoArr);

            $paymentRequestArr = [
                "clientReferenceInformation" => $client_reference_information,
                "recipientInformation" => $recipientInformation,
                "senderInformation" => $senderInformation,
                "merchantInformation" => $merchantInformation,
                "orderInformation" => $order_information,
                "paymentInformation" => $payment_information,
                "processingInformation" => $processingInformation
            ];

            $request = new CyberSource\Model\PtsV2PayoutsPostResponse($paymentRequestArr);
            $api_response = list($response,$statusCode,$httpHeader)=null;
            try {
                
                $api_response = $api_instance->octCreatePayment($request);
                if($api_response[0]->status != "ACCEPTED" ){

                    $responseMessage = 'Assertion Failed : ' .$api_response[1];
                        
                    }else if(empty($api_response[0]->id)){
                    $responseMessage = 'Assertion Failed : ' .$api_response[1];
                        
                    }else if($api_response[0]["orderInformation"]["amountDetails"]["authorizedAmount"] != $amount){
                    $responseMessage = 'Assertion Failed : '.$api_response[1];
                    } else {
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
