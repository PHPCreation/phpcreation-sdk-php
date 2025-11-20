# # TimesheetsJsonhalAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**entry_mode** | [**\OpenAPI\Client\Model\TimesheetEntryModesJsonhalAddPost**](TimesheetEntryModesJsonhalAddPost.md) | Get timesheetsEntryModesId. |
**timestamp** | **\DateTime** |  |
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonhalAddPost**](PersonEmployeesJsonhalAddPost.md) | Get employesId. |
**task** | [**\OpenAPI\Client\Model\ProjectTasksJsonhalAddPost**](ProjectTasksJsonhalAddPost.md) | Get tasks. |
**chargeable** | **bool** |  | [default to true]
**datetime_start** | **\DateTime** |  |
**datetime_end** | **\DateTime** |  | [optional]
**description** | **string** |  | [optional]
**status** | [**\OpenAPI\Client\Model\TimesheetStatusesJsonhalAddPost**](TimesheetStatusesJsonhalAddPost.md) | Get status. |
**ratio** | **string** |  | [default to '1']
**type** | [**\OpenAPI\Client\Model\TimesheetTypesJsonhalAddPost**](TimesheetTypesJsonhalAddPost.md) | Get timesheetsTypesId. |
**notes** | **string** |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
