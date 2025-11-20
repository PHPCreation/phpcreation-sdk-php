# # HrSchedulesAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**note** | **string** |  | [optional]
**description** | **string** |  | [optional]
**location** | **string** |  | [optional]
**project** | [**\OpenAPI\Client\Model\ProjectsAddPost**](ProjectsAddPost.md) |  | [optional]
**task** | [**\OpenAPI\Client\Model\ProjectTasksAddPost**](ProjectTasksAddPost.md) |  | [optional]
**availability_type** | [**\OpenAPI\Client\Model\HrAvailabilitytypesAddPost**](HrAvailabilitytypesAddPost.md) |  |
**scheduled_employee** | [**\OpenAPI\Client\Model\PersonEmployeesAddPost**](PersonEmployeesAddPost.md) | Get scheduledEmployee. | [optional]
**scheduler** | [**\OpenAPI\Client\Model\PersonEmployeesAddPost**](PersonEmployeesAddPost.md) | Get scheduler. | [optional]
**date_start** | **\DateTime** |  |
**date_end** | **\DateTime** |  |
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
