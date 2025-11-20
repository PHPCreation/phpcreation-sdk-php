# # BillLinesBillLineListingIdTimestampableTagTaggingListStandardListing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**priority** | **int** |  | [optional]
**bill** | [**\OpenAPI\Client\Model\BillsBillLineListingIdTimestampableTagTaggingListStandardListing**](BillsBillLineListingIdTimestampableTagTaggingListStandardListing.md) | Get bill. | [optional]
**price** | **string** |  |
**discount_price** | **string** |  |
**number** | **string** | // Quantity by line | [default to '1']
**type** | [**\OpenAPI\Client\Model\BillLineTypesBillLineListingIdTimestampableTagTaggingListStandardListing**](BillLineTypesBillLineListingIdTimestampableTagTaggingListStandardListing.md) |  |
**product** | [**\OpenAPI\Client\Model\ProductsBillLineListingIdTimestampableTagTaggingListStandardListing**](ProductsBillLineListingIdTimestampableTagTaggingListStandardListing.md) |  | [optional]
**description** | **string** |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'BL']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**value** | **mixed** |  | [optional] [readonly]
**converted_value** | **mixed** |  | [optional] [readonly]
**display_title** | **mixed** |  | [optional] [readonly]
**bill_line_display_title** | **string** |  | [optional] [readonly]
**display_code** | **mixed** |  | [optional] [readonly]
**same_supplier_on_product_and_bill** | **bool** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**to_string** | **string** |  | [optional] [readonly]
**correction** | **mixed** |  | [optional] [readonly]
**original_price** | **float** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
