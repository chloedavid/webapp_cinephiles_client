# Swagger\Client\CategorieApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCategorieByID**](CategorieApi.md#getCategorieByID) | **GET** /categories/{id} | Retourne la catégorie correspondant à l&#39;id
[**getCategories**](CategorieApi.md#getCategories) | **GET** /categories | Retourne toutes les categories
[**postCategories**](CategorieApi.md#postCategories) | **POST** /categories | Crée des categories


# **getCategorieByID**
> \Swagger\Client\Model\Categorie getCategorieByID($id)

Retourne la catégorie correspondant à l'id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\CategorieApi();
$id = 56; // int | 

try {
    $result = $api_instance->getCategorieByID($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategorieApi->getCategorieByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\Categorie**](../Model/Categorie.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCategories**
> \Swagger\Client\Model\Categorie[] getCategories()

Retourne toutes les categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\CategorieApi();

try {
    $result = $api_instance->getCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategorieApi->getCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Categorie[]**](../Model/Categorie.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCategories**
> \Swagger\Client\Model\Categorie postCategories($adherent)

Crée des categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\CategorieApi();
$adherent = new \Swagger\Client\Model\Categorie(); // \Swagger\Client\Model\Categorie | Les nouvelles categories

try {
    $result = $api_instance->postCategories($adherent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategorieApi->postCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adherent** | [**\Swagger\Client\Model\Categorie**](../Model/Categorie.md)| Les nouvelles categories | [optional]

### Return type

[**\Swagger\Client\Model\Categorie**](../Model/Categorie.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, text/html
 - **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

