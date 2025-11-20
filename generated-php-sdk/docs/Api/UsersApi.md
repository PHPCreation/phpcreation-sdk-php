# OpenAPI\Client\UsersApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiUsersGetCollection()**](UsersApi.md#apiUsersGetCollection) | **GET** /open-api/v3/users | Retrieves the collection of users resources. |
| [**apiUsersIdDelete()**](UsersApi.md#apiUsersIdDelete) | **DELETE** /open-api/v3/users/{id} | Removes the users resource. |
| [**apiUsersIdGet()**](UsersApi.md#apiUsersIdGet) | **GET** /open-api/v3/users/{id} | Retrieves a users resource. |
| [**apiUsersIdPut()**](UsersApi.md#apiUsersIdPut) | **PUT** /open-api/v3/users/{id} | Replaces the users resource. |
| [**apiUsersPost()**](UsersApi.md#apiUsersPost) | **POST** /open-api/v3/users | Creates a users resource. |
| [**apiUsersloggedUserchangePasswordPut()**](UsersApi.md#apiUsersloggedUserchangePasswordPut) | **PUT** /open-api/v3/users/logged_user/change_password | Replaces the users resource. |
| [**userApiFileUpload()**](UsersApi.md#userApiFileUpload) | **POST** /open-api/v3/users/{id}/file/upload | Creates a users resource. |
| [**userDropDown()**](UsersApi.md#userDropDown) | **GET** /open-api/v3/users/dropdown/get | Retrieves the collection of users resources. |
| [**userDuplicate()**](UsersApi.md#userDuplicate) | **GET** /open-api/v3/users/duplicate/{id} | Retrieves a users resource. |
| [**userFetchFiles()**](UsersApi.md#userFetchFiles) | **GET** /open-api/v3/users/fetch_files/{id} | Retrieves a users resource. |
| [**userGetBySlug()**](UsersApi.md#userGetBySlug) | **GET** /open-api/v3/users/by_slug/{slug} | Retrieves a users resource. |
| [**userGetDeleteRelations()**](UsersApi.md#userGetDeleteRelations) | **GET** /open-api/v3/users/get_delete_relations/{id} | Retrieves a users resource. |
| [**userGetSelfCorporations()**](UsersApi.md#userGetSelfCorporations) | **GET** /open-api/v3/users/logged_user_corporations/get | Retrieves the collection of users resources. |
| [**userGetSelfInformations()**](UsersApi.md#userGetSelfInformations) | **GET** /open-api/v3/users/logged_user_informations/get | Retrieves the collection of users resources. |
| [**userGetSelfKVS()**](UsersApi.md#userGetSelfKVS) | **GET** /open-api/v3/users/logged_user_kvs/get | Retrieves the collection of users resources. |
| [**userGetSelfRoles()**](UsersApi.md#userGetSelfRoles) | **GET** /open-api/v3/users/logged_user_roles/get | Retrieves the collection of users resources. |
| [**userMetadata()**](UsersApi.md#userMetadata) | **GET** /open-api/v3/users/metadata/{id} | Retrieves a users resource. |


## `apiUsersGetCollection()`

```php
apiUsersGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $last_login_before, $last_login_strictly_before, $last_login_after, $last_login_strictly_after, $id, $id2, $slug, $slug2, $username, $username2, $email, $email2, $password, $password2, $person, $person2, $search, $enabled, $order_id, $order_created_at, $order_updated_at, $properties, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $username_partial, $username_start_with, $username_end_with, $email_partial, $email_start_with, $email_end_with, $canonical_username_partial, $canonical_username_start_with, $canonical_username_end_with, $canonical_email_partial, $canonical_email_start_with, $canonical_email_end_with): \OpenAPI\Client\Model\ApiUsersGetCollection200Response
```

Retrieves the collection of users resources.

Retrieves the collection of users resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
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
$last_login_before = 'last_login_before_example'; // string | 
$last_login_strictly_before = 'last_login_strictly_before_example'; // string | 
$last_login_after = 'last_login_after_example'; // string | 
$last_login_strictly_after = 'last_login_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$username = 'username_example'; // string | 
$username2 = array('username_example'); // string[] | 
$email = 'email_example'; // string | 
$email2 = array('email_example'); // string[] | 
$password = 'password_example'; // string | 
$password2 = array('password_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$search = 'search_example'; // string | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | users slug_partial
$slug_start_with = 'slug_start_with_example'; // string | users slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | users slug_end_with
$id_partial = 'id_partial_example'; // string | users id_partial
$id_start_with = 'id_start_with_example'; // string | users id_start_with
$id_end_with = 'id_end_with_example'; // string | users id_end_with
$username_partial = 'username_partial_example'; // string | users username_partial
$username_start_with = 'username_start_with_example'; // string | users username_start_with
$username_end_with = 'username_end_with_example'; // string | users username_end_with
$email_partial = 'email_partial_example'; // string | users email_partial
$email_start_with = 'email_start_with_example'; // string | users email_start_with
$email_end_with = 'email_end_with_example'; // string | users email_end_with
$canonical_username_partial = 'canonical_username_partial_example'; // string | users canonicalUsername_partial
$canonical_username_start_with = 'canonical_username_start_with_example'; // string | users canonicalUsername_start_with
$canonical_username_end_with = 'canonical_username_end_with_example'; // string | users canonicalUsername_end_with
$canonical_email_partial = 'canonical_email_partial_example'; // string | users canonicalEmail_partial
$canonical_email_start_with = 'canonical_email_start_with_example'; // string | users canonicalEmail_start_with
$canonical_email_end_with = 'canonical_email_end_with_example'; // string | users canonicalEmail_end_with

try {
    $result = $apiInstance->apiUsersGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $last_login_before, $last_login_strictly_before, $last_login_after, $last_login_strictly_after, $id, $id2, $slug, $slug2, $username, $username2, $email, $email2, $password, $password2, $person, $person2, $search, $enabled, $order_id, $order_created_at, $order_updated_at, $properties, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $username_partial, $username_start_with, $username_end_with, $email_partial, $email_start_with, $email_end_with, $canonical_username_partial, $canonical_username_start_with, $canonical_username_end_with, $canonical_email_partial, $canonical_email_start_with, $canonical_email_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->apiUsersGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **last_login_before** | **string**|  | [optional] |
| **last_login_strictly_before** | **string**|  | [optional] |
| **last_login_after** | **string**|  | [optional] |
| **last_login_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **username** | **string**|  | [optional] |
| **username2** | [**string[]**](../Model/string.md)|  | [optional] |
| **email** | **string**|  | [optional] |
| **email2** | [**string[]**](../Model/string.md)|  | [optional] |
| **password** | **string**|  | [optional] |
| **password2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| users slug_partial | [optional] |
| **slug_start_with** | **string**| users slug_start_with | [optional] |
| **slug_end_with** | **string**| users slug_end_with | [optional] |
| **id_partial** | **string**| users id_partial | [optional] |
| **id_start_with** | **string**| users id_start_with | [optional] |
| **id_end_with** | **string**| users id_end_with | [optional] |
| **username_partial** | **string**| users username_partial | [optional] |
| **username_start_with** | **string**| users username_start_with | [optional] |
| **username_end_with** | **string**| users username_end_with | [optional] |
| **email_partial** | **string**| users email_partial | [optional] |
| **email_start_with** | **string**| users email_start_with | [optional] |
| **email_end_with** | **string**| users email_end_with | [optional] |
| **canonical_username_partial** | **string**| users canonicalUsername_partial | [optional] |
| **canonical_username_start_with** | **string**| users canonicalUsername_start_with | [optional] |
| **canonical_username_end_with** | **string**| users canonicalUsername_end_with | [optional] |
| **canonical_email_partial** | **string**| users canonicalEmail_partial | [optional] |
| **canonical_email_start_with** | **string**| users canonicalEmail_start_with | [optional] |
| **canonical_email_end_with** | **string**| users canonicalEmail_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiUsersGetCollection200Response**](../Model/ApiUsersGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUsersIdDelete()`

```php
apiUsersIdDelete($id)
```

Removes the users resource.

Removes the users resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | users identifier

try {
    $apiInstance->apiUsersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->apiUsersIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| users identifier | |

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

## `apiUsersIdGet()`

```php
apiUsersIdGet($id): \OpenAPI\Client\Model\UsersJsonldUserShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a users resource.

Retrieves a users resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | users identifier

try {
    $result = $apiInstance->apiUsersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->apiUsersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| users identifier | |

### Return type

[**\OpenAPI\Client\Model\UsersJsonldUserShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/UsersJsonldUserShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUsersIdPut()`

```php
apiUsersIdPut($id, $users_jsonld_add_post): \OpenAPI\Client\Model\UsersJsonldUserShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the users resource.

Replaces the users resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | users identifier
$users_jsonld_add_post = new \OpenAPI\Client\Model\UsersJsonldAddPost(); // \OpenAPI\Client\Model\UsersJsonldAddPost | The updated users resource

try {
    $result = $apiInstance->apiUsersIdPut($id, $users_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->apiUsersIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| users identifier | |
| **users_jsonld_add_post** | [**\OpenAPI\Client\Model\UsersJsonldAddPost**](../Model/UsersJsonldAddPost.md)| The updated users resource | |

### Return type

[**\OpenAPI\Client\Model\UsersJsonldUserShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/UsersJsonldUserShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUsersPost()`

```php
apiUsersPost($users_jsonld_add_post): \OpenAPI\Client\Model\UsersJsonldUserShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a users resource.

Creates a users resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$users_jsonld_add_post = new \OpenAPI\Client\Model\UsersJsonldAddPost(); // \OpenAPI\Client\Model\UsersJsonldAddPost | The new users resource

try {
    $result = $apiInstance->apiUsersPost($users_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->apiUsersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **users_jsonld_add_post** | [**\OpenAPI\Client\Model\UsersJsonldAddPost**](../Model/UsersJsonldAddPost.md)| The new users resource | |

### Return type

[**\OpenAPI\Client\Model\UsersJsonldUserShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/UsersJsonldUserShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUsersloggedUserchangePasswordPut()`

```php
apiUsersloggedUserchangePasswordPut($users_jsonld): \OpenAPI\Client\Model\UsersJsonldId
```

Replaces the users resource.

Replaces the users resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$users_jsonld = new \OpenAPI\Client\Model\UsersJsonld(); // \OpenAPI\Client\Model\UsersJsonld | The updated users resource

try {
    $result = $apiInstance->apiUsersloggedUserchangePasswordPut($users_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->apiUsersloggedUserchangePasswordPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **users_jsonld** | [**\OpenAPI\Client\Model\UsersJsonld**](../Model/UsersJsonld.md)| The updated users resource | |

### Return type

[**\OpenAPI\Client\Model\UsersJsonldId**](../Model/UsersJsonldId.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userApiFileUpload()`

```php
userApiFileUpload($id, $users_jsonld): \OpenAPI\Client\Model\UsersJsonldUserShowIdTimestampableTagTaggingListStandardShow
```

Creates a users resource.

Creates a users resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | users identifier
$users_jsonld = new \OpenAPI\Client\Model\UsersJsonld(); // \OpenAPI\Client\Model\UsersJsonld | The new users resource

try {
    $result = $apiInstance->userApiFileUpload($id, $users_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| users identifier | |
| **users_jsonld** | [**\OpenAPI\Client\Model\UsersJsonld**](../Model/UsersJsonld.md)| The new users resource | |

### Return type

[**\OpenAPI\Client\Model\UsersJsonldUserShowIdTimestampableTagTaggingListStandardShow**](../Model/UsersJsonldUserShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userDropDown()`

```php
userDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $last_login_before, $last_login_strictly_before, $last_login_after, $last_login_strictly_after, $id, $id2, $slug, $slug2, $username, $username2, $email, $email2, $password, $password2, $person, $person2, $search, $enabled, $order_id, $order_created_at, $order_updated_at, $properties, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $username_partial, $username_start_with, $username_end_with, $email_partial, $email_start_with, $email_end_with, $canonical_username_partial, $canonical_username_start_with, $canonical_username_end_with, $canonical_email_partial, $canonical_email_start_with, $canonical_email_end_with): \OpenAPI\Client\Model\UserDropDown200Response
```

Retrieves the collection of users resources.

Retrieves the collection of users resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
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
$last_login_before = 'last_login_before_example'; // string | 
$last_login_strictly_before = 'last_login_strictly_before_example'; // string | 
$last_login_after = 'last_login_after_example'; // string | 
$last_login_strictly_after = 'last_login_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$username = 'username_example'; // string | 
$username2 = array('username_example'); // string[] | 
$email = 'email_example'; // string | 
$email2 = array('email_example'); // string[] | 
$password = 'password_example'; // string | 
$password2 = array('password_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$search = 'search_example'; // string | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | users slug_partial
$slug_start_with = 'slug_start_with_example'; // string | users slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | users slug_end_with
$id_partial = 'id_partial_example'; // string | users id_partial
$id_start_with = 'id_start_with_example'; // string | users id_start_with
$id_end_with = 'id_end_with_example'; // string | users id_end_with
$username_partial = 'username_partial_example'; // string | users username_partial
$username_start_with = 'username_start_with_example'; // string | users username_start_with
$username_end_with = 'username_end_with_example'; // string | users username_end_with
$email_partial = 'email_partial_example'; // string | users email_partial
$email_start_with = 'email_start_with_example'; // string | users email_start_with
$email_end_with = 'email_end_with_example'; // string | users email_end_with
$canonical_username_partial = 'canonical_username_partial_example'; // string | users canonicalUsername_partial
$canonical_username_start_with = 'canonical_username_start_with_example'; // string | users canonicalUsername_start_with
$canonical_username_end_with = 'canonical_username_end_with_example'; // string | users canonicalUsername_end_with
$canonical_email_partial = 'canonical_email_partial_example'; // string | users canonicalEmail_partial
$canonical_email_start_with = 'canonical_email_start_with_example'; // string | users canonicalEmail_start_with
$canonical_email_end_with = 'canonical_email_end_with_example'; // string | users canonicalEmail_end_with

try {
    $result = $apiInstance->userDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $last_login_before, $last_login_strictly_before, $last_login_after, $last_login_strictly_after, $id, $id2, $slug, $slug2, $username, $username2, $email, $email2, $password, $password2, $person, $person2, $search, $enabled, $order_id, $order_created_at, $order_updated_at, $properties, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $username_partial, $username_start_with, $username_end_with, $email_partial, $email_start_with, $email_end_with, $canonical_username_partial, $canonical_username_start_with, $canonical_username_end_with, $canonical_email_partial, $canonical_email_start_with, $canonical_email_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userDropDown: ', $e->getMessage(), PHP_EOL;
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
| **last_login_before** | **string**|  | [optional] |
| **last_login_strictly_before** | **string**|  | [optional] |
| **last_login_after** | **string**|  | [optional] |
| **last_login_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **username** | **string**|  | [optional] |
| **username2** | [**string[]**](../Model/string.md)|  | [optional] |
| **email** | **string**|  | [optional] |
| **email2** | [**string[]**](../Model/string.md)|  | [optional] |
| **password** | **string**|  | [optional] |
| **password2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| users slug_partial | [optional] |
| **slug_start_with** | **string**| users slug_start_with | [optional] |
| **slug_end_with** | **string**| users slug_end_with | [optional] |
| **id_partial** | **string**| users id_partial | [optional] |
| **id_start_with** | **string**| users id_start_with | [optional] |
| **id_end_with** | **string**| users id_end_with | [optional] |
| **username_partial** | **string**| users username_partial | [optional] |
| **username_start_with** | **string**| users username_start_with | [optional] |
| **username_end_with** | **string**| users username_end_with | [optional] |
| **email_partial** | **string**| users email_partial | [optional] |
| **email_start_with** | **string**| users email_start_with | [optional] |
| **email_end_with** | **string**| users email_end_with | [optional] |
| **canonical_username_partial** | **string**| users canonicalUsername_partial | [optional] |
| **canonical_username_start_with** | **string**| users canonicalUsername_start_with | [optional] |
| **canonical_username_end_with** | **string**| users canonicalUsername_end_with | [optional] |
| **canonical_email_partial** | **string**| users canonicalEmail_partial | [optional] |
| **canonical_email_start_with** | **string**| users canonicalEmail_start_with | [optional] |
| **canonical_email_end_with** | **string**| users canonicalEmail_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserDropDown200Response**](../Model/UserDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userDuplicate()`

```php
userDuplicate($id): \OpenAPI\Client\Model\UsersJsonldUserShowIdTimestampableTagTaggingList
```

Retrieves a users resource.

Retrieves a users resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | users identifier

try {
    $result = $apiInstance->userDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| users identifier | |

### Return type

[**\OpenAPI\Client\Model\UsersJsonldUserShowIdTimestampableTagTaggingList**](../Model/UsersJsonldUserShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userFetchFiles()`

```php
userFetchFiles($id): \OpenAPI\Client\Model\UsersJsonld
```

Retrieves a users resource.

Retrieves a users resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | users identifier

try {
    $result = $apiInstance->userFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| users identifier | |

### Return type

[**\OpenAPI\Client\Model\UsersJsonld**](../Model/UsersJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userGetBySlug()`

```php
userGetBySlug($slug): \OpenAPI\Client\Model\UsersJsonldUserShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a users resource.

Retrieves a users resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | users identifier

try {
    $result = $apiInstance->userGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| users identifier | |

### Return type

[**\OpenAPI\Client\Model\UsersJsonldUserShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/UsersJsonldUserShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userGetDeleteRelations()`

```php
userGetDeleteRelations($id): \OpenAPI\Client\Model\UsersJsonldUserRelations
```

Retrieves a users resource.

Retrieves a users resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | users identifier

try {
    $result = $apiInstance->userGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| users identifier | |

### Return type

[**\OpenAPI\Client\Model\UsersJsonldUserRelations**](../Model/UsersJsonldUserRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userGetSelfCorporations()`

```php
userGetSelfCorporations($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $last_login_before, $last_login_strictly_before, $last_login_after, $last_login_strictly_after, $id, $id2, $slug, $slug2, $username, $username2, $email, $email2, $password, $password2, $person, $person2, $search, $enabled, $order_id, $order_created_at, $order_updated_at, $properties, $tag): \OpenAPI\Client\Model\UserGetSelfCorporations200Response
```

Retrieves the collection of users resources.

Retrieves the collection of users resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
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
$last_login_before = 'last_login_before_example'; // string | 
$last_login_strictly_before = 'last_login_strictly_before_example'; // string | 
$last_login_after = 'last_login_after_example'; // string | 
$last_login_strictly_after = 'last_login_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$username = 'username_example'; // string | 
$username2 = array('username_example'); // string[] | 
$email = 'email_example'; // string | 
$email2 = array('email_example'); // string[] | 
$password = 'password_example'; // string | 
$password2 = array('password_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$search = 'search_example'; // string | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->userGetSelfCorporations($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $last_login_before, $last_login_strictly_before, $last_login_after, $last_login_strictly_after, $id, $id2, $slug, $slug2, $username, $username2, $email, $email2, $password, $password2, $person, $person2, $search, $enabled, $order_id, $order_created_at, $order_updated_at, $properties, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userGetSelfCorporations: ', $e->getMessage(), PHP_EOL;
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
| **last_login_before** | **string**|  | [optional] |
| **last_login_strictly_before** | **string**|  | [optional] |
| **last_login_after** | **string**|  | [optional] |
| **last_login_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **username** | **string**|  | [optional] |
| **username2** | [**string[]**](../Model/string.md)|  | [optional] |
| **email** | **string**|  | [optional] |
| **email2** | [**string[]**](../Model/string.md)|  | [optional] |
| **password** | **string**|  | [optional] |
| **password2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserGetSelfCorporations200Response**](../Model/UserGetSelfCorporations200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userGetSelfInformations()`

```php
userGetSelfInformations($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $last_login_before, $last_login_strictly_before, $last_login_after, $last_login_strictly_after, $id, $id2, $slug, $slug2, $username, $username2, $email, $email2, $password, $password2, $person, $person2, $search, $enabled, $order_id, $order_created_at, $order_updated_at, $properties, $tag): \OpenAPI\Client\Model\UserGetSelfCorporations200Response
```

Retrieves the collection of users resources.

Retrieves the collection of users resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
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
$last_login_before = 'last_login_before_example'; // string | 
$last_login_strictly_before = 'last_login_strictly_before_example'; // string | 
$last_login_after = 'last_login_after_example'; // string | 
$last_login_strictly_after = 'last_login_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$username = 'username_example'; // string | 
$username2 = array('username_example'); // string[] | 
$email = 'email_example'; // string | 
$email2 = array('email_example'); // string[] | 
$password = 'password_example'; // string | 
$password2 = array('password_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$search = 'search_example'; // string | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->userGetSelfInformations($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $last_login_before, $last_login_strictly_before, $last_login_after, $last_login_strictly_after, $id, $id2, $slug, $slug2, $username, $username2, $email, $email2, $password, $password2, $person, $person2, $search, $enabled, $order_id, $order_created_at, $order_updated_at, $properties, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userGetSelfInformations: ', $e->getMessage(), PHP_EOL;
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
| **last_login_before** | **string**|  | [optional] |
| **last_login_strictly_before** | **string**|  | [optional] |
| **last_login_after** | **string**|  | [optional] |
| **last_login_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **username** | **string**|  | [optional] |
| **username2** | [**string[]**](../Model/string.md)|  | [optional] |
| **email** | **string**|  | [optional] |
| **email2** | [**string[]**](../Model/string.md)|  | [optional] |
| **password** | **string**|  | [optional] |
| **password2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserGetSelfCorporations200Response**](../Model/UserGetSelfCorporations200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userGetSelfKVS()`

```php
userGetSelfKVS($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $last_login_before, $last_login_strictly_before, $last_login_after, $last_login_strictly_after, $id, $id2, $slug, $slug2, $username, $username2, $email, $email2, $password, $password2, $person, $person2, $search, $enabled, $order_id, $order_created_at, $order_updated_at, $properties, $tag): \OpenAPI\Client\Model\UserGetSelfCorporations200Response
```

Retrieves the collection of users resources.

Retrieves the collection of users resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
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
$last_login_before = 'last_login_before_example'; // string | 
$last_login_strictly_before = 'last_login_strictly_before_example'; // string | 
$last_login_after = 'last_login_after_example'; // string | 
$last_login_strictly_after = 'last_login_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$username = 'username_example'; // string | 
$username2 = array('username_example'); // string[] | 
$email = 'email_example'; // string | 
$email2 = array('email_example'); // string[] | 
$password = 'password_example'; // string | 
$password2 = array('password_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$search = 'search_example'; // string | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->userGetSelfKVS($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $last_login_before, $last_login_strictly_before, $last_login_after, $last_login_strictly_after, $id, $id2, $slug, $slug2, $username, $username2, $email, $email2, $password, $password2, $person, $person2, $search, $enabled, $order_id, $order_created_at, $order_updated_at, $properties, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userGetSelfKVS: ', $e->getMessage(), PHP_EOL;
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
| **last_login_before** | **string**|  | [optional] |
| **last_login_strictly_before** | **string**|  | [optional] |
| **last_login_after** | **string**|  | [optional] |
| **last_login_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **username** | **string**|  | [optional] |
| **username2** | [**string[]**](../Model/string.md)|  | [optional] |
| **email** | **string**|  | [optional] |
| **email2** | [**string[]**](../Model/string.md)|  | [optional] |
| **password** | **string**|  | [optional] |
| **password2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserGetSelfCorporations200Response**](../Model/UserGetSelfCorporations200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userGetSelfRoles()`

```php
userGetSelfRoles($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $last_login_before, $last_login_strictly_before, $last_login_after, $last_login_strictly_after, $id, $id2, $slug, $slug2, $username, $username2, $email, $email2, $password, $password2, $person, $person2, $search, $enabled, $order_id, $order_created_at, $order_updated_at, $properties, $tag): \OpenAPI\Client\Model\UserGetSelfCorporations200Response
```

Retrieves the collection of users resources.

Retrieves the collection of users resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
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
$last_login_before = 'last_login_before_example'; // string | 
$last_login_strictly_before = 'last_login_strictly_before_example'; // string | 
$last_login_after = 'last_login_after_example'; // string | 
$last_login_strictly_after = 'last_login_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$username = 'username_example'; // string | 
$username2 = array('username_example'); // string[] | 
$email = 'email_example'; // string | 
$email2 = array('email_example'); // string[] | 
$password = 'password_example'; // string | 
$password2 = array('password_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$search = 'search_example'; // string | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->userGetSelfRoles($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $last_login_before, $last_login_strictly_before, $last_login_after, $last_login_strictly_after, $id, $id2, $slug, $slug2, $username, $username2, $email, $email2, $password, $password2, $person, $person2, $search, $enabled, $order_id, $order_created_at, $order_updated_at, $properties, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userGetSelfRoles: ', $e->getMessage(), PHP_EOL;
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
| **last_login_before** | **string**|  | [optional] |
| **last_login_strictly_before** | **string**|  | [optional] |
| **last_login_after** | **string**|  | [optional] |
| **last_login_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **username** | **string**|  | [optional] |
| **username2** | [**string[]**](../Model/string.md)|  | [optional] |
| **email** | **string**|  | [optional] |
| **email2** | [**string[]**](../Model/string.md)|  | [optional] |
| **password** | **string**|  | [optional] |
| **password2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserGetSelfCorporations200Response**](../Model/UserGetSelfCorporations200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userMetadata()`

```php
userMetadata($id): \OpenAPI\Client\Model\UsersJsonldIdStandardMetadataUserMetadataTagTaggingListUserRelationsTimestampable
```

Retrieves a users resource.

Retrieves a users resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | users identifier

try {
    $result = $apiInstance->userMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| users identifier | |

### Return type

[**\OpenAPI\Client\Model\UsersJsonldIdStandardMetadataUserMetadataTagTaggingListUserRelationsTimestampable**](../Model/UsersJsonldIdStandardMetadataUserMetadataTagTaggingListUserRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
