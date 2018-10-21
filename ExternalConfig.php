<?php
/*
* Purpose : passing Authentication config object to the configuration
*/
namespace CyberSource;
require_once '../CybersourceRestclientPHP/autoload.php';
require_once '../CybersourceRestclientPHP/AuthenticationSdk/com/cybersource/core/MerchantConfiguration.php';
class ExternalConfig
{
	//initialize variable on constructor
        function __construct()
        {
                $this->authType = "http_signature";
                $this->enableLog = false;
                $this->logSize = "1048576";
                $this->logFile = "../../samplecodes/Log/";
                $this->logFilename = "Cybs.log";
                $this->merchantID = "testrest";
                $this->apiKeyID = "08c94330-f618-42a3-b09d-e1e43be5efda";
                $this->screteKey = "yBJxy6LjM2TmcPGu+GaJrHtkke25fPpUX+UY6/L/1tE=";
                $this->proxyUrl = "userproxy.visa.com";
                $this->proxyHost = "443";
                $this->keyAlias = "testrest";
                $this->keyPass = "testrest";
                $this->keyFilename = "testrest";
                $this->keyDirectory = "../../samplecodes/resource/";
                $this->runEnv = "cyberSource.environment.SANDBOX";
                $this->merchantConfigObject();
        }
        //creating merchant config object
	function merchantConfigObject()
	{     
		$config = new MerchantConfiguration();
                if(is_bool($this->enableLog))
		      $confiData = $config->setDebug($this->enableLog);

                $confiData = $config->setLogSize(trim($this->logSize));
                $confiData = $config->setDebugFile(trim($this->logFile));
                $confiData = $config->setLogFileName(trim($this->logFilename));
                $confiData = $config->setAuthenticationType(strtoupper(trim($this->authType)));
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

	function ConnectionHost()
	{
		$config = new Configuration();
		$config = $config->setHost("apitest.cybersource.com");
		$config = $config->setDebug(false);
		$config = $config->setDebugFile("../../Logs/Logs.txt");
		$config = $config->setCurlProxyHost("userproxy.visa.com");
		$config = $config->setCurlProxyPort("443");
		return $config;
	}

	function FutureDate($format){
		if($format){
			$rdate = date("Y-m-d",strtotime("+7 days"));
			$retDate = date($format,strtotime($rdate));
		}
		else{
			$retDate = date("Y-m",strtotime("+7 days"));
		}
		echo $retDate;
		return $retDate;
	}

        function CallTestLogging($testId, $apiName, $responseMessage){
                $runtime = date('d-m-Y H:i:s');
                $file = fopen("./CSV_Files/TestReport/TestResults.csv", "a+");
                fputcsv($file, array($testId, $runtime, $apiName, $responseMessage));
                fclose($file);
        }
}
$temp = new ExternalConfig();

?>