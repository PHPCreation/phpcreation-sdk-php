# OpenAPI\Client\CoordinatesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiCoordinatesGetCollection()**](CoordinatesApi.md#apiCoordinatesGetCollection) | **GET** /open-api/v3/coordinates | Retrieves the collection of coordinates resources. |
| [**apiCoordinatesIdDelete()**](CoordinatesApi.md#apiCoordinatesIdDelete) | **DELETE** /open-api/v3/coordinates/{id} | Removes the coordinates resource. |
| [**apiCoordinatesIdGet()**](CoordinatesApi.md#apiCoordinatesIdGet) | **GET** /open-api/v3/coordinates/{id} | Retrieves a coordinates resource. |
| [**apiCoordinatesIdPut()**](CoordinatesApi.md#apiCoordinatesIdPut) | **PUT** /open-api/v3/coordinates/{id} | Replaces the coordinates resource. |
| [**apiCoordinatesPost()**](CoordinatesApi.md#apiCoordinatesPost) | **POST** /open-api/v3/coordinates | Creates a coordinates resource. |
| [**coordinateApiCorporationAdd()**](CoordinatesApi.md#coordinateApiCorporationAdd) | **POST** /open-api/v3/coordinates/{id}/corporation/add | Creates a coordinates resource. |
| [**coordinateApiCorporationRemove()**](CoordinatesApi.md#coordinateApiCorporationRemove) | **POST** /open-api/v3/coordinates/{id}/corporation/remove | Creates a coordinates resource. |
| [**coordinateApiFileUpload()**](CoordinatesApi.md#coordinateApiFileUpload) | **POST** /open-api/v3/coordinates/{id}/file/upload | Creates a coordinates resource. |
| [**coordinateDropDown()**](CoordinatesApi.md#coordinateDropDown) | **GET** /open-api/v3/coordinates/dropdown/get | Retrieves the collection of coordinates resources. |
| [**coordinateDuplicate()**](CoordinatesApi.md#coordinateDuplicate) | **GET** /open-api/v3/coordinates/duplicate/{id} | Retrieves a coordinates resource. |
| [**coordinateFetchFiles()**](CoordinatesApi.md#coordinateFetchFiles) | **GET** /open-api/v3/coordinates/fetch_files/{id} | Retrieves a coordinates resource. |
| [**coordinateGetBySlug()**](CoordinatesApi.md#coordinateGetBySlug) | **GET** /open-api/v3/coordinates/by_slug/{slug} | Retrieves a coordinates resource. |
| [**coordinateGetDeleteRelations()**](CoordinatesApi.md#coordinateGetDeleteRelations) | **GET** /open-api/v3/coordinates/get_delete_relations/{id} | Retrieves a coordinates resource. |
| [**coordinateMetadata()**](CoordinatesApi.md#coordinateMetadata) | **GET** /open-api/v3/coordinates/metadata/{id} | Retrieves a coordinates resource. |


## `apiCoordinatesGetCollection()`

```php
apiCoordinatesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $contacts_full_name, $contacts_full_name2, $contacts_title, $contacts_title2, $contacts_email, $contacts_email2, $contacts_tel, $contacts_tel2, $contacts_website, $contacts_website2, $contacts_cell, $contacts_cell2, $contacts_fax, $contacts_fax2, $location, $location2, $language, $language2, $type, $type2, $mbti, $mbti2, $gender, $gender2, $invoices, $invoices2, $person, $person2, $person_employee, $person_employee2, $search, $priority, $priority2, $reachable, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_contacts_full_name, $exists_contacts_title, $exists_contacts_email, $exists_contacts_website, $exists_contacts_tel, $exists_contacts_fax, $exists_contacts_cell, $exists_contacts_page, $exists_birthday, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_priority, $order_contacts_full_name, $order_contacts_title, $order_contacts_email, $order_contacts_website, $order_contacts_cell, $order_contacts_fax, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $contacts_full_name_partial, $contacts_full_name_start_with, $contacts_full_name_end_with, $contacts_title_partial, $contacts_title_start_with, $contacts_title_end_with, $contacts_email_partial, $contacts_email_start_with, $contacts_email_end_with, $contacts_tel_partial, $contacts_tel_start_with, $contacts_tel_end_with, $contacts_website_partial, $contacts_website_start_with, $contacts_website_end_with, $contacts_cell_partial, $contacts_cell_start_with, $contacts_cell_end_with, $contacts_fax_partial, $contacts_fax_start_with, $contacts_fax_end_with): \OpenAPI\Client\Model\ApiCoordinatesGetCollection200Response
```

Retrieves the collection of coordinates resources.

Retrieves the collection of coordinates resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinatesApi(
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
$contacts_full_name = 'contacts_full_name_example'; // string | 
$contacts_full_name2 = array('contacts_full_name_example'); // string[] | 
$contacts_title = 'contacts_title_example'; // string | 
$contacts_title2 = array('contacts_title_example'); // string[] | 
$contacts_email = 'contacts_email_example'; // string | 
$contacts_email2 = array('contacts_email_example'); // string[] | 
$contacts_tel = 'contacts_tel_example'; // string | 
$contacts_tel2 = array('contacts_tel_example'); // string[] | 
$contacts_website = 'contacts_website_example'; // string | 
$contacts_website2 = array('contacts_website_example'); // string[] | 
$contacts_cell = 'contacts_cell_example'; // string | 
$contacts_cell2 = array('contacts_cell_example'); // string[] | 
$contacts_fax = 'contacts_fax_example'; // string | 
$contacts_fax2 = array('contacts_fax_example'); // string[] | 
$location = 'location_example'; // string | 
$location2 = array('location_example'); // string[] | 
$language = 'language_example'; // string | 
$language2 = array('language_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$mbti = 'mbti_example'; // string | 
$mbti2 = array('mbti_example'); // string[] | 
$gender = 'gender_example'; // string | 
$gender2 = array('gender_example'); // string[] | 
$invoices = 'invoices_example'; // string | 
$invoices2 = array('invoices_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$person_employee = 'person_employee_example'; // string | 
$person_employee2 = array('person_employee_example'); // string[] | 
$search = 'search_example'; // string | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$reachable = True; // bool | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_contacts_full_name = True; // bool | 
$exists_contacts_title = True; // bool | 
$exists_contacts_email = True; // bool | 
$exists_contacts_website = True; // bool | 
$exists_contacts_tel = True; // bool | 
$exists_contacts_fax = True; // bool | 
$exists_contacts_cell = True; // bool | 
$exists_contacts_page = True; // bool | 
$exists_birthday = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_contacts_full_name = 'order_contacts_full_name_example'; // string | 
$order_contacts_title = 'order_contacts_title_example'; // string | 
$order_contacts_email = 'order_contacts_email_example'; // string | 
$order_contacts_website = 'order_contacts_website_example'; // string | 
$order_contacts_cell = 'order_contacts_cell_example'; // string | 
$order_contacts_fax = 'order_contacts_fax_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | coordinates slug_partial
$slug_start_with = 'slug_start_with_example'; // string | coordinates slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | coordinates slug_end_with
$id_partial = 'id_partial_example'; // string | coordinates id_partial
$id_start_with = 'id_start_with_example'; // string | coordinates id_start_with
$id_end_with = 'id_end_with_example'; // string | coordinates id_end_with
$contacts_full_name_partial = 'contacts_full_name_partial_example'; // string | coordinates contactsFullName_partial
$contacts_full_name_start_with = 'contacts_full_name_start_with_example'; // string | coordinates contactsFullName_start_with
$contacts_full_name_end_with = 'contacts_full_name_end_with_example'; // string | coordinates contactsFullName_end_with
$contacts_title_partial = 'contacts_title_partial_example'; // string | coordinates contactsTitle_partial
$contacts_title_start_with = 'contacts_title_start_with_example'; // string | coordinates contactsTitle_start_with
$contacts_title_end_with = 'contacts_title_end_with_example'; // string | coordinates contactsTitle_end_with
$contacts_email_partial = 'contacts_email_partial_example'; // string | coordinates contactsEmail_partial
$contacts_email_start_with = 'contacts_email_start_with_example'; // string | coordinates contactsEmail_start_with
$contacts_email_end_with = 'contacts_email_end_with_example'; // string | coordinates contactsEmail_end_with
$contacts_tel_partial = 'contacts_tel_partial_example'; // string | coordinates contactsTel_partial
$contacts_tel_start_with = 'contacts_tel_start_with_example'; // string | coordinates contactsTel_start_with
$contacts_tel_end_with = 'contacts_tel_end_with_example'; // string | coordinates contactsTel_end_with
$contacts_website_partial = 'contacts_website_partial_example'; // string | coordinates contactsWebsite_partial
$contacts_website_start_with = 'contacts_website_start_with_example'; // string | coordinates contactsWebsite_start_with
$contacts_website_end_with = 'contacts_website_end_with_example'; // string | coordinates contactsWebsite_end_with
$contacts_cell_partial = 'contacts_cell_partial_example'; // string | coordinates contactsCell_partial
$contacts_cell_start_with = 'contacts_cell_start_with_example'; // string | coordinates contactsCell_start_with
$contacts_cell_end_with = 'contacts_cell_end_with_example'; // string | coordinates contactsCell_end_with
$contacts_fax_partial = 'contacts_fax_partial_example'; // string | coordinates contactsFax_partial
$contacts_fax_start_with = 'contacts_fax_start_with_example'; // string | coordinates contactsFax_start_with
$contacts_fax_end_with = 'contacts_fax_end_with_example'; // string | coordinates contactsFax_end_with

try {
    $result = $apiInstance->apiCoordinatesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $contacts_full_name, $contacts_full_name2, $contacts_title, $contacts_title2, $contacts_email, $contacts_email2, $contacts_tel, $contacts_tel2, $contacts_website, $contacts_website2, $contacts_cell, $contacts_cell2, $contacts_fax, $contacts_fax2, $location, $location2, $language, $language2, $type, $type2, $mbti, $mbti2, $gender, $gender2, $invoices, $invoices2, $person, $person2, $person_employee, $person_employee2, $search, $priority, $priority2, $reachable, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_contacts_full_name, $exists_contacts_title, $exists_contacts_email, $exists_contacts_website, $exists_contacts_tel, $exists_contacts_fax, $exists_contacts_cell, $exists_contacts_page, $exists_birthday, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_priority, $order_contacts_full_name, $order_contacts_title, $order_contacts_email, $order_contacts_website, $order_contacts_cell, $order_contacts_fax, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $contacts_full_name_partial, $contacts_full_name_start_with, $contacts_full_name_end_with, $contacts_title_partial, $contacts_title_start_with, $contacts_title_end_with, $contacts_email_partial, $contacts_email_start_with, $contacts_email_end_with, $contacts_tel_partial, $contacts_tel_start_with, $contacts_tel_end_with, $contacts_website_partial, $contacts_website_start_with, $contacts_website_end_with, $contacts_cell_partial, $contacts_cell_start_with, $contacts_cell_end_with, $contacts_fax_partial, $contacts_fax_start_with, $contacts_fax_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinatesApi->apiCoordinatesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **contacts_full_name** | **string**|  | [optional] |
| **contacts_full_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **contacts_title** | **string**|  | [optional] |
| **contacts_title2** | [**string[]**](../Model/string.md)|  | [optional] |
| **contacts_email** | **string**|  | [optional] |
| **contacts_email2** | [**string[]**](../Model/string.md)|  | [optional] |
| **contacts_tel** | **string**|  | [optional] |
| **contacts_tel2** | [**string[]**](../Model/string.md)|  | [optional] |
| **contacts_website** | **string**|  | [optional] |
| **contacts_website2** | [**string[]**](../Model/string.md)|  | [optional] |
| **contacts_cell** | **string**|  | [optional] |
| **contacts_cell2** | [**string[]**](../Model/string.md)|  | [optional] |
| **contacts_fax** | **string**|  | [optional] |
| **contacts_fax2** | [**string[]**](../Model/string.md)|  | [optional] |
| **location** | **string**|  | [optional] |
| **location2** | [**string[]**](../Model/string.md)|  | [optional] |
| **language** | **string**|  | [optional] |
| **language2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **mbti** | **string**|  | [optional] |
| **mbti2** | [**string[]**](../Model/string.md)|  | [optional] |
| **gender** | **string**|  | [optional] |
| **gender2** | [**string[]**](../Model/string.md)|  | [optional] |
| **invoices** | **string**|  | [optional] |
| **invoices2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person_employee** | **string**|  | [optional] |
| **person_employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **reachable** | **bool**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_contacts_full_name** | **bool**|  | [optional] |
| **exists_contacts_title** | **bool**|  | [optional] |
| **exists_contacts_email** | **bool**|  | [optional] |
| **exists_contacts_website** | **bool**|  | [optional] |
| **exists_contacts_tel** | **bool**|  | [optional] |
| **exists_contacts_fax** | **bool**|  | [optional] |
| **exists_contacts_cell** | **bool**|  | [optional] |
| **exists_contacts_page** | **bool**|  | [optional] |
| **exists_birthday** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_contacts_full_name** | **string**|  | [optional] |
| **order_contacts_title** | **string**|  | [optional] |
| **order_contacts_email** | **string**|  | [optional] |
| **order_contacts_website** | **string**|  | [optional] |
| **order_contacts_cell** | **string**|  | [optional] |
| **order_contacts_fax** | **string**|  | [optional] |
| **slug_partial** | **string**| coordinates slug_partial | [optional] |
| **slug_start_with** | **string**| coordinates slug_start_with | [optional] |
| **slug_end_with** | **string**| coordinates slug_end_with | [optional] |
| **id_partial** | **string**| coordinates id_partial | [optional] |
| **id_start_with** | **string**| coordinates id_start_with | [optional] |
| **id_end_with** | **string**| coordinates id_end_with | [optional] |
| **contacts_full_name_partial** | **string**| coordinates contactsFullName_partial | [optional] |
| **contacts_full_name_start_with** | **string**| coordinates contactsFullName_start_with | [optional] |
| **contacts_full_name_end_with** | **string**| coordinates contactsFullName_end_with | [optional] |
| **contacts_title_partial** | **string**| coordinates contactsTitle_partial | [optional] |
| **contacts_title_start_with** | **string**| coordinates contactsTitle_start_with | [optional] |
| **contacts_title_end_with** | **string**| coordinates contactsTitle_end_with | [optional] |
| **contacts_email_partial** | **string**| coordinates contactsEmail_partial | [optional] |
| **contacts_email_start_with** | **string**| coordinates contactsEmail_start_with | [optional] |
| **contacts_email_end_with** | **string**| coordinates contactsEmail_end_with | [optional] |
| **contacts_tel_partial** | **string**| coordinates contactsTel_partial | [optional] |
| **contacts_tel_start_with** | **string**| coordinates contactsTel_start_with | [optional] |
| **contacts_tel_end_with** | **string**| coordinates contactsTel_end_with | [optional] |
| **contacts_website_partial** | **string**| coordinates contactsWebsite_partial | [optional] |
| **contacts_website_start_with** | **string**| coordinates contactsWebsite_start_with | [optional] |
| **contacts_website_end_with** | **string**| coordinates contactsWebsite_end_with | [optional] |
| **contacts_cell_partial** | **string**| coordinates contactsCell_partial | [optional] |
| **contacts_cell_start_with** | **string**| coordinates contactsCell_start_with | [optional] |
| **contacts_cell_end_with** | **string**| coordinates contactsCell_end_with | [optional] |
| **contacts_fax_partial** | **string**| coordinates contactsFax_partial | [optional] |
| **contacts_fax_start_with** | **string**| coordinates contactsFax_start_with | [optional] |
| **contacts_fax_end_with** | **string**| coordinates contactsFax_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiCoordinatesGetCollection200Response**](../Model/ApiCoordinatesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCoordinatesIdDelete()`

```php
apiCoordinatesIdDelete($id)
```

Removes the coordinates resource.

Removes the coordinates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinates identifier

try {
    $apiInstance->apiCoordinatesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CoordinatesApi->apiCoordinatesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinates identifier | |

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

## `apiCoordinatesIdGet()`

```php
apiCoordinatesIdGet($id): \OpenAPI\Client\Model\CoordinatesJsonldCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a coordinates resource.

Retrieves a coordinates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinates identifier

try {
    $result = $apiInstance->apiCoordinatesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinatesApi->apiCoordinatesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinates identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinatesJsonldCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/CoordinatesJsonldCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCoordinatesIdPut()`

```php
apiCoordinatesIdPut($id, $coordinates_jsonld_add_post): \OpenAPI\Client\Model\CoordinatesJsonldCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the coordinates resource.

Replaces the coordinates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinates identifier
$coordinates_jsonld_add_post = new \OpenAPI\Client\Model\CoordinatesJsonldAddPost(); // \OpenAPI\Client\Model\CoordinatesJsonldAddPost | The updated coordinates resource

try {
    $result = $apiInstance->apiCoordinatesIdPut($id, $coordinates_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinatesApi->apiCoordinatesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinates identifier | |
| **coordinates_jsonld_add_post** | [**\OpenAPI\Client\Model\CoordinatesJsonldAddPost**](../Model/CoordinatesJsonldAddPost.md)| The updated coordinates resource | |

### Return type

[**\OpenAPI\Client\Model\CoordinatesJsonldCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/CoordinatesJsonldCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCoordinatesPost()`

```php
apiCoordinatesPost($coordinates_jsonld_add_post): \OpenAPI\Client\Model\CoordinatesJsonldCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a coordinates resource.

Creates a coordinates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coordinates_jsonld_add_post = new \OpenAPI\Client\Model\CoordinatesJsonldAddPost(); // \OpenAPI\Client\Model\CoordinatesJsonldAddPost | The new coordinates resource

try {
    $result = $apiInstance->apiCoordinatesPost($coordinates_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinatesApi->apiCoordinatesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coordinates_jsonld_add_post** | [**\OpenAPI\Client\Model\CoordinatesJsonldAddPost**](../Model/CoordinatesJsonldAddPost.md)| The new coordinates resource | |

### Return type

[**\OpenAPI\Client\Model\CoordinatesJsonldCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/CoordinatesJsonldCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateApiCorporationAdd()`

```php
coordinateApiCorporationAdd($id, $coordinates_jsonld): \OpenAPI\Client\Model\CoordinatesJsonldCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a coordinates resource.

Creates a coordinates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinates identifier
$coordinates_jsonld = new \OpenAPI\Client\Model\CoordinatesJsonld(); // \OpenAPI\Client\Model\CoordinatesJsonld | The new coordinates resource

try {
    $result = $apiInstance->coordinateApiCorporationAdd($id, $coordinates_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinatesApi->coordinateApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinates identifier | |
| **coordinates_jsonld** | [**\OpenAPI\Client\Model\CoordinatesJsonld**](../Model/CoordinatesJsonld.md)| The new coordinates resource | |

### Return type

[**\OpenAPI\Client\Model\CoordinatesJsonldCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/CoordinatesJsonldCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateApiCorporationRemove()`

```php
coordinateApiCorporationRemove($id, $coordinates_jsonld): \OpenAPI\Client\Model\CoordinatesJsonldCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a coordinates resource.

Creates a coordinates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinates identifier
$coordinates_jsonld = new \OpenAPI\Client\Model\CoordinatesJsonld(); // \OpenAPI\Client\Model\CoordinatesJsonld | The new coordinates resource

try {
    $result = $apiInstance->coordinateApiCorporationRemove($id, $coordinates_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinatesApi->coordinateApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinates identifier | |
| **coordinates_jsonld** | [**\OpenAPI\Client\Model\CoordinatesJsonld**](../Model/CoordinatesJsonld.md)| The new coordinates resource | |

### Return type

[**\OpenAPI\Client\Model\CoordinatesJsonldCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/CoordinatesJsonldCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateApiFileUpload()`

```php
coordinateApiFileUpload($id, $coordinates_jsonld): \OpenAPI\Client\Model\CoordinatesJsonldCoordinateShowIdTimestampableTagTaggingListStandardShow
```

Creates a coordinates resource.

Creates a coordinates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinates identifier
$coordinates_jsonld = new \OpenAPI\Client\Model\CoordinatesJsonld(); // \OpenAPI\Client\Model\CoordinatesJsonld | The new coordinates resource

try {
    $result = $apiInstance->coordinateApiFileUpload($id, $coordinates_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinatesApi->coordinateApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinates identifier | |
| **coordinates_jsonld** | [**\OpenAPI\Client\Model\CoordinatesJsonld**](../Model/CoordinatesJsonld.md)| The new coordinates resource | |

### Return type

[**\OpenAPI\Client\Model\CoordinatesJsonldCoordinateShowIdTimestampableTagTaggingListStandardShow**](../Model/CoordinatesJsonldCoordinateShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateDropDown()`

```php
coordinateDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $contacts_full_name, $contacts_full_name2, $contacts_title, $contacts_title2, $contacts_email, $contacts_email2, $contacts_tel, $contacts_tel2, $contacts_website, $contacts_website2, $contacts_cell, $contacts_cell2, $contacts_fax, $contacts_fax2, $location, $location2, $language, $language2, $type, $type2, $mbti, $mbti2, $gender, $gender2, $invoices, $invoices2, $person, $person2, $person_employee, $person_employee2, $search, $priority, $priority2, $reachable, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_contacts_full_name, $exists_contacts_title, $exists_contacts_email, $exists_contacts_website, $exists_contacts_tel, $exists_contacts_fax, $exists_contacts_cell, $exists_contacts_page, $exists_birthday, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_priority, $order_contacts_full_name, $order_contacts_title, $order_contacts_email, $order_contacts_website, $order_contacts_cell, $order_contacts_fax, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $contacts_full_name_partial, $contacts_full_name_start_with, $contacts_full_name_end_with, $contacts_title_partial, $contacts_title_start_with, $contacts_title_end_with, $contacts_email_partial, $contacts_email_start_with, $contacts_email_end_with, $contacts_tel_partial, $contacts_tel_start_with, $contacts_tel_end_with, $contacts_website_partial, $contacts_website_start_with, $contacts_website_end_with, $contacts_cell_partial, $contacts_cell_start_with, $contacts_cell_end_with, $contacts_fax_partial, $contacts_fax_start_with, $contacts_fax_end_with): \OpenAPI\Client\Model\CoordinateDropDown200Response
```

Retrieves the collection of coordinates resources.

Retrieves the collection of coordinates resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinatesApi(
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
$contacts_full_name = 'contacts_full_name_example'; // string | 
$contacts_full_name2 = array('contacts_full_name_example'); // string[] | 
$contacts_title = 'contacts_title_example'; // string | 
$contacts_title2 = array('contacts_title_example'); // string[] | 
$contacts_email = 'contacts_email_example'; // string | 
$contacts_email2 = array('contacts_email_example'); // string[] | 
$contacts_tel = 'contacts_tel_example'; // string | 
$contacts_tel2 = array('contacts_tel_example'); // string[] | 
$contacts_website = 'contacts_website_example'; // string | 
$contacts_website2 = array('contacts_website_example'); // string[] | 
$contacts_cell = 'contacts_cell_example'; // string | 
$contacts_cell2 = array('contacts_cell_example'); // string[] | 
$contacts_fax = 'contacts_fax_example'; // string | 
$contacts_fax2 = array('contacts_fax_example'); // string[] | 
$location = 'location_example'; // string | 
$location2 = array('location_example'); // string[] | 
$language = 'language_example'; // string | 
$language2 = array('language_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$mbti = 'mbti_example'; // string | 
$mbti2 = array('mbti_example'); // string[] | 
$gender = 'gender_example'; // string | 
$gender2 = array('gender_example'); // string[] | 
$invoices = 'invoices_example'; // string | 
$invoices2 = array('invoices_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$person_employee = 'person_employee_example'; // string | 
$person_employee2 = array('person_employee_example'); // string[] | 
$search = 'search_example'; // string | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$reachable = True; // bool | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_contacts_full_name = True; // bool | 
$exists_contacts_title = True; // bool | 
$exists_contacts_email = True; // bool | 
$exists_contacts_website = True; // bool | 
$exists_contacts_tel = True; // bool | 
$exists_contacts_fax = True; // bool | 
$exists_contacts_cell = True; // bool | 
$exists_contacts_page = True; // bool | 
$exists_birthday = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_contacts_full_name = 'order_contacts_full_name_example'; // string | 
$order_contacts_title = 'order_contacts_title_example'; // string | 
$order_contacts_email = 'order_contacts_email_example'; // string | 
$order_contacts_website = 'order_contacts_website_example'; // string | 
$order_contacts_cell = 'order_contacts_cell_example'; // string | 
$order_contacts_fax = 'order_contacts_fax_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | coordinates slug_partial
$slug_start_with = 'slug_start_with_example'; // string | coordinates slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | coordinates slug_end_with
$id_partial = 'id_partial_example'; // string | coordinates id_partial
$id_start_with = 'id_start_with_example'; // string | coordinates id_start_with
$id_end_with = 'id_end_with_example'; // string | coordinates id_end_with
$contacts_full_name_partial = 'contacts_full_name_partial_example'; // string | coordinates contactsFullName_partial
$contacts_full_name_start_with = 'contacts_full_name_start_with_example'; // string | coordinates contactsFullName_start_with
$contacts_full_name_end_with = 'contacts_full_name_end_with_example'; // string | coordinates contactsFullName_end_with
$contacts_title_partial = 'contacts_title_partial_example'; // string | coordinates contactsTitle_partial
$contacts_title_start_with = 'contacts_title_start_with_example'; // string | coordinates contactsTitle_start_with
$contacts_title_end_with = 'contacts_title_end_with_example'; // string | coordinates contactsTitle_end_with
$contacts_email_partial = 'contacts_email_partial_example'; // string | coordinates contactsEmail_partial
$contacts_email_start_with = 'contacts_email_start_with_example'; // string | coordinates contactsEmail_start_with
$contacts_email_end_with = 'contacts_email_end_with_example'; // string | coordinates contactsEmail_end_with
$contacts_tel_partial = 'contacts_tel_partial_example'; // string | coordinates contactsTel_partial
$contacts_tel_start_with = 'contacts_tel_start_with_example'; // string | coordinates contactsTel_start_with
$contacts_tel_end_with = 'contacts_tel_end_with_example'; // string | coordinates contactsTel_end_with
$contacts_website_partial = 'contacts_website_partial_example'; // string | coordinates contactsWebsite_partial
$contacts_website_start_with = 'contacts_website_start_with_example'; // string | coordinates contactsWebsite_start_with
$contacts_website_end_with = 'contacts_website_end_with_example'; // string | coordinates contactsWebsite_end_with
$contacts_cell_partial = 'contacts_cell_partial_example'; // string | coordinates contactsCell_partial
$contacts_cell_start_with = 'contacts_cell_start_with_example'; // string | coordinates contactsCell_start_with
$contacts_cell_end_with = 'contacts_cell_end_with_example'; // string | coordinates contactsCell_end_with
$contacts_fax_partial = 'contacts_fax_partial_example'; // string | coordinates contactsFax_partial
$contacts_fax_start_with = 'contacts_fax_start_with_example'; // string | coordinates contactsFax_start_with
$contacts_fax_end_with = 'contacts_fax_end_with_example'; // string | coordinates contactsFax_end_with

try {
    $result = $apiInstance->coordinateDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $contacts_full_name, $contacts_full_name2, $contacts_title, $contacts_title2, $contacts_email, $contacts_email2, $contacts_tel, $contacts_tel2, $contacts_website, $contacts_website2, $contacts_cell, $contacts_cell2, $contacts_fax, $contacts_fax2, $location, $location2, $language, $language2, $type, $type2, $mbti, $mbti2, $gender, $gender2, $invoices, $invoices2, $person, $person2, $person_employee, $person_employee2, $search, $priority, $priority2, $reachable, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_contacts_full_name, $exists_contacts_title, $exists_contacts_email, $exists_contacts_website, $exists_contacts_tel, $exists_contacts_fax, $exists_contacts_cell, $exists_contacts_page, $exists_birthday, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_priority, $order_contacts_full_name, $order_contacts_title, $order_contacts_email, $order_contacts_website, $order_contacts_cell, $order_contacts_fax, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $contacts_full_name_partial, $contacts_full_name_start_with, $contacts_full_name_end_with, $contacts_title_partial, $contacts_title_start_with, $contacts_title_end_with, $contacts_email_partial, $contacts_email_start_with, $contacts_email_end_with, $contacts_tel_partial, $contacts_tel_start_with, $contacts_tel_end_with, $contacts_website_partial, $contacts_website_start_with, $contacts_website_end_with, $contacts_cell_partial, $contacts_cell_start_with, $contacts_cell_end_with, $contacts_fax_partial, $contacts_fax_start_with, $contacts_fax_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinatesApi->coordinateDropDown: ', $e->getMessage(), PHP_EOL;
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
| **contacts_full_name** | **string**|  | [optional] |
| **contacts_full_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **contacts_title** | **string**|  | [optional] |
| **contacts_title2** | [**string[]**](../Model/string.md)|  | [optional] |
| **contacts_email** | **string**|  | [optional] |
| **contacts_email2** | [**string[]**](../Model/string.md)|  | [optional] |
| **contacts_tel** | **string**|  | [optional] |
| **contacts_tel2** | [**string[]**](../Model/string.md)|  | [optional] |
| **contacts_website** | **string**|  | [optional] |
| **contacts_website2** | [**string[]**](../Model/string.md)|  | [optional] |
| **contacts_cell** | **string**|  | [optional] |
| **contacts_cell2** | [**string[]**](../Model/string.md)|  | [optional] |
| **contacts_fax** | **string**|  | [optional] |
| **contacts_fax2** | [**string[]**](../Model/string.md)|  | [optional] |
| **location** | **string**|  | [optional] |
| **location2** | [**string[]**](../Model/string.md)|  | [optional] |
| **language** | **string**|  | [optional] |
| **language2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **mbti** | **string**|  | [optional] |
| **mbti2** | [**string[]**](../Model/string.md)|  | [optional] |
| **gender** | **string**|  | [optional] |
| **gender2** | [**string[]**](../Model/string.md)|  | [optional] |
| **invoices** | **string**|  | [optional] |
| **invoices2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person_employee** | **string**|  | [optional] |
| **person_employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **reachable** | **bool**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_contacts_full_name** | **bool**|  | [optional] |
| **exists_contacts_title** | **bool**|  | [optional] |
| **exists_contacts_email** | **bool**|  | [optional] |
| **exists_contacts_website** | **bool**|  | [optional] |
| **exists_contacts_tel** | **bool**|  | [optional] |
| **exists_contacts_fax** | **bool**|  | [optional] |
| **exists_contacts_cell** | **bool**|  | [optional] |
| **exists_contacts_page** | **bool**|  | [optional] |
| **exists_birthday** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_contacts_full_name** | **string**|  | [optional] |
| **order_contacts_title** | **string**|  | [optional] |
| **order_contacts_email** | **string**|  | [optional] |
| **order_contacts_website** | **string**|  | [optional] |
| **order_contacts_cell** | **string**|  | [optional] |
| **order_contacts_fax** | **string**|  | [optional] |
| **slug_partial** | **string**| coordinates slug_partial | [optional] |
| **slug_start_with** | **string**| coordinates slug_start_with | [optional] |
| **slug_end_with** | **string**| coordinates slug_end_with | [optional] |
| **id_partial** | **string**| coordinates id_partial | [optional] |
| **id_start_with** | **string**| coordinates id_start_with | [optional] |
| **id_end_with** | **string**| coordinates id_end_with | [optional] |
| **contacts_full_name_partial** | **string**| coordinates contactsFullName_partial | [optional] |
| **contacts_full_name_start_with** | **string**| coordinates contactsFullName_start_with | [optional] |
| **contacts_full_name_end_with** | **string**| coordinates contactsFullName_end_with | [optional] |
| **contacts_title_partial** | **string**| coordinates contactsTitle_partial | [optional] |
| **contacts_title_start_with** | **string**| coordinates contactsTitle_start_with | [optional] |
| **contacts_title_end_with** | **string**| coordinates contactsTitle_end_with | [optional] |
| **contacts_email_partial** | **string**| coordinates contactsEmail_partial | [optional] |
| **contacts_email_start_with** | **string**| coordinates contactsEmail_start_with | [optional] |
| **contacts_email_end_with** | **string**| coordinates contactsEmail_end_with | [optional] |
| **contacts_tel_partial** | **string**| coordinates contactsTel_partial | [optional] |
| **contacts_tel_start_with** | **string**| coordinates contactsTel_start_with | [optional] |
| **contacts_tel_end_with** | **string**| coordinates contactsTel_end_with | [optional] |
| **contacts_website_partial** | **string**| coordinates contactsWebsite_partial | [optional] |
| **contacts_website_start_with** | **string**| coordinates contactsWebsite_start_with | [optional] |
| **contacts_website_end_with** | **string**| coordinates contactsWebsite_end_with | [optional] |
| **contacts_cell_partial** | **string**| coordinates contactsCell_partial | [optional] |
| **contacts_cell_start_with** | **string**| coordinates contactsCell_start_with | [optional] |
| **contacts_cell_end_with** | **string**| coordinates contactsCell_end_with | [optional] |
| **contacts_fax_partial** | **string**| coordinates contactsFax_partial | [optional] |
| **contacts_fax_start_with** | **string**| coordinates contactsFax_start_with | [optional] |
| **contacts_fax_end_with** | **string**| coordinates contactsFax_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\CoordinateDropDown200Response**](../Model/CoordinateDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateDuplicate()`

```php
coordinateDuplicate($id): \OpenAPI\Client\Model\CoordinatesJsonldCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a coordinates resource.

Retrieves a coordinates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinates identifier

try {
    $result = $apiInstance->coordinateDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinatesApi->coordinateDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinates identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinatesJsonldCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/CoordinatesJsonldCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateFetchFiles()`

```php
coordinateFetchFiles($id): \OpenAPI\Client\Model\CoordinatesJsonld
```

Retrieves a coordinates resource.

Retrieves a coordinates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinates identifier

try {
    $result = $apiInstance->coordinateFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinatesApi->coordinateFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinates identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinatesJsonld**](../Model/CoordinatesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateGetBySlug()`

```php
coordinateGetBySlug($slug): \OpenAPI\Client\Model\CoordinatesJsonldCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a coordinates resource.

Retrieves a coordinates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | coordinates identifier

try {
    $result = $apiInstance->coordinateGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinatesApi->coordinateGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| coordinates identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinatesJsonldCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/CoordinatesJsonldCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateGetDeleteRelations()`

```php
coordinateGetDeleteRelations($id): \OpenAPI\Client\Model\CoordinatesJsonldCoordinateRelations
```

Retrieves a coordinates resource.

Retrieves a coordinates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinates identifier

try {
    $result = $apiInstance->coordinateGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinatesApi->coordinateGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinates identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinatesJsonldCoordinateRelations**](../Model/CoordinatesJsonldCoordinateRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateMetadata()`

```php
coordinateMetadata($id): \OpenAPI\Client\Model\CoordinatesJsonldIdStandardMetadataCoordinateMetadataTagTaggingListCoordinateRelationsTimestampable
```

Retrieves a coordinates resource.

Retrieves a coordinates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinates identifier

try {
    $result = $apiInstance->coordinateMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinatesApi->coordinateMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinates identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinatesJsonldIdStandardMetadataCoordinateMetadataTagTaggingListCoordinateRelationsTimestampable**](../Model/CoordinatesJsonldIdStandardMetadataCoordinateMetadataTagTaggingListCoordinateRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
