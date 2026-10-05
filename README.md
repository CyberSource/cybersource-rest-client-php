
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
* Hash PHP Extension
* GMP PHP Extension (required for message-level encryption (MLE) / JWE support)
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
    "cybersource/rest-client-php": "0.0.77"
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

## Security Guidance

* It is strongly recommended to use HTTPS for any proxy servers in your environment to protect secrets during transit.

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

### Message Level Encryption (MLE) Feature
[![Generic badge](https://img.shields.io/badge/MLE-NEW-GREEN.svg)](https://shields.io/)

This feature provides an implementation of Message Level Encryption (MLE) for APIs provided by CyberSource, integrated within our SDK. This feature ensures secure communication by encrypting messages at the application level before they are sent over the network.

More information about this new MLE feature can be found in this file : [MLE.md](MLE.md)

### JWT Authentication with Symmetric Key (Shared Secret / HS256 HMAC-SHA256) Support

[![Generic badge](https://img.shields.io/badge/JWT_SHARED_SECRET-NEW-GREEN.svg)](https://shields.io/)

> **⚠️ HTTP Signature Deprecation Notice:** HTTP Signature authentication (`HTTP_SIGNATURE`) is being deprecated. JWT with Shared Secret (HS256 / HMAC-SHA256) is the **recommended migration path** — it uses the **same** `merchantKeyId` and `merchantsecretKey` credentials, requires only two property changes, and enables MLE (Message Level Encryption) support that HTTP Signature does not provide.

JWT authentication now supports two key types, configurable via the `jwtKeyType` property:

| `jwtKeyType` | Algorithm | Credentials Required |
|---|---|---|
| `P12` (default) | RS256 (asymmetric, RSA-SHA256) | `keysDirectory`, `keyFileName`, `keyAlias`, `keyPass` |
| `SHARED_SECRET` | HS256 (symmetric, HMAC-SHA256) | `merchantKeyId`, `merchantsecretKey` |

The default value is `P12`, which preserves full backward compatibility with existing configurations.

#### Configuration for JWT with P12 (default — no changes needed)

```php
$config = new CyberSource\Authentication\Core\MerchantConfiguration();
$config->setAuthenticationType('JWT');
$config->setMerchantID('your_merchant_id');
$config->setRunEnvironment('apitest.cybersource.com');
// jwtKeyType defaults to P12 if omitted
$config->setKeyAlias('your_merchant_id');
$config->setKeyPassword('your_merchant_id');
$config->setKeyFileName('your_merchant_id');
$config->setKeysDirectory('/path/to/p12/directory');
```

#### Configuration for JWT with Shared Secret

```php
$config = new CyberSource\Authentication\Core\MerchantConfiguration();
$config->setAuthenticationType('JWT');
$config->setMerchantID('your_merchant_id');
$config->setRunEnvironment('apitest.cybersource.com');
$config->setJwtKeyType('SHARED_SECRET');
$config->setApiKeyID('your_key_id');
$config->setSecretKey('your_base64_encoded_shared_secret');
```

> **Note:** When `jwtKeyType` is set to `SHARED_SECRET`, the P12-related properties (`keysDirectory`, `keyFileName`, `keyAlias`, `keyPass`) are not required and will be ignored. Conversely, when using `P12`, the `merchantKeyId` and `merchantsecretKey` properties are not required for JWT authentication.

#### JSON Configuration for JWT with P12

```json
{
    "authenticationType": "jwt",
    "merchantID": "your_merchant_id",
    "runEnvironment": "apitest.cybersource.com",
    "keyAlias": "your_merchant_id",
    "keyPass": "your_merchant_id",
    "keyFileName": "your_merchant_id",
    "keysDirectory": "path/to/p12/directory"
}
```

#### JSON Configuration for JWT with Shared Secret

```json
{
    "authenticationType": "jwt",
    "merchantID": "your_merchant_id",
    "runEnvironment": "apitest.cybersource.com",
    "jwtKeyType": "SHARED_SECRET",
    "merchantKeyId": "your_key_id",
    "merchantsecretKey": "your_base64_encoded_shared_secret"
}
```

#### Migrating from HTTP Signature to JWT with Shared Secret (HS256 / HMAC-SHA256)

If you are currently using HTTP Signature authentication, migrating to JWT with Shared Secret (symmetric key, HS256 / HMAC-SHA256) requires only **two property changes** — your credentials remain the same:

```php
// BEFORE (HTTP Signature — deprecated)
$config->setAuthenticationType('HTTP_SIGNATURE');
$config->setApiKeyID('your_key_id');
$config->setSecretKey('your_shared_secret');

// AFTER (JWT with Shared Secret / HS256 HMAC-SHA256 — recommended)
$config->setAuthenticationType('JWT');                 // changed
$config->setJwtKeyType('SHARED_SECRET');                // added — uses HS256 (HMAC-SHA256)
$config->setApiKeyID('your_key_id');                    // same
$config->setSecretKey('your_shared_secret');             // same
```

#### Using MLE with Shared Secret Credentials

MLE (Message Level Encryption) is fully supported with the `SHARED_SECRET` key type. This allows merchants who use shared secret credentials (instead of a P12 certificate) to still leverage MLE for secure communication.

When using `jwtKeyType=SHARED_SECRET` with MLE, you must provide the MLE public certificate separately via the `mleForRequestPublicCertPath` property, since there is no P12 file to auto-extract the MLE certificate from. The request MLE public certificate can be downloaded from the CyberSource Business Center:

- **Test**: <https://businesscentertest.cybersource.com/ebc2>
- **Production**: <https://businesscenter.cybersource.com/ebc2>

```php
$config = new CyberSource\Authentication\Core\MerchantConfiguration();
$config->setAuthenticationType('JWT');
$config->setMerchantID('your_merchant_id');
$config->setRunEnvironment('apitest.cybersource.com');
$config->setJwtKeyType('SHARED_SECRET');
$config->setApiKeyID('your_key_id');
$config->setSecretKey('your_base64_encoded_shared_secret');

// Request MLE configuration
$config->setEnableRequestMLEForOptionalApisGlobally(true);
$config->setMleForRequestPublicCertPath('/path/to/mle/public/cert.pem');

// Response MLE is also supported — see MLE.md for full configuration
// $config->setEnableResponseMleGlobally(true);
// $config->setResponseMlePrivateKeyFilePath('/path/to/private/key.p12');
// $config->setResponseMlePrivateKeyFilePassword('password');
```

For more details on MLE configuration options (including Response MLE), see [MLE.md](MLE.md).

### MetaKey Support

A Meta Key is a single key that can be used by one, some, or all merchants (or accounts, if created by a Portfolio user) in the portfolio.

The Portfolio or Parent Account owns the key and is considered the transaction submitter when a Meta Key is used, while the merchant owns the transaction.

MIDs continue to be able to create keys for themselves, even if a Meta Key is generated.

MetaKey works with all three authentication types: HTTP Signature, JWT (P12), and JWT with Shared Secret.

#### MetaKey with HTTP Signature (⚠️ Deprecated)

```php
$config->setAuthenticationType('HTTP_SIGNATURE');
$config->setMerchantID('your_transacting_merchant_id');
$config->setApiKeyID('your_metakey_portfolio_KeyId');
$config->setSecretKey('your_metakey_portfolio_shared_secret_key');
$config->setPortfolioID('your_portfolio_id');
$config->setUseMetaKey(true);
```

#### MetaKey with JWT (P12)

```php
$config->setAuthenticationType('JWT');
$config->setMerchantID('your_transacting_merchant_id');
$config->setKeyAlias('your_portfolio_id');
$config->setKeyPassword('your_metakey_portfolio_p12File_password');
$config->setKeyFileName('your_metakey_portfolio_p12FileName');
$config->setKeysDirectory('/path/to/p12/directory');
$config->setPortfolioID('your_portfolio_id');
$config->setUseMetaKey(true);
```

#### MetaKey with JWT Shared Secret (Recommended)

```php
$config->setAuthenticationType('JWT');
$config->setJwtKeyType('SHARED_SECRET');
$config->setMerchantID('your_transacting_merchant_id');
$config->setApiKeyID('your_metakey_portfolio_KeyId');
$config->setSecretKey('your_metakey_portfolio_shared_secret_key');
$config->setPortfolioID('your_portfolio_id');
$config->setUseMetaKey(true);
```

> **Note:** MetaKey with JWT Shared Secret uses the same MetaKey credentials as HTTP Signature but authenticates via JWT, enabling MLE support.

#### Response MLE with MetaKey

When Response MLE is enabled (`enableResponseMleGlobally=true`) and MetaKey is in use (`useMetaKey=true`), the Response MLE configuration must use the **portfolio's** response MLE key — not the transacting merchant's. Specifically:

- `responseMlePrivateKeyFilePath` (or the `responseMlePrivateKey` object) must point to the **portfolio's** response MLE private key.
- `responseMleKID` — the KID value associated with the **portfolio's** response MLE certificate.
  - **Optional** when `responseMlePrivateKeyFilePath` points to a CyberSource-generated P12 file — the SDK will automatically fetch the KID from the P12 file.
  - **Required** when using PEM format files (`.pem`, `.key`, `.p8`) or when providing `responseMlePrivateKey` object directly.

```php
$config = new CyberSource\Authentication\Core\MerchantConfiguration();
$config->setAuthenticationType('JWT');
$config->setJwtKeyType('SHARED_SECRET');
$config->setMerchantID('your_transacting_merchant_id');
$config->setApiKeyID('your_metakey_portfolio_KeyId');
$config->setSecretKey('your_metakey_portfolio_shared_secret_key');
$config->setPortfolioID('your_portfolio_id');
$config->setUseMetaKey(true);
$config->setRunEnvironment('apitest.cybersource.com');

// Response MLE — use the portfolio's response MLE key, not the transacting merchant's
$config->setEnableResponseMleGlobally(true);
$config->setResponseMlePrivateKeyFilePath('/path/to/portfolio/response/mle/private/key.p12');
$config->setResponseMlePrivateKeyFilePassword('portfolio_private_key_password');
// responseMleKID is optional when using a CyberSource-generated P12 file (auto-fetched from P12)
// Required when using PEM files or responseMlePrivateKey object
// $config->setResponseMleKID('your_portfolio_response_mle_kid');
```

> **Important:** The response MLE private key (and KID, if applicable) must belong to the portfolio (parent account), since in MetaKey mode the portfolio is the transaction submitter and the response is encrypted using the portfolio's MLE certificate. See [MLE.md](MLE.md) for full details on when `responseMleKID` is required vs optional.

Further information on MetaKey can be found in [New Business Center User Guide](https://developer.cybersource.com/library/documentation/dev_guides/Business_Center/New_Business_Center_User_Guide.pdf).

### OAuth Support

OAuth enables service providers to securely share access to customer data without sharing password data.

The CyberSource OAuth2.0 Authorization Server (or API Auth Service) will issue access tokens (based on merchant user credentials) to CyberSource or third-party Applications. These applications can access CyberSource APIs on the merchant's behalf, using the access tokens.

During application registration, third-party application developers are issued a `client_id` and optionally a `client_secret` (if they can be considered a confidential client, for example a web application).

These values will be used when the merchant application wants to request an access token and/or a refresh token. This is explained in more detail in [Requesting the Access and Refresh Tokens](https://developer.cybersource.com/api/developer-guides/OAuth/cybs_extend_intro/obtaining_access_refresh_tokens.html).

For more detailed information on OAuth, refer to the documentation at [Cybersource OAuth 2.0](https://developer.cybersource.com/api/developer-guides/OAuth/cybs_extend_intro.html).

In order to use OAuth, set the run environment to OAuth enabled URLs. OAuth only works in these run environments.

```php
// For TESTING use
$config->setRunEnvironment('api-matest.cybersource.com');
// For PRODUCTION use
// $config->setRunEnvironment('api-ma.cybersource.com');
```

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
