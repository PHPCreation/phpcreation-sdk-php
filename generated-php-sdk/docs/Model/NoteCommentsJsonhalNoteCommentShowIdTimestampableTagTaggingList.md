# # NoteCommentsJsonhalNoteCommentShowIdTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**shortcode** | **string** |  | [optional] [default to 'NC']
**parent** | [**\OpenAPI\Client\Model\NoteCommentsJsonhalNoteCommentShowIdTimestampableTagTaggingList**](NoteCommentsJsonhalNoteCommentShowIdTimestampableTagTaggingList.md) |  | [optional]
**children** | [**\OpenAPI\Client\Model\NoteCommentsJsonhalNoteCommentShowIdTimestampableTagTaggingList[]**](NoteCommentsJsonhalNoteCommentShowIdTimestampableTagTaggingList.md) | // MUST BE MAPPED IN ENTITY | [optional]
**note** | [**\OpenAPI\Client\Model\NotesJsonhalNoteCommentShowIdTimestampableTagTaggingList**](NotesJsonhalNoteCommentShowIdTimestampableTagTaggingList.md) |  |
**author** | [**\OpenAPI\Client\Model\PeopleJsonhalNoteCommentShowIdTimestampableTagTaggingList**](PeopleJsonhalNoteCommentShowIdTimestampableTagTaggingList.md) |  |
**content** | **string** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**root** | **int** | Get root. | [optional]
**lvl** | **int** | Get lvl. | [optional]
**lft** | **int** | Get lft. | [optional]
**rgt** | **int** | Get rgt. | [optional]
**leaf** | **bool** |  | [optional] [readonly]
**leaf_api** | **bool** |  | [optional] [readonly]
**level_api** | **int** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
