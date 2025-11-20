# # RentsAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**project** | [**\OpenAPI\Client\Model\ProjectsAddPost**](ProjectsAddPost.md) |  | [optional]
**location** | **string** |  | [optional]
**task** | [**\OpenAPI\Client\Model\ProjectTasksAddPost**](ProjectTasksAddPost.md) |  | [optional]
**date_start** | **\DateTime** |  |
**date_end** | **\DateTime** |  |
**date_checkout** | **\DateTime** |  | [optional]
**date_checkin** | **\DateTime** |  | [optional]
**chargeable** | **bool** |  | [default to true]
**description** | **string** |  | [optional]
**note** | **string** |  | [optional]
**client** | [**\OpenAPI\Client\Model\PersonClientsAddPost**](PersonClientsAddPost.md) |  |
**responsible** | [**\OpenAPI\Client\Model\PersonEmployeesAddPost**](PersonEmployeesAddPost.md) |  | [optional]
**reserved_employee** | [**\OpenAPI\Client\Model\PersonEmployeesAddPost**](PersonEmployeesAddPost.md) |  | [optional]
**product** | [**\OpenAPI\Client\Model\ProductsAddPost**](ProductsAddPost.md) |  | [optional]
**charged_product** | [**\OpenAPI\Client\Model\ProductsAddPost**](ProductsAddPost.md) |  | [optional]
**type** | [**\OpenAPI\Client\Model\RentTypesAddPost**](RentTypesAddPost.md) |  |
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
