# CyberSource\PlansApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activatePlan**](PlansApi.md#activatePlan) | **POST** /rbs/v1/plans/{id}/activate | Activate a Plan
[**createPlan**](PlansApi.md#createPlan) | **POST** /rbs/v1/plans | Create a Plan
[**deactivatePlan**](PlansApi.md#deactivatePlan) | **POST** /rbs/v1/plans/{id}/deactivate | Deactivate a Plan
[**deletePlan**](PlansApi.md#deletePlan) | **DELETE** /rbs/v1/plans/{id} | Delete a Plan
[**getPlan**](PlansApi.md#getPlan) | **GET** /rbs/v1/plans/{id} | Get a Plan
[**getPlanCode**](PlansApi.md#getPlanCode) | **GET** /rbs/v1/plans/code | Get a Plan Code
[**getPlans**](PlansApi.md#getPlans) | **GET** /rbs/v1/plans | Get a List of Plans
[**updatePlan**](PlansApi.md#updatePlan) | **PATCH** /rbs/v1/plans/{id} | Update a Plan


# **activatePlan**
> \CyberSource\Model\InlineResponse2004 activatePlan($id)

Activate a Plan

Activate a Plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PlansApi();
$id = "id_example"; // string | Plan Id

try {
    $result = $api_instance->activatePlan($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->activatePlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Plan Id |

### Return type

[**\CyberSource\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPlan**
> \CyberSource\Model\InlineResponse201 createPlan($createPlanRequest)

Create a Plan

The recurring billing service enables you to manage payment plans and subscriptions for recurring payment schedules. It securely stores your customer's payment information and personal data within secure Visa data centers, reducing storage risks and PCI DSS scope through the use of *Token Management* (*TMS*).  The three key elements of *Cybersource* Recurring Billing are:  -  **Token**: stores customer billing, shipping, and payment details.  -  **Plan**: stores the billing schedule.  -  **Subscription**: combines the token and plan, and defines the subscription start date, name, and description.  The APIs in this section demonstrate the management of the Plans and Subscriptions. For Tokens please refer to [Token Management](#token-management)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PlansApi();
$createPlanRequest = new \CyberSource\Model\CreatePlanRequest(); // \CyberSource\Model\CreatePlanRequest | 

try {
    $result = $api_instance->createPlan($createPlanRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->createPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createPlanRequest** | [**\CyberSource\Model\CreatePlanRequest**](../Model/CreatePlanRequest.md)|  |

### Return type

[**\CyberSource\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deactivatePlan**
> \CyberSource\Model\InlineResponse2004 deactivatePlan($id)

Deactivate a Plan

Deactivate a Plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PlansApi();
$id = "id_example"; // string | Plan Id

try {
    $result = $api_instance->deactivatePlan($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->deactivatePlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Plan Id |

### Return type

[**\CyberSource\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePlan**
> \CyberSource\Model\InlineResponse2002 deletePlan($id)

Delete a Plan

Delete a Plan is only allowed: - plan status is in `DRAFT` - plan status is in `ACTIVE`, and `INACTIVE` only allowed when no subscriptions attached to a plan in the lifetime of a plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PlansApi();
$id = "id_example"; // string | Plan Id

try {
    $result = $api_instance->deletePlan($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->deletePlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Plan Id |

### Return type

[**\CyberSource\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPlan**
> \CyberSource\Model\InlineResponse2001 getPlan($id)

Get a Plan

Retrieve a Plan details by Plan Id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PlansApi();
$id = "id_example"; // string | Plan Id

try {
    $result = $api_instance->getPlan($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->getPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Plan Id |

### Return type

[**\CyberSource\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPlanCode**
> \CyberSource\Model\InlineResponse2005 getPlanCode()

Get a Plan Code

Get a Unique Plan Code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PlansApi();

try {
    $result = $api_instance->getPlanCode();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->getPlanCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\CyberSource\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPlans**
> \CyberSource\Model\InlineResponse200 getPlans($offset, $limit, $code, $status, $name)

Get a List of Plans

Retrieve Plans by Plan Code & Plan Status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PlansApi();
$offset = 56; // int | Page offset number.
$limit = 56; // int | Number of items to be returned. Default - `20`, Max - `100`
$code = "code_example"; // string | Filter by Plan Code
$status = "status_example"; // string | Filter by Plan Status
$name = "name_example"; // string | Filter by Plan Name. (First sub string or full string) **[Not Recommended]**

try {
    $result = $api_instance->getPlans($offset, $limit, $code, $status, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->getPlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Page offset number. | [optional]
 **limit** | **int**| Number of items to be returned. Default - &#x60;20&#x60;, Max - &#x60;100&#x60; | [optional]
 **code** | **string**| Filter by Plan Code | [optional]
 **status** | **string**| Filter by Plan Status | [optional]
 **name** | **string**| Filter by Plan Name. (First sub string or full string) **[Not Recommended]** | [optional]

### Return type

[**\CyberSource\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePlan**
> \CyberSource\Model\InlineResponse2003 updatePlan($id, $updatePlanRequest)

Update a Plan

Update a Plan  Plan in `DRAFT` status - All updates are allowed on Plan with `DRAFT` status  Plan in `ACTIVE` status [Following fields are **Not Updatable**] - `planInformation.billingPeriod` - `planInformation.billingCycles` [Update is only allowed to **increase** billingCycles] - `orderInformation.amountDetails.currency`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PlansApi();
$id = "id_example"; // string | Plan Id
$updatePlanRequest = new \CyberSource\Model\UpdatePlanRequest(); // \CyberSource\Model\UpdatePlanRequest | 

try {
    $result = $api_instance->updatePlan($id, $updatePlanRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->updatePlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Plan Id |
 **updatePlanRequest** | [**\CyberSource\Model\UpdatePlanRequest**](../Model/UpdatePlanRequest.md)|  |

### Return type

[**\CyberSource\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

