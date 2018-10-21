<?php
/*
* Purpose : passing merchant config object to the configuration
*/
namespace CyberSource;
require_once '../CybersourceRestclientPHP/autoload.php';
require_once '../CybersourceRestclientPHP/AuthenticationSdk/com/cybersource/core/MerchantConfiguration.php';
class TestConfiguration
{
        //initialize variable on constructor
        function __construct()
        {
                $this->enableLog = true;
                $this->logSize = "1048576";
                $this->logFile = "../CybersourceRestclientPHP/CybersourceAuthenticationSdkPhp/Log/";
                $this->logFilename = "Cybs.log";
                $this->merchantID = "testrest";
                $this->apiKeyID = "08c94330-f618-42a3-b09d-e1e43be5efda";
                $this->screteKey = "yBJxy6LjM2TmcPGu+GaJrHtkke25fPpUX+UY6/L/1tE=";
                $this->proxyUrl = "userproxy.visa.com";
                $this->proxyHost = "443";
                $this->keyAlias = "testrest";
                $this->keyPass = "testrest";
                $this->keyFilename = "testrest";
                $this->keyDirectory = "../CybersourceRestclientPHP/CybersourceAuthenticationSdkPhp/resource/";
                $this->runEnv = "cyberSource.environment.SANDBOX";
                $this->getMerchantConfigObjectJwt();
                $this->getMerchantConfigObjectHttp();
        }
        //creating merchant config object
	function getMerchantConfigObjectJwt()
	{     
		$config = new MerchantConfiguration();
                if(is_bool($this->enableLog))
		      $confiData = $config->setDebug($this->enableLog);

                $confiData = $config->setLogSize(trim($this->logSize));
                $confiData = $config->setDebugFile(trim($this->logFile));
                $confiData = $config->setLogFileName(trim($this->logFilename));
                $confiData = $config->setAuthenticationType(strtoupper(trim("jwt")));
                $confiData = $config->setMerchantID(trim($this->merchantID));
                $confiData = $config->setApiKeyID($this->apiKeyID);
                $confiData = $config->setSecreteKey($this->screteKey);
                $confiData = $config->setCurlProxyHost($this->proxyUrl);
                $confiData = $config->setCurlProxyPort($this->proxyHost);
                $confiData = $config->setKeyFileName(trim($this->keyFilename));
                $confiData = $config->setKeyAlias($this->keyAlias);
                $confiData = $config->setKeyPassword($this->keyPass);
                $confiData = $config->setKeysDirectory($this->keyDirectory);
                $confiData = $config->setRunEnvironment($this->runEnv);
                $config->validateMerchantData($confiData);
		return $config;
	}
        //creating merchant config object
        function getMerchantConfigObjectHttp()
        {     
                $config = new MerchantConfiguration();
                if(is_bool($this->enableLog))
                      $confiData = $config->setDebug($this->enableLog);

                $confiData = $config->setLogSize(trim($this->logSize));
                $confiData = $config->setDebugFile(trim($this->logFile));
                $confiData = $config->setLogFileName(trim($this->logFilename));
                $confiData = $config->setAuthenticationType(strtoupper(trim("http_signature")));
                $confiData = $config->setMerchantID(trim($this->merchantID));
                $confiData = $config->setApiKeyID($this->apiKeyID);
                $confiData = $config->setSecreteKey($this->screteKey);
                $confiData = $config->setCurlProxyHost($this->proxyUrl);
                $confiData = $config->setCurlProxyPort($this->proxyHost);
                $confiData = $config->setKeyFileName(trim($this->keyFilename));
                $confiData = $config->setKeyAlias($this->keyAlias);
                $confiData = $config->setKeyPassword($this->keyPass);
                $confiData = $config->setKeysDirectory($this->keyDirectory);
                $confiData = $config->setRunEnvironment($this->runEnv);
                $config->validateMerchantData($confiData);
                return $config;
        }

