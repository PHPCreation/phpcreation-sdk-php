# # ImportJobsJsonldImportJobShowIdCustomPropertyTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**at_context** | [**\OpenAPI\Client\Model\AsyncRequestInputAsyncRequestOutputJsonldContext**](AsyncRequestInputAsyncRequestOutputJsonldContext.md) |  | [optional]
**at_id** | **string** |  | [optional] [readonly]
**at_type** | **string** |  | [optional] [readonly]
**file_name** | **string** |  | [optional]
**original_file_name** | **string** |  | [optional]
**job_end_date** | **\DateTime** |  |
**file_path** | **string** |  | [optional]
**person** | [**\OpenAPI\Client\Model\PeopleJsonldImportJobShowIdCustomPropertyTimestampableTagTaggingList**](PeopleJsonldImportJobShowIdCustomPropertyTimestampableTagTaggingList.md) |  | [optional]
**metadata** | **string[]** |  | [optional]
**shortcode** | **string** | // Child could do something like $shortcode &#x3D; &#39;I-&#39;.parent::shortcode; (AKA: &#39;I-JOB&#39;) ? | [optional] [readonly] [default to 'I-JOB']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**import_start_date** | **\DateTime** |  | [optional]
**import_end_date** | **\DateTime** |  | [optional]
**execution_status** | **\DateTime** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
