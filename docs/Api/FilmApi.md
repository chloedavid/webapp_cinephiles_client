# Swagger\Client\FilmApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFilmByID**](FilmApi.md#getFilmByID) | **GET** /films/{id} | Retourne le film correspondant à l&#39;id
[**getFilms**](FilmApi.md#getFilms) | **GET** /films | Retourne tous les films
[**postFilms**](FilmApi.md#postFilms) | **POST** /films | Crée des films


# **getFilmByID**
> \Swagger\Client\Model\Film getFilmByID($id)

Retourne le film correspondant à l'id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\FilmApi();
$id = 56; // int | 

try {
    $result = $api_instance->getFilmByID($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilmApi->getFilmByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\Film**](../Model/Film.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFilms**
> \Swagger\Client\Model\Film[] getFilms()

Retourne tous les films

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\FilmApi();

try {
    $result = $api_instance->getFilms();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilmApi->getFilms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Film[]**](../Model/Film.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFilms**
> \Swagger\Client\Model\Cinema postFilms($film)

Crée des films

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\FilmApi();
$film = new \Swagger\Client\Model\Film(); // \Swagger\Client\Model\Film | Les nouveaux films

try {
    $result = $api_instance->postFilms($film);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilmApi->postFilms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **film** | [**\Swagger\Client\Model\Film**](../Model/Film.md)| Les nouveaux films | [optional]

### Return type

[**\Swagger\Client\Model\Cinema**](../Model/Cinema.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, text/html
 - **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

