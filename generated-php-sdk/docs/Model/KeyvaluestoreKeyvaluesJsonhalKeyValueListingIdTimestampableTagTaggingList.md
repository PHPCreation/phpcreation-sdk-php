# # KeyvaluestoreKeyvaluesJsonhalKeyValueListingIdTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'KVS']
**key** | **string** |  | [optional]
**value** | **string** |  | [optional]
**description** | **string** |  | [optional]
**user** | [**\OpenAPI\Client\Model\UsersJsonhalKeyValueListingIdTimestampableTagTaggingList**](UsersJsonhalKeyValueListingIdTimestampableTagTaggingList.md) |  | [optional]
**corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonhalKeyValueListingIdTimestampableTagTaggingList**](PersonCorporationsJsonhalKeyValueListingIdTimestampableTagTaggingList.md) |  | [optional]
**clearance_level** | **int** | 0 secret 1 super-admin 2 admin 3 super user 4 manager 5 sub manager 6 user 7 limiter user 8 almost general 9 general 10 public  https://github.com/PHPCreation/phpr_erp/issues/3316 | [optional] [default to 7]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**field_from_key** | **string** | Get key | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
