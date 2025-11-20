# # BillsJsonldBillListingIdTimestampableTagTaggingListStandardListing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**at_id** | **string** |  | [optional] [readonly]
**at_type** | **string** |  | [optional] [readonly]
**at_context** | [**\OpenAPI\Client\Model\AsyncRequestInputAsyncRequestOutputJsonldContext**](AsyncRequestInputAsyncRequestOutputJsonldContext.md) |  | [optional]
**timestamp** | **\DateTime** |  | [optional]
**date** | **\DateTime** |  |
**supplier** | [**\OpenAPI\Client\Model\PersonSuppliersJsonldBillListingIdTimestampableTagTaggingListStandardListing**](PersonSuppliersJsonldBillListingIdTimestampableTagTaggingListStandardListing.md) | Get supplier. |
**project** | [**\OpenAPI\Client\Model\ProjectsJsonldBillListingIdTimestampableTagTaggingListStandardListing**](ProjectsJsonldBillListingIdTimestampableTagTaggingListStandardListing.md) |  | [optional]
**payer** | [**\OpenAPI\Client\Model\PeopleJsonldBillListingIdTimestampableTagTaggingListStandardListing**](PeopleJsonldBillListingIdTimestampableTagTaggingListStandardListing.md) | Get payer. |
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonldBillListingIdTimestampableTagTaggingListStandardListing**](PersonEmployeesJsonldBillListingIdTimestampableTagTaggingListStandardListing.md) | Get employe. |
**type** | [**\OpenAPI\Client\Model\BillTypesJsonldBillListingIdTimestampableTagTaggingListStandardListing**](BillTypesJsonldBillListingIdTimestampableTagTaggingListStandardListing.md) |  |
**distribution_type** | [**\OpenAPI\Client\Model\BillDistributiontypesJsonldBillListingIdTimestampableTagTaggingListStandardListing**](BillDistributiontypesJsonldBillListingIdTimestampableTagTaggingListStandardListing.md) |  |
**status** | [**\OpenAPI\Client\Model\BillStatusesJsonldBillListingIdTimestampableTagTaggingListStandardListing**](BillStatusesJsonldBillListingIdTimestampableTagTaggingListStandardListing.md) |  |
**supplier_ref** | **string** |  | [optional]
**currency** | [**\OpenAPI\Client\Model\FeeCurrenciesJsonldBillListingIdTimestampableTagTaggingListStandardListing**](FeeCurrenciesJsonldBillListingIdTimestampableTagTaggingListStandardListing.md) |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'B']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**total** | **float** |  | [optional] [readonly]
**taxes_amount** | **float** | Get The amount of Taxes on the Bill | [optional] [readonly]
**sub_total** | **float** |  | [optional] [readonly]
**planned_delivery_time** | **\DateTime** | Get payment time | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
