# OpenAPI\Client\UserRolesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiUserRolesGetCollection()**](UserRolesApi.md#apiUserRolesGetCollection) | **GET** /open-api/v3/user_roles | Retrieves the collection of user_roles resources. |
| [**apiUserRolesIdDelete()**](UserRolesApi.md#apiUserRolesIdDelete) | **DELETE** /open-api/v3/user_roles/{id} | Removes the user_roles resource. |
| [**apiUserRolesIdGet()**](UserRolesApi.md#apiUserRolesIdGet) | **GET** /open-api/v3/user_roles/{id} | Retrieves a user_roles resource. |
| [**apiUserRolesPost()**](UserRolesApi.md#apiUserRolesPost) | **POST** /open-api/v3/user_roles | Creates a user_roles resource. |
| [**userRoleApiFileUpload()**](UserRolesApi.md#userRoleApiFileUpload) | **POST** /open-api/v3/user_roles/{id}/file/upload | Creates a user_roles resource. |
| [**userRoleDropDown()**](UserRolesApi.md#userRoleDropDown) | **GET** /open-api/v3/user_roles/dropdown/get | Retrieves the collection of user_roles resources. |
| [**userRoleDuplicate()**](UserRolesApi.md#userRoleDuplicate) | **GET** /open-api/v3/user_roles/duplicate/{id} | Retrieves a user_roles resource. |
| [**userRoleFetchFiles()**](UserRolesApi.md#userRoleFetchFiles) | **GET** /open-api/v3/user_roles/fetch_files/{id} | Retrieves a user_roles resource. |
| [**userRoleGetBySlug()**](UserRolesApi.md#userRoleGetBySlug) | **GET** /open-api/v3/user_roles/by_slug/{slug} | Retrieves a user_roles resource. |
| [**userRoleGetDeleteRelations()**](UserRolesApi.md#userRoleGetDeleteRelations) | **GET** /open-api/v3/user_roles/get_delete_relations/{id} | Retrieves a user_roles resource. |
| [**userRoleMetadata()**](UserRolesApi.md#userRoleMetadata) | **GET** /open-api/v3/user_roles/metadata/{id} | Retrieves a user_roles resource. |


## `apiUserRolesGetCollection()`

```php
apiUserRolesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $name, $name2, $role, $role2, $search, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $role_partial, $role_start_with, $role_end_with, $title_partial, $title_start_with, $title_end_with): \OpenAPI\Client\Model\ApiUserRolesGetCollection200Response
```

Retrieves the collection of user_roles resources.

Retrieves the collection of user_roles resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$updated_at_before = 'updated_at_before_example'; // string | 
$updated_at_strictly_before = 'updated_at_strictly_before_example'; // string | 
$updated_at_after = 'updated_at_after_example'; // string | 
$updated_at_strictly_after = 'updated_at_strictly_after_example'; // string | 
$created_at_before = 'created_at_before_example'; // string | 
$created_at_strictly_before = 'created_at_strictly_before_example'; // string | 
$created_at_after = 'created_at_after_example'; // string | 
$created_at_strictly_after = 'created_at_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$name = 'name_example'; // string | 
$name2 = array('name_example'); // string[] | 
$role = 'role_example'; // string | 
$role2 = array('role_example'); // string[] | 
$search = 'search_example'; // string | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | user_roles slug_partial
$slug_start_with = 'slug_start_with_example'; // string | user_roles slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | user_roles slug_end_with
$id_partial = 'id_partial_example'; // string | user_roles id_partial
$id_start_with = 'id_start_with_example'; // string | user_roles id_start_with
$id_end_with = 'id_end_with_example'; // string | user_roles id_end_with
$name_partial = 'name_partial_example'; // string | user_roles name_partial
$name_start_with = 'name_start_with_example'; // string | user_roles name_start_with
$name_end_with = 'name_end_with_example'; // string | user_roles name_end_with
$role_partial = 'role_partial_example'; // string | user_roles role_partial
$role_start_with = 'role_start_with_example'; // string | user_roles role_start_with
$role_end_with = 'role_end_with_example'; // string | user_roles role_end_with
$title_partial = 'title_partial_example'; // string | user_roles title_partial
$title_start_with = 'title_start_with_example'; // string | user_roles title_start_with
$title_end_with = 'title_end_with_example'; // string | user_roles title_end_with

try {
    $result = $apiInstance->apiUserRolesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $name, $name2, $role, $role2, $search, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $role_partial, $role_start_with, $role_end_with, $title_partial, $title_start_with, $title_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRolesApi->apiUserRolesGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **updated_at_before** | **string**|  | [optional] |
| **updated_at_strictly_before** | **string**|  | [optional] |
| **updated_at_after** | **string**|  | [optional] |
| **updated_at_strictly_after** | **string**|  | [optional] |
| **created_at_before** | **string**|  | [optional] |
| **created_at_strictly_before** | **string**|  | [optional] |
| **created_at_after** | **string**|  | [optional] |
| **created_at_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **name** | **string**|  | [optional] |
| **name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **role** | **string**|  | [optional] |
| **role2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| user_roles slug_partial | [optional] |
| **slug_start_with** | **string**| user_roles slug_start_with | [optional] |
| **slug_end_with** | **string**| user_roles slug_end_with | [optional] |
| **id_partial** | **string**| user_roles id_partial | [optional] |
| **id_start_with** | **string**| user_roles id_start_with | [optional] |
| **id_end_with** | **string**| user_roles id_end_with | [optional] |
| **name_partial** | **string**| user_roles name_partial | [optional] |
| **name_start_with** | **string**| user_roles name_start_with | [optional] |
| **name_end_with** | **string**| user_roles name_end_with | [optional] |
| **role_partial** | **string**| user_roles role_partial | [optional] |
| **role_start_with** | **string**| user_roles role_start_with | [optional] |
| **role_end_with** | **string**| user_roles role_end_with | [optional] |
| **title_partial** | **string**| user_roles title_partial | [optional] |
| **title_start_with** | **string**| user_roles title_start_with | [optional] |
| **title_end_with** | **string**| user_roles title_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiUserRolesGetCollection200Response**](../Model/ApiUserRolesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUserRolesIdDelete()`

```php
apiUserRolesIdDelete($id)
```

Removes the user_roles resource.

Removes the user_roles resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | user_roles identifier

try {
    $apiInstance->apiUserRolesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling UserRolesApi->apiUserRolesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| user_roles identifier | |

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

## `apiUserRolesIdGet()`

```php
apiUserRolesIdGet($id): \OpenAPI\Client\Model\UserRolesJsonldUserRoleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a user_roles resource.

Retrieves a user_roles resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | user_roles identifier

try {
    $result = $apiInstance->apiUserRolesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRolesApi->apiUserRolesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| user_roles identifier | |

### Return type

[**\OpenAPI\Client\Model\UserRolesJsonldUserRoleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/UserRolesJsonldUserRoleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUserRolesPost()`

```php
apiUserRolesPost($user_roles_jsonld_add_post): \OpenAPI\Client\Model\UserRolesJsonldUserRoleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a user_roles resource.

Creates a user_roles resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_roles_jsonld_add_post = new \OpenAPI\Client\Model\UserRolesJsonldAddPost(); // \OpenAPI\Client\Model\UserRolesJsonldAddPost | The new user_roles resource

try {
    $result = $apiInstance->apiUserRolesPost($user_roles_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRolesApi->apiUserRolesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_roles_jsonld_add_post** | [**\OpenAPI\Client\Model\UserRolesJsonldAddPost**](../Model/UserRolesJsonldAddPost.md)| The new user_roles resource | |

### Return type

[**\OpenAPI\Client\Model\UserRolesJsonldUserRoleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/UserRolesJsonldUserRoleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userRoleApiFileUpload()`

```php
userRoleApiFileUpload($id, $user_roles_jsonld): \OpenAPI\Client\Model\UserRolesJsonldUserRoleShowIdTimestampableTagTaggingListStandardShow
```

Creates a user_roles resource.

Creates a user_roles resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | user_roles identifier
$user_roles_jsonld = new \OpenAPI\Client\Model\UserRolesJsonld(); // \OpenAPI\Client\Model\UserRolesJsonld | The new user_roles resource

try {
    $result = $apiInstance->userRoleApiFileUpload($id, $user_roles_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRolesApi->userRoleApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| user_roles identifier | |
| **user_roles_jsonld** | [**\OpenAPI\Client\Model\UserRolesJsonld**](../Model/UserRolesJsonld.md)| The new user_roles resource | |

### Return type

[**\OpenAPI\Client\Model\UserRolesJsonldUserRoleShowIdTimestampableTagTaggingListStandardShow**](../Model/UserRolesJsonldUserRoleShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userRoleDropDown()`

```php
userRoleDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $name, $name2, $role, $role2, $search, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $role_partial, $role_start_with, $role_end_with): \OpenAPI\Client\Model\UserRoleDropDown200Response
```

Retrieves the collection of user_roles resources.

Retrieves the collection of user_roles resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$updated_at_before = 'updated_at_before_example'; // string | 
$updated_at_strictly_before = 'updated_at_strictly_before_example'; // string | 
$updated_at_after = 'updated_at_after_example'; // string | 
$updated_at_strictly_after = 'updated_at_strictly_after_example'; // string | 
$created_at_before = 'created_at_before_example'; // string | 
$created_at_strictly_before = 'created_at_strictly_before_example'; // string | 
$created_at_after = 'created_at_after_example'; // string | 
$created_at_strictly_after = 'created_at_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$name = 'name_example'; // string | 
$name2 = array('name_example'); // string[] | 
$role = 'role_example'; // string | 
$role2 = array('role_example'); // string[] | 
$search = 'search_example'; // string | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | user_roles slug_partial
$slug_start_with = 'slug_start_with_example'; // string | user_roles slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | user_roles slug_end_with
$id_partial = 'id_partial_example'; // string | user_roles id_partial
$id_start_with = 'id_start_with_example'; // string | user_roles id_start_with
$id_end_with = 'id_end_with_example'; // string | user_roles id_end_with
$name_partial = 'name_partial_example'; // string | user_roles name_partial
$name_start_with = 'name_start_with_example'; // string | user_roles name_start_with
$name_end_with = 'name_end_with_example'; // string | user_roles name_end_with
$role_partial = 'role_partial_example'; // string | user_roles role_partial
$role_start_with = 'role_start_with_example'; // string | user_roles role_start_with
$role_end_with = 'role_end_with_example'; // string | user_roles role_end_with

try {
    $result = $apiInstance->userRoleDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $name, $name2, $role, $role2, $search, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $role_partial, $role_start_with, $role_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRolesApi->userRoleDropDown: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **updated_at_before** | **string**|  | [optional] |
| **updated_at_strictly_before** | **string**|  | [optional] |
| **updated_at_after** | **string**|  | [optional] |
| **updated_at_strictly_after** | **string**|  | [optional] |
| **created_at_before** | **string**|  | [optional] |
| **created_at_strictly_before** | **string**|  | [optional] |
| **created_at_after** | **string**|  | [optional] |
| **created_at_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **name** | **string**|  | [optional] |
| **name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **role** | **string**|  | [optional] |
| **role2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| user_roles slug_partial | [optional] |
| **slug_start_with** | **string**| user_roles slug_start_with | [optional] |
| **slug_end_with** | **string**| user_roles slug_end_with | [optional] |
| **id_partial** | **string**| user_roles id_partial | [optional] |
| **id_start_with** | **string**| user_roles id_start_with | [optional] |
| **id_end_with** | **string**| user_roles id_end_with | [optional] |
| **name_partial** | **string**| user_roles name_partial | [optional] |
| **name_start_with** | **string**| user_roles name_start_with | [optional] |
| **name_end_with** | **string**| user_roles name_end_with | [optional] |
| **role_partial** | **string**| user_roles role_partial | [optional] |
| **role_start_with** | **string**| user_roles role_start_with | [optional] |
| **role_end_with** | **string**| user_roles role_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserRoleDropDown200Response**](../Model/UserRoleDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userRoleDuplicate()`

```php
userRoleDuplicate($id): \OpenAPI\Client\Model\UserRolesJsonldUserRoleShowIdTimestampableTagTaggingList
```

Retrieves a user_roles resource.

Retrieves a user_roles resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | user_roles identifier

try {
    $result = $apiInstance->userRoleDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRolesApi->userRoleDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| user_roles identifier | |

### Return type

[**\OpenAPI\Client\Model\UserRolesJsonldUserRoleShowIdTimestampableTagTaggingList**](../Model/UserRolesJsonldUserRoleShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userRoleFetchFiles()`

```php
userRoleFetchFiles($id): \OpenAPI\Client\Model\UserRolesJsonld
```

Retrieves a user_roles resource.

Retrieves a user_roles resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | user_roles identifier

try {
    $result = $apiInstance->userRoleFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRolesApi->userRoleFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| user_roles identifier | |

### Return type

[**\OpenAPI\Client\Model\UserRolesJsonld**](../Model/UserRolesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userRoleGetBySlug()`

```php
userRoleGetBySlug($slug): \OpenAPI\Client\Model\UserRolesJsonldUserRoleShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a user_roles resource.

Retrieves a user_roles resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | user_roles identifier

try {
    $result = $apiInstance->userRoleGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRolesApi->userRoleGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| user_roles identifier | |

### Return type

[**\OpenAPI\Client\Model\UserRolesJsonldUserRoleShowIdCustomPropertyTimestampableTagTaggingList**](../Model/UserRolesJsonldUserRoleShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userRoleGetDeleteRelations()`

```php
userRoleGetDeleteRelations($id): \OpenAPI\Client\Model\UserRolesJsonldUserRoleRelations
```

Retrieves a user_roles resource.

Retrieves a user_roles resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | user_roles identifier

try {
    $result = $apiInstance->userRoleGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRolesApi->userRoleGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| user_roles identifier | |

### Return type

[**\OpenAPI\Client\Model\UserRolesJsonldUserRoleRelations**](../Model/UserRolesJsonldUserRoleRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userRoleMetadata()`

```php
userRoleMetadata($id): \OpenAPI\Client\Model\UserRolesJsonldIdStandardMetadataUserRoleMetadataTagTaggingListUserRoleRelationsTimestampable
```

Retrieves a user_roles resource.

Retrieves a user_roles resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | user_roles identifier

try {
    $result = $apiInstance->userRoleMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRolesApi->userRoleMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| user_roles identifier | |

### Return type

[**\OpenAPI\Client\Model\UserRolesJsonldIdStandardMetadataUserRoleMetadataTagTaggingListUserRoleRelationsTimestampable**](../Model/UserRolesJsonldIdStandardMetadataUserRoleMetadataTagTaggingListUserRoleRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
