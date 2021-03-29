<?php

namespace CyberSource\Logging;

class LogConfiguration {
    /**
     * Indicates if logging is enabled
     *
     * @var boolean
     */
    protected $enableLogging = false;

    /**
     * Name of the debug log file
     *
     * @var string
     */
    protected $debugLogFile = __DIR__ . DIRECTORY_SEPARATOR . "../../../../Log/debug.log";

    /**
     * Name of the error log file
     *
     * @var string
     */
    protected $errorLogFile = __DIR__ . DIRECTORY_SEPARATOR . "../../../../Log/error.log";

    /**
     * Format for the date in the log file
     *
     * @var string
     */
    protected $logDateFormat = "Y-m-d\TH:i:s";

    /**
     * Format of the log message
     *
     * @var string
     */
    protected $logFormat = "[%datetime%] [%level_name%] [%channel%] : %message%\n";

    /**
     * Maximum number of files to maintain for each type
     *
     * @var integer
     */
    protected $logMaxFiles = 3;

    /**
     * Logging level for logger
     *
     * @var string
     */
    protected $logLevel;

    /**
     * Indicates if logging is enabled
     *
     * @var boolean
     */
    protected $enableMasking;

    /**
     * Checks if logging is enabled
     *
     * @return boolean
     */
    public function isLoggingEnabled()
    {
        return $this->enableLogging;
    }

    /**
     * Gets enableLogging
     *
     * @return boolean
     */
    public function getEnableLogging()
    {
        return $this->enableLogging;
    }

    /**
     * Sets enableLogging
     *
     * @param boolean
     *
     * @return void
     */
    public function enableLogging($enableLogging)
    {
        $this->enableLogging = $enableLogging;
    }

    /**
     * Gets the debug log file
     *
     * @return string
     */
    public function getDebugLogFile()
    {
        return $this->debugLogFile;
    }

    /**
     * Sets the debug log file
     *
     * @param string $debugLogFile Debug file
     *
     * @return void
     */
    public function setDebugLogFile($debugLogFile)
    {
        $this->debugLogFile = $debugLogFile;
    }

    /**
     * Gets the error log file
     *
     * @return string
     */
    public function getErrorLogFile()
    {
        return $this->errorLogFile;
    }

    /**
     * Sets the error log file
     *
     * @param string $errorLogFile Error file
     *
     * @return void
     */
    public function setErrorLogFile($errorLogFile)
    {
        $this->errorLogFile = $errorLogFile;
    }

    /**
     * Gets the log date format
     *
     * @return string
     */
    public function getLogDateFormat()
    {
        return $this->logDateFormat;
    }

    /**
     * Sets the log date format
     *
     * @param string $logDateFormat log date format
     *
     * @return void
     */
    public function setLogDateFormat($logDateFormat)
    {
        $this->logDateFormat = $logDateFormat;
    }

    /**
     * Gets the log message format
     *
     * @return string
     */
    public function getLogFormat()
    {
        return $this->logFormat;
    }

    /**
     * Sets the log message format
     *
     * @param string $logFormat log message format
     *
     * @return void
     */
    public function setLogFormat($logFormat)
    {
        $this->logFormat = $logFormat;
    }

    /**
     * Gets the maximum number of log files
     *
     * @return string
     */
    public function getLogMaxFiles()
    {
        return $this->logMaxFiles;
    }

    /**
     * Sets the maximum number of log files
     *
     * @param string $logMaxFiles maximum number of log files
     *
     * @return void
     */
    public function setLogMaxFiles($logMaxFiles)
    {
        $this->logMaxFiles = $logMaxFiles;
    }

    /**
     * Gets the logging level
     *
     * @return string
     */
    public function getLogLevel()
    {
        return $this->logLevel;
    }

    /**
     * Sets the logging level
     *
     * @param string $logLevel logging level for the logger
     *
     * @return void
     */
    public function setLogLevel($logLevel)
    {
        $this->logLevel = $logLevel;
    }

    /**
     * Checks if data masking is enabled
     *
     * @return boolean
     */
    public function isMaskingEnabled()
    {
        return $this->enableMasking;
    }

    /**
     * Gets enableMasking
     *
     * @return boolean
     */
    public function getEnableMasking()
    {
        return $this->enableMasking;
    }

    /**
     * Sets enableMasking
     *
     * @param boolean
     *
     * @return void
     */
    public function enableMasking($enableMasking)
    {
        $this->enableMasking = $enableMasking;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->enableLogging = false;
        $this->debugLogFile = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "Log" . DIRECTORY_SEPARATOR . "debug.log";
        $this->errorLogFile = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "Log" . DIRECTORY_SEPARATOR . "error.log";
        $this->logDateFormat = "Y-m-d\TH:i:s";
        $this->logFormat = "[%datetime%] [%level_name%] [%channel%] : %message%\n";
        $this->logMaxFiles = 3;
        $this->logLevel = "info";
        $this->enableMasking = false;
    }
}