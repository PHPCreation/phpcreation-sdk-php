# # RentsJsonldAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**project** | [**\OpenAPI\Client\Model\ProjectsJsonldAddPost**](ProjectsJsonldAddPost.md) |  | [optional]
**location** | **string** |  | [optional]
**task** | [**\OpenAPI\Client\Model\ProjectTasksJsonldAddPost**](ProjectTasksJsonldAddPost.md) |  | [optional]
**date_start** | **\DateTime** |  |
**date_end** | **\DateTime** |  |
**date_checkout** | **\DateTime** |  | [optional]
**date_checkin** | **\DateTime** |  | [optional]
**chargeable** | **bool** |  | [default to true]
**description** | **string** |  | [optional]
**note** | **string** |  | [optional]
**client** | [**\OpenAPI\Client\Model\PersonClientsJsonldAddPost**](PersonClientsJsonldAddPost.md) |  |
**responsible** | [**\OpenAPI\Client\Model\PersonEmployeesJsonldAddPost**](PersonEmployeesJsonldAddPost.md) |  | [optional]
**reserved_employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonldAddPost**](PersonEmployeesJsonldAddPost.md) |  | [optional]
**product** | [**\OpenAPI\Client\Model\ProductsJsonldAddPost**](ProductsJsonldAddPost.md) |  | [optional]
**charged_product** | [**\OpenAPI\Client\Model\ProductsJsonldAddPost**](ProductsJsonldAddPost.md) |  | [optional]
**type** | [**\OpenAPI\Client\Model\RentTypesJsonldAddPost**](RentTypesJsonldAddPost.md) |  |
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
