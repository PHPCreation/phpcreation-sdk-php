# # InvoicesInvoiceListingIdTimestampableTagTaggingListStandardListing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp** | **\DateTime** |  | [optional]
**date** | **\DateTime** |  |
**client** | [**\OpenAPI\Client\Model\PersonClientsInvoiceListingIdTimestampableTagTaggingListStandardListing**](PersonClientsInvoiceListingIdTimestampableTagTaggingListStandardListing.md) | Get client. |
**project** | [**\OpenAPI\Client\Model\ProjectsInvoiceListingIdTimestampableTagTaggingListStandardListing**](ProjectsInvoiceListingIdTimestampableTagTaggingListStandardListing.md) |  | [optional]
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesInvoiceListingIdTimestampableTagTaggingListStandardListing**](PersonEmployeesInvoiceListingIdTimestampableTagTaggingListStandardListing.md) | Get employe. |
**distribution_type** | [**\OpenAPI\Client\Model\InvoiceDistributionTypesInvoiceListingIdTimestampableTagTaggingListStandardListing**](InvoiceDistributionTypesInvoiceListingIdTimestampableTagTaggingListStandardListing.md) |  |
**type** | [**\OpenAPI\Client\Model\InvoiceTypesInvoiceListingIdTimestampableTagTaggingListStandardListing**](InvoiceTypesInvoiceListingIdTimestampableTagTaggingListStandardListing.md) |  |
**status** | [**\OpenAPI\Client\Model\InvoiceStatusesInvoiceListingIdTimestampableTagTaggingListStandardListing**](InvoiceStatusesInvoiceListingIdTimestampableTagTaggingListStandardListing.md) |  |
**client_ref** | **string** |  | [optional]
**currency** | [**\OpenAPI\Client\Model\FeeCurrenciesInvoiceListingIdTimestampableTagTaggingListStandardListing**](FeeCurrenciesInvoiceListingIdTimestampableTagTaggingListStandardListing.md) |  | [optional]
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
