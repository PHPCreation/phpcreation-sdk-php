# # HrSchedulesJsonhalHrScheduleListingIdTimestampableTagTaggingListStandardListing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**availability_type** | [**\OpenAPI\Client\Model\HrAvailabilitytypesJsonhalHrScheduleListingIdTimestampableTagTaggingListStandardListing**](HrAvailabilitytypesJsonhalHrScheduleListingIdTimestampableTagTaggingListStandardListing.md) |  |
**scheduled_employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonhalHrScheduleListingIdTimestampableTagTaggingListStandardListing**](PersonEmployeesJsonhalHrScheduleListingIdTimestampableTagTaggingListStandardListing.md) | Get scheduledEmployee. | [optional]
**scheduler** | [**\OpenAPI\Client\Model\PersonEmployeesJsonhalHrScheduleListingIdTimestampableTagTaggingListStandardListing**](PersonEmployeesJsonhalHrScheduleListingIdTimestampableTagTaggingListStandardListing.md) | Get scheduler. | [optional]
**date_start** | **\DateTime** |  |
**date_end** | **\DateTime** |  |
**shortcode** | **string** |  | [optional] [readonly] [default to 'HRD']
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
