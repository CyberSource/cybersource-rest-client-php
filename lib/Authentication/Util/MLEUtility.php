<?php

namespace CyberSource\Authentication\Util;
/*
Purpose : MLE encrption for request body
*/

class MLEUtility
{
    
    public static function checkIsMLEForAPI($merchantConfig, $isMLESupportedByCybsForApi, $operationIds) {
        $isMLEForAPI = false;
        // Check here useMLEGlobally True or False
        if ($isMLESupportedByCybsForApi && $merchantConfig->getUseMLEGlobally()) {
            $isMLEForAPI = true;
        }

        // Operation IDs are array as there are multiple public functions for apiCallFunction such as apiCall, apiCallWithHttpInfo ..
        $operationArray = array_map('trim', explode(',', $operationIds));

        // Control the MLE only from map
        if (!empty($merchantConfig->getMapToControlMLEonAPI())) {
            foreach ($operationArray as $operationId) {
                if (array_key_exists($operationId, $merchantConfig->getMapToControlMLEonAPI())) {
                    $isMLEForAPI = $merchantConfig->getMapToControlMLEonAPI()[$operationId];
                    break;
                }
            }
        }
        return $isMLEForAPI;
    }

    public static function encryptRequestPayload($merchantConfig, $requestBody) {
        // implement encrpty payload function
        return $requestBody;
    }


}
?>