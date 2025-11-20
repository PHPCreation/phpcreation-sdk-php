# # ImportJobsImportJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_name** | **string** |  | [optional]
**original_file_name** | **string** |  | [optional]
**job_end_date** | **\DateTime** |  |
**file_path** | **string** |  | [optional]
**person** | [**\OpenAPI\Client\Model\PeopleImportJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PeopleImportJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**metadata** | **string[]** |  | [optional]
**shortcode** | **string** | // Child could do something like $shortcode &#x3D; &#39;I-&#39;.parent::shortcode; (AKA: &#39;I-JOB&#39;) ? | [optional] [readonly] [default to 'I-JOB']
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**import_start_date** | **\DateTime** |  | [optional]
**import_end_date** | **\DateTime** |  | [optional]
**execution_status** | **\DateTime** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
