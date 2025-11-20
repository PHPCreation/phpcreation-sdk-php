# # BillPaymentsBillPaymentListingIdTimestampableTagTaggingListStandardListing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp** | **\DateTime** |  | [optional]
**bill** | [**\OpenAPI\Client\Model\BillsBillPaymentListingIdTimestampableTagTaggingListStandardListing**](BillsBillPaymentListingIdTimestampableTagTaggingListStandardListing.md) |  |
**amount** | **string** |  |
**date** | **\DateTime** |  |
**type** | [**\OpenAPI\Client\Model\BillPaymentTypesBillPaymentListingIdTimestampableTagTaggingListStandardListing**](BillPaymentTypesBillPaymentListingIdTimestampableTagTaggingListStandardListing.md) |  | [optional]
**ref** | **string** |  | [optional]
**note** | **string** |  | [optional]
**confirmed_at** | **\DateTime** |  | [optional]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsBillPaymentListingIdTimestampableTagTaggingListStandardListing**](PersonCorporationsBillPaymentListingIdTimestampableTagTaggingListStandardListing.md) |  | [optional]
**metadata** | **string** |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'BP']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**confirmed** | **bool** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
