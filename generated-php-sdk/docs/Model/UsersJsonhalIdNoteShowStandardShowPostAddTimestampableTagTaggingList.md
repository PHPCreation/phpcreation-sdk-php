# # UsersJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**id** | **int** |  | [optional] [readonly]
**person** | [**\OpenAPI\Client\Model\PeopleJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList**](PeopleJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**key_value** | [**\OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList[]**](KeyvaluestoreKeyvaluesJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**system_salt** | **string** |  | [optional]
**username** | **string** |  | [optional]
**username_canonical** | **string** |  | [optional]
**email** | **string** |  | [optional]
**email_canonical** | **string** |  | [optional]
**first_name** | **string** |  | [optional]
**last_name** | **string** |  |
**phone_number** | **string** |  | [optional]
**salt** | **string** | The salt to use for hashing. | [optional]
**plain_password** | **string** | Plain password. Used for model validation. Must not be persisted. | [optional]
**last_login** | **\DateTime** |  | [optional]
**confirmation_token** | **string** | Random string sent to the user email address in order to verify it. | [optional]
**password_requested_at** | **\DateTime** |  | [optional]
**notes** | **string** |  | [optional]
**roles** | [**\OpenAPI\Client\Model\UserRolesJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList[]**](UserRolesJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**default_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList**](PersonCorporationsJsonhalIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**landing_page_url** | **string** |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'UU']
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**full_name** | **string** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
