# # TimesheetsTimesheetShowIdTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entry_mode** | [**\OpenAPI\Client\Model\TimesheetEntryModesTimesheetShowIdTimestampableTagTaggingList**](TimesheetEntryModesTimesheetShowIdTimestampableTagTaggingList.md) | Get timesheetsEntryModesId. |
**timestamp** | **\DateTime** |  |
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesTimesheetShowIdTimestampableTagTaggingList**](PersonEmployeesTimesheetShowIdTimestampableTagTaggingList.md) | Get employesId. |
**task** | [**\OpenAPI\Client\Model\ProjectTasksTimesheetShowIdTimestampableTagTaggingList**](ProjectTasksTimesheetShowIdTimestampableTagTaggingList.md) | Get tasks. |
**chargeable** | **bool** |  | [default to true]
**datetime_start** | **\DateTime** |  |
**datetime_end** | **\DateTime** |  | [optional]
**description** | **string** |  | [optional]
**status** | [**\OpenAPI\Client\Model\TimesheetStatusesTimesheetShowIdTimestampableTagTaggingList**](TimesheetStatusesTimesheetShowIdTimestampableTagTaggingList.md) | Get status. |
**ratio** | **string** |  | [default to '1']
**type** | [**\OpenAPI\Client\Model\TimesheetTypesTimesheetShowIdTimestampableTagTaggingList**](TimesheetTypesTimesheetShowIdTimestampableTagTaggingList.md) | Get timesheetsTypesId. |
**notes** | **string** |  | [optional]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsTimesheetShowIdTimestampableTagTaggingList**](PersonCorporationsTimesheetShowIdTimestampableTagTaggingList.md) |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'TS']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**charging_projects_listing** | **string** |  | [optional] [readonly]
**charging_invoices_listing** | **string** |  | [optional] [readonly]
**payrolls_listing** | **string** |  | [optional] [readonly]
**timesheets_entry_mode** | **int** | Get timesheetsEntryModesId. | [optional]
**timesheet_total_hours** | **float** |  | [optional] [readonly]
**timesheet_in_progress** | **bool** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
