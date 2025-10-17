[![Generic badge](https://img.shields.io/badge/MLE-NEW-GREEN.svg)](https://shields.io/)

# Message Level Encryption (MLE) Feature

This feature provides an implementation of Message Level Encryption (MLE) for APIs provided by CyberSource, integrated within our SDK. This feature ensures secure communication by encrypting messages at the application level before they are sent over the network.

MLE supports both **Request Encryption** (encrypting outgoing request payloads) and **Response Decryption** (decrypting incoming response payloads).

## Authentication Requirements

- **Request MLE**: Only supported with `JWT (JSON Web Token)` authentication type
- **Response MLE**: Only supported with `JWT (JSON Web Token)` authentication type

## Configuration

##  1. Request MLE Configuration 

#### 1.1 Global Request MLE Configuration

Configure global settings for request MLE using these properties in your `merchantConfig`:

##### (i) Primary Configuration

- **Variable**: `enableRequestMLEForOptionalApisGlobally`
- **Type**: `Boolean`
- **Default**: `false`
- **Description**: Enables request MLE globally for all APIs that have optional MLE support when set to `true`.

---

##### (ii) Deprecated Configuration (Backward Compatibility)

- **Variable**: `useMLEGlobally` ⚠️ **DEPRECATED**
- **Type**: `Boolean`
- **Default**: `false`
- **Description**: **DEPRECATED** - Use `enableRequestMLEForOptionalApisGlobally` instead. This field is maintained for backward compatibility and will be used as an alias for `enableRequestMLEForOptionalApisGlobally`.

---

##### (iii) Advanced Configuration

- **Variable**: `disableRequestMLEForMandatoryApisGlobally`
- **Type**: `Boolean`
- **Default**: `false`
- **Description**: Disables request MLE for APIs that have mandatory MLE requirement when set to `true`.

---

#### 1.2 Request MLE Certificate Configuration [Optional Params]

##### (i) Certificate File Path (Optional)

- **Variable**: `mleForRequestPublicCertPath`
- **Type**: `String`
- **Optional**: `true`
- **Description**: Path to the public certificate file used for request encryption. Supported formats: `.pem`, `.crt`. 
  - **Note**: This parameter is optional when using JWT authentication. If not provided, the request MLE certificate will be automatically fetched from the JWT authentication P12 file using the `requestMleKeyAlias`.

---

##### (ii) Key Alias Configuration (Optional)

- **Variable**: `requestMleKeyAlias`
- **Type**: `String`
- **Optional**: `true`
- **Default**: `CyberSource_SJC_US`
- **Description**: Key alias used to retrieve the MLE certificate from the certificate file. When `mleForRequestPublicCertPath` is not provided, this alias is used to fetch the certificate from the JWT authentication P12 file. If not specified, the SDK will automatically use the default value `CyberSource_SJC_US`.

---

##### (iii) Deprecated Key Alias (Backward Compatibility) (Optional)

- **Variable**: `mleKeyAlias` ⚠️ **DEPRECATED**
- **Type**: `String`
- **Optional**: `true`
- **Default**: `CyberSource_SJC_US`
- **Description**: **DEPRECATED** - Use `requestMleKeyAlias` instead. This field is maintained for backward compatibility and will be used as an alias for `requestMleKeyAlias`.

## 2. Response MLE Configuration

### Global Response MLE Configuration

- **Variable**: `enableResponseMleGlobally`
- **Type**: `boolean`
- **Default**: `false`
- **Description**: Enables response MLE globally for all APIs that support MLE responses when set to `true`.

### Response MLE Private Key Configuration

You have two options for providing the private key for response decryption:

#### Option 1: Provide Private Key File Path

- **Variable**: `responseMlePrivateKeyFilePath`
- **Type**: `string`
- **Description**: Path to the private key file. Supported formats: `.p12`, `.pfx`, `.pem`, `.key`, `.p8`. Recommendation: use encrypted private key (password protection) for MLE response.

#### Option 2: Provide Private Key Object

- **Variable**: `responseMlePrivateKey`
- **Type**: `OpenSSLAsymmetricKey`
- **Description**: Direct private key object for response decryption.

### Response MLE Private Key Password

- **Variable**: `responseMlePrivateKeyFilePassword`
- **Type**: `string`
- **Description**: Password for the private key file (required for `.p12/.pfx` files or encrypted private keys and encrypted files).

### Response MLE Key ID (KID)

- **Variable**: `responseMleKID`
- **Type**: `string`
- **Description**: Key ID used in JWT header for response MLE. This identifies which private key should be used for decryption.

## 3. API-level MLE Control for Request and Response MLE

### Map Configuration

- **Variable**: `mapToControlMLEonAPI`
- **Type**: `Map<String, String>`
- **Description**: Overrides global MLE settings for specific APIs. The key is the API function name, and the value controls both request and response MLE.
- **Example**: `Map<'apiFunctionName', 'true::true'>`

#### Structure of Values in Map:

(i) **"requestMLE::responseMLE"** - Control both request and response MLE
   - `"true::true"` - Enable both request and response MLE
   - `"false::false"` - Disable both request and response MLE
   - `"true::false"` - Enable request MLE, disable response MLE
   - `"false::true"` - Disable request MLE, enable response MLE
   - `"::true"` - Use global setting for request, enable response MLE
   - `"true::"` - Enable request MLE, use global setting for response
   - `"::false"` - Use global setting for request, disable response MLE
   - `"false::"` - Disable request MLE, use global setting for response

(ii) **"requestMLE"** - Control request MLE only (response uses global setting)
   - `"true"` - Enable request MLE
   - `"false"` - Disable request MLE

## Notes

### Request MLE Notes
- If `useMLEGlobally` or enableRequestMLEForOptionalApis is set to true, it will enable Request MLE for all API calls that support MLE by CyberSource, unless overridden by mapToControlMLEonAPI.
- If `mapToControlMLEonAPI` is not provided or does not contain a specific API function name, the global useMLEGlobally setting will be applied.
- The `mleKeyAlias` parameter is optional and defaults to CyberSource_SJC_US if not specified by the user. Users can override this default value by setting their own key alias.

### Response MLE Notes
- Response MLE automatically detects and decrypts MLE-encrypted responses when enabled.
- If `enableResponseMleGlobally` is set to true, it will enable Response MLE for all API calls that support Response MLE.
- Either `responseMlePrivateKeyFilePath` or `responseMlePrivateKey` must be configured for Response MLE to work.
- The `responseMleKID` parameter is required when Response MLE is enabled.

## Example Configuration

### (i) Minimal Request MLE Configuration

```php
// Array-based configuration - Uses defaults (most common scenario)
$merchantConfig = new MerchantConfiguration();
$merchantConfig->setEnableRequestMLEForOptionalApisGlobally(true);
// Both mleForRequestPublicCertPath and requestMleKeyAlias are optional
// SDK will use JWT P12 file with default alias "CyberSource_SJC_US"
```

### (ii) Request MLE with Deprecated Parameters (Backward Compatibility)

```php
// Using deprecated parameters - still supported but not recommended
$merchantConfig = new MerchantConfiguration();
$merchantConfig->setUseMLEGlobally(true);  // Deprecated - use setEnableRequestMLEForOptionalApisGlobally
$merchantConfig->setMleKeyAlias('Custom_Key_Alias');  // Deprecated - use setRequestMleKeyAlias
```

### (iii) Request MLE with Custom Key Alias

```php
// Configuration - With custom key alias only
$merchantConfig = new MerchantConfiguration();
$merchantConfig->setEnableRequestMLEForOptionalApisGlobally(true);
$merchantConfig->setRequestMleKeyAlias('Custom_Key_Alias');
// Will fetch from JWT P12 file using custom alias
```

### (iv) Request MLE with Separate Certificate File

```php
// Configuration - With separate MLE certificate file
$merchantConfig = new MerchantConfiguration();
$merchantConfig->setEnableRequestMLEForOptionalApisGlobally(true);
$merchantConfig->setMleForRequestPublicCertPath('/path/to/public/cert.pem');
$merchantConfig->setRequestMleKeyAlias('Custom_Key_Alias');

// API-specific control
$mleControlMap = [
    'createPayment' => 'true',     // Enable request MLE for this API
    'capturePayment' => 'false'    // Disable request MLE for this API
];
$merchantConfig->setMapToControlMLEonAPI($mleControlMap);
```

### (v) Response MLE Configuration with Private Key File

```php
// Configuration with private key file
$merchantConfig = new MerchantConfiguration();
$merchantConfig->setEnableResponseMleGlobally(true);
$merchantConfig->setResponseMlePrivateKeyFilePath('/path/to/private/key.p12');
$merchantConfig->setResponseMlePrivateKeyFilePassword('password');
$merchantConfig->setResponseMleKID('your-key-id');

// API-specific control
$mleControlMap = [
    'createPayment' => '::true'  // Enable response MLE only for this API
];
$merchantConfig->setMapToControlMLEonAPI($mleControlMap);
```

### (vi) Response MLE Configuration with Private Key Object

```php
// Load private key programmatically
$privateKey = openssl_pkey_get_private(file_get_contents('/path/to/private/key.pem'), 'password');

// Create MerchantConfig with private key object
$merchantConfig = new MerchantConfiguration();
$merchantConfig->setEnableResponseMleGlobally(true);
$merchantConfig->setResponseMleKID('your-key-id');
$merchantConfig->setResponseMlePrivateKey($privateKey);
```

### (vii) Both Request and Response MLE Configuration

```php
// Complete configuration for both request and response MLE
$merchantConfig = new MerchantConfiguration();

// Request MLE settings (minimal - uses defaults)
$merchantConfig->setEnableRequestMLEForOptionalApisGlobally(true);

// Response MLE settings
$merchantConfig->setEnableResponseMleGlobally(true);
$merchantConfig->setResponseMlePrivateKeyFilePath('/path/to/private/key.p12');
$merchantConfig->setResponseMlePrivateKeyFilePassword('password');
$merchantConfig->setResponseMleKID('your-key-id');

// API-specific control for both request and response
$mleControlMap = [
    'createPayment' => 'true::true',      // Enable both request and response MLE for this API
    'capturePayment' => 'false::true',    // Disable request, enable response MLE for this API
    'refundPayment' => 'true::false',     // Enable request, disable response MLE for this API
    'createCredit' => '::true'            // Use global request setting, enable response MLE for this API
];
$merchantConfig->setMapToControlMLEonAPI($mleControlMap);
```

### (viii) Mixed Configuration (New and Deprecated Parameters)

```php
// Example showing both new and deprecated parameters (deprecated will be used as aliases)
$merchantConfig = new MerchantConfiguration();

// If both are set with same value, it works fine
$merchantConfig->setEnableRequestMLEForOptionalApisGlobally(true);
$merchantConfig->setUseMLEGlobally(true);  // Deprecated but same value

// If both are set with different values, it will cause ConfigException
// $merchantConfig->setEnableRequestMLEForOptionalApisGlobally(true);
// $merchantConfig->setUseMLEGlobally(false);  // This would cause an error

// Key alias - new parameter takes precedence if both are provided
$merchantConfig->setRequestMleKeyAlias('New_Alias');
$merchantConfig->setMleKeyAlias('Old_Alias');  // This will be ignored
```

## JSON Configuration Examples

### (i) Minimal Request MLE

```json
{
  "merchantConfig": {
    "enableRequestMLEForOptionalApisGlobally": true
  }
}
```

### (ii) Request MLE with Deprecated Parameters

```json
{
  "merchantConfig": {
    "useMLEGlobally": true,
    "mleKeyAlias": "Custom_Key_Alias"
  }
}
```

### (iii) Request MLE with Custom Configuration

```json
{
  "merchantConfig": {
    "enableRequestMLEForOptionalApisGlobally": true,
    "mleForRequestPublicCertPath": "/path/to/public/cert.pem",
    "requestMleKeyAlias": "Custom_Key_Alias",
    "mapToControlMLEonAPI": {
      "createPayment": "true",
      "capturePayment": "false"
    }
  }
}
```

### (iv) Response MLE Only

```json
{
  "merchantConfig": {
    "enableResponseMleGlobally": true,
    "responseMlePrivateKeyFilePath": "/path/to/private/key.p12",
    "responseMlePrivateKeyFilePassword": "password",
    "responseMleKID": "your-key-id",
    "mapToControlMLEonAPI": {
      "createPayment": "::true"
    }
  }
}
```

### (v) Both Request and Response MLE

```json
{
  "merchantConfig": {
    "enableRequestMLEForOptionalApisGlobally": true,
    "enableResponseMleGlobally": true,
    "responseMlePrivateKeyFilePath": "/path/to/private/key.p12",
    "responseMlePrivateKeyFilePassword": "password",
    "responseMleKID": "your-key-id",
    "mapToControlMLEonAPI": {
      "createPayment": "true::true",
      "capturePayment": "false::true",
      "refundPayment": "true::false",
      "createCredit": "::true"
    }
  }
}
```

Please refer given link for sample codes with MLE:
https://github.com/CyberSource/cybersource-rest-samples-php/tree/master/Samples/MLEFeature

## Additional Information

### API Support
- Request MLE is initially designed to support a few APIs and can be extended to support more APIs in the future based on requirements and updates.
- Response MLE is automatically applied to APIs that return MLE-encrypted responses when enabled.

### Authentication Type
- Both Request MLE and Response MLE are only supported with `JWT (JSON Web Token)` authentication type within the SDK.

### Private Key Management (Response MLE)
- **Supported Formats**: PKCS#12 (.p12, .pfx), PEM (.pem), KEY (.key), PKCS#8 (.p8)
- **Security**: Use password-protected private keys and store them securely

### Using the SDK
To use the MLE features in the SDK:
1. Configure JWT authentication in the `merchantConfig` object
2. Enable Request MLE and/or Response MLE as needed
3. Configure appropriate certificates and private keys
4. Pass the configured `merchantConfig` object to the SDK initialization

### Automatic Behavior
- **Request MLE**: When enabled, automatically encrypts request payloads before sending to CyberSource APIs
- **Response MLE**: When enabled, automatically detects and decrypts MLE-encrypted responses from CyberSource APIs

## Usage Examples

### Basic Payment with Request and Response MLE

```php
<?php
use CyberSource\Api\PaymentsApi;
use CyberSource\Model\CreatePaymentRequest;

// Initialize PaymentsApi with MLE-enabled configuration
$paymentsApi = new PaymentsApi($apiClient);

// Create payment request
$paymentRequest = new CreatePaymentRequest();
// ... populate payment request data

try {
    // Request will be automatically encrypted (if Request MLE enabled)
    // Response will be automatically decrypted (if Response MLE enabled)
    $response = $paymentsApi->createPayment($paymentRequest);
    
    // Access response data (already decrypted if applicable)
    echo "Payment ID: " . $response->getId() . "\n";
    echo "Status: " . $response->getStatus() . "\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
```

## Troubleshooting

### Common Issues

1. **"Response MLE private key not available for decryption"**
   - Ensure `responseMlePrivateKeyFilePath` is set and file exists
   - Verify file permissions allow reading the private key file
   - Check that `responseMlePrivateKeyFilePassword` is correct for encrypted keys

2. **"Failed to extract Response MLE token"**
   - Enable debug logging to inspect response format
   - Verify the response is actually MLE-encrypted

3. **Request MLE not working**
   - Confirm JWT authentication is properly configured
   - Verify `enableRequestMLEForOptionalApisGlobally` is set to `true` or specific APIs are enabled in `mapToControlMLEonAPI`
   - Check that the API supports Request MLE

### Debug Logging

Enable detailed logging to troubleshoot MLE issues:

```php
use CyberSource\Logging\LogConfiguration;

$logConfig = new LogConfiguration();
$logConfig->setLogLevel('debug');
$logConfig->setLogDirectory('./logs');
$logConfig->setLogFilename('cybersource-mle.log');
$logConfig->setMaskingEnabled(true); // Mask sensitive data

$merchantConfig->setLogConfiguration($logConfig);
```

## Contact
For any issues or further assistance, please open an issue on the GitHub repository or contact our support team.