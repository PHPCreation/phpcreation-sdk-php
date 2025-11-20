# # TimesheetAllowancesJsonhalTimesheetAllowanceShowIdCustomPropertyTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**donor_employe_user_id** | **int** | Legacy (utiliser loggable + migration de données) | [optional]
**payroll** | [**\OpenAPI\Client\Model\PayrollsJsonhalTimesheetAllowanceShowIdCustomPropertyTimestampableTagTaggingList**](PayrollsJsonhalTimesheetAllowanceShowIdCustomPropertyTimestampableTagTaggingList.md) |  | [optional]
**timestamp** | **\DateTime** |  |
**amount** | **string** |  |
**chargeable** | **bool** |  |
**justification** | **string** |  |
**datetime** | **\DateTime** |  |
**project** | [**\OpenAPI\Client\Model\ProjectsJsonhalTimesheetAllowanceShowIdCustomPropertyTimestampableTagTaggingList**](ProjectsJsonhalTimesheetAllowanceShowIdCustomPropertyTimestampableTagTaggingList.md) |  | [optional]
**task** | [**\OpenAPI\Client\Model\ProjectTasksJsonhalTimesheetAllowanceShowIdCustomPropertyTimestampableTagTaggingList**](ProjectTasksJsonhalTimesheetAllowanceShowIdCustomPropertyTimestampableTagTaggingList.md) |  | [optional]
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonhalTimesheetAllowanceShowIdCustomPropertyTimestampableTagTaggingList**](PersonEmployeesJsonhalTimesheetAllowanceShowIdCustomPropertyTimestampableTagTaggingList.md) | Get employee. |
**status** | [**\OpenAPI\Client\Model\TimesheetStatusesJsonhalTimesheetAllowanceShowIdCustomPropertyTimestampableTagTaggingList**](TimesheetStatusesJsonhalTimesheetAllowanceShowIdCustomPropertyTimestampableTagTaggingList.md) | Get status. |
**type** | [**\OpenAPI\Client\Model\TimesheetAllowanceTypesJsonhalTimesheetAllowanceShowIdCustomPropertyTimestampableTagTaggingList**](TimesheetAllowanceTypesJsonhalTimesheetAllowanceShowIdCustomPropertyTimestampableTagTaggingList.md) | Get type. |
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonhalTimesheetAllowanceShowIdCustomPropertyTimestampableTagTaggingList**](PersonCorporationsJsonhalTimesheetAllowanceShowIdCustomPropertyTimestampableTagTaggingList.md) |  | [optional]
**notes** | **string** |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'TSA']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**charging_invoices_listing** | **string** |  | [optional] [readonly]
**charging_projects_listing** | **string** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
