<?php
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../vendor/autoload.php';
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../Resources/ExternalConfiguration.php';

class GetSearchResults
{
    function testGetSearchResults($dynamicDataArr, $apiName)
    {
        $commonElement = new CyberSource\ExternalConfiguration();
        $config = $commonElement->ConnectionHost();
        $apiclient = new CyberSource\ApiClient($config);
        $api_instance = new CyberSource\Api\SearchTransactionsApi($apiclient);
        foreach($dynamicDataArr as $value)
        {
            $testId = $value[0];
            $id = $value[1];
            $message = $value[2];
        
            $api_response = list($response,$statusCode,$httpHeader)=null;
            try {
                $api_response = $api_instance->getSearch($id);
                if($api_response[1] != 200 ){
                    $responseMessage = 'Assertion Failed : ' .$api_response[1];
                        
                    }else if($api_response[0]->searchId != $id){
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