        function getResponseObjectJwt(){
                return 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImtpZCI6eyJ2LWMtbWVyY2hhbnQtaWQiOiJ0ZXN0cmVzdCIsIng1YyI6WyJNSUlDWHpDQ0FjaWdBd0lCQWdJV05URXhNakl5T0RrMk5qSXpNREUzTnpBek1UVTNPVEFOQmdrcWhraUc5dzBCXG5BUXNGQURBZU1Sd3dHZ1lEVlFRRERCTkRlV0psY2xOdmRYSmpaVU5sY25SQmRYUm9NQjRYRFRFM01URXlNVEF3XG5NRGd4TmxvWERURTVNVEV5TVRBd01EZ3hObG93TkRFUk1BOEdBMVVFQXd3SWRHVnpkSEpsYzNReEh6QWRCZ05WXG5CQVVURmpVeE1USXlNamc1TmpZeU16QXhOemN3TXpFMU56a3dnZ0VpTUEwR0NTcUdTSWIzRFFFQkFRVUFBNElCXG5Ed0F3Z2dFS0FvSUJBUUMrQnRkTWNva2FLd1RlczlPK3NucWpXc2VoTzBcL1k0Q0pyd280Y2RHQ2FmUk82b3dzM1xubUMxeG1wU1l0dFRLSWRlR1IxcU9ZcFRTZVk5dUpoMmNDZmF5TUtYbWhRZjRkNXY4cE5Ebm1ZQk1HQndVMXdXalxubFlzTUxGYmNQRldqZFB0S2xvdTJSSVdaNTY2WVdJYldDQmYrRzRkSGtBMEQ3Q3NwM0ZUM2xuVU4ybWU0bEprbFxueXNmcXAxWDhxM0pEcVZJUUZWQWR1YW1oV0NZTVJTNUtnOHNLd01qbGRHUVVieTg4UytNT3djQ0EzSE9IVDY0YlxuYXJ2UElkMkV4cUFxdmZ5QkNQQVI0OVY2XC95d0RWc0g5U3lIZXdnMTIxY2tNY0E5ZzU1dElxZHN5SEdSWk45ZnNcbjIwa015cUVQNzhMNGN4ZmlzdVZRQzhrbmxmWnRkY3FWQVk3RkFnTUJBQUV3RFFZSktvWklodmNOQVFFTEJRQURcbmdZRUFKWGJLTlJVYk50MkJkWUVUTU9yOU1zOTNMa1p0Y2FpNUlsOG5kUDQycTVYSHQ2XC9QY2JtYWpCSlNiUXpEXG5JMlJcL2JjcVlwYzRZdFhGU0lJMThvMlVQUk90cmUyQmFMWHRZU1FDUHBtZkRTQTNvMEtVdzZkSmtvQmRcL3d3dVNcblg5Y1c5QWFaVG1lWko2V1RNcEFjNVhSMExaS2ZHbUs3bHkrdWRnNUpibWFKUkZBPSJdfX0.eyJpYXQiOiJNb24sIDE3IFNlcCAyMDE4IDY6NTg6NTkgR01UIn0.kG3bPLDHFxspPckXMHqMlHtRMIFJ6M8qFkdReDXPeQh2SZZ7Yge_DonBIvqv5xYA_BEtZ_rUlHqCvdSNKQ5c3obCvn2jhsuXKRee2W18bg0akpupLhk4Xsk7OqUrlaMGgZA8RhUFdzhDEA_OFdLBGb1vQbv6bYLA5ucs3PR7PwUJVxncNEkYfNLv9xMZY4gJCRZdWAYYl8jmJKWFxHbWXNj9en3fC2pMzRcw3jZSqTmHWWIVaVDDJhCEGRlHYjLUsQn8_JDlVz94qVs77gnRVFVUN6qTOJygUMa-dlHiXsiz_87TO7KNTi9E4Sx9ZciV8eR7pU9NuMXLHGAN1eswCQ';

        }

