# # TimesheetAllowancesJsonhalTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**donor_employe_user_id** | **int** | Legacy (utiliser loggable + migration de données) | [optional]
**payroll** | [**\OpenAPI\Client\Model\PayrollsJsonhalTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow**](PayrollsJsonhalTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**timestamp** | **\DateTime** |  |
**amount** | **string** |  |
**chargeable** | **bool** |  |
**justification** | **string** |  |
**datetime** | **\DateTime** |  |
**project** | [**\OpenAPI\Client\Model\ProjectsJsonhalTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow**](ProjectsJsonhalTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**task** | [**\OpenAPI\Client\Model\ProjectTasksJsonhalTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow**](ProjectTasksJsonhalTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonhalTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow**](PersonEmployeesJsonhalTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow.md) | Get employee. |
**status** | [**\OpenAPI\Client\Model\TimesheetStatusesJsonhalTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow**](TimesheetStatusesJsonhalTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow.md) | Get status. |
**type** | [**\OpenAPI\Client\Model\TimesheetAllowanceTypesJsonhalTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow**](TimesheetAllowanceTypesJsonhalTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow.md) | Get type. |
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonhalTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow**](PersonCorporationsJsonhalTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**notes** | **string** |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'TSA']
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**charging_invoices_listing** | **string** |  | [optional] [readonly]
**charging_projects_listing** | **string** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
