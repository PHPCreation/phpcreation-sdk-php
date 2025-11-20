# # BillPaymentsJsonhalBillPaymentShowIdTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**timestamp** | **\DateTime** |  | [optional]
**bill** | [**\OpenAPI\Client\Model\BillsJsonhalBillPaymentShowIdTimestampableTagTaggingList**](BillsJsonhalBillPaymentShowIdTimestampableTagTaggingList.md) |  |
**amount** | **string** |  |
**date** | **\DateTime** |  |
**deposit_date** | **\DateTime** |  |
**type** | [**\OpenAPI\Client\Model\BillPaymentTypesJsonhalBillPaymentShowIdTimestampableTagTaggingList**](BillPaymentTypesJsonhalBillPaymentShowIdTimestampableTagTaggingList.md) |  | [optional]
**ref** | **string** |  | [optional]
**note** | **string** |  | [optional]
**confirmed_at** | **\DateTime** |  | [optional]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonhalBillPaymentShowIdTimestampableTagTaggingList**](PersonCorporationsJsonhalBillPaymentShowIdTimestampableTagTaggingList.md) |  | [optional]
**metadata** | **string** |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'BP']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**confirmed** | **bool** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
