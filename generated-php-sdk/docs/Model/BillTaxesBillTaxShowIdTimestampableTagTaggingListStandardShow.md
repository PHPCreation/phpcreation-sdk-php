# # BillTaxesBillTaxShowIdTimestampableTagTaggingListStandardShow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bill** | [**\OpenAPI\Client\Model\BillsBillTaxShowIdTimestampableTagTaggingListStandardShow**](BillsBillTaxShowIdTimestampableTagTaggingListStandardShow.md) | Get bill. | [optional]
**auto_update** | **bool** |  | [optional] [default to true]
**shortcode** | **string** |  | [optional] [readonly] [default to 'BT']
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsBillTaxShowIdTimestampableTagTaggingListStandardShow**](PersonCorporationsBillTaxShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**name** | **string** |  | [optional]
**rate** | **string** |  | [optional]
**original_rate** | **string** | Original rate returned from the tax API | [optional]
**amount** | **string** |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**accountable** | **bool** |  | [optional] [readonly]
**to_string** | **string** |  | [optional] [readonly]
**raw_amount** | **float** | Get raw amount. | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
