# # TimesheetAllowancesTimesheetAllowanceShowIdTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**donor_employe_user_id** | **int** | Legacy (utiliser loggable + migration de données) | [optional]
**payroll** | [**\OpenAPI\Client\Model\PayrollsTimesheetAllowanceShowIdTimestampableTagTaggingList**](PayrollsTimesheetAllowanceShowIdTimestampableTagTaggingList.md) |  | [optional]
**timestamp** | **\DateTime** |  |
**amount** | **string** |  |
**chargeable** | **bool** |  |
**justification** | **string** |  |
**datetime** | **\DateTime** |  |
**project** | [**\OpenAPI\Client\Model\ProjectsTimesheetAllowanceShowIdTimestampableTagTaggingList**](ProjectsTimesheetAllowanceShowIdTimestampableTagTaggingList.md) |  | [optional]
**task** | [**\OpenAPI\Client\Model\ProjectTasksTimesheetAllowanceShowIdTimestampableTagTaggingList**](ProjectTasksTimesheetAllowanceShowIdTimestampableTagTaggingList.md) |  | [optional]
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesTimesheetAllowanceShowIdTimestampableTagTaggingList**](PersonEmployeesTimesheetAllowanceShowIdTimestampableTagTaggingList.md) | Get employee. |
**status** | [**\OpenAPI\Client\Model\TimesheetStatusesTimesheetAllowanceShowIdTimestampableTagTaggingList**](TimesheetStatusesTimesheetAllowanceShowIdTimestampableTagTaggingList.md) | Get status. |
**type** | [**\OpenAPI\Client\Model\TimesheetAllowanceTypesTimesheetAllowanceShowIdTimestampableTagTaggingList**](TimesheetAllowanceTypesTimesheetAllowanceShowIdTimestampableTagTaggingList.md) | Get type. |
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsTimesheetAllowanceShowIdTimestampableTagTaggingList**](PersonCorporationsTimesheetAllowanceShowIdTimestampableTagTaggingList.md) |  | [optional]
**notes** | **string** |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'TSA']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**charging_invoices_listing** | **string** |  | [optional] [readonly]
**charging_projects_listing** | **string** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
