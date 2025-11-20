# # TimesheetAllowancesJsonhalTimesheetAllowanceListingIdTimestampableTagTaggingListStandardListing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**amount** | **string** |  |
**datetime** | **\DateTime** |  |
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonhalTimesheetAllowanceListingIdTimestampableTagTaggingListStandardListing**](PersonEmployeesJsonhalTimesheetAllowanceListingIdTimestampableTagTaggingListStandardListing.md) | Get employee. |
**status** | [**\OpenAPI\Client\Model\TimesheetStatusesJsonhalTimesheetAllowanceListingIdTimestampableTagTaggingListStandardListing**](TimesheetStatusesJsonhalTimesheetAllowanceListingIdTimestampableTagTaggingListStandardListing.md) | Get status. |
**type** | [**\OpenAPI\Client\Model\TimesheetAllowanceTypesJsonhalTimesheetAllowanceListingIdTimestampableTagTaggingListStandardListing**](TimesheetAllowanceTypesJsonhalTimesheetAllowanceListingIdTimestampableTagTaggingListStandardListing.md) | Get type. |
**shortcode** | **string** |  | [optional] [readonly] [default to 'TSA']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
