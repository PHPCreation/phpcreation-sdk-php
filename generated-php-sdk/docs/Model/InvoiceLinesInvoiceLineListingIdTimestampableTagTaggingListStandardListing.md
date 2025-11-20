# # InvoiceLinesInvoiceLineListingIdTimestampableTagTaggingListStandardListing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**priority** | **int** |  | [optional]
**price** | **string** |  |
**discount_price** | **string** |  |
**number** | **string** |  | [default to '1']
**type** | [**\OpenAPI\Client\Model\InvoiceLineTypesInvoiceLineListingIdTimestampableTagTaggingListStandardListing**](InvoiceLineTypesInvoiceLineListingIdTimestampableTagTaggingListStandardListing.md) |  |
**product** | [**\OpenAPI\Client\Model\ProductsInvoiceLineListingIdTimestampableTagTaggingListStandardListing**](ProductsInvoiceLineListingIdTimestampableTagTaggingListStandardListing.md) |  | [optional]
**description** | **string** |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'IL']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**value** | **float** |  | [optional] [readonly]
**converted_value** | **mixed** |  | [optional] [readonly]
**display_title** | **string** |  | [optional] [readonly]
**line_display_title** | **string** |  | [optional] [readonly]
**display_code** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**to_string** | **string** |  | [optional] [readonly]
**correction** | **mixed** |  | [optional] [readonly]
**original_price** | **float** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
