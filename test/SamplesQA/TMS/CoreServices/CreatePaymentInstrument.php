<?php
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../vendor/autoload.php';
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../Resources/ExternalConfiguration.php';
class CreatePaymentInstrument
{
	function testCreatePaymentInstrument($dynamicDataArr, $apiName)
	{
		$commonElement = new CyberSource\ExternalConfiguration();
		$config = $commonElement->ConnectionHost();
		$apiclient = new CyberSource\ApiClient($config);
		$api_instance = new CyberSource\Api\PaymentInstrumentsApi($apiclient);
		foreach($dynamicDataArr as $value)
	    {
			$testId = $value[0];
			$profileId = $value[1];
			$message = $value[2];
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

			$instrumentidentifiersArr = [
			  "card" => $instrumentidentifiersCard
			];
			$instrumentidentifier = new CyberSource\Model\Tmsv1paymentinstrumentsInstrumentIdentifier($instrumentidentifiersArr);

			$tmsRequestArr = [
				"card" => $card,
				"billTo" => $tmsBillTo,
				"instrumentIdentifier" => $instrumentidentifier
			];
			$tmsRequest = new CyberSource\Model\Body2($tmsRequestArr);
			
		 	$api_response = list($response,$statusCode,$httpHeader)=null;
			try {
		    
				$api_response = $api_instance->tmsV1PaymentinstrumentsPost($profileId, $tmsRequest);

				if($api_response[0]->state != "ACTIVE" ){
		          $responseMessage = 'Assertion Failed : ' .$api_response[1];
		            
		        }else if(empty($api_response[0]->id)){
		          $responseMessage = 'Assertion Failed : ' .$api_response[1];
		            
		        }else {
		        	if($api_response[1] >= 200 && $api_response[1] <= 299){
		          		$responseMessage = "Pass :".$api_response[0]->state. " - ".$api_response[0]->id;
		        	}else{
		        		$responseMessage = "FAIL :".$api_response[1]. " - ".$api_response[0]->id;
		        	}
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
