# Swagger\Client\AdherentApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAdherentByID**](AdherentApi.md#getAdherentByID) | **GET** /adherents/{id} | Retourne l&#39;adhérent correspondant à l&#39;id
[**getAdherents**](AdherentApi.md#getAdherents) | **GET** /adherents | Retourne tous les adherents
[**postAdherents**](AdherentApi.md#postAdherents) | **POST** /adherents | Crée des adherents


# **getAdherentByID**
> \Swagger\Client\Model\Adherent getAdherentByID($id)

Retourne l'adhérent correspondant à l'id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdherentApi();
$id = 56; // int | 

try {
    $result = $api_instance->getAdherentByID($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdherentApi->getAdherentByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\Adherent**](../Model/Adherent.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdherents**
> \Swagger\Client\Model\Adherent[] getAdherents()

Retourne tous les adherents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdherentApi();

try {
    $result = $api_instance->getAdherents();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdherentApi->getAdherents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Adherent[]**](../Model/Adherent.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAdherents**
> \Swagger\Client\Model\Adherent postAdherents($adherent)

Crée des adherents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdherentApi();
$adherent = new \Swagger\Client\Model\Adherent(); // \Swagger\Client\Model\Adherent | Les nouveaux adherents

try {
    $result = $api_instance->postAdherents($adherent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdherentApi->postAdherents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adherent** | [**\Swagger\Client\Model\Adherent**](../Model/Adherent.md)| Les nouveaux adherents | [optional]

### Return type

[**\Swagger\Client\Model\Adherent**](../Model/Adherent.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, text/html
 - **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

