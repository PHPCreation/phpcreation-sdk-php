# # TimesheetAllowancesJsonldAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**donor_employe_user_id** | **int** | Legacy (utiliser loggable + migration de données) | [optional]
**payroll** | [**\OpenAPI\Client\Model\PayrollsJsonldAddPost**](PayrollsJsonldAddPost.md) |  | [optional]
**timestamp** | **\DateTime** |  |
**charging_invoices** | [**\OpenAPI\Client\Model\InvoicesJsonldAddPost[]**](InvoicesJsonldAddPost.md) |  | [optional]
**charging_projects** | [**\OpenAPI\Client\Model\ProjectsJsonldAddPost[]**](ProjectsJsonldAddPost.md) |  | [optional]
**amount** | **string** |  |
**chargeable** | **bool** |  |
**justification** | **string** |  |
**datetime** | **\DateTime** |  |
**project** | [**\OpenAPI\Client\Model\ProjectsJsonldAddPost**](ProjectsJsonldAddPost.md) |  | [optional]
**task** | [**\OpenAPI\Client\Model\ProjectTasksJsonldAddPost**](ProjectTasksJsonldAddPost.md) |  | [optional]
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonldAddPost**](PersonEmployeesJsonldAddPost.md) | Get employee. |
**status** | [**\OpenAPI\Client\Model\TimesheetStatusesJsonldAddPost**](TimesheetStatusesJsonldAddPost.md) | Get status. |
**type** | [**\OpenAPI\Client\Model\TimesheetAllowanceTypesJsonldAddPost**](TimesheetAllowanceTypesJsonldAddPost.md) | Get type. |
**notes** | **string** |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
