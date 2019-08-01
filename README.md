# PHP Client SDK for CyberSource REST APIs

The CyberSource PHP client provides convenient access to the [CyberSource REST API](https://developer.cybersource.com/api/reference/api-reference.html) from your PHP application.

[![Version         ][packagist_badge]][packagist]

## Requirements
* PHP 5.6+
* Enable cURL PHP Extension
* Enable JSON PHP Extension
* Enable MBString PHP Extension
* Enable PHP_APCU PHP Extension. You will need to download it for your platform (Windows/Linux/Mac) 
* [CyberSource Account](https://developer.cybersource.com/api/developer-guides/dita-gettingstarted/registration.html)
* [CyberSource API Keys](https://prod.developer.cybersource.com/api/developer-guides/dita-gettingstarted/registration/createCertSharedKey.html)
 
 ## Dependencies
* PHP-JWT              			      : JWT token Genearation
* CURL          				            : Http communication with the payment gateway
* PHP_APCU						                : Caching 
* phpunit-5.7.25               	: unit testing
* phpunit-5.7.25 code coverage 	: Sonar coverage

## Installation
### Composer
We recommend using [`Composer`](http://getcomposer.org). *(Note: we never recommend you
override the new secure-http default setting)*. 
*Update your composer.json file as per the example below and then run
`composer update`.*

```json
{
  "require": {
  "php": ">=5.6",
  "cybersource/rest-client-php": "0.0.9"
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



## To set your API credentials for an API request,Configure the following information in ExternalConfiguration.php file:

  Create a file in your application `ExternalConfiguration.php` inside a `Resources` folder and configure the following information as per requirement similar to [**this one**](https://github.com/CyberSource/cybersource-rest-samples-php/blob/master/Resources/ExternalConfiguration.php).
  
  #### For Http Signature Authentication 
  
  Configure the following information in `ExternalConfiguration.php` file
  
*	Authentication Type:  Merchant should enter “HTTP_SIGNATURE” for HTTP authentication mechanism.
*	Merchant ID: Merchant will provide the merchant ID, which has taken from EBC portal.
*	MerchantSecretKey: Merchant will provide the secret Key value, which has taken from EBC portal.
*	MerchantKeyId:  Merchant will provide the Key ID value, which has taken from EBC portal.
*	Enable Log: To start the log entry provide _true_ else enter _false_.
*   LogDirectory :Merchant will provide directory path where logs will be created.
*   LogMaximumSize :Merchant will provide size value for log file.
*   LogFilename  :Merchant will provide log file name.


```
   $this->authType = "HTTP_SIGNATURE";
   $this->runEnv = "cyberSource.environment.SANDBOX";
   $this->merchantID = <merchantID>;
   $this->apiKeyID = <merchantKeyId>;
   $this->screteKey = <merchantSecretKey>;
   
   $this->enableLog = true;
   $this->logSize = <logMaximumSize>;
   $this->logFile = <logDirectory>;
   $this->logFilename = <logFilename>;
   
   $this->proxyUrl = <proxyHost>;
   $this->proxyHost = <proxyPort>;

```
  #### For Jwt Signature Authentication

  Configure the following information in the `ExternalConfiguration.php` file
  
*	Authentication Type:  Merchant should enter “JWT” for JWT authentication mechanism.
*	Merchant ID: Merchant will provide the merchant ID, which has taken from EBC portal.
*	keyAlias: Alias of the Merchant ID, to be used while generating the JWT token.
*	keyPassword: Alias of the Merchant password, to be used while generating the JWT token.
*	keyFileName: Filename of the key generated from the EBC portal, without the extension part .P12
*   keysDirectory: path of the directory, where key is placed.
*	Enable Log: To start the log entry provide _true_ else enter _false_.
*   LogDirectory :Merchant will provide directory path where logs will be created.
*   LogMaximumSize :Merchant will provide size value for log file.
*   LogFilename  :Merchant will provide log file name.

```
   $this->authType = "JWT";
   $this->runEnv = "cyberSource.environment.SANDBOX";
   $this->merchantID = <merchantID>;
   
   $this->keyAlias = <keyAlias>;
   $this->keyPass = <keyPassword>;
   $this->keyFilename = <keyFileName>";
   $this->keyDirectory = <keysDirectory>;
   
   $this->enableLog = true;
   $this->logSize = <logMaximumSize>;
   $this->logFile = <logDirectory>;
   $this->logFilename = <logFilename>;
   
   $this->proxyUrl = <proxyHost>;
   $this->proxyHost = <proxyPort>;
```

### Switching between the sandbox environment and the production environment
CyberSource maintains a complete sandbox environment for testing and development purposes. This sandbox environment is an exact 
duplicate of our production environment with the transaction authorization and settlement process simulated. By default, this SDK is 
configured to communicate with the sandbox environment. To switch to the production environment, set the appropriate property 
in Resources\ExternalConfiguration.php. For example:

```php
// For TESTING use
//  $this->runEnv = "cyberSource.environment.SANDBOX";
// For PRODUCTION use
  $this->runEnv = "cyberSource.environment.PRODUCTION";
```

The [API Reference Guide](https://developer.cybersource.com/api/reference/api-reference.html) provides examples of what information is needed for a particular request and how that information would be formatted. Using those examples, you can easily determine what methods would be necessary to include that information in a request
using this SDK.

[packagist_badge]: https://img.shields.io/packagist/v/cybersource/rest-client-php.svg
[packagist]: https://packagist.org/packages/cybersource/rest-client-php