        function postResponseObjectJwt(){
                return 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImtpZCI6eyJ2LWMtbWVyY2hhbnQtaWQiOiJ0ZXN0cmVzdCIsIng1YyI6WyJNSUlDWHpDQ0FjaWdBd0lCQWdJV05URXhNakl5T0RrMk5qSXpNREUzTnpBek1UVTNPVEFOQmdrcWhraUc5dzBCXG5BUXNGQURBZU1Sd3dHZ1lEVlFRRERCTkRlV0psY2xOdmRYSmpaVU5sY25SQmRYUm9NQjRYRFRFM01URXlNVEF3XG5NRGd4TmxvWERURTVNVEV5TVRBd01EZ3hObG93TkRFUk1BOEdBMVVFQXd3SWRHVnpkSEpsYzNReEh6QWRCZ05WXG5CQVVURmpVeE1USXlNamc1TmpZeU16QXhOemN3TXpFMU56a3dnZ0VpTUEwR0NTcUdTSWIzRFFFQkFRVUFBNElCXG5Ed0F3Z2dFS0FvSUJBUUMrQnRkTWNva2FLd1RlczlPK3NucWpXc2VoTzBcL1k0Q0pyd280Y2RHQ2FmUk82b3dzM1xubUMxeG1wU1l0dFRLSWRlR1IxcU9ZcFRTZVk5dUpoMmNDZmF5TUtYbWhRZjRkNXY4cE5Ebm1ZQk1HQndVMXdXalxubFlzTUxGYmNQRldqZFB0S2xvdTJSSVdaNTY2WVdJYldDQmYrRzRkSGtBMEQ3Q3NwM0ZUM2xuVU4ybWU0bEprbFxueXNmcXAxWDhxM0pEcVZJUUZWQWR1YW1oV0NZTVJTNUtnOHNLd01qbGRHUVVieTg4UytNT3djQ0EzSE9IVDY0YlxuYXJ2UElkMkV4cUFxdmZ5QkNQQVI0OVY2XC95d0RWc0g5U3lIZXdnMTIxY2tNY0E5ZzU1dElxZHN5SEdSWk45ZnNcbjIwa015cUVQNzhMNGN4ZmlzdVZRQzhrbmxmWnRkY3FWQVk3RkFnTUJBQUV3RFFZSktvWklodmNOQVFFTEJRQURcbmdZRUFKWGJLTlJVYk50MkJkWUVUTU9yOU1zOTNMa1p0Y2FpNUlsOG5kUDQycTVYSHQ2XC9QY2JtYWpCSlNiUXpEXG5JMlJcL2JjcVlwYzRZdFhGU0lJMThvMlVQUk90cmUyQmFMWHRZU1FDUHBtZkRTQTNvMEtVdzZkSmtvQmRcL3d3dVNcblg5Y1c5QWFaVG1lWko2V1RNcEFjNVhSMExaS2ZHbUs3bHkrdWRnNUpibWFKUkZBPSJdfX0.eyJpYXQiOiJNb24sIDE3IFNlcCAyMDE4IDY6NTg6NTkgR01UIn0.kG3bPLDHFxspPckXMHqMlHtRMIFJ6M8qFkdReDXPeQh2SZZ7Yge_DonBIvqv5xYA_BEtZ_rUlHqCvdSNKQ5c3obCvn2jhsuXKRee2W18bg0akpupLhk4Xsk7OqUrlaMGgZA8RhUFdzhDEA_OFdLBGb1vQbv6bYLA5ucs3PR7PwUJVxncNEkYfNLv9xMZY4gJCRZdWAYYl8jmJKWFxHbWXNj9en3fC2pMzRcw3jZSqTmHWWIVaVDDJhCEGRlHYjLUsQn8_JDlVz94qVs77gnRVFVUN6qTOJygUMa-dlHiXsiz_87TO7KNTi9E4Sx9ZciV8eR7pU9NuMXLHGAN1eswCQ';

        }
        function putResponseObjectJwt(){
                return 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImtpZCI6eyJ2LWMtbWVyY2hhbnQtaWQiOiJ0ZXN0cmVzdCIsIng1YyI6WyJNSUlDWHpDQ0FjaWdBd0lCQWdJV05URXhNakl5T0RrMk5qSXpNREUzTnpBek1UVTNPVEFOQmdrcWhraUc5dzBCXG5BUXNGQURBZU1Sd3dHZ1lEVlFRRERCTkRlV0psY2xOdmRYSmpaVU5sY25SQmRYUm9NQjRYRFRFM01URXlNVEF3XG5NRGd4TmxvWERURTVNVEV5TVRBd01EZ3hObG93TkRFUk1BOEdBMVVFQXd3SWRHVnpkSEpsYzNReEh6QWRCZ05WXG5CQVVURmpVeE1USXlNamc1TmpZeU16QXhOemN3TXpFMU56a3dnZ0VpTUEwR0NTcUdTSWIzRFFFQkFRVUFBNElCXG5Ed0F3Z2dFS0FvSUJBUUMrQnRkTWNva2FLd1RlczlPK3NucWpXc2VoTzBcL1k0Q0pyd280Y2RHQ2FmUk82b3dzM1xubUMxeG1wU1l0dFRLSWRlR1IxcU9ZcFRTZVk5dUpoMmNDZmF5TUtYbWhRZjRkNXY4cE5Ebm1ZQk1HQndVMXdXalxubFlzTUxGYmNQRldqZFB0S2xvdTJSSVdaNTY2WVdJYldDQmYrRzRkSGtBMEQ3Q3NwM0ZUM2xuVU4ybWU0bEprbFxueXNmcXAxWDhxM0pEcVZJUUZWQWR1YW1oV0NZTVJTNUtnOHNLd01qbGRHUVVieTg4UytNT3djQ0EzSE9IVDY0YlxuYXJ2UElkMkV4cUFxdmZ5QkNQQVI0OVY2XC95d0RWc0g5U3lIZXdnMTIxY2tNY0E5ZzU1dElxZHN5SEdSWk45ZnNcbjIwa015cUVQNzhMNGN4ZmlzdVZRQzhrbmxmWnRkY3FWQVk3RkFnTUJBQUV3RFFZSktvWklodmNOQVFFTEJRQURcbmdZRUFKWGJLTlJVYk50MkJkWUVUTU9yOU1zOTNMa1p0Y2FpNUlsOG5kUDQycTVYSHQ2XC9QY2JtYWpCSlNiUXpEXG5JMlJcL2JjcVlwYzRZdFhGU0lJMThvMlVQUk90cmUyQmFMWHRZU1FDUHBtZkRTQTNvMEtVdzZkSmtvQmRcL3d3dVNcblg5Y1c5QWFaVG1lWko2V1RNcEFjNVhSMExaS2ZHbUs3bHkrdWRnNUpibWFKUkZBPSJdfX0.eyJpYXQiOiJNb24sIDE3IFNlcCAyMDE4IDY6NTg6NTkgR01UIn0.kG3bPLDHFxspPckXMHqMlHtRMIFJ6M8qFkdReDXPeQh2SZZ7Yge_DonBIvqv5xYA_BEtZ_rUlHqCvdSNKQ5c3obCvn2jhsuXKRee2W18bg0akpupLhk4Xsk7OqUrlaMGgZA8RhUFdzhDEA_OFdLBGb1vQbv6bYLA5ucs3PR7PwUJVxncNEkYfNLv9xMZY4gJCRZdWAYYl8jmJKWFxHbWXNj9en3fC2pMzRcw3jZSqTmHWWIVaVDDJhCEGRlHYjLUsQn8_JDlVz94qVs77gnRVFVUN6qTOJygUMa-dlHiXsiz_87TO7KNTi9E4Sx9ZciV8eR7pU9NuMXLHGAN1eswCQ';
        }

