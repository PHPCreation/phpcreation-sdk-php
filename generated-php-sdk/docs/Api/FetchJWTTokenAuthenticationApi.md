# OpenAPI\Client\FetchJWTTokenAuthenticationApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**openApiLoginCheck()**](FetchJWTTokenAuthenticationApi.md#openApiLoginCheck) | **POST** /open-api/login_check | Creates a user token. |


## `openApiLoginCheck()`

```php
openApiLoginCheck($open_api_login_check_request, $UNKNOWN_PARAMETER_NAME): \OpenAPI\Client\Model\OpenApiLoginCheck200Response
```

Creates a user token.

Creates a user token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FetchJWTTokenAuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$open_api_login_check_request = new \OpenAPI\Client\Model\OpenApiLoginCheckRequest(); // \OpenAPI\Client\Model\OpenApiLoginCheckRequest | The login data
$UNKNOWN_PARAMETER_NAME = Basic {Base64 encoded username:password}; //  | Basic Authorization (Not working when executing request here, but should be used outside of swagger instead of request body.)

try {
    $result = $apiInstance->openApiLoginCheck($open_api_login_check_request, $UNKNOWN_PARAMETER_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FetchJWTTokenAuthenticationApi->openApiLoginCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **open_api_login_check_request** | [**\OpenAPI\Client\Model\OpenApiLoginCheckRequest**](../Model/OpenApiLoginCheckRequest.md)| The login data | |
| **UNKNOWN_PARAMETER_NAME** | [****](../Model/.md)| Basic Authorization (Not working when executing request here, but should be used outside of swagger instead of request body.) | [optional] |

### Return type

[**\OpenAPI\Client\Model\OpenApiLoginCheck200Response**](../Model/OpenApiLoginCheck200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
