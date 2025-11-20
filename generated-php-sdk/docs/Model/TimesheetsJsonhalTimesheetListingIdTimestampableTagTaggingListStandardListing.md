# # TimesheetsJsonhalTimesheetListingIdTimestampableTagTaggingListStandardListing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonhalTimesheetListingIdTimestampableTagTaggingListStandardListing**](PersonEmployeesJsonhalTimesheetListingIdTimestampableTagTaggingListStandardListing.md) | Get employesId. |
**task** | [**\OpenAPI\Client\Model\ProjectTasksJsonhalTimesheetListingIdTimestampableTagTaggingListStandardListing**](ProjectTasksJsonhalTimesheetListingIdTimestampableTagTaggingListStandardListing.md) | Get tasks. |
**datetime_start** | **\DateTime** |  |
**datetime_end** | **\DateTime** |  | [optional]
**description** | **string** |  | [optional]
**status** | [**\OpenAPI\Client\Model\TimesheetStatusesJsonhalTimesheetListingIdTimestampableTagTaggingListStandardListing**](TimesheetStatusesJsonhalTimesheetListingIdTimestampableTagTaggingListStandardListing.md) | Get status. |
**ratio** | **string** |  | [default to '1']
**shortcode** | **string** |  | [optional] [readonly] [default to 'TS']
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
