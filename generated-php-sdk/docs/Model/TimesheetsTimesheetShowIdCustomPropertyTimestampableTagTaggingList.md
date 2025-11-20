# # TimesheetsTimesheetShowIdCustomPropertyTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entry_mode** | [**\OpenAPI\Client\Model\TimesheetEntryModesTimesheetShowIdCustomPropertyTimestampableTagTaggingList**](TimesheetEntryModesTimesheetShowIdCustomPropertyTimestampableTagTaggingList.md) | Get timesheetsEntryModesId. |
**timestamp** | **\DateTime** |  |
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesTimesheetShowIdCustomPropertyTimestampableTagTaggingList**](PersonEmployeesTimesheetShowIdCustomPropertyTimestampableTagTaggingList.md) | Get employesId. |
**task** | [**\OpenAPI\Client\Model\ProjectTasksTimesheetShowIdCustomPropertyTimestampableTagTaggingList**](ProjectTasksTimesheetShowIdCustomPropertyTimestampableTagTaggingList.md) | Get tasks. |
**chargeable** | **bool** |  | [default to true]
**datetime_start** | **\DateTime** |  |
**datetime_end** | **\DateTime** |  | [optional]
**description** | **string** |  | [optional]
**status** | [**\OpenAPI\Client\Model\TimesheetStatusesTimesheetShowIdCustomPropertyTimestampableTagTaggingList**](TimesheetStatusesTimesheetShowIdCustomPropertyTimestampableTagTaggingList.md) | Get status. |
**ratio** | **string** |  | [default to '1']
**type** | [**\OpenAPI\Client\Model\TimesheetTypesTimesheetShowIdCustomPropertyTimestampableTagTaggingList**](TimesheetTypesTimesheetShowIdCustomPropertyTimestampableTagTaggingList.md) | Get timesheetsTypesId. |
**notes** | **string** |  | [optional]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsTimesheetShowIdCustomPropertyTimestampableTagTaggingList**](PersonCorporationsTimesheetShowIdCustomPropertyTimestampableTagTaggingList.md) |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'TS']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
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
