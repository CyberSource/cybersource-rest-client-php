# CyberSource\AgentRegistrationApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateAgentKey**](AgentRegistrationApi.md#activateAgentKey) | **POST** /icc/v1/agents/{agentId}/keys/{keyId}/activate | Activate a key
[**addAgentKey**](AgentRegistrationApi.md#addAgentKey) | **POST** /icc/v1/agents/{agentId}/keys | Add a key to an agent
[**getAgent**](AgentRegistrationApi.md#getAgent) | **GET** /icc/v1/agents/{agentId} | Get an agent
[**getAgentKey**](AgentRegistrationApi.md#getAgentKey) | **GET** /icc/v1/agents/{agentId}/keys/{keyId} | Get a key by agent and key ID
[**listAgentKeys**](AgentRegistrationApi.md#listAgentKeys) | **GET** /icc/v1/agents/{agentId}/keys | List keys for an agent
[**registerAgent**](AgentRegistrationApi.md#registerAgent) | **POST** /icc/v1/agents | Register an agent
[**updateAgent**](AgentRegistrationApi.md#updateAgent) | **PUT** /icc/v1/agents/{agentId} | Update an agent
[**updateAgentKey**](AgentRegistrationApi.md#updateAgentKey) | **PUT** /icc/v1/agents/{agentId}/keys/{keyId} | Update a key


# **activateAgentKey**
> \CyberSource\Model\AddAgentKeyResponse201 activateAgentKey($agentId, $keyId)

Activate a key

**Activate a Key**<br>Activates a deactivated public key, making it available for signature verification.<br><br> Returns **404** if the agent or key is not found, **403** if the agent is deactivated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentRegistrationApi();
$agentId = "agentId_example"; // string | Unique agent identifier
$keyId = "keyId_example"; // string | Unique key identifier

try {
    $result = $api_instance->activateAgentKey($agentId, $keyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentRegistrationApi->activateAgentKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agentId** | **string**| Unique agent identifier |
 **keyId** | **string**| Unique key identifier |

### Return type

[**\CyberSource\Model\AddAgentKeyResponse201**](../Model/AddAgentKeyResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addAgentKey**
> \CyberSource\Model\AddAgentKeyResponse201 addAgentKey($agentId, $keyRequest)

Add a key to an agent

**Add a Key to an Agent**<br>Uploads a new public key for the specified agent. The key is created in ***deactivated*** state and must be explicitly activated via `POST /agents/{agentId}/keys/{keyId}/activate` before it can be used.<br><br> Returns **404** if the agent is not found, **403** if the agent is deactivated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentRegistrationApi();
$agentId = "agentId_example"; // string | Unique agent identifier
$keyRequest = new \CyberSource\Model\KeyRequest(); // \CyberSource\Model\KeyRequest | Key creation request

try {
    $result = $api_instance->addAgentKey($agentId, $keyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentRegistrationApi->addAgentKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agentId** | **string**| Unique agent identifier |
 **keyRequest** | [**\CyberSource\Model\KeyRequest**](../Model/KeyRequest.md)| Key creation request |

### Return type

[**\CyberSource\Model\AddAgentKeyResponse201**](../Model/AddAgentKeyResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgent**
> \CyberSource\Model\AgentRegistrationResponse201 getAgent($agentId)

Get an agent

**Get an Agent**<br>Retrieves a single agent by its unique identifier, including all associated public keys.<br><br> Returns **404** if the agent is not found.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentRegistrationApi();
$agentId = "agentId_example"; // string | Unique agent identifier

try {
    $result = $api_instance->getAgent($agentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentRegistrationApi->getAgent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agentId** | **string**| Unique agent identifier |

### Return type

[**\CyberSource\Model\AgentRegistrationResponse201**](../Model/AgentRegistrationResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgentKey**
> \CyberSource\Model\AddAgentKeyResponse201 getAgentKey($agentId, $keyId)

Get a key by agent and key ID

**Get a Key**<br>Retrieves a specific public key by agent ID and key ID.<br><br> Returns **404** if the agent or key is not found.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentRegistrationApi();
$agentId = "agentId_example"; // string | Unique agent identifier
$keyId = "keyId_example"; // string | Unique key identifier

try {
    $result = $api_instance->getAgentKey($agentId, $keyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentRegistrationApi->getAgentKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agentId** | **string**| Unique agent identifier |
 **keyId** | **string**| Unique key identifier |

### Return type

[**\CyberSource\Model\AddAgentKeyResponse201**](../Model/AddAgentKeyResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAgentKeys**
> \CyberSource\Model\ListAgentKeysResponse200 listAgentKeys($agentId, $page, $pageSize)

List keys for an agent

**List Keys for an Agent**<br>Returns a paginated list of all public keys associated with the specified agent.<br><br> Returns **404** if the agent is not found.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentRegistrationApi();
$agentId = "agentId_example"; // string | Unique agent identifier
$page = 1; // int | Page number (1-indexed)
$pageSize = 30; // int | Items per page (max 100)

try {
    $result = $api_instance->listAgentKeys($agentId, $page, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentRegistrationApi->listAgentKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agentId** | **string**| Unique agent identifier |
 **page** | **int**| Page number (1-indexed) | [optional] [default to 1]
 **pageSize** | **int**| Items per page (max 100) | [optional] [default to 30]

### Return type

[**\CyberSource\Model\ListAgentKeysResponse200**](../Model/ListAgentKeysResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerAgent**
> \CyberSource\Model\AgentRegistrationResponse201 registerAgent($agentRequest)

Register an agent

**Register an Agent**<br>Registers a new AI agent in the Visa Agent Registry Service (VARS). Once registered, the agent can upload public keys that merchants and Visa services use to verify request signatures.<br><br> **Key Behavior**<br>If an optional `keys` array is included in the request, those keys are created alongside the agent registration in a single operation.<br> Returns **409 Conflict** if an agent with the same domain already exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentRegistrationApi();
$agentRequest = new \CyberSource\Model\AgentRequest(); // \CyberSource\Model\AgentRequest | Agent registration request

try {
    $result = $api_instance->registerAgent($agentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentRegistrationApi->registerAgent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agentRequest** | [**\CyberSource\Model\AgentRequest**](../Model/AgentRequest.md)| Agent registration request |

### Return type

[**\CyberSource\Model\AgentRegistrationResponse201**](../Model/AgentRegistrationResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAgent**
> \CyberSource\Model\AgentRegistrationResponse201 updateAgent($agentId, $agentUpdate)

Update an agent

**Update an Agent**<br>Updates agent information. Only the following fields can be modified: `name`, `domain`, `description`, `contactEmail`, and `agentMetadata`.<br><br> Submitting any other field (e.g., `tokenRequestorId`, `keys`) returns **422 Validation Error**.<br> Returns **404** if the agent is not found, **403** if the agent is deactivated, **409** if the new domain is already registered.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentRegistrationApi();
$agentId = "agentId_example"; // string | Unique agent identifier
$agentUpdate = new \CyberSource\Model\AgentUpdate(); // \CyberSource\Model\AgentUpdate | Agent update request

try {
    $result = $api_instance->updateAgent($agentId, $agentUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentRegistrationApi->updateAgent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agentId** | **string**| Unique agent identifier |
 **agentUpdate** | [**\CyberSource\Model\AgentUpdate**](../Model/AgentUpdate.md)| Agent update request |

### Return type

[**\CyberSource\Model\AgentRegistrationResponse201**](../Model/AgentRegistrationResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAgentKey**
> \CyberSource\Model\AddAgentKeyResponse201 updateAgentKey($agentId, $keyId, $keyUpdate)

Update a key

**Update a Key**<br>Updates key information. The following fields can be modified: `keyName`, `publicKey`, `algorithm`, and `expirationDate`.<br><br> **Note:** `publicKey` and `algorithm` must always be updated together.<br> Returns **404** if the agent or key is not found, **403** if the agent or key is deactivated, **409** if the new `keyName` already exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentRegistrationApi();
$agentId = "agentId_example"; // string | Unique agent identifier
$keyId = "keyId_example"; // string | Unique key identifier
$keyUpdate = new \CyberSource\Model\KeyUpdate(); // \CyberSource\Model\KeyUpdate | Key update request

try {
    $result = $api_instance->updateAgentKey($agentId, $keyId, $keyUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentRegistrationApi->updateAgentKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agentId** | **string**| Unique agent identifier |
 **keyId** | **string**| Unique key identifier |
 **keyUpdate** | [**\CyberSource\Model\KeyUpdate**](../Model/KeyUpdate.md)| Key update request |

### Return type

[**\CyberSource\Model\AddAgentKeyResponse201**](../Model/AddAgentKeyResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

