# Swagger\Client\CinemaApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCinemaByID**](CinemaApi.md#getCinemaByID) | **GET** /cinemas/{id} | Retourne le cinéma correspondant à l&#39;id
[**getCinemas**](CinemaApi.md#getCinemas) | **GET** /cinemas | Retourne tous les cinémas
[**postCinemas**](CinemaApi.md#postCinemas) | **POST** /cinemas | Crée des cinémas


# **getCinemaByID**
> \Swagger\Client\Model\Cinema getCinemaByID($id)

Retourne le cinéma correspondant à l'id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\CinemaApi();
$id = 56; // int | 

try {
    $result = $api_instance->getCinemaByID($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CinemaApi->getCinemaByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\Cinema**](../Model/Cinema.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCinemas**
> \Swagger\Client\Model\Cinema[] getCinemas()

Retourne tous les cinémas

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\CinemaApi();

try {
    $result = $api_instance->getCinemas();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CinemaApi->getCinemas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Cinema[]**](../Model/Cinema.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCinemas**
> \Swagger\Client\Model\Cinema postCinemas($cinema)

Crée des cinémas

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\CinemaApi();
$cinema = new \Swagger\Client\Model\Cinema(); // \Swagger\Client\Model\Cinema | Les nouveaux cinémas

try {
    $result = $api_instance->postCinemas($cinema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CinemaApi->postCinemas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cinema** | [**\Swagger\Client\Model\Cinema**](../Model/Cinema.md)| Les nouveaux cinémas | [optional]

### Return type

[**\Swagger\Client\Model\Cinema**](../Model/Cinema.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, text/html
 - **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