        function deleteResponseObjectJwt(){
                return 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImtpZCI6eyJ2LWMtbWVyY2hhbnQtaWQiOiJ0ZXN0cmVzdCIsIng1YyI6WyJNSUlDWHpDQ0FjaWdBd0lCQWdJV05URXhNakl5T0RrMk5qSXpNREUzTnpBek1UVTNPVEFOQmdrcWhraUc5dzBCXG5BUXNGQURBZU1Sd3dHZ1lEVlFRRERCTkRlV0psY2xOdmRYSmpaVU5sY25SQmRYUm9NQjRYRFRFM01URXlNVEF3XG5NRGd4TmxvWERURTVNVEV5TVRBd01EZ3hObG93TkRFUk1BOEdBMVVFQXd3SWRHVnpkSEpsYzNReEh6QWRCZ05WXG5CQVVURmpVeE1USXlNamc1TmpZeU16QXhOemN3TXpFMU56a3dnZ0VpTUEwR0NTcUdTSWIzRFFFQkFRVUFBNElCXG5Ed0F3Z2dFS0FvSUJBUUMrQnRkTWNva2FLd1RlczlPK3NucWpXc2VoTzBcL1k0Q0pyd280Y2RHQ2FmUk82b3dzM1xubUMxeG1wU1l0dFRLSWRlR1IxcU9ZcFRTZVk5dUpoMmNDZmF5TUtYbWhRZjRkNXY4cE5Ebm1ZQk1HQndVMXdXalxubFlzTUxGYmNQRldqZFB0S2xvdTJSSVdaNTY2WVdJYldDQmYrRzRkSGtBMEQ3Q3NwM0ZUM2xuVU4ybWU0bEprbFxueXNmcXAxWDhxM0pEcVZJUUZWQWR1YW1oV0NZTVJTNUtnOHNLd01qbGRHUVVieTg4UytNT3djQ0EzSE9IVDY0YlxuYXJ2UElkMkV4cUFxdmZ5QkNQQVI0OVY2XC95d0RWc0g5U3lIZXdnMTIxY2tNY0E5ZzU1dElxZHN5SEdSWk45ZnNcbjIwa015cUVQNzhMNGN4ZmlzdVZRQzhrbmxmWnRkY3FWQVk3RkFnTUJBQUV3RFFZSktvWklodmNOQVFFTEJRQURcbmdZRUFKWGJLTlJVYk50MkJkWUVUTU9yOU1zOTNMa1p0Y2FpNUlsOG5kUDQycTVYSHQ2XC9QY2JtYWpCSlNiUXpEXG5JMlJcL2JjcVlwYzRZdFhGU0lJMThvMlVQUk90cmUyQmFMWHRZU1FDUHBtZkRTQTNvMEtVdzZkSmtvQmRcL3d3dVNcblg5Y1c5QWFaVG1lWko2V1RNcEFjNVhSMExaS2ZHbUs3bHkrdWRnNUpibWFKUkZBPSJdfX0.eyJpYXQiOiJNb24sIDE3IFNlcCAyMDE4IDY6NTg6NTkgR01UIn0.kG3bPLDHFxspPckXMHqMlHtRMIFJ6M8qFkdReDXPeQh2SZZ7Yge_DonBIvqv5xYA_BEtZ_rUlHqCvdSNKQ5c3obCvn2jhsuXKRee2W18bg0akpupLhk4Xsk7OqUrlaMGgZA8RhUFdzhDEA_OFdLBGb1vQbv6bYLA5ucs3PR7PwUJVxncNEkYfNLv9xMZY4gJCRZdWAYYl8jmJKWFxHbWXNj9en3fC2pMzRcw3jZSqTmHWWIVaVDDJhCEGRlHYjLUsQn8_JDlVz94qVs77gnRVFVUN6qTOJygUMa-dlHiXsiz_87TO7KNTi9E4Sx9ZciV8eR7pU9NuMXLHGAN1eswCQ';

        }

