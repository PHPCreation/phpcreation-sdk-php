# # TimesheetAllowancesJsonhalAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**donor_employe_user_id** | **int** | Legacy (utiliser loggable + migration de données) | [optional]
**payroll** | [**\OpenAPI\Client\Model\PayrollsJsonhalAddPost**](PayrollsJsonhalAddPost.md) |  | [optional]
**timestamp** | **\DateTime** |  |
**charging_invoices** | [**\OpenAPI\Client\Model\InvoicesJsonhalAddPost[]**](InvoicesJsonhalAddPost.md) |  | [optional]
**charging_projects** | [**\OpenAPI\Client\Model\ProjectsJsonhalAddPost[]**](ProjectsJsonhalAddPost.md) |  | [optional]
**amount** | **string** |  |
**chargeable** | **bool** |  |
**justification** | **string** |  |
**datetime** | **\DateTime** |  |
**project** | [**\OpenAPI\Client\Model\ProjectsJsonhalAddPost**](ProjectsJsonhalAddPost.md) |  | [optional]
**task** | [**\OpenAPI\Client\Model\ProjectTasksJsonhalAddPost**](ProjectTasksJsonhalAddPost.md) |  | [optional]
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonhalAddPost**](PersonEmployeesJsonhalAddPost.md) | Get employee. |
**status** | [**\OpenAPI\Client\Model\TimesheetStatusesJsonhalAddPost**](TimesheetStatusesJsonhalAddPost.md) | Get status. |
**type** | [**\OpenAPI\Client\Model\TimesheetAllowanceTypesJsonhalAddPost**](TimesheetAllowanceTypesJsonhalAddPost.md) | Get type. |
**notes** | **string** |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
