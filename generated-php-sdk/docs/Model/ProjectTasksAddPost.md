# # ProjectTasksAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**completed_time** | **string** |  |
**project** | [**\OpenAPI\Client\Model\ProjectsAddPost**](ProjectsAddPost.md) |  |
**product_quantity** | **int** |  | [optional]
**product** | [**\OpenAPI\Client\Model\ProductsAddPost**](ProductsAddPost.md) |  | [optional]
**sender** | [**\OpenAPI\Client\Model\PersonEmployeesAddPost**](PersonEmployeesAddPost.md) |  |
**receiver** | [**\OpenAPI\Client\Model\PersonEmployeesAddPost**](PersonEmployeesAddPost.md) |  |
**sector** | [**\OpenAPI\Client\Model\ProjectSectorsAddPost**](ProjectSectorsAddPost.md) |  |
**estimated_time** | **string** |  |
**cost** | **string** |  |
**cost_description** | **string** |  | [optional]
**priority** | [**\OpenAPI\Client\Model\ProjectPrioritiesAddPost**](ProjectPrioritiesAddPost.md) |  |
**status** | [**\OpenAPI\Client\Model\ProjectStatusesAddPost**](ProjectStatusesAddPost.md) |  |
**date_created** | **\DateTime** |  | [optional]
**date_start** | **\DateTime** |  | [optional]
**deadline** | **\DateTime** |  |
**date_completed** | **\DateTime** |  | [optional]
**notes** | **string** |  | [optional]
**parent** | [**\OpenAPI\Client\Model\ProjectTasksAddPost**](ProjectTasksAddPost.md) |  | [optional]
**children** | [**\OpenAPI\Client\Model\ProjectTasksAddPost[]**](ProjectTasksAddPost.md) | // MUST BE MAPPED IN ENTITY | [optional]
**duplicate_origin** | **int** |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**api_translations** | **string[]** |  | [optional]
**title** | **string** |  | [optional]
**location** | [**\OpenAPI\Client\Model\CoordinateLocationsAddPost**](CoordinateLocationsAddPost.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
