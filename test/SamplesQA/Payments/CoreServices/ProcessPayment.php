<?php
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../vendor/autoload.php';

class ProcessPayment
{
  function testProcessPayment($dynamicDataArr, $apiName)
  {
    require_once __DIR__. DIRECTORY_SEPARATOR .'../../../Resources/ExternalConfiguration.php';
  	$commonElement = new CyberSource\ExternalConfiguration();
  	$config = $commonElement->ConnectionHost();
  	$apiclient = new CyberSource\ApiClient($config);
  	$api_instance = new CyberSource\Api\PaymentsApi($apiclient);
    foreach($dynamicDataArr as $value)
    {
      $testId = $value[0];
      $amount = $value[1];
      $message = $value[2];


    	$cliRefInfoArr = [
        "code" => "test_payment"
      ];
      $client_reference_information = new CyberSource\Model\Ptsv2paymentsClientReferenceInformation($cliRefInfoArr);
     
      $processingInformationArr = [
        "commerceIndicator" => "internet"
      ];
      
      $processingInformation = new CyberSource\Model\Ptsv2paymentsProcessingInformation($processingInformationArr);

      $amountDetailsArr = [
        "totalAmount" => $amount,
        "currency" => "USD"
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
        "number" => "4111111111111111",
        "securityCode" => "123",
        "expirationMonth" => "12"
      ];
      $card = new CyberSource\Model\Ptsv2paymentsPaymentInformationCard($paymentCardInfo);
      $paymentInfoArr = [
          "card" => $card
          
      ];
      $payment_information = new CyberSource\Model\Ptsv2paymentsPaymentInformation($paymentInfoArr);
      
      $paymentRequestArr = [
        "clientReferenceInformation" => $client_reference_information,
        "orderInformation" => $order_information,
        "paymentInformation" => $payment_information,
        "processingInformation" => $processingInformation
      ];
      //Creating model
      $paymentRequest = new CyberSource\Model\CreatePaymentRequest($paymentRequestArr);
      $responseMessage = "";
      $api_response = list($response,$statusCode,$httpHeader)=null;
      try {
      //Calling the Api
        $api_response = $api_instance->createPayment($paymentRequest);
        if($api_response[0]["status"] != "AUTHORIZED" ){

          $responseMessage = 'Assertion Failed : ' .$api_response[1];
            
        }else if(empty($api_response[0]["id"])){
          $responseMessage = 'Assertion Failed : ' .$api_response[1];
            
        }else if($api_response[0]["orderInformation"]["amountDetails"]["authorizedAmount"] != $amount){
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
