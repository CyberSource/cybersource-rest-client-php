[![Generic badge](https://img.shields.io/badge/LOGGING-NEW-GREEN.svg)](https://shields.io/)

# Logging in CyberSource REST Client SDK (PHP)

Since v0.0.24, a new logging framework has been introduced in the SDK. This new logging framework makes use of Monolog, and standardizes the logging so that it can be integrated with the logging in the client application. The decision to use Monolog for building this logging framework has been taken based on benchmark studies that have been made on various logging platforms supported for PHP.

[One such study](https://www.loggly.com/blog/benchmarking-php-logging-frameworks-which-is-fastest-and-most-reliable-2/) performed benchmarking of five logging frameworks on the market &mdash; native PHP logging, Monolog, KLogger, and Apache Log4php. In this study,

> _For a more complete framework, Monolog seems to be the more well-rounded option, particularly when considering remote logging via TCP/IP._

## Monolog Configuration

In order to leverage the new logging framework, the following configuration settings may be added to the merchant configuration as part of **`LogConfiguration`**:

* $enableLog
* $debugLogFile
* $errorLogFile
* $logDateFormat
* $logFormat
* $logMaxFiles
* $logLevel
* $enableMasking

In our [sample ExternalConfiguration.php](https://github.com/CyberSource/cybersource-rest-samples-php/blob/master/Resources/ExternalConfiguration.php) file, the following lines have been added to support this new framework

```php
    $this->enableLogging = true;
    $this->debugLogFile = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "Log" . DIRECTORY_SEPARATOR . "debugTest.log";
    $this->errorLogFile = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "Log" . DIRECTORY_SEPARATOR . "errorTest.log";
    $this->logDateFormat = "Y-m-d\TH:i:s";
    $this->logFormat = "[%datetime%] [%level_name%] [%channel%] : %message%\n";
    $this->logMaxFiles = 3;
    $this->logLevel = "debug";
    $this->enableMasking = true;
    ...
    $logConfiguration = new \CyberSource\Logging\LogConfiguration();
    $logConfiguration->enableLogging($this->enableLogging);
    $logConfiguration->setDebugLogFile($this->debugLogFile);
    $logConfiguration->setErrorLogFile($this->errorLogFile);
    $logConfiguration->setLogDateFormat($this->logDateFormat);
    $logConfiguration->setLogFormat($this->logFormat);
    $logConfiguration->setLogMaxFiles($this->logMaxFiles);
    $logConfiguration->setLogLevel($this->logLevel);
    $logConfiguration->enableMasking($this->enableMasking);
    $config->setLogConfiguration($logConfiguration);
```

### Important Notes

The variable `enableMasking` needs to be set to `true` if sensitive data in the request/response should be hidden/masked.

Sensitive data fields are listed below:

  * Card Security Code
  * Card Number
  * Any field with `number` in the name
  * Card Expiration Month
  * Card Expiration Year
  * Account
  * Routing Number
  * Email
  * First Name & Last Name
  * Phone Number
  * Type
  * Token
  * Signature
