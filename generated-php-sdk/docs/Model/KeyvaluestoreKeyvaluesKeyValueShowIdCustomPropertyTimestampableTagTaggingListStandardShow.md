# # KeyvaluestoreKeyvaluesKeyValueShowIdCustomPropertyTimestampableTagTaggingListStandardShow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shortcode** | **string** |  | [optional] [readonly] [default to 'KVS']
**key** | **string** |  | [optional]
**value** | **string** |  | [optional]
**description** | **string** |  | [optional]
**user** | [**\OpenAPI\Client\Model\UsersKeyValueShowIdCustomPropertyTimestampableTagTaggingListStandardShow**](UsersKeyValueShowIdCustomPropertyTimestampableTagTaggingListStandardShow.md) |  | [optional]
**corporation** | [**\OpenAPI\Client\Model\PersonCorporationsKeyValueShowIdCustomPropertyTimestampableTagTaggingListStandardShow**](PersonCorporationsKeyValueShowIdCustomPropertyTimestampableTagTaggingListStandardShow.md) |  | [optional]
**notes** | **string** |  | [optional]
**clearance_level** | **int** | 0 secret 1 super-admin 2 admin 3 super user 4 manager 5 sub manager 6 user 7 limiter user 8 almost general 9 general 10 public  https://github.com/PHPCreation/phpr_erp/issues/3316 | [optional] [default to 7]
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**field_from_key** | **string** | Get key | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**to_string** | **string** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
