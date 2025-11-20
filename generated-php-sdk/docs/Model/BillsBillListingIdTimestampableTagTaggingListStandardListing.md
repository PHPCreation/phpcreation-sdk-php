# # BillsBillListingIdTimestampableTagTaggingListStandardListing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp** | **\DateTime** |  | [optional]
**date** | **\DateTime** |  |
**supplier** | [**\OpenAPI\Client\Model\PersonSuppliersBillListingIdTimestampableTagTaggingListStandardListing**](PersonSuppliersBillListingIdTimestampableTagTaggingListStandardListing.md) | Get supplier. |
**project** | [**\OpenAPI\Client\Model\ProjectsBillListingIdTimestampableTagTaggingListStandardListing**](ProjectsBillListingIdTimestampableTagTaggingListStandardListing.md) |  | [optional]
**payer** | [**\OpenAPI\Client\Model\PeopleBillListingIdTimestampableTagTaggingListStandardListing**](PeopleBillListingIdTimestampableTagTaggingListStandardListing.md) | Get payer. |
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesBillListingIdTimestampableTagTaggingListStandardListing**](PersonEmployeesBillListingIdTimestampableTagTaggingListStandardListing.md) | Get employe. |
**type** | [**\OpenAPI\Client\Model\BillTypesBillListingIdTimestampableTagTaggingListStandardListing**](BillTypesBillListingIdTimestampableTagTaggingListStandardListing.md) |  |
**distribution_type** | [**\OpenAPI\Client\Model\BillDistributiontypesBillListingIdTimestampableTagTaggingListStandardListing**](BillDistributiontypesBillListingIdTimestampableTagTaggingListStandardListing.md) |  |
**status** | [**\OpenAPI\Client\Model\BillStatusesBillListingIdTimestampableTagTaggingListStandardListing**](BillStatusesBillListingIdTimestampableTagTaggingListStandardListing.md) |  |
**supplier_ref** | **string** |  | [optional]
**currency** | [**\OpenAPI\Client\Model\FeeCurrenciesBillListingIdTimestampableTagTaggingListStandardListing**](FeeCurrenciesBillListingIdTimestampableTagTaggingListStandardListing.md) |  | [optional]
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
