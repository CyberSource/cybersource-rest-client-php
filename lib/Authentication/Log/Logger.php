<?php
namespace CyberSource\Authentication\Log;
use CyberSource\Authentication\Core\AuthException;
use CyberSource\Authentication\Util\GlobalParameter;
/*
Log Logic has Finding , creating and roating log file.
log file size : 5MB
*/
class Logger 
 {
    
    private $className;
    
    public function __construct($className) {
        $this->className = $className;
    }
    
    //Search the log file, if not create the file.
    public function initLogFile($merchantConfig) {

        $path = $merchantConfig->getDebugFile();
        $logSize = $merchantConfig->getLogSize();
        $fileName = $merchantConfig->getLogFileName();
        $filePath = $path . DIRECTORY_SEPARATOR . $fileName;
        if (!file_exists($filePath)) 
        {         
            if(!is_dir($path)){
                mkdir($path, 0777, true);
            } 
            fopen($filePath, "w");
        }
        $this->rotateLogFile($path, $fileName, $logSize);
    }


    //Check the size if exceeds change the log file.
    private function rotateLogFile($path, $fileName, $logSize) {
        $filePath = $path. DIRECTORY_SEPARATOR .$fileName;
        if(file_exists($filePath))
        {
            $fileMemory = filesize($filePath);
            if($fileMemory >= $logSize){
                $updateOldFile = $path."Cybs_".date("YmdHis").".log";
                rename($filePath, $updateOldFile);
            }
            fopen($filePath, "w");
            
        }
    }

    public function log($merchantConfig, $message) {
        if(is_null($merchantConfig))
        {
            $exception = new AuthException(GlobalParameter::MERCHANTCONFIGERR, 0);
            throw $exception;
        }
        if($merchantConfig->getDebug()) {
            $filePath = $merchantConfig->getDebugFile() . DIRECTORY_SEPARATOR . $merchantConfig->getLogFileName();
            $this->initLogFile($merchantConfig);
            $date = date("Y-m-d H:i:s");
            if(is_array($message))
            {
                error_log("[".$date."] [".$this->className."] [INFO] MERCHCFG:".print_r($message, true).PHP_EOL, 3, $filePath);
            }
            else 
            {
                error_log("[".$date."] [".$this->className."] [INFO] ".$message.PHP_EOL, 3, $filePath);
            }

        }
    }
}

?>
