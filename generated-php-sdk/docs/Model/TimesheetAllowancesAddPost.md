# # TimesheetAllowancesAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**donor_employe_user_id** | **int** | Legacy (utiliser loggable + migration de données) | [optional]
**payroll** | [**\OpenAPI\Client\Model\PayrollsAddPost**](PayrollsAddPost.md) |  | [optional]
**timestamp** | **\DateTime** |  |
**charging_invoices** | [**\OpenAPI\Client\Model\InvoicesAddPost[]**](InvoicesAddPost.md) |  | [optional]
**charging_projects** | [**\OpenAPI\Client\Model\ProjectsAddPost[]**](ProjectsAddPost.md) |  | [optional]
**amount** | **string** |  |
**chargeable** | **bool** |  |
**justification** | **string** |  |
**datetime** | **\DateTime** |  |
**project** | [**\OpenAPI\Client\Model\ProjectsAddPost**](ProjectsAddPost.md) |  | [optional]
**task** | [**\OpenAPI\Client\Model\ProjectTasksAddPost**](ProjectTasksAddPost.md) |  | [optional]
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesAddPost**](PersonEmployeesAddPost.md) | Get employee. |
**status** | [**\OpenAPI\Client\Model\TimesheetStatusesAddPost**](TimesheetStatusesAddPost.md) | Get status. |
**type** | [**\OpenAPI\Client\Model\TimesheetAllowanceTypesAddPost**](TimesheetAllowanceTypesAddPost.md) | Get type. |
**notes** | **string** |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
