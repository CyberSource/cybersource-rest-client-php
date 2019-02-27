<?php

require_once __DIR__. DIRECTORY_SEPARATOR .'../../../vendor/autoload.php';
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../Resources/ExternalConfiguration.php';
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../Samples/Flex/Verifier.php';
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../Samples/Flex/CoreServices/GenerateKey.php';


class TokenizeCard
{
    
    function testTokenizeCard($dynamicDataArr, $apiName)
    {
        $commonElement = new CyberSource\ExternalConfiguration();
        $config = $commonElement->ConnectionHost();
        $apiclient = new CyberSource\ApiClient($config);
        $api_instance = new CyberSource\Api\FlexTokenApi($apiclient);
        include_once __DIR__. DIRECTORY_SEPARATOR .'../../../Samples/Flex/KeyGenerationNoEnc.php';
        $data = KeyGenerationNoEnc(true);
        $publicKey = $data[1];
        foreach($dynamicDataArr as $value)
        {
            $testId = $value[0];
            $keyId = $value[1];
            $message = $value[2];
            $publicKey = "-----BEGIN PUBLIC KEY-----\n".$publicKey."\n-----END PUBLIC KEY-----";
             
            $cardInfoArr = [
            'cardNumber' => "5555555555554444",
            'cardExpirationMonth' => "03",
            'cardExpirationYear' => "2031",
            'cardType' => "002"
            ];
            $card_information = new CyberSource\Model\Flexv1tokensCardInfo($cardInfoArr);
            $flexRequestArr = [
            'keyId' => $keyId,
            'cardInfo' => $card_information
            ];
            $flexRequest = new CyberSource\Model\TokenizeRequest($flexRequestArr);
            $flexRequestArr = json_decode($flexRequest);
            echo "The Api Request Body: \n". json_encode($flexRequestArr, JSON_UNESCAPED_SLASHES) ."\n\n";
            $api_response = list($response,$statusCode,$httpHeader)=null;
            try {
                $api_response = $api_instance->tokenize($flexRequest);
                if($api_response[1] !=200 ){
                        
                    $responseMessage = 'Assertion Failed : ' .$api_response[1];
                    
                }else if(empty($api_response[0]["keyId"])){
                    $responseMessage = 'Assertion Failed : ' .$api_response[1];
                    
                }else {
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
