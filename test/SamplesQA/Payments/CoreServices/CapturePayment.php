<?php

require_once __DIR__. DIRECTORY_SEPARATOR .'../../../vendor/autoload.php';
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../Resources/ExternalConfiguration.php';
class CapturePayment{

  function testCapturePayment($dynamicDataArr, $apiName)
  {
  	$commonElement = new CyberSource\ExternalConfiguration();
  	$config = $commonElement->ConnectionHost();
  	$apiclient = new CyberSource\ApiClient($config);
  	$api_instance = new CyberSource\Api\CaptureApi($apiclient);
    foreach($dynamicDataArr as $value)
    {
      $testId = $value[0];
      $id = $value[1];
      $amount = $value[2];
      $message = $value[3];
    	$cliRefInfoArr = [
        "code" => "test_capture"
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
      $requestArr = [
        "clientReferenceInformation" => $client_reference_information,
        "orderInformation" => $order_information
      ];
      //Creating model
      $request = new CyberSource\Model\CapturePaymentRequest($requestArr);
      
     	$api_response = list($response,$statusCode,$httpHeader)=null;
      try {
        $api_response = $api_instance->capturePayment($request, $id);
        if($api_response[0]["status"] != "PENDING" ){

            $responseMessage = 'Assertion Failed : ' .$api_response[1];
              
          }else if(empty($api_response[0]["id"])){
            $responseMessage = 'Assertion Failed : ' .$api_response[1];
              
          }else if($api_response[0]["orderInformation"]["amountDetails"]["totalAmount"] != $amount){
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
