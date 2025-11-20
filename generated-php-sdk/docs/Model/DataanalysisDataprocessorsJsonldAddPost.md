# # DataanalysisDataprocessorsJsonldAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** |  |
**data_processor_results** | [**\OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonldAddPost[]**](DataanalysisDataprocessorresultsJsonldAddPost.md) |  | [optional]
**manager_name** | **string** |  | [default to 'default']
**is_series_data** | **bool** |  |
**series_names** | **string** |  | [optional]
**graph_type** | **string** | // ex: barchart, gauge, piechart, etc. | [optional]
**notes** | **string** |  | [optional]
**cache_ttl** | **int** | Processor process cache TTL in seconds | [optional] [default to 3600]
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
