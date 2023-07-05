# PHP Client SDK for CyberSource REST APIs

The CyberSource PHP client provides convenient access to the [CyberSource REST API](https://developer.cybersource.com/api/reference/api-reference.html) from your PHP application.

[![Version         ][packagist_badge]][packagist]

## Requirements
* PHP 8.0.0+
* Enable cURL PHP Extension
* Enable JSON PHP Extension
* Enable MBString PHP Extension
* Enable PHP_APCU PHP Extension. You will need to download it for your platform (Windows/Linux/Mac)
* [CyberSource Account](https://developer.cybersource.com/api/developer-guides/dita-gettingstarted/registration.html)
* [CyberSource API Keys](https://prod.developer.cybersource.com/api/developer-guides/dita-gettingstarted/registration/createCertSharedKey.html)

 ## Dependencies
* PHP-JWT                          : JWT token Generation
* CURL                             : Http communication with the payment gateway
* PHP_APCU                         : Caching
* phpunit-5.7.25                   : unit testing
* phpunit-5.7.25 code coverage     : Sonar coverage

## Installation
### Composer
We recommend using [`Composer`](http://getcomposer.org). *(Note: we never recommend you
override the new secure-http default setting)*.
*Update your composer.json file as per the example below and then run
`composer update`.*

```json
{
  "require": {
  "php": ">=8.0.0",
  "cybersource/rest-client-php": "0.0.42"
  }
}
```

## Registration & Configuration
Use of this SDK and the CyberSource APIs requires having an account on our system. You can find details of getting a test account and creating your keys [here](https://developer.cybersource.com/api/developer-guides/dita-gettingstarted/registration.html)

Once you have your keys, simply load them into the appropriate variables in your code, as per the below sample code dealing with the authentication part of the API request.

Remember this SDK is for use in server-side PHP applications that access the CyberSource REST API and credentials should always be securely stored and accessed appropriately.

## SDK Usage Examples and Sample Code
To get started using this SDK, it's highly recommended to download our sample code repository:
* [Cybersource PHP Sample Code Repository (on GitHub)](https://github.com/CyberSource/cybersource-rest-samples-php)

In that respository, we have comprehensive sample code for all common uses of our API:

Additionally, you can find details and examples of how our API is structured in our API Reference Guide:
* [Developer Center API Reference](https://developer.cybersource.com/api/reference/api-reference.html)

The API Reference Guide provides examples of what information is needed for a particular request and how that information would be formatted. Using those examples, you can easily determine what methods would be necessary to include that information in a request using this SDK.

## MetaKey Support

A Meta Key is a single key that can be used by one, some, or all merchants (or accounts, if created by a Portfolio user) in the portfolio.

The Portfolio or Parent Account owns the key and is considered the transaction submitter when a Meta Key is used, while the merchant owns the transaction.

MIDs continue to be able to create keys for themselves, even if a Meta Key is generated.

Further information on MetaKey can be found in [New Business Center User Guide](https://developer.cybersource.com/library/documentation/dev_guides/Business_Center/New_Business_Center_User_Guide.pdf).

## To set your API credentials for an API request, configure the following information in ExternalConfiguration.php file:

  Create a file in your application `ExternalConfiguration.php` inside a `Resources` folder and configure the following information as per requirement similar to [**this one**](https://github.com/CyberSource/cybersource-rest-samples-php/blob/master/Resources/ExternalConfiguration.php).

  #### For Http Signature Authentication

  Configure the following information in `ExternalConfiguration.php` file

*   Authentication Type:      Merchant should enter "HTTP_SIGNATURE" for HTTP authentication mechanism.
*   Merchant ID:              Merchant will provide the merchant ID, which has taken from EBC portal.
*   MerchantSecretKey:        Merchant will provide the secret Key value, which has taken from EBC portal.
*   MerchantKeyId:            Merchant will provide the Key ID value, which has taken from EBC portal.
*   Enable Log:               To start the log entry provide _true_ else enter _false_.
*   LogDirectory:             Merchant will provide directory path where logs will be created.
*   LogMaximumSize:           Merchant will provide size value for log file.
*   LogFilename:              Merchant will provide log file name.

```
   $this->authType          = "HTTP_SIGNATURE";
   $this->runEnv            = "apitest.cybersource.com";
   $this->merchantID        = <merchantID>;
   $this->apiKeyID          = <merchantKeyId>;
   $this->secretKey         = <merchantSecretKey>;

   $this->enableLog         = true;
   $this->logSize           = <logMaximumSize>;
   $this->logFile           = <logDirectory>;
   $this->logFilename       = <logFilename>;

   $this->proxyUrl          = <proxyHost>;
   $this->proxyHost         = <proxyPort>;

   $this->useMetaKey        = false;

```
  #### For Jwt Signature Authentication

  Configure the following information in the `ExternalConfiguration.php` file

*   Authentication Type:      Merchant should enter "JWT" for JWT authentication mechanism.
*   Merchant ID:              Merchant will provide the merchant ID, which was taken from EBC portal.
*   keyAlias:                 Alias of the Merchant ID, to be used while generating the JWT token.
*   keyPassword:              Alias of the Merchant password, to be used while generating the JWT token.
*   keyFileName:              Filename of the key generated from the EBC portal, without the extension part .P12
*   keysDirectory:            Path of the directory, where key is placed.
*   Enable Log:               To start the log entry provide _true_ else enter _false_.
*   LogDirectory:             Merchant will provide directory path where logs will be created.
*   LogMaximumSize:           Merchant will provide size value for log file.
*   LogFilename:              Merchant will provide log file name.

```
   $this->authType            = "JWT";
   $this->runEnv              = "apitest.cybersource.com";
   $this->merchantID          = <merchantID>;

   $this->keyAlias            = <keyAlias>;
   $this->keyPass             = <keyPassword>;
   $this->keyFilename         = <keyFileName>";
   $this->keyDirectory        = <keysDirectory>;

   $this->enableLog           = true;
   $this->logSize             = <logMaximumSize>;
   $this->logFile             = <logDirectory>;
   $this->logFilename         = <logFilename>;

   $this->proxyUrl            = <proxyHost>;
   $this->proxyHost           = <proxyPort>;

   $this->useMetaKey          = false;
```

  #### For using MetaKey

  MetaKey can be used for HTTP Signature and JWT authentication

  For HTTP Signature Authentication

```
   $this->authType            = "HTTP_SIGNATURE";
   $this->merchantID          = <child merchantID>;
   $this->apiKeyID            = <MetaKey merchantKeyId>;
   $this->secretKey           = <Metakey merchantsecretKey>;
   $this->useMetaKey          = true;
   $this->portfolioID         = <Portfolio ID>;
```

  For JWT Authentication

```
   $this->authenticationType  = "JWT";
   $this->merchantID          = <child merchantID>;
   $this->keyAlias            = <keyAlias>;
   $this->keyPass             = <keyPassword>;
   $this->keyFileName         = <keyFileName>;
   $this->keyDirectory        = <keysDirectory>;
   $this->useMetaKey          = true;
```

### Switching between the sandbox environment and the production environment
CyberSource maintains a complete sandbox environment for testing and development purposes. This sandbox environment is an exact duplicate of our production environment with the transaction authorization and settlement process simulated. By default, this SDK is configured to communicate with the sandbox environment. To switch to the production environment, set the appropriate property in Resources\ExternalConfiguration.php.

For example:

```php
   // For TESTING use
   // $this->runEnv = "apitest.cybersource.com";
   // For PRODUCTION use
   $this->runEnv = "api.cybersource.com";
```

The [API Reference Guide](https://developer.cybersource.com/api/reference/api-reference.html) provides examples of what information is needed for a particular request and how that information would be formatted. Using those examples, you can easily determine what methods would be necessary to include that information in a request using this SDK.

### Logging

[![Generic badge](https://img.shields.io/badge/LOGGING-NEW-GREEN.svg)](https://shields.io/)

Since v0.0.24, a new logging framework has been introduced in the SDK. This new logging framework makes use of Monolog, and standardizes the logging so that it can be integrated with the logging in the client application.

More information about this new logging framework can be found in this file : [Logging.md](Logging.md)

[packagist_badge]: https://img.shields.io/packagist/v/cybersource/rest-client-php.svg
[packagist]: https://packagist.org/packages/cybersource/rest-client-php
