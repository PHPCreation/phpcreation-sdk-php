# OpenAPI\Client\NotificationEmailtemplatesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiNotificationEmailtemplatesGetCollection()**](NotificationEmailtemplatesApi.md#apiNotificationEmailtemplatesGetCollection) | **GET** /open-api/v3/notification_emailtemplates | Retrieves the collection of notification_emailtemplates resources. |
| [**apiNotificationEmailtemplatesIdDelete()**](NotificationEmailtemplatesApi.md#apiNotificationEmailtemplatesIdDelete) | **DELETE** /open-api/v3/notification_emailtemplates/{id} | Removes the notification_emailtemplates resource. |
| [**apiNotificationEmailtemplatesIdGet()**](NotificationEmailtemplatesApi.md#apiNotificationEmailtemplatesIdGet) | **GET** /open-api/v3/notification_emailtemplates/{id} | Retrieves a notification_emailtemplates resource. |
| [**apiNotificationEmailtemplatesIdPut()**](NotificationEmailtemplatesApi.md#apiNotificationEmailtemplatesIdPut) | **PUT** /open-api/v3/notification_emailtemplates/{id} | Replaces the notification_emailtemplates resource. |
| [**apiNotificationEmailtemplatesPost()**](NotificationEmailtemplatesApi.md#apiNotificationEmailtemplatesPost) | **POST** /open-api/v3/notification_emailtemplates | Creates a notification_emailtemplates resource. |
| [**notificationEmailTemplateApiFileUpload()**](NotificationEmailtemplatesApi.md#notificationEmailTemplateApiFileUpload) | **POST** /open-api/v3/notification_emailtemplates/{id}/file/upload | Creates a notification_emailtemplates resource. |
| [**notificationEmailTemplateBySlug()**](NotificationEmailtemplatesApi.md#notificationEmailTemplateBySlug) | **GET** /open-api/v3/notification_emailtemplates/by_slug/{slug} | Retrieves a notification_emailtemplates resource. |
| [**notificationEmailTemplateDropDown()**](NotificationEmailtemplatesApi.md#notificationEmailTemplateDropDown) | **GET** /open-api/v3/notification_emailtemplates/dropdown/get | Retrieves the collection of notification_emailtemplates resources. |
| [**notificationEmailTemplateDuplicate()**](NotificationEmailtemplatesApi.md#notificationEmailTemplateDuplicate) | **GET** /open-api/v3/notification_emailtemplates/duplicate/{id} | Retrieves a notification_emailtemplates resource. |
| [**notificationEmailTemplateEmailSend()**](NotificationEmailtemplatesApi.md#notificationEmailTemplateEmailSend) | **POST** /open-api/v3/notification_emailtemplates/email/send | Creates a notification_emailtemplates resource. |
| [**notificationEmailTemplateFetchFiles()**](NotificationEmailtemplatesApi.md#notificationEmailTemplateFetchFiles) | **GET** /open-api/v3/notification_emailtemplates/fetch_files/{id} | Retrieves a notification_emailtemplates resource. |
| [**notificationEmailTemplateGetDeleteRelations()**](NotificationEmailtemplatesApi.md#notificationEmailTemplateGetDeleteRelations) | **GET** /open-api/v3/notification_emailtemplates/get_delete_relations/{id} | Retrieves a notification_emailtemplates resource. |
| [**notificationEmailTemplateMetadata()**](NotificationEmailtemplatesApi.md#notificationEmailTemplateMetadata) | **GET** /open-api/v3/notification_emailtemplates/metadata/{id} | Retrieves a notification_emailtemplates resource. |
| [**notificationEmailTemplateParseTemplate()**](NotificationEmailtemplatesApi.md#notificationEmailTemplateParseTemplate) | **GET** /open-api/v3/notification_emailtemplates/parse/{id}/{key} | Retrieves a notification_emailtemplates resource. |


## `apiNotificationEmailtemplatesGetCollection()`

```php
apiNotificationEmailtemplatesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $subject, $subject2, $goal, $goal2, $sender, $sender2, $copy_carbon, $copy_carbon2, $blind_copy_carbon, $blind_copy_carbon2, $email_key, $email_key2, $entity_name, $entity_name2, $entity_receiver, $entity_receiver2, $language, $language2, $search, $sending_delay, $sending_delay2, $exists_deleted_at, $exists_custom_properties, $exists_subject, $exists_goal, $exists_copy_carbon, $exists_blind_copy_carbon, $exists_sender, $exists_email_key, $exists_entity_name, $exists_entity_receiver, $properties, $enabled, $tag, $order_id, $order_subject, $order_goal, $order_sender, $order_copy_carbon, $order_blind_copy_carbon, $order_email_key, $order_entity_name, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $subject_partial, $subject_start_with, $subject_end_with, $goal_partial, $goal_start_with, $goal_end_with, $email_key_partial, $email_key_start_with, $email_key_end_with, $entity_name_partial, $entity_name_start_with, $entity_name_end_with, $sender_partial, $sender_start_with, $sender_end_with, $copy_carbon_partial, $copy_carbon_start_with, $copy_carbon_end_with, $blind_copy_carbon_partial, $blind_copy_carbon_start_with, $blind_copy_carbon_end_with, $sending_delay_range): \OpenAPI\Client\Model\ApiNotificationEmailtemplatesGetCollection200Response
```

Retrieves the collection of notification_emailtemplates resources.

Retrieves the collection of notification_emailtemplates resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotificationEmailtemplatesApi(
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
$subject = 'subject_example'; // string | 
$subject2 = array('subject_example'); // string[] | 
$goal = 'goal_example'; // string | 
$goal2 = array('goal_example'); // string[] | 
$sender = 'sender_example'; // string | 
$sender2 = array('sender_example'); // string[] | 
$copy_carbon = 'copy_carbon_example'; // string | 
$copy_carbon2 = array('copy_carbon_example'); // string[] | 
$blind_copy_carbon = 'blind_copy_carbon_example'; // string | 
$blind_copy_carbon2 = array('blind_copy_carbon_example'); // string[] | 
$email_key = 'email_key_example'; // string | 
$email_key2 = array('email_key_example'); // string[] | 
$entity_name = 'entity_name_example'; // string | 
$entity_name2 = array('entity_name_example'); // string[] | 
$entity_receiver = 'entity_receiver_example'; // string | 
$entity_receiver2 = array('entity_receiver_example'); // string[] | 
$language = 'language_example'; // string | 
$language2 = array('language_example'); // string[] | 
$search = 'search_example'; // string | 
$sending_delay = 'sending_delay_example'; // string | 
$sending_delay2 = array('sending_delay_example'); // string[] | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_subject = True; // bool | 
$exists_goal = True; // bool | 
$exists_copy_carbon = True; // bool | 
$exists_blind_copy_carbon = True; // bool | 
$exists_sender = True; // bool | 
$exists_email_key = True; // bool | 
$exists_entity_name = True; // bool | 
$exists_entity_receiver = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_subject = 'order_subject_example'; // string | 
$order_goal = 'order_goal_example'; // string | 
$order_sender = 'order_sender_example'; // string | 
$order_copy_carbon = 'order_copy_carbon_example'; // string | 
$order_blind_copy_carbon = 'order_blind_copy_carbon_example'; // string | 
$order_email_key = 'order_email_key_example'; // string | 
$order_entity_name = 'order_entity_name_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | notification_emailtemplates slug_partial
$slug_start_with = 'slug_start_with_example'; // string | notification_emailtemplates slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | notification_emailtemplates slug_end_with
$id_partial = 'id_partial_example'; // string | notification_emailtemplates id_partial
$id_start_with = 'id_start_with_example'; // string | notification_emailtemplates id_start_with
$id_end_with = 'id_end_with_example'; // string | notification_emailtemplates id_end_with
$subject_partial = 'subject_partial_example'; // string | notification_emailtemplates subject_partial
$subject_start_with = 'subject_start_with_example'; // string | notification_emailtemplates subject_start_with
$subject_end_with = 'subject_end_with_example'; // string | notification_emailtemplates subject_end_with
$goal_partial = 'goal_partial_example'; // string | notification_emailtemplates goal_partial
$goal_start_with = 'goal_start_with_example'; // string | notification_emailtemplates goal_start_with
$goal_end_with = 'goal_end_with_example'; // string | notification_emailtemplates goal_end_with
$email_key_partial = 'email_key_partial_example'; // string | notification_emailtemplates emailKey_partial
$email_key_start_with = 'email_key_start_with_example'; // string | notification_emailtemplates emailKey_start_with
$email_key_end_with = 'email_key_end_with_example'; // string | notification_emailtemplates emailKey_end_with
$entity_name_partial = 'entity_name_partial_example'; // string | notification_emailtemplates entityName_partial
$entity_name_start_with = 'entity_name_start_with_example'; // string | notification_emailtemplates entityName_start_with
$entity_name_end_with = 'entity_name_end_with_example'; // string | notification_emailtemplates entityName_end_with
$sender_partial = 'sender_partial_example'; // string | notification_emailtemplates sender_partial
$sender_start_with = 'sender_start_with_example'; // string | notification_emailtemplates sender_start_with
$sender_end_with = 'sender_end_with_example'; // string | notification_emailtemplates sender_end_with
$copy_carbon_partial = 'copy_carbon_partial_example'; // string | notification_emailtemplates copyCarbon_partial
$copy_carbon_start_with = 'copy_carbon_start_with_example'; // string | notification_emailtemplates copyCarbon_start_with
$copy_carbon_end_with = 'copy_carbon_end_with_example'; // string | notification_emailtemplates copyCarbon_end_with
$blind_copy_carbon_partial = 'blind_copy_carbon_partial_example'; // string | notification_emailtemplates blindCopyCarbon_partial
$blind_copy_carbon_start_with = 'blind_copy_carbon_start_with_example'; // string | notification_emailtemplates blindCopyCarbon_start_with
$blind_copy_carbon_end_with = 'blind_copy_carbon_end_with_example'; // string | notification_emailtemplates blindCopyCarbon_end_with
$sending_delay_range = 'sending_delay_range_example'; // string | notification_emailtemplates sendingDelay_range

try {
    $result = $apiInstance->apiNotificationEmailtemplatesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $subject, $subject2, $goal, $goal2, $sender, $sender2, $copy_carbon, $copy_carbon2, $blind_copy_carbon, $blind_copy_carbon2, $email_key, $email_key2, $entity_name, $entity_name2, $entity_receiver, $entity_receiver2, $language, $language2, $search, $sending_delay, $sending_delay2, $exists_deleted_at, $exists_custom_properties, $exists_subject, $exists_goal, $exists_copy_carbon, $exists_blind_copy_carbon, $exists_sender, $exists_email_key, $exists_entity_name, $exists_entity_receiver, $properties, $enabled, $tag, $order_id, $order_subject, $order_goal, $order_sender, $order_copy_carbon, $order_blind_copy_carbon, $order_email_key, $order_entity_name, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $subject_partial, $subject_start_with, $subject_end_with, $goal_partial, $goal_start_with, $goal_end_with, $email_key_partial, $email_key_start_with, $email_key_end_with, $entity_name_partial, $entity_name_start_with, $entity_name_end_with, $sender_partial, $sender_start_with, $sender_end_with, $copy_carbon_partial, $copy_carbon_start_with, $copy_carbon_end_with, $blind_copy_carbon_partial, $blind_copy_carbon_start_with, $blind_copy_carbon_end_with, $sending_delay_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationEmailtemplatesApi->apiNotificationEmailtemplatesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **subject** | **string**|  | [optional] |
| **subject2** | [**string[]**](../Model/string.md)|  | [optional] |
| **goal** | **string**|  | [optional] |
| **goal2** | [**string[]**](../Model/string.md)|  | [optional] |
| **sender** | **string**|  | [optional] |
| **sender2** | [**string[]**](../Model/string.md)|  | [optional] |
| **copy_carbon** | **string**|  | [optional] |
| **copy_carbon2** | [**string[]**](../Model/string.md)|  | [optional] |
| **blind_copy_carbon** | **string**|  | [optional] |
| **blind_copy_carbon2** | [**string[]**](../Model/string.md)|  | [optional] |
| **email_key** | **string**|  | [optional] |
| **email_key2** | [**string[]**](../Model/string.md)|  | [optional] |
| **entity_name** | **string**|  | [optional] |
| **entity_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **entity_receiver** | **string**|  | [optional] |
| **entity_receiver2** | [**string[]**](../Model/string.md)|  | [optional] |
| **language** | **string**|  | [optional] |
| **language2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **sending_delay** | **string**|  | [optional] |
| **sending_delay2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_subject** | **bool**|  | [optional] |
| **exists_goal** | **bool**|  | [optional] |
| **exists_copy_carbon** | **bool**|  | [optional] |
| **exists_blind_copy_carbon** | **bool**|  | [optional] |
| **exists_sender** | **bool**|  | [optional] |
| **exists_email_key** | **bool**|  | [optional] |
| **exists_entity_name** | **bool**|  | [optional] |
| **exists_entity_receiver** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_subject** | **string**|  | [optional] |
| **order_goal** | **string**|  | [optional] |
| **order_sender** | **string**|  | [optional] |
| **order_copy_carbon** | **string**|  | [optional] |
| **order_blind_copy_carbon** | **string**|  | [optional] |
| **order_email_key** | **string**|  | [optional] |
| **order_entity_name** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| notification_emailtemplates slug_partial | [optional] |
| **slug_start_with** | **string**| notification_emailtemplates slug_start_with | [optional] |
| **slug_end_with** | **string**| notification_emailtemplates slug_end_with | [optional] |
| **id_partial** | **string**| notification_emailtemplates id_partial | [optional] |
| **id_start_with** | **string**| notification_emailtemplates id_start_with | [optional] |
| **id_end_with** | **string**| notification_emailtemplates id_end_with | [optional] |
| **subject_partial** | **string**| notification_emailtemplates subject_partial | [optional] |
| **subject_start_with** | **string**| notification_emailtemplates subject_start_with | [optional] |
| **subject_end_with** | **string**| notification_emailtemplates subject_end_with | [optional] |
| **goal_partial** | **string**| notification_emailtemplates goal_partial | [optional] |
| **goal_start_with** | **string**| notification_emailtemplates goal_start_with | [optional] |
| **goal_end_with** | **string**| notification_emailtemplates goal_end_with | [optional] |
| **email_key_partial** | **string**| notification_emailtemplates emailKey_partial | [optional] |
| **email_key_start_with** | **string**| notification_emailtemplates emailKey_start_with | [optional] |
| **email_key_end_with** | **string**| notification_emailtemplates emailKey_end_with | [optional] |
| **entity_name_partial** | **string**| notification_emailtemplates entityName_partial | [optional] |
| **entity_name_start_with** | **string**| notification_emailtemplates entityName_start_with | [optional] |
| **entity_name_end_with** | **string**| notification_emailtemplates entityName_end_with | [optional] |
| **sender_partial** | **string**| notification_emailtemplates sender_partial | [optional] |
| **sender_start_with** | **string**| notification_emailtemplates sender_start_with | [optional] |
| **sender_end_with** | **string**| notification_emailtemplates sender_end_with | [optional] |
| **copy_carbon_partial** | **string**| notification_emailtemplates copyCarbon_partial | [optional] |
| **copy_carbon_start_with** | **string**| notification_emailtemplates copyCarbon_start_with | [optional] |
| **copy_carbon_end_with** | **string**| notification_emailtemplates copyCarbon_end_with | [optional] |
| **blind_copy_carbon_partial** | **string**| notification_emailtemplates blindCopyCarbon_partial | [optional] |
| **blind_copy_carbon_start_with** | **string**| notification_emailtemplates blindCopyCarbon_start_with | [optional] |
| **blind_copy_carbon_end_with** | **string**| notification_emailtemplates blindCopyCarbon_end_with | [optional] |
| **sending_delay_range** | **string**| notification_emailtemplates sendingDelay_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiNotificationEmailtemplatesGetCollection200Response**](../Model/ApiNotificationEmailtemplatesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiNotificationEmailtemplatesIdDelete()`

```php
apiNotificationEmailtemplatesIdDelete($id)
```

Removes the notification_emailtemplates resource.

Removes the notification_emailtemplates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotificationEmailtemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | notification_emailtemplates identifier

try {
    $apiInstance->apiNotificationEmailtemplatesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling NotificationEmailtemplatesApi->apiNotificationEmailtemplatesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| notification_emailtemplates identifier | |

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

## `apiNotificationEmailtemplatesIdGet()`

```php
apiNotificationEmailtemplatesIdGet($id): \OpenAPI\Client\Model\NotificationEmailtemplatesJsonldStandardShowNotificationEmailTemplateShowCustomPropertyIdTimestampableTagTaggingList
```

Retrieves a notification_emailtemplates resource.

Retrieves a notification_emailtemplates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotificationEmailtemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | notification_emailtemplates identifier

try {
    $result = $apiInstance->apiNotificationEmailtemplatesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationEmailtemplatesApi->apiNotificationEmailtemplatesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| notification_emailtemplates identifier | |

### Return type

[**\OpenAPI\Client\Model\NotificationEmailtemplatesJsonldStandardShowNotificationEmailTemplateShowCustomPropertyIdTimestampableTagTaggingList**](../Model/NotificationEmailtemplatesJsonldStandardShowNotificationEmailTemplateShowCustomPropertyIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiNotificationEmailtemplatesIdPut()`

```php
apiNotificationEmailtemplatesIdPut($id, $notification_emailtemplates_jsonld_post): \OpenAPI\Client\Model\NotificationEmailtemplatesJsonldStandardShowNotificationEmailTemplateShowCustomPropertyIdTimestampableTagTaggingList
```

Replaces the notification_emailtemplates resource.

Replaces the notification_emailtemplates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotificationEmailtemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | notification_emailtemplates identifier
$notification_emailtemplates_jsonld_post = new \OpenAPI\Client\Model\NotificationEmailtemplatesJsonldPost(); // \OpenAPI\Client\Model\NotificationEmailtemplatesJsonldPost | The updated notification_emailtemplates resource

try {
    $result = $apiInstance->apiNotificationEmailtemplatesIdPut($id, $notification_emailtemplates_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationEmailtemplatesApi->apiNotificationEmailtemplatesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| notification_emailtemplates identifier | |
| **notification_emailtemplates_jsonld_post** | [**\OpenAPI\Client\Model\NotificationEmailtemplatesJsonldPost**](../Model/NotificationEmailtemplatesJsonldPost.md)| The updated notification_emailtemplates resource | |

### Return type

[**\OpenAPI\Client\Model\NotificationEmailtemplatesJsonldStandardShowNotificationEmailTemplateShowCustomPropertyIdTimestampableTagTaggingList**](../Model/NotificationEmailtemplatesJsonldStandardShowNotificationEmailTemplateShowCustomPropertyIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiNotificationEmailtemplatesPost()`

```php
apiNotificationEmailtemplatesPost($notification_emailtemplates_jsonld_add_post): \OpenAPI\Client\Model\NotificationEmailtemplatesJsonldStandardShowNotificationEmailTemplateShowCustomPropertyIdTimestampableTagTaggingList
```

Creates a notification_emailtemplates resource.

Creates a notification_emailtemplates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotificationEmailtemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_emailtemplates_jsonld_add_post = new \OpenAPI\Client\Model\NotificationEmailtemplatesJsonldAddPost(); // \OpenAPI\Client\Model\NotificationEmailtemplatesJsonldAddPost | The new notification_emailtemplates resource

try {
    $result = $apiInstance->apiNotificationEmailtemplatesPost($notification_emailtemplates_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationEmailtemplatesApi->apiNotificationEmailtemplatesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification_emailtemplates_jsonld_add_post** | [**\OpenAPI\Client\Model\NotificationEmailtemplatesJsonldAddPost**](../Model/NotificationEmailtemplatesJsonldAddPost.md)| The new notification_emailtemplates resource | |

### Return type

[**\OpenAPI\Client\Model\NotificationEmailtemplatesJsonldStandardShowNotificationEmailTemplateShowCustomPropertyIdTimestampableTagTaggingList**](../Model/NotificationEmailtemplatesJsonldStandardShowNotificationEmailTemplateShowCustomPropertyIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notificationEmailTemplateApiFileUpload()`

```php
notificationEmailTemplateApiFileUpload($id, $notification_emailtemplates_jsonld): \OpenAPI\Client\Model\NotificationEmailtemplatesJsonldNotificationEmailTemplateShowIdTimestampableTagTaggingListStandardShow
```

Creates a notification_emailtemplates resource.

Creates a notification_emailtemplates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotificationEmailtemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | notification_emailtemplates identifier
$notification_emailtemplates_jsonld = new \OpenAPI\Client\Model\NotificationEmailtemplatesJsonld(); // \OpenAPI\Client\Model\NotificationEmailtemplatesJsonld | The new notification_emailtemplates resource

try {
    $result = $apiInstance->notificationEmailTemplateApiFileUpload($id, $notification_emailtemplates_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationEmailtemplatesApi->notificationEmailTemplateApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| notification_emailtemplates identifier | |
| **notification_emailtemplates_jsonld** | [**\OpenAPI\Client\Model\NotificationEmailtemplatesJsonld**](../Model/NotificationEmailtemplatesJsonld.md)| The new notification_emailtemplates resource | |

### Return type

[**\OpenAPI\Client\Model\NotificationEmailtemplatesJsonldNotificationEmailTemplateShowIdTimestampableTagTaggingListStandardShow**](../Model/NotificationEmailtemplatesJsonldNotificationEmailTemplateShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notificationEmailTemplateBySlug()`

```php
notificationEmailTemplateBySlug($slug): \OpenAPI\Client\Model\NotificationEmailtemplatesJsonldStandardShowNotificationEmailTemplateShowCustomPropertyIdTimestampableTagTaggingList
```

Retrieves a notification_emailtemplates resource.

Retrieves a notification_emailtemplates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotificationEmailtemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | notification_emailtemplates identifier

try {
    $result = $apiInstance->notificationEmailTemplateBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationEmailtemplatesApi->notificationEmailTemplateBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| notification_emailtemplates identifier | |

### Return type

[**\OpenAPI\Client\Model\NotificationEmailtemplatesJsonldStandardShowNotificationEmailTemplateShowCustomPropertyIdTimestampableTagTaggingList**](../Model/NotificationEmailtemplatesJsonldStandardShowNotificationEmailTemplateShowCustomPropertyIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notificationEmailTemplateDropDown()`

```php
notificationEmailTemplateDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $subject, $subject2, $goal, $goal2, $sender, $sender2, $copy_carbon, $copy_carbon2, $blind_copy_carbon, $blind_copy_carbon2, $email_key, $email_key2, $entity_name, $entity_name2, $entity_receiver, $entity_receiver2, $language, $language2, $search, $sending_delay, $sending_delay2, $exists_deleted_at, $exists_custom_properties, $exists_subject, $exists_goal, $exists_copy_carbon, $exists_blind_copy_carbon, $exists_sender, $exists_email_key, $exists_entity_name, $exists_entity_receiver, $properties, $enabled, $tag, $order_id, $order_subject, $order_goal, $order_sender, $order_copy_carbon, $order_blind_copy_carbon, $order_email_key, $order_entity_name, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $subject_partial, $subject_start_with, $subject_end_with, $goal_partial, $goal_start_with, $goal_end_with, $email_key_partial, $email_key_start_with, $email_key_end_with, $entity_name_partial, $entity_name_start_with, $entity_name_end_with, $sender_partial, $sender_start_with, $sender_end_with, $copy_carbon_partial, $copy_carbon_start_with, $copy_carbon_end_with, $blind_copy_carbon_partial, $blind_copy_carbon_start_with, $blind_copy_carbon_end_with, $sending_delay_range): \OpenAPI\Client\Model\NotificationEmailTemplateDropDown200Response
```

Retrieves the collection of notification_emailtemplates resources.

Retrieves the collection of notification_emailtemplates resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotificationEmailtemplatesApi(
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
$subject = 'subject_example'; // string | 
$subject2 = array('subject_example'); // string[] | 
$goal = 'goal_example'; // string | 
$goal2 = array('goal_example'); // string[] | 
$sender = 'sender_example'; // string | 
$sender2 = array('sender_example'); // string[] | 
$copy_carbon = 'copy_carbon_example'; // string | 
$copy_carbon2 = array('copy_carbon_example'); // string[] | 
$blind_copy_carbon = 'blind_copy_carbon_example'; // string | 
$blind_copy_carbon2 = array('blind_copy_carbon_example'); // string[] | 
$email_key = 'email_key_example'; // string | 
$email_key2 = array('email_key_example'); // string[] | 
$entity_name = 'entity_name_example'; // string | 
$entity_name2 = array('entity_name_example'); // string[] | 
$entity_receiver = 'entity_receiver_example'; // string | 
$entity_receiver2 = array('entity_receiver_example'); // string[] | 
$language = 'language_example'; // string | 
$language2 = array('language_example'); // string[] | 
$search = 'search_example'; // string | 
$sending_delay = 'sending_delay_example'; // string | 
$sending_delay2 = array('sending_delay_example'); // string[] | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_subject = True; // bool | 
$exists_goal = True; // bool | 
$exists_copy_carbon = True; // bool | 
$exists_blind_copy_carbon = True; // bool | 
$exists_sender = True; // bool | 
$exists_email_key = True; // bool | 
$exists_entity_name = True; // bool | 
$exists_entity_receiver = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_subject = 'order_subject_example'; // string | 
$order_goal = 'order_goal_example'; // string | 
$order_sender = 'order_sender_example'; // string | 
$order_copy_carbon = 'order_copy_carbon_example'; // string | 
$order_blind_copy_carbon = 'order_blind_copy_carbon_example'; // string | 
$order_email_key = 'order_email_key_example'; // string | 
$order_entity_name = 'order_entity_name_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | notification_emailtemplates slug_partial
$slug_start_with = 'slug_start_with_example'; // string | notification_emailtemplates slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | notification_emailtemplates slug_end_with
$id_partial = 'id_partial_example'; // string | notification_emailtemplates id_partial
$id_start_with = 'id_start_with_example'; // string | notification_emailtemplates id_start_with
$id_end_with = 'id_end_with_example'; // string | notification_emailtemplates id_end_with
$subject_partial = 'subject_partial_example'; // string | notification_emailtemplates subject_partial
$subject_start_with = 'subject_start_with_example'; // string | notification_emailtemplates subject_start_with
$subject_end_with = 'subject_end_with_example'; // string | notification_emailtemplates subject_end_with
$goal_partial = 'goal_partial_example'; // string | notification_emailtemplates goal_partial
$goal_start_with = 'goal_start_with_example'; // string | notification_emailtemplates goal_start_with
$goal_end_with = 'goal_end_with_example'; // string | notification_emailtemplates goal_end_with
$email_key_partial = 'email_key_partial_example'; // string | notification_emailtemplates emailKey_partial
$email_key_start_with = 'email_key_start_with_example'; // string | notification_emailtemplates emailKey_start_with
$email_key_end_with = 'email_key_end_with_example'; // string | notification_emailtemplates emailKey_end_with
$entity_name_partial = 'entity_name_partial_example'; // string | notification_emailtemplates entityName_partial
$entity_name_start_with = 'entity_name_start_with_example'; // string | notification_emailtemplates entityName_start_with
$entity_name_end_with = 'entity_name_end_with_example'; // string | notification_emailtemplates entityName_end_with
$sender_partial = 'sender_partial_example'; // string | notification_emailtemplates sender_partial
$sender_start_with = 'sender_start_with_example'; // string | notification_emailtemplates sender_start_with
$sender_end_with = 'sender_end_with_example'; // string | notification_emailtemplates sender_end_with
$copy_carbon_partial = 'copy_carbon_partial_example'; // string | notification_emailtemplates copyCarbon_partial
$copy_carbon_start_with = 'copy_carbon_start_with_example'; // string | notification_emailtemplates copyCarbon_start_with
$copy_carbon_end_with = 'copy_carbon_end_with_example'; // string | notification_emailtemplates copyCarbon_end_with
$blind_copy_carbon_partial = 'blind_copy_carbon_partial_example'; // string | notification_emailtemplates blindCopyCarbon_partial
$blind_copy_carbon_start_with = 'blind_copy_carbon_start_with_example'; // string | notification_emailtemplates blindCopyCarbon_start_with
$blind_copy_carbon_end_with = 'blind_copy_carbon_end_with_example'; // string | notification_emailtemplates blindCopyCarbon_end_with
$sending_delay_range = 'sending_delay_range_example'; // string | notification_emailtemplates sendingDelay_range

try {
    $result = $apiInstance->notificationEmailTemplateDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $subject, $subject2, $goal, $goal2, $sender, $sender2, $copy_carbon, $copy_carbon2, $blind_copy_carbon, $blind_copy_carbon2, $email_key, $email_key2, $entity_name, $entity_name2, $entity_receiver, $entity_receiver2, $language, $language2, $search, $sending_delay, $sending_delay2, $exists_deleted_at, $exists_custom_properties, $exists_subject, $exists_goal, $exists_copy_carbon, $exists_blind_copy_carbon, $exists_sender, $exists_email_key, $exists_entity_name, $exists_entity_receiver, $properties, $enabled, $tag, $order_id, $order_subject, $order_goal, $order_sender, $order_copy_carbon, $order_blind_copy_carbon, $order_email_key, $order_entity_name, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $subject_partial, $subject_start_with, $subject_end_with, $goal_partial, $goal_start_with, $goal_end_with, $email_key_partial, $email_key_start_with, $email_key_end_with, $entity_name_partial, $entity_name_start_with, $entity_name_end_with, $sender_partial, $sender_start_with, $sender_end_with, $copy_carbon_partial, $copy_carbon_start_with, $copy_carbon_end_with, $blind_copy_carbon_partial, $blind_copy_carbon_start_with, $blind_copy_carbon_end_with, $sending_delay_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationEmailtemplatesApi->notificationEmailTemplateDropDown: ', $e->getMessage(), PHP_EOL;
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
| **subject** | **string**|  | [optional] |
| **subject2** | [**string[]**](../Model/string.md)|  | [optional] |
| **goal** | **string**|  | [optional] |
| **goal2** | [**string[]**](../Model/string.md)|  | [optional] |
| **sender** | **string**|  | [optional] |
| **sender2** | [**string[]**](../Model/string.md)|  | [optional] |
| **copy_carbon** | **string**|  | [optional] |
| **copy_carbon2** | [**string[]**](../Model/string.md)|  | [optional] |
| **blind_copy_carbon** | **string**|  | [optional] |
| **blind_copy_carbon2** | [**string[]**](../Model/string.md)|  | [optional] |
| **email_key** | **string**|  | [optional] |
| **email_key2** | [**string[]**](../Model/string.md)|  | [optional] |
| **entity_name** | **string**|  | [optional] |
| **entity_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **entity_receiver** | **string**|  | [optional] |
| **entity_receiver2** | [**string[]**](../Model/string.md)|  | [optional] |
| **language** | **string**|  | [optional] |
| **language2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **sending_delay** | **string**|  | [optional] |
| **sending_delay2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_subject** | **bool**|  | [optional] |
| **exists_goal** | **bool**|  | [optional] |
| **exists_copy_carbon** | **bool**|  | [optional] |
| **exists_blind_copy_carbon** | **bool**|  | [optional] |
| **exists_sender** | **bool**|  | [optional] |
| **exists_email_key** | **bool**|  | [optional] |
| **exists_entity_name** | **bool**|  | [optional] |
| **exists_entity_receiver** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_subject** | **string**|  | [optional] |
| **order_goal** | **string**|  | [optional] |
| **order_sender** | **string**|  | [optional] |
| **order_copy_carbon** | **string**|  | [optional] |
| **order_blind_copy_carbon** | **string**|  | [optional] |
| **order_email_key** | **string**|  | [optional] |
| **order_entity_name** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| notification_emailtemplates slug_partial | [optional] |
| **slug_start_with** | **string**| notification_emailtemplates slug_start_with | [optional] |
| **slug_end_with** | **string**| notification_emailtemplates slug_end_with | [optional] |
| **id_partial** | **string**| notification_emailtemplates id_partial | [optional] |
| **id_start_with** | **string**| notification_emailtemplates id_start_with | [optional] |
| **id_end_with** | **string**| notification_emailtemplates id_end_with | [optional] |
| **subject_partial** | **string**| notification_emailtemplates subject_partial | [optional] |
| **subject_start_with** | **string**| notification_emailtemplates subject_start_with | [optional] |
| **subject_end_with** | **string**| notification_emailtemplates subject_end_with | [optional] |
| **goal_partial** | **string**| notification_emailtemplates goal_partial | [optional] |
| **goal_start_with** | **string**| notification_emailtemplates goal_start_with | [optional] |
| **goal_end_with** | **string**| notification_emailtemplates goal_end_with | [optional] |
| **email_key_partial** | **string**| notification_emailtemplates emailKey_partial | [optional] |
| **email_key_start_with** | **string**| notification_emailtemplates emailKey_start_with | [optional] |
| **email_key_end_with** | **string**| notification_emailtemplates emailKey_end_with | [optional] |
| **entity_name_partial** | **string**| notification_emailtemplates entityName_partial | [optional] |
| **entity_name_start_with** | **string**| notification_emailtemplates entityName_start_with | [optional] |
| **entity_name_end_with** | **string**| notification_emailtemplates entityName_end_with | [optional] |
| **sender_partial** | **string**| notification_emailtemplates sender_partial | [optional] |
| **sender_start_with** | **string**| notification_emailtemplates sender_start_with | [optional] |
| **sender_end_with** | **string**| notification_emailtemplates sender_end_with | [optional] |
| **copy_carbon_partial** | **string**| notification_emailtemplates copyCarbon_partial | [optional] |
| **copy_carbon_start_with** | **string**| notification_emailtemplates copyCarbon_start_with | [optional] |
| **copy_carbon_end_with** | **string**| notification_emailtemplates copyCarbon_end_with | [optional] |
| **blind_copy_carbon_partial** | **string**| notification_emailtemplates blindCopyCarbon_partial | [optional] |
| **blind_copy_carbon_start_with** | **string**| notification_emailtemplates blindCopyCarbon_start_with | [optional] |
| **blind_copy_carbon_end_with** | **string**| notification_emailtemplates blindCopyCarbon_end_with | [optional] |
| **sending_delay_range** | **string**| notification_emailtemplates sendingDelay_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\NotificationEmailTemplateDropDown200Response**](../Model/NotificationEmailTemplateDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notificationEmailTemplateDuplicate()`

```php
notificationEmailTemplateDuplicate($id): \OpenAPI\Client\Model\NotificationEmailtemplatesJsonldStandardShowNotificationEmailTemplateShowCustomPropertyIdTimestampableTagTaggingList
```

Retrieves a notification_emailtemplates resource.

Retrieves a notification_emailtemplates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotificationEmailtemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | notification_emailtemplates identifier

try {
    $result = $apiInstance->notificationEmailTemplateDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationEmailtemplatesApi->notificationEmailTemplateDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| notification_emailtemplates identifier | |

### Return type

[**\OpenAPI\Client\Model\NotificationEmailtemplatesJsonldStandardShowNotificationEmailTemplateShowCustomPropertyIdTimestampableTagTaggingList**](../Model/NotificationEmailtemplatesJsonldStandardShowNotificationEmailTemplateShowCustomPropertyIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notificationEmailTemplateEmailSend()`

```php
notificationEmailTemplateEmailSend($notification_emailtemplates_jsonld): \OpenAPI\Client\Model\NotificationEmailtemplatesJsonld
```

Creates a notification_emailtemplates resource.

Creates a notification_emailtemplates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotificationEmailtemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_emailtemplates_jsonld = new \OpenAPI\Client\Model\NotificationEmailtemplatesJsonld(); // \OpenAPI\Client\Model\NotificationEmailtemplatesJsonld | The new notification_emailtemplates resource

try {
    $result = $apiInstance->notificationEmailTemplateEmailSend($notification_emailtemplates_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationEmailtemplatesApi->notificationEmailTemplateEmailSend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification_emailtemplates_jsonld** | [**\OpenAPI\Client\Model\NotificationEmailtemplatesJsonld**](../Model/NotificationEmailtemplatesJsonld.md)| The new notification_emailtemplates resource | |

### Return type

[**\OpenAPI\Client\Model\NotificationEmailtemplatesJsonld**](../Model/NotificationEmailtemplatesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notificationEmailTemplateFetchFiles()`

```php
notificationEmailTemplateFetchFiles($id): \OpenAPI\Client\Model\NotificationEmailtemplatesJsonld
```

Retrieves a notification_emailtemplates resource.

Retrieves a notification_emailtemplates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotificationEmailtemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | notification_emailtemplates identifier

try {
    $result = $apiInstance->notificationEmailTemplateFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationEmailtemplatesApi->notificationEmailTemplateFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| notification_emailtemplates identifier | |

### Return type

[**\OpenAPI\Client\Model\NotificationEmailtemplatesJsonld**](../Model/NotificationEmailtemplatesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notificationEmailTemplateGetDeleteRelations()`

```php
notificationEmailTemplateGetDeleteRelations($id): \OpenAPI\Client\Model\NotificationEmailtemplatesJsonldNotificationEmailTemplateRelations
```

Retrieves a notification_emailtemplates resource.

Retrieves a notification_emailtemplates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotificationEmailtemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | notification_emailtemplates identifier

try {
    $result = $apiInstance->notificationEmailTemplateGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationEmailtemplatesApi->notificationEmailTemplateGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| notification_emailtemplates identifier | |

### Return type

[**\OpenAPI\Client\Model\NotificationEmailtemplatesJsonldNotificationEmailTemplateRelations**](../Model/NotificationEmailtemplatesJsonldNotificationEmailTemplateRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notificationEmailTemplateMetadata()`

```php
notificationEmailTemplateMetadata($id): \OpenAPI\Client\Model\NotificationEmailtemplatesJsonldIdStandardMetadataNotificationEmailTemplateMetadataTagTaggingListNotificationEmailTemplateRelationsTimestampable
```

Retrieves a notification_emailtemplates resource.

Retrieves a notification_emailtemplates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotificationEmailtemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | notification_emailtemplates identifier

try {
    $result = $apiInstance->notificationEmailTemplateMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationEmailtemplatesApi->notificationEmailTemplateMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| notification_emailtemplates identifier | |

### Return type

[**\OpenAPI\Client\Model\NotificationEmailtemplatesJsonldIdStandardMetadataNotificationEmailTemplateMetadataTagTaggingListNotificationEmailTemplateRelationsTimestampable**](../Model/NotificationEmailtemplatesJsonldIdStandardMetadataNotificationEmailTemplateMetadataTagTaggingListNotificationEmailTemplateRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notificationEmailTemplateParseTemplate()`

```php
notificationEmailTemplateParseTemplate($id, $key): \OpenAPI\Client\Model\NotificationEmailtemplatesJsonld
```

Retrieves a notification_emailtemplates resource.

Retrieves a notification_emailtemplates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotificationEmailtemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | notification_emailtemplates identifier
$key = 'key_example'; // string | notification_emailtemplates identifier

try {
    $result = $apiInstance->notificationEmailTemplateParseTemplate($id, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationEmailtemplatesApi->notificationEmailTemplateParseTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| notification_emailtemplates identifier | |
| **key** | **string**| notification_emailtemplates identifier | |

### Return type

[**\OpenAPI\Client\Model\NotificationEmailtemplatesJsonld**](../Model/NotificationEmailtemplatesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
