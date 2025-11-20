# # InvoicesJsonldInvoiceListingIdTimestampableTagTaggingListStandardListing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**at_id** | **string** |  | [optional] [readonly]
**at_type** | **string** |  | [optional] [readonly]
**at_context** | [**\OpenAPI\Client\Model\AsyncRequestInputAsyncRequestOutputJsonldContext**](AsyncRequestInputAsyncRequestOutputJsonldContext.md) |  | [optional]
**timestamp** | **\DateTime** |  | [optional]
**date** | **\DateTime** |  |
**client** | [**\OpenAPI\Client\Model\PersonClientsJsonldInvoiceListingIdTimestampableTagTaggingListStandardListing**](PersonClientsJsonldInvoiceListingIdTimestampableTagTaggingListStandardListing.md) | Get client. |
**project** | [**\OpenAPI\Client\Model\ProjectsJsonldInvoiceListingIdTimestampableTagTaggingListStandardListing**](ProjectsJsonldInvoiceListingIdTimestampableTagTaggingListStandardListing.md) |  | [optional]
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonldInvoiceListingIdTimestampableTagTaggingListStandardListing**](PersonEmployeesJsonldInvoiceListingIdTimestampableTagTaggingListStandardListing.md) | Get employe. |
**distribution_type** | [**\OpenAPI\Client\Model\InvoiceDistributionTypesJsonldInvoiceListingIdTimestampableTagTaggingListStandardListing**](InvoiceDistributionTypesJsonldInvoiceListingIdTimestampableTagTaggingListStandardListing.md) |  |
**type** | [**\OpenAPI\Client\Model\InvoiceTypesJsonldInvoiceListingIdTimestampableTagTaggingListStandardListing**](InvoiceTypesJsonldInvoiceListingIdTimestampableTagTaggingListStandardListing.md) |  |
**status** | [**\OpenAPI\Client\Model\InvoiceStatusesJsonldInvoiceListingIdTimestampableTagTaggingListStandardListing**](InvoiceStatusesJsonldInvoiceListingIdTimestampableTagTaggingListStandardListing.md) |  |
**client_ref** | **string** |  | [optional]
**currency** | [**\OpenAPI\Client\Model\FeeCurrenciesJsonldInvoiceListingIdTimestampableTagTaggingListStandardListing**](FeeCurrenciesJsonldInvoiceListingIdTimestampableTagTaggingListStandardListing.md) |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'I']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**invoice_sub_total** | **float** |  | [optional] [readonly]
**total_inventory_quantity** | **float** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
