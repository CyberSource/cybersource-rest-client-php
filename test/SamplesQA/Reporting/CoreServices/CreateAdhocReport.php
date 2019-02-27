<?php
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../vendor/autoload.php';
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../Resources/ExternalConfiguration.php';

class CreateAdhocReport
{
    function testCreateAdhocReport($dynamicDataArr, $apiName)
    {
        $commonElement = new CyberSource\ExternalConfiguration();
        $config = $commonElement->ConnectionHost();
        $apiclient = new CyberSource\ApiClient($config);
        $api_instance = new CyberSource\Api\ReportsApi($apiclient);
        foreach($dynamicDataArr as $value)
        {
            $testId = $value[0];
            $reportDefinitionName = $value[1];
            $reportName = $value[2];
            $reportStartTime = $value[3];
            $reportEndTime = $value[4];
            $message = $value[5];
            $createReportRequestArr =[
                "reportDefinitionName"=> $reportDefinitionName,
                "timezone"=> "GMT",
                "reportMimeType"=> "text/csv",
                "reportName"=> $reportName,
                "reportStartTime"=> $reportStartTime,
                "reportEndTime"=> $reportEndTime,
                "reportPreferences"=> ["signedAmounts"=>"true","fieldNameConvention"=>"SOAPI"],
                "reportFields"=>["Request.RequestID","Request.TransactionDate","Request.MerchantID"]
            ];
            
            
            $reportRequest = new CyberSource\Model\RequestBody1($createReportRequestArr);
           
            $api_response = list($response,$statusCode,$httpHeader)=null;
            try {                
                $api_response = $api_instance->createReport($reportRequest);
                if($api_response[1] != 200 ){
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
