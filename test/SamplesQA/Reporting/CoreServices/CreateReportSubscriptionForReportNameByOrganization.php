<?php
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../vendor/autoload.php';
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../Resources/ExternalConfiguration.php';

class CreateReportSubscriptionForReportNameByOrganization
{
    function testCreateReportSubscriptionForReportNameByOrganization($dynamicDataArr, $apiName)
    {
        $commonElement = new CyberSource\ExternalConfiguration();
        $config = $commonElement->ConnectionHost();
        $apiclient = new CyberSource\ApiClient($config);
        $api_instance = new CyberSource\Api\ReportSubscriptionsApi($apiclient);
        foreach($dynamicDataArr as $value)
        {
            $testId = $value[0];
            $reportDefName = $value[1];
            $repName = $value[2];
            $repFrequency = $value[3];
            $message = $value[4];
            $createReportRequestArr = [
                'reportDefinitionName' => $reportDefName,
                'reportFields' => ["Request.RequestID",
                            "Request.TransactionDate",
                            "Request.MerchantID"],
                'reportMimeType' => 'application/xml',
                'reportFrequency' => $repFrequency,
                'reportName' => $repName,
                'timezone' => 'GMT',
                'startTime' => '1103',
                'startDay' => "3"      
            ];
            $reportRequest = new CyberSource\Model\RequestBody($createReportRequestArr);
            $api_response = list($response,$statusCode,$httpHeader)=null;
            try {
                
                $api_response = $api_instance->createSubscription(null,$reportRequest);
                if($api_response[1] != 201 ){
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
