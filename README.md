
# PHP Client SDK for CyberSource REST APIs

## Description

The CyberSource PHP client provides convenient access to the [CyberSource REST API](https://developer.cybersource.com/api/reference/api-reference.html) from your PHP application.

[![Version         ][packagist_badge]][packagist]

## System Requirements

* PHP 8.0.0+
* cURL PHP Extension
* JSON PHP Extension
* OpenSSL PHP Extension
* Zip PHP Extension
* MBString PHP Extension
* Sodium PHP Extension
* PHP_APCU PHP Extension. You will need to download it for your platform (Windows/Linux/Mac)

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
    "cybersource/rest-client-php": "0.0.52"
  }
}
```

## Account Registration & Configuration

* Account Registration

Follow the first step mentioned in [Getting Started with CyberSource REST SDKs](https://developer.cybersource.com/hello-world/rest-api-sdks.html#gettingstarted) to create a sandbox account.

* Configuration

Follow the second step mentioned in [Getting Started with CyberSource REST SDKs](https://developer.cybersource.com/hello-world/rest-api-sdks.html#gettingstarted) to configure the SDK by inputting your credentials.

***Please note that this is for reference only. Ensure to store the credentials in a more secure manner.***

## How to Use

To get started using this SDK, it is highly recommended to download our sample code repository:

* [Cybersource PHP Sample Code Repository (on GitHub)](https://github.com/CyberSource/cybersource-rest-samples-php)

In that repository, we have comprehensive sample code for all common uses of our API:

Additionally, you can find details and examples of how our API is structured in our API Reference Guide:

* [Developer Center API Reference](https://developer.cybersource.com/api/reference/api-reference.html)

The API Reference Guide provides examples of what information is needed for a particular request and how that information would be formatted. Using those examples, you can easily determine what methods would be necessary to include that information in a request using this SDK.


To learn more about how to use CyberSource's REST API SDKs, please use [Developer Center REST API SDKs](https://developer.cybersource.com/hello-world/rest-api-sdks.html).

### Example using Sample Code Application

* Add the [CyberSource REST client](https://github.com/CyberSource/cybersource-rest-samples-php/blob/ea6dc700c833fc41f493147cdc8f1c4b5616683b/composer.json#L23) as a dependency in your php project.
* Configure your credentials in [External Configuration](https://github.com/CyberSource/cybersource-rest-samples-php/blob/ea6dc700c833fc41f493147cdc8f1c4b5616683b/Resources/ExternalConfiguration.php#L14C5-L61C6).
* Create an instance of [ApiClient](https://github.com/CyberSource/cybersource-rest-samples-php/blob/ea6dc700c833fc41f493147cdc8f1c4b5616683b/Samples/Payments/Payments/SimpleAuthorizationInternet.php#L71C5-L73C71) using the configuration.
* Use the created ApiClient instance to call CyberSource APIs. For example [SimpleAuthorizationInternet](https://github.com/CyberSource/cybersource-rest-samples-php/blob/ea6dc700c833fc41f493147cdc8f1c4b5616683b/Samples/Payments/Payments/SimpleAuthorizationInternet.php#L74C5-L77C66)

For more detailed examples, refer to the [cybersource-rest-samples-php](https://github.com/CyberSource/cybersource-rest-samples-php) repository.

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

## Features

### MetaKey Support

A Meta Key is a single key that can be used by one, some, or all merchants (or accounts, if created by a Portfolio user) in the portfolio.

The Portfolio or Parent Account owns the key and is considered the transaction submitter when a Meta Key is used, while the merchant owns the transaction.

MIDs continue to be able to create keys for themselves, even if a Meta Key is generated.

Further information on MetaKey can be found in [New Business Center User Guide](https://developer.cybersource.com/library/documentation/dev_guides/Business_Center/New_Business_Center_User_Guide.pdf).

## Additional Information

### PHP_APCU PHP Extension

Enable PHP_APCU PHP Extension in php.ini file. You will need to download it for your platform (Windows/Linux/Mac) and add in extensions.

Official PHP_APCU - https://pecl.php.net/package/APCu

For Windows:
1. PHP v8.0:
   Download the applicable php_apcu dll version v5.1.19 from the official pecl site.
2. PHP v8.1:
   Download the applicable php_acpu dll version v5.1.21 from the official pecl site.
3. PHP v8.2:
   Download the applicable php_acpu dll version v5.1.22 from the official pecl site. But dll is missing on the pecl site for php v8.2
   Alternatively, you can refer to this [stackoverflow question](https://stackoverflow.com/questions/75059436/missing-php-apcu-dll-for-php-8-2-apcu-5-1-22), or you can download the php_apcu dll from [here](https://github.com/gnongsie/apcu/actions/runs/6096614635).

For Mac/Linux/Unix:

Download the php_apcu using pecl command: ```pecl install apcu```. It will auto download the applicable apcu extension for the PHP v8.0, v8.1, v8.2.

## How to Contribute

* Fork the repo and create your branch from `master`.
* If you've added code that should be tested, add tests.
* Ensure the test suite passes.
* Submit your pull request! (Ensure you have [synced your fork](https://docs.github.com/en/pull-requests/collaborating-with-pull-requests/working-with-forks/syncing-a-fork) with the original repository before initiating the PR).

## Need Help?

For any help, you can reach out to us at our [Discussion Forum](https://community.developer.cybersource.com/t5/cybersource-APIs/bd-p/api).

## Disclaimer

CyberSource may allow Customer to access, use, and/or test a CyberSource product or service that may still be in development or has not been market-tested (“Beta Product”) solely for the purpose of evaluating the functionality or marketability of the Beta Product (a “Beta Evaluation”). Notwithstanding any language to the contrary, the following terms shall apply with respect to Customer’s participation in any Beta Evaluation (and the Beta Product(s)) accessed thereunder): The Parties will enter into a separate form agreement detailing the scope of the Beta Evaluation, requirements, pricing, the length of the beta evaluation period (“Beta Product Form”). Beta Products are not, and may not become, Transaction Services and have not yet been publicly released and are offered for the sole purpose of internal testing and non-commercial evaluation. Customer’s use of the Beta Product shall be solely for the purpose of conducting the Beta Evaluation. Customer accepts all risks arising out of the access and use of the Beta Products. CyberSource may, in its sole discretion, at any time, terminate or discontinue the Beta Evaluation. Customer acknowledges and agrees that any Beta Product may still be in development and that Beta Product is provided “AS IS” and may not perform at the level of a commercially available service, may not operate as expected and may be modified prior to release. CYBERSOURCE SHALL NOT BE RESPONSIBLE OR LIABLE UNDER ANY CONTRACT, TORT (INCLUDING NEGLIGENCE), OR OTHERWISE RELATING TO A BETA PRODUCT OR THE BETA EVALUATION (A) FOR LOSS OR INACCURACY OF DATA OR COST OF PROCUREMENT OF SUBSTITUTE GOODS, SERVICES OR TECHNOLOGY, (B) ANY CLAIM, LOSSES, DAMAGES, OR CAUSE OF ACTION ARISING IN CONNECTION WITH THE BETA PRODUCT; OR (C) FOR ANY INDIRECT, INCIDENTAL OR CONSEQUENTIAL DAMAGES INCLUDING, BUT NOT LIMITED TO, LOSS OF REVENUES AND LOSS OF PROFITS.
