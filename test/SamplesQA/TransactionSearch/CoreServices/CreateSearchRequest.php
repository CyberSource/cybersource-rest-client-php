<?php
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../vendor/autoload.php';
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../Resources/ExternalConfiguration.php';

class CreateSearchRequest
{
    function testCreateSearchRequest($dynamicDataArr, $apiName)
    {
        $commonElement = new CyberSource\ExternalConfiguration();
        $config = $commonElement->ConnectionHost();
        $apiclient = new CyberSource\ApiClient($config);
        $api_instance = new CyberSource\Api\SearchTransactionsApi($apiclient);
        foreach($dynamicDataArr as $value)
        {
            $testId = $value[0];
            $name = $value[1];
            $query = $value[2];
            $message = $value[3];
            $createSearchRequestArr = [
                "save"=> "false",
                "name"=> "TSS search",
                "timezone"=> "America/Chicago",
                "query"=> "clientReferenceInformation.code:12345",
                "offset"=> 0,
                "limit"=> 100,
                "sort"=> "id:asc, submitTimeUtc:asc"
            ];
            $createSearchRequest = new CyberSource\Model\TssV2TransactionsPostResponse($createSearchRequestArr);
            $api_response = list($response,$statusCode,$httpHeader)=null;
            
            try {
                
                $api_response = $api_instance->createSearch($createSearchRequest);
                if($api_response[1] != 201 ){
                    $responseMessage = 'Assertion Failed : ' .$api_response[1];
                        
                    }else if($api_response[0]->name != $name){
                    $responseMessage = 'Assertion Failed : ' .$api_response[1];
                        
                    }else {
                    $responseMessage = "Pass :".$api_response[1];
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
