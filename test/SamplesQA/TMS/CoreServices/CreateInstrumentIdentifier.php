<?php
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../vendor/autoload.php';
 require_once __DIR__. DIRECTORY_SEPARATOR .'../../../Resources/ExternalConfiguration.php';
class CreateInstrumentIdentifier
{
  function testCreateInstrumentIdentifier($dynamicDataArr, $apiName)
  {

  	$commonElement = new CyberSource\ExternalConfiguration();
  	$config = $commonElement->ConnectionHost();
  	$apiclient = new CyberSource\ApiClient($config);
  	$api_instance = new CyberSource\Api\InstrumentIdentifiersApi($apiclient);
  	foreach($dynamicDataArr as $value)
    {
      $testId = $value[0];
      $prevTransId = $value[1];
      $profileId = $value[2];
      $message = $value[3];

      $tmsCardInfo = [
        "number" => "1234567890987200"
      ];
      $card = new CyberSource\Model\Tmsv1instrumentidentifiersCard($tmsCardInfo);
      $merchantInitiatedTransactionArr = [
        "previousTransactionId" => $prevTransId
          
      ];
      $merchantInitiatedTransaction = new CyberSource\Model\Tmsv1InitiatorMerchantInitiatedTransaction($merchantInitiatedTransactionArr);


      $initiatorInfoArr = [
        "merchantInitiatedTransaction" => $merchantInitiatedTransaction
          
      ];
      $initiatorInformation = new CyberSource\Model\Tmsv1instrumentidentifiersProcessingInformationAuthorizationOptionsInitiator($initiatorInfoArr);

      $authorizationOptionsArr = [
        'initiator' => $initiatorInformation
          
      ];
      $authorizationOptions = new CyberSource\Model\Tmsv1instrumentidentifiersProcessingInformationAuthorizationOptions( $authorizationOptionsArr);

      $processingInformationArr = [
        "authorizationOptions" => $authorizationOptions
          
      ];
      $processingInformation = new CyberSource\Model\Tmsv1instrumentidentifiersProcessingInformation($processingInformationArr);

      $tmsRequestArr = [
        "card" => $card,
        "processingInformation" => $processingInformation
      ];

    	$tmsRequest = new CyberSource\Model\Body($tmsRequestArr);
    	
     	$api_response = list($response,$statusCode,$httpHeader)=null;
    	try {
        $api_response = $api_instance->tmsV1InstrumentidentifiersPost($profileId, $tmsRequest);
        if($api_response[0]["state"] != "ACTIVE" ){
          $responseMessage = 'Assertion Failed : ' .$api_response[1];
            
        }else if(empty($api_response[0]["id"])){
          $responseMessage = 'Assertion Failed : ' .$api_response[1];
            
        }else if($api_response[0]["processingInformation"]["authorizationOptions"]["initiator"]["merchantInitiatedTransaction"]["previousTransactionId"] != $prevTransId){
          $responseMessage = 'Assertion Failed : '.$api_response[1];
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
