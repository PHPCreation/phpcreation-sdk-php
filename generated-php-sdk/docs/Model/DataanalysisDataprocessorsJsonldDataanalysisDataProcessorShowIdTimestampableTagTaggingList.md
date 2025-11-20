# # DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**at_context** | [**\OpenAPI\Client\Model\AsyncRequestInputAsyncRequestOutputJsonldContext**](AsyncRequestInputAsyncRequestOutputJsonldContext.md) |  | [optional]
**at_id** | **string** |  | [optional] [readonly]
**at_type** | **string** |  | [optional] [readonly]
**title** | **string** |  |
**manager_name** | **string** |  | [default to 'default']
**series_names** | **string** |  | [optional]
**graph_type** | **string** | // ex: barchart, gauge, piechart, etc. | [optional]
**notes** | **string** |  | [optional]
**cache_ttl** | **int** | Processor process cache TTL in seconds | [optional] [default to 3600]
**shortcode** | **string** |  | [optional] [readonly] [default to 'DP']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**series_data** | **bool** |  | [optional] [readonly]
**data_array_to_process** | **string[]** | This method is a getter for the array value of dataToProcess | [optional]
**data_processor_collectors_listing** | **mixed** |  | [optional] [readonly]
**request_params_listing** | **string[]** |  | [optional]
**api_shortname** | **string** |  | [optional] [readonly]
**table_name** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
