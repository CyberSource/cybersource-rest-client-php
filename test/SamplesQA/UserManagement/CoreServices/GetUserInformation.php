<?php
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../vendor/autoload.php';
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../Resources/ExternalConfiguration.php';

class GetUserInformation
{
    function testGetUserInformation($dynamicDataArr, $apiName)
    {
        $commonElement = new CyberSource\ExternalConfiguration();
        $config = $commonElement->ConnectionHost();
        $apiclient = new CyberSource\ApiClient($config);
        $api_instance = new CyberSource\Api\UserManagementApi($apiclient);
        foreach($dynamicDataArr as $value)
        {
            $testId = $value[0];
            $orgId = $value[1];
            $userName = $value[2];
            $permissionId = $value[3];
            $roleId = $value[4];
            $message = $value[5];
            $api_response = list($response,$statusCode,$httpHeader)=null;
            try {
                $api_response = $api_instance->getUsers($organizationId = 'testrest', $userName = null, $permissionId = null, $roleId = null);
                if($api_response[1] != 200 ){
                    $responseMessage = 'Assertion Failed : ' .$api_response[1];
                        
                    }else if($api_response[0]["users"][1]["organizationInformation"]["organizationId"] != $orgId){
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
