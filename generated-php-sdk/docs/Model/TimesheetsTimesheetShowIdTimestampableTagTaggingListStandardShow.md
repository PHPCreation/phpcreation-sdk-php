# # TimesheetsTimesheetShowIdTimestampableTagTaggingListStandardShow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entry_mode** | [**\OpenAPI\Client\Model\TimesheetEntryModesTimesheetShowIdTimestampableTagTaggingListStandardShow**](TimesheetEntryModesTimesheetShowIdTimestampableTagTaggingListStandardShow.md) | Get timesheetsEntryModesId. |
**timestamp** | **\DateTime** |  |
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesTimesheetShowIdTimestampableTagTaggingListStandardShow**](PersonEmployeesTimesheetShowIdTimestampableTagTaggingListStandardShow.md) | Get employesId. |
**task** | [**\OpenAPI\Client\Model\ProjectTasksTimesheetShowIdTimestampableTagTaggingListStandardShow**](ProjectTasksTimesheetShowIdTimestampableTagTaggingListStandardShow.md) | Get tasks. |
**chargeable** | **bool** |  | [default to true]
**datetime_start** | **\DateTime** |  |
**datetime_end** | **\DateTime** |  | [optional]
**description** | **string** |  | [optional]
**status** | [**\OpenAPI\Client\Model\TimesheetStatusesTimesheetShowIdTimestampableTagTaggingListStandardShow**](TimesheetStatusesTimesheetShowIdTimestampableTagTaggingListStandardShow.md) | Get status. |
**ratio** | **string** |  | [default to '1']
**type** | [**\OpenAPI\Client\Model\TimesheetTypesTimesheetShowIdTimestampableTagTaggingListStandardShow**](TimesheetTypesTimesheetShowIdTimestampableTagTaggingListStandardShow.md) | Get timesheetsTypesId. |
**notes** | **string** |  | [optional]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsTimesheetShowIdTimestampableTagTaggingListStandardShow**](PersonCorporationsTimesheetShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'TS']
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**charging_projects_listing** | **string** |  | [optional] [readonly]
**charging_invoices_listing** | **string** |  | [optional] [readonly]
**payrolls_listing** | **string** |  | [optional] [readonly]
**timesheets_entry_mode** | **int** | Get timesheetsEntryModesId. | [optional]
**timesheet_total_hours** | **float** |  | [optional] [readonly]
**timesheet_in_progress** | **bool** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
