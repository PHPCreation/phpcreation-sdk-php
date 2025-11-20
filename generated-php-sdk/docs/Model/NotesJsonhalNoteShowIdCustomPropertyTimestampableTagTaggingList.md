# # NotesJsonhalNoteShowIdCustomPropertyTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**shortcode** | **string** |  | [optional] [default to 'NO']
**content** | **string** |  | [optional]
**ref_table** | **string** |  | [optional]
**row_id** | **int** |  | [optional]
**parent** | [**\OpenAPI\Client\Model\NotesJsonhalNoteShowIdCustomPropertyTimestampableTagTaggingList**](NotesJsonhalNoteShowIdCustomPropertyTimestampableTagTaggingList.md) |  | [optional]
**children** | [**\OpenAPI\Client\Model\NotesJsonhalNoteShowIdCustomPropertyTimestampableTagTaggingList[]**](NotesJsonhalNoteShowIdCustomPropertyTimestampableTagTaggingList.md) | // MUST BE MAPPED IN ENTITY | [optional]
**status** | [**\OpenAPI\Client\Model\NoteStatusesJsonhalNoteShowIdCustomPropertyTimestampableTagTaggingList**](NoteStatusesJsonhalNoteShowIdCustomPropertyTimestampableTagTaggingList.md) |  |
**type** | [**\OpenAPI\Client\Model\NoteTypesJsonhalNoteShowIdCustomPropertyTimestampableTagTaggingList**](NoteTypesJsonhalNoteShowIdCustomPropertyTimestampableTagTaggingList.md) |  |
**author** | [**\OpenAPI\Client\Model\PeopleJsonhalNoteShowIdCustomPropertyTimestampableTagTaggingList**](PeopleJsonhalNoteShowIdCustomPropertyTimestampableTagTaggingList.md) |  |
**project** | [**\OpenAPI\Client\Model\ProjectsJsonhalNoteShowIdCustomPropertyTimestampableTagTaggingList**](ProjectsJsonhalNoteShowIdCustomPropertyTimestampableTagTaggingList.md) |  | [optional]
**comments** | [**\OpenAPI\Client\Model\NoteCommentsJsonhalNoteShowIdCustomPropertyTimestampableTagTaggingList[]**](NoteCommentsJsonhalNoteShowIdCustomPropertyTimestampableTagTaggingList.md) |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**root** | **int** | Get root. | [optional]
**lvl** | **int** | Get lvl. | [optional]
**lft** | **int** | Get lft. | [optional]
**rgt** | **int** | Get rgt. | [optional]
**title** | **string** |  | [optional]
**translation_description_property_name** | **string** |  | [optional] [readonly]
**leaf** | **bool** |  | [optional] [readonly]
**leaf_api** | **bool** |  | [optional] [readonly]
**level_api** | **int** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
