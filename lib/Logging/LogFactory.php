<?php
/* Log Factory
 * Date : 03/11/2021
 */

namespace CyberSource\Logging;

use Monolog\Logger;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Formatter\LineFormatter;

class LogFactory
{
    private static $loggers = [];

    public function __construct()
    {
        self::$loggers = [];
    }

    public function getLogger($loggerName, $logConfig = null) {
        if (isset(self::$loggers[$loggerName])) {
            return self::$loggers[$loggerName];
        } else {
            if (!isset($logConfig)) {
                $logConfig = new \CyberSource\Logging\LogConfiguration();
            }

            $newLogger = $this->createNewLogger($loggerName, $logConfig);
            self::$loggers[$loggerName] = $newLogger;
            return $newLogger;
        }
    }

    private function createNewLogger($loggerName, $logConfig) {
        $dateFormat = $logConfig->getLogDateFormat();
        $logFormat = $logConfig->getLogFormat();

        // For DEBUGGING LOG FILE
        $logFile = $logConfig->getDebugLogFile();
        $maxFiles = $logConfig->getLogMaxFiles();
        if (null !== $logConfig->getLogLevel()) { $logLevel = $logConfig->getLogLevel(); } else { $logLevel = Logger::INFO; }
        $formatter = new LineFormatter($logFormat, $dateFormat, true, true);
        $debugHandler = new RotatingFileHandler($logFile, $maxFiles, $logLevel);
        $debugHandler->setFormatter($formatter);

        // For ERROR LOG FILE
        $errorLogFile = $logConfig->getErrorLogFile();
        $errorMaxFiles = $logConfig->getLogMaxFiles();
        $errorLogLevel = Logger::ERROR;
        $errorFormatter = new LineFormatter($logFormat, $dateFormat, true, true);
        $errorHandler = new RotatingFileHandler($errorLogFile, $errorMaxFiles, $errorLogLevel);
        $errorHandler->setFormatter($errorFormatter);

        $logger = new Logger($loggerName);

        if ($logConfig->isLoggingEnabled()) {
            $logger->pushHandler($errorHandler);
            $logger->pushHandler($debugHandler);
        }

        return $logger;
    }
}
?>