<?php
namespace CyberSource\Authentication\Log;

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
        $filePath = $path.$fileName;
        if (!file_exists($filePath)) 
        {
            mkdir($path, 0777, true);
            fopen($filePath, "w");
        }
        $this->rotateLogFile($path, $fileName, $logSize);
    }

    //Check the size if exceeds change the log file.
    public function rotateLogFile($path, $fileName, $logSize) {
        $filePath = $path.$fileName;
        if(file_exists($filePath))
        {
            $file = filesize($filePath);
            if($file >= $logSize){
                $updateOldFile = $path."Cybs_".date("YmdHis").".log";
                rename($filePath, $updateOldFile);
            }
        }
    }

    public function log($merchantConfig, $message) {
        if($merchantConfig->getDebug()) {
            $this->initLogFile($merchantConfig);
            $date = date("Y-m-d H:i:s");
            if(is_array($message))
            {
                error_log("[".$date."] [".$this->className."] [INFO] MERCHCFG:".print_r($message, true).PHP_EOL, 3, $merchantConfig->getDebugFile().$merchantConfig->getLogFileName());
            }
            else 
            {
                error_log("[".$date."] [".$this->className."] [INFO] ".$message.PHP_EOL, 3, $merchantConfig->getDebugFile().$merchantConfig->getLogFileName());
            }

        }
    }
}

?>
