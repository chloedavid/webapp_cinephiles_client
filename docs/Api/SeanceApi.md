# Swagger\Client\SeanceApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSeanceByID**](SeanceApi.md#getSeanceByID) | **GET** /seances/{id} | Retourne la seance correspondant à l&#39;id
[**getSeances**](SeanceApi.md#getSeances) | **GET** /seances | Retourne toutes les seances
[**postSeances**](SeanceApi.md#postSeances) | **POST** /seances | Crée des seances


# **getSeanceByID**
> \Swagger\Client\Model\Seance getSeanceByID($id)

Retourne la seance correspondant à l'id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\SeanceApi();
$id = 56; // int | 

try {
    $result = $api_instance->getSeanceByID($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeanceApi->getSeanceByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\Seance**](../Model/Seance.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSeances**
> \Swagger\Client\Model\Seance[] getSeances()

Retourne toutes les seances

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\SeanceApi();

try {
    $result = $api_instance->getSeances();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeanceApi->getSeances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Seance[]**](../Model/Seance.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSeances**
> \Swagger\Client\Model\Seance postSeances($seance)

Crée des seances

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\SeanceApi();
$seance = new \Swagger\Client\Model\Seance(); // \Swagger\Client\Model\Seance | Les nouvelles seances

try {
    $result = $api_instance->postSeances($seance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeanceApi->postSeances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seance** | [**\Swagger\Client\Model\Seance**](../Model/Seance.md)| Les nouvelles seances | [optional]

### Return type

[**\Swagger\Client\Model\Seance**](../Model/Seance.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, text/html
 - **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

