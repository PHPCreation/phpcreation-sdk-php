# # ProjectTasksJsonhalAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**completed_time** | **string** |  |
**project** | [**\OpenAPI\Client\Model\ProjectsJsonhalAddPost**](ProjectsJsonhalAddPost.md) |  |
**product_quantity** | **int** |  | [optional]
**product** | [**\OpenAPI\Client\Model\ProductsJsonhalAddPost**](ProductsJsonhalAddPost.md) |  | [optional]
**sender** | [**\OpenAPI\Client\Model\PersonEmployeesJsonhalAddPost**](PersonEmployeesJsonhalAddPost.md) |  |
**receiver** | [**\OpenAPI\Client\Model\PersonEmployeesJsonhalAddPost**](PersonEmployeesJsonhalAddPost.md) |  |
**sector** | [**\OpenAPI\Client\Model\ProjectSectorsJsonhalAddPost**](ProjectSectorsJsonhalAddPost.md) |  |
**estimated_time** | **string** |  |
**cost** | **string** |  |
**cost_description** | **string** |  | [optional]
**priority** | [**\OpenAPI\Client\Model\ProjectPrioritiesJsonhalAddPost**](ProjectPrioritiesJsonhalAddPost.md) |  |
**status** | [**\OpenAPI\Client\Model\ProjectStatusesJsonhalAddPost**](ProjectStatusesJsonhalAddPost.md) |  |
**date_created** | **\DateTime** |  | [optional]
**date_start** | **\DateTime** |  | [optional]
**deadline** | **\DateTime** |  |
**date_completed** | **\DateTime** |  | [optional]
**notes** | **string** |  | [optional]
**parent** | [**\OpenAPI\Client\Model\ProjectTasksJsonhalAddPost**](ProjectTasksJsonhalAddPost.md) |  | [optional]
**children** | [**\OpenAPI\Client\Model\ProjectTasksJsonhalAddPost[]**](ProjectTasksJsonhalAddPost.md) | // MUST BE MAPPED IN ENTITY | [optional]
**duplicate_origin** | **int** |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**api_translations** | **string[]** |  | [optional]
**title** | **string** |  | [optional]
**location** | [**\OpenAPI\Client\Model\CoordinateLocationsJsonhalAddPost**](CoordinateLocationsJsonhalAddPost.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
