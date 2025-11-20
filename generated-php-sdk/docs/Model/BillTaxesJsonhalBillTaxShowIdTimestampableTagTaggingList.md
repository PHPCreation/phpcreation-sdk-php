# # BillTaxesJsonhalBillTaxShowIdTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**bill** | [**\OpenAPI\Client\Model\BillsJsonhalBillTaxShowIdTimestampableTagTaggingList**](BillsJsonhalBillTaxShowIdTimestampableTagTaggingList.md) | Get bill. | [optional]
**auto_update** | **bool** |  | [optional] [default to true]
**shortcode** | **string** |  | [optional] [readonly] [default to 'BT']
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonhalBillTaxShowIdTimestampableTagTaggingList**](PersonCorporationsJsonhalBillTaxShowIdTimestampableTagTaggingList.md) |  | [optional]
**name** | **string** |  | [optional]
**rate** | **string** |  | [optional]
**original_rate** | **string** | Original rate returned from the tax API | [optional]
**amount** | **string** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**accountable** | **bool** |  | [optional] [readonly]
**raw_amount** | **float** | Get raw amount. | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
