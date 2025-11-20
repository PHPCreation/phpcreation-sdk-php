# # ProjectTasksJsonldAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**completed_time** | **string** |  |
**project** | [**\OpenAPI\Client\Model\ProjectsJsonldAddPost**](ProjectsJsonldAddPost.md) |  |
**product_quantity** | **int** |  | [optional]
**product** | [**\OpenAPI\Client\Model\ProductsJsonldAddPost**](ProductsJsonldAddPost.md) |  | [optional]
**sender** | [**\OpenAPI\Client\Model\PersonEmployeesJsonldAddPost**](PersonEmployeesJsonldAddPost.md) |  |
**receiver** | [**\OpenAPI\Client\Model\PersonEmployeesJsonldAddPost**](PersonEmployeesJsonldAddPost.md) |  |
**sector** | [**\OpenAPI\Client\Model\ProjectSectorsJsonldAddPost**](ProjectSectorsJsonldAddPost.md) |  |
**estimated_time** | **string** |  |
**cost** | **string** |  |
**cost_description** | **string** |  | [optional]
**priority** | [**\OpenAPI\Client\Model\ProjectPrioritiesJsonldAddPost**](ProjectPrioritiesJsonldAddPost.md) |  |
**status** | [**\OpenAPI\Client\Model\ProjectStatusesJsonldAddPost**](ProjectStatusesJsonldAddPost.md) |  |
**date_created** | **\DateTime** |  | [optional]
**date_start** | **\DateTime** |  | [optional]
**deadline** | **\DateTime** |  |
**date_completed** | **\DateTime** |  | [optional]
**notes** | **string** |  | [optional]
**parent** | [**\OpenAPI\Client\Model\ProjectTasksJsonldAddPost**](ProjectTasksJsonldAddPost.md) |  | [optional]
**children** | [**\OpenAPI\Client\Model\ProjectTasksJsonldAddPost[]**](ProjectTasksJsonldAddPost.md) | // MUST BE MAPPED IN ENTITY | [optional]
**duplicate_origin** | **int** |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**api_translations** | **string[]** |  | [optional]
**title** | **string** |  | [optional]
**location** | [**\OpenAPI\Client\Model\CoordinateLocationsJsonldAddPost**](CoordinateLocationsJsonldAddPost.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
