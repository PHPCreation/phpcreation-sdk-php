# # NotesJsonldNoteShowIdTimestampableTagTaggingListStandardShow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**at_context** | [**\OpenAPI\Client\Model\AsyncRequestInputAsyncRequestOutputJsonldContext**](AsyncRequestInputAsyncRequestOutputJsonldContext.md) |  | [optional]
**at_id** | **string** |  | [optional] [readonly]
**at_type** | **string** |  | [optional] [readonly]
**shortcode** | **string** |  | [optional] [default to 'NO']
**content** | **string** |  | [optional]
**ref_table** | **string** |  | [optional]
**row_id** | **int** |  | [optional]
**parent** | [**\OpenAPI\Client\Model\NotesJsonldNoteShowIdTimestampableTagTaggingListStandardShow**](NotesJsonldNoteShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**children** | [**\OpenAPI\Client\Model\NotesJsonldNoteShowIdTimestampableTagTaggingListStandardShow[]**](NotesJsonldNoteShowIdTimestampableTagTaggingListStandardShow.md) | // MUST BE MAPPED IN ENTITY | [optional]
**status** | [**\OpenAPI\Client\Model\NoteStatusesJsonldNoteShowIdTimestampableTagTaggingListStandardShow**](NoteStatusesJsonldNoteShowIdTimestampableTagTaggingListStandardShow.md) |  |
**type** | [**\OpenAPI\Client\Model\NoteTypesJsonldNoteShowIdTimestampableTagTaggingListStandardShow**](NoteTypesJsonldNoteShowIdTimestampableTagTaggingListStandardShow.md) |  |
**author** | [**\OpenAPI\Client\Model\PeopleJsonldNoteShowIdTimestampableTagTaggingListStandardShow**](PeopleJsonldNoteShowIdTimestampableTagTaggingListStandardShow.md) |  |
**project** | [**\OpenAPI\Client\Model\ProjectsJsonldNoteShowIdTimestampableTagTaggingListStandardShow**](ProjectsJsonldNoteShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**comments** | [**\OpenAPI\Client\Model\NoteCommentsJsonldNoteShowIdTimestampableTagTaggingListStandardShow[]**](NoteCommentsJsonldNoteShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**root** | **int** | Get root. | [optional]
**lvl** | **int** | Get lvl. | [optional]
**lft** | **int** | Get lft. | [optional]
**rgt** | **int** | Get rgt. | [optional]
**title** | **string** |  | [optional]
**priority** | **int** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**translation_description_property_name** | **string** |  | [optional] [readonly]
**leaf** | **bool** |  | [optional] [readonly]
**leaf_api** | **bool** |  | [optional] [readonly]
**level_api** | **int** |  | [optional] [readonly]
**translation_title_property_name** | **string** |  | [optional] [readonly]
**virtual_relation** | **bool** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