        function getResponseObjectHttp(){
                return 'Signature:keyid="08c94330-f618-42a3-b09d-e1e43be5efda", algorithm="HmacSHA256", headers="host date (request-target) v-c-merchant-id", signature="6dAAZu1KEa7Qua7cVciZqb1dfcCal2rbtl3RrMWHbDY="';
        }

        function postResponseObjectHttp(){
                return 'Signature:keyid="08c94330-f618-42a3-b09d-e1e43be5efda", algorithm="HmacSHA256", headers="host date (request-target) digest v-c-merchant-id", signature="SVwm+lv+hpLYyaOk0d2l1sTq43vQMD93FSsE7bAbvjs="';
        }
        function putResponseObjectHttp(){
                return 'Signature:keyid="08c94330-f618-42a3-b09d-e1e43be5efda", algorithm="HmacSHA256", headers="host date (request-target) digest v-c-merchant-id", signature="SVwm+lv+hpLYyaOk0d2l1sTq43vQMD93FSsE7bAbvjs="';
        }

        function deleteResponseObjectHttp(){
                return 'Signature:keyid="08c94330-f618-42a3-b09d-e1e43be5efda", algorithm="HmacSHA256", headers="host date (request-target) v-c-merchant-id", signature="6dAAZu1KEa7Qua7cVciZqb1dfcCal2rbtl3RrMWHbDY="';
        }
}	

?>