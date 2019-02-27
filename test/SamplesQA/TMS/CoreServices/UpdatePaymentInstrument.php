<?php
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../vendor/autoload.php';
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../Resources/ExternalConfiguration.php';
class UpdatePaymentInstrument
{
  function testUpdatePaymentInstrument($dynamicDataArr, $apiName)
  {
  	$commonElement = new CyberSource\ExternalConfiguration();
  	$config = $commonElement->ConnectionHost();
  	$apiclient = new CyberSource\ApiClient($config);
  	$api_instance = new CyberSource\Api\PaymentInstrumentsApi($apiclient);
  	foreach($dynamicDataArr as $value)
    {
      $testId = $value[0];
      $profileId = $value[1];
      $tokenId = $value[2];
      $message = $value[3];
      $tmsCardInfo = [
        "expirationMonth" => "09",
        "expirationYear" => "2022",
        "type" => "visa"
      ];
      $card = new CyberSource\Model\Tmsv1paymentinstrumentsCard($tmsCardInfo);

      $tmsBillToArr = [
        "firstName" => "John",
        "lastName" => "Deo",
        "company" => "CyberSource",
        "address1" => "12 Main Street",
        "address2" => "20 My Street",
        "locality" => "Foster City",
        "administrativeArea" => "CA",
        "postalCode" => "90200",
        "country" => "US",
        "email" => "john.smith@example.com",
        "phoneNumber" => "555123456"
      ];
      $tmsBillTo = new CyberSource\Model\Tmsv1paymentinstrumentsBillTo($tmsBillToArr);
      $cardArr = [
          "number" => "4111111111111111" 
      ];
      $instrumentidentifiersCard = new CyberSource\Model\Tmsv1instrumentidentifiersCard($cardArr);

      $strumentidentifiersArr = [
        "card" => $instrumentidentifiersCard ];

      $instrumentIdentifier = new CyberSource\Model\Tmsv1paymentinstrumentsInstrumentIdentifier($strumentidentifiersArr);
      $tmsRequestArr = [
        "card" => $card,
        "billTo" => $tmsBillTo,
        "instrumentIdentifier" => $instrumentIdentifier
      ];
    	$tmsRequest = new CyberSource\Model\Body3($tmsRequestArr);
     	
     	$api_response = list($response,$statusCode,$httpHeader)=null;
    	try {
        
    		$api_response = $api_instance->tmsV1PaymentinstrumentsTokenIdPatch($profileId, $tokenId, $tmsRequest);
    		 if($api_response[1] != 200 ){
          $responseMessage = 'Assertion Failed : ' .$api_response[1];

        }else if($api_response[0]["state"] != "ACTIVE" ){
          $responseMessage = 'Assertion Failed : ' .$api_response[1];
                
        }else if(trim($api_response[0]["id"]) != trim($tokenId)){
          $responseMessage = 'Assertion Failed : ' .$api_response[1];
            
        }else {
          $responseMessage = "Pass :".$api_response[0]["id"]. " - ".$api_response[1];
        }

      } catch (Cybersource\ApiException $e) {
        $reasonArr=  $e->getResponseObject();
        $respArr = explode(" ", $e->getMessage());
        if(isset($reasonArr["reason"])){
          $responseMessage = $respArr[0].  $reasonArr["reason"];
        } else { 
          $responseMessage = $respArr[0];
        }

      }
      $commonElement->CallTestLogging($testId, $apiName, $responseMessage, $message);
    }
  }    

}
?>	
