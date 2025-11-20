# OpenAPI\Client\MetadataApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMetadataEntitiesList()**](MetadataApi.md#getMetadataEntitiesList) | **GET** /open-api/v3/metadata/entities | Get list of all entities. |
| [**getMetadataIconsList()**](MetadataApi.md#getMetadataIconsList) | **GET** /open-api/v3/metadata/icons | Get list of all icons. |
| [**metadataEntityClass()**](MetadataApi.md#metadataEntityClass) | **GET** /open-api/v3/metadata/entity/{class} | Get the metadata of a given entity class. |


## `getMetadataEntitiesList()`

```php
getMetadataEntitiesList(): \OpenAPI\Client\Model\MetadataEntitiesList
```

Get list of all entities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMetadataEntitiesList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->getMetadataEntitiesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\MetadataEntitiesList**](../Model/MetadataEntitiesList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMetadataIconsList()`

```php
getMetadataIconsList(): \OpenAPI\Client\Model\MetadataIconsList
```

Get list of all icons.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMetadataIconsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->getMetadataIconsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\MetadataIconsList**](../Model/MetadataIconsList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metadataEntityClass()`

```php
metadataEntityClass($UNKNOWN_PARAMETER_NAME, $UNKNOWN_PARAMETER_NAME2, $UNKNOWN_PARAMETER_NAME3, $UNKNOWN_PARAMETER_NAME4)
```

Get the metadata of a given entity class.

Get the metadata of a given entity class.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$UNKNOWN_PARAMETER_NAME = new \OpenAPI\Client\Model\null(); //  | Class Name (ex: PHPReaction\\Entity\\InvoiceBundle\\Invoice)
$UNKNOWN_PARAMETER_NAME2 = new \OpenAPI\Client\Model\null(); //  | Serialization group(s) (ex: invoiceListing). Used to filter the fields for the given group. Ex: invoiceListing will show only fields serialized for invoiceListing.
$UNKNOWN_PARAMETER_NAME3 = new \OpenAPI\Client\Model\null(); //  | Get specific section(s) of the response. (ex: fields)
$UNKNOWN_PARAMETER_NAME4 = new \OpenAPI\Client\Model\null(); //  | Get only required fields (bool value, ex: true)

try {
    $apiInstance->metadataEntityClass($UNKNOWN_PARAMETER_NAME, $UNKNOWN_PARAMETER_NAME2, $UNKNOWN_PARAMETER_NAME3, $UNKNOWN_PARAMETER_NAME4);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->metadataEntityClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **UNKNOWN_PARAMETER_NAME** | [****](../Model/.md)| Class Name (ex: PHPReaction\\Entity\\InvoiceBundle\\Invoice) | |
| **UNKNOWN_PARAMETER_NAME2** | [****](../Model/.md)| Serialization group(s) (ex: invoiceListing). Used to filter the fields for the given group. Ex: invoiceListing will show only fields serialized for invoiceListing. | [optional] |
| **UNKNOWN_PARAMETER_NAME3** | [****](../Model/.md)| Get specific section(s) of the response. (ex: fields) | [optional] |
| **UNKNOWN_PARAMETER_NAME4** | [****](../Model/.md)| Get only required fields (bool value, ex: true) | [optional] |

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
