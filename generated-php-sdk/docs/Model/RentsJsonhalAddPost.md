# # RentsJsonhalAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**project** | [**\OpenAPI\Client\Model\ProjectsJsonhalAddPost**](ProjectsJsonhalAddPost.md) |  | [optional]
**location** | **string** |  | [optional]
**task** | [**\OpenAPI\Client\Model\ProjectTasksJsonhalAddPost**](ProjectTasksJsonhalAddPost.md) |  | [optional]
**date_start** | **\DateTime** |  |
**date_end** | **\DateTime** |  |
**date_checkout** | **\DateTime** |  | [optional]
**date_checkin** | **\DateTime** |  | [optional]
**chargeable** | **bool** |  | [default to true]
**description** | **string** |  | [optional]
**note** | **string** |  | [optional]
**client** | [**\OpenAPI\Client\Model\PersonClientsJsonhalAddPost**](PersonClientsJsonhalAddPost.md) |  |
**responsible** | [**\OpenAPI\Client\Model\PersonEmployeesJsonhalAddPost**](PersonEmployeesJsonhalAddPost.md) |  | [optional]
**reserved_employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonhalAddPost**](PersonEmployeesJsonhalAddPost.md) |  | [optional]
**product** | [**\OpenAPI\Client\Model\ProductsJsonhalAddPost**](ProductsJsonhalAddPost.md) |  | [optional]
**charged_product** | [**\OpenAPI\Client\Model\ProductsJsonhalAddPost**](ProductsJsonhalAddPost.md) |  | [optional]
**type** | [**\OpenAPI\Client\Model\RentTypesJsonhalAddPost**](RentTypesJsonhalAddPost.md) |  |
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
