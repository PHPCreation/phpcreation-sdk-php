# # PersonClientsJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**created_date** | **\DateTime** |  |
**potential** | **string** |  |
**potential_notes** | **string** |  | [optional]
**satisfaction** | **string** |  |
**satisfaction_notes** | **string** |  | [optional]
**satisfaction_date** | **\DateTime** |  | [optional]
**marketing_source** | [**\OpenAPI\Client\Model\PersonMarketingsourcesJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList**](PersonMarketingsourcesJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**person** | [**\OpenAPI\Client\Model\PeopleJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList**](PeopleJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) | Get person. |
**discount** | **string** |  |
**code** | **string** |  | [optional]
**account_number** | **string** |  | [optional]
**notes** | **string** |  | [optional]
**payment_terms** | **string** |  | [optional]
**responsible** | [**\OpenAPI\Client\Model\PersonEmployeesJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList**](PersonEmployeesJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) | Get responsible. | [optional]
**shipper** | [**\OpenAPI\Client\Model\ShippingShippersJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList**](ShippingShippersJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**delivery_time** | **int** |  | [optional] [default to 30]
**max_credit** | **int** |  | [optional]
**payment_time** | **int** |  | [optional]
**interests_on_payment** | **string** |  |
**payment_discount** | **string** |  |
**nb_days_payment_discount** | **int** |  | [optional] [default to 10]
**project_type** | [**\OpenAPI\Client\Model\ProjectTypesJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList**](ProjectTypesJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**partners** | [**\OpenAPI\Client\Model\PersonPartnersJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList[]**](PersonPartnersJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**product_sell_prices** | [**\OpenAPI\Client\Model\ProductProductsellpricesJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList[]**](ProductProductsellpricesJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**order_min_amount** | **string** |  | [optional]
**order_max_amount** | **string** |  | [optional]
**account_max_amount** | **string** |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'C']
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
