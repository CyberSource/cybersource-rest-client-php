<?php
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../vendor/autoload.php';
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../Resources/ExternalConfiguration.php';

class GetReportBasedOnReportid
{
    function testGetReportBasedOnReportid($dynamicDataArr, $apiName)
    {
        $commonElement = new CyberSource\ExternalConfiguration();
        $config = $commonElement->ConnectionHost();
        $apiclient = new CyberSource\ApiClient($config);
        $api_instance = new CyberSource\Api\ReportsApi($apiclient);
        //$reportId = "79642c43-2368-0cd5-e053-a2588e0a7b3c";
        foreach($dynamicDataArr as $value)
        {
            $testId = $value[0];
            $orgId = $value[1];
            $reportId = $value[2];
            $message = $value[3];
            $api_response = list($response,$statusCode,$httpHeader)=null;
            try {
                $api_response = $api_instance->getReportByReportId($reportId,$orgId);
                if($api_response[1] != 200 ){
                    $responseMessage = 'Assertion Failed : ' .$api_response[1];
                        
                    }elseif($api_response[0]["reportId"] != $reportId){
                        $responseMessage = 'Assertion Failed : ' .$api_response[1];
                            
                    }elseif($api_response[0]["organizationId"] != $orgId){
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
