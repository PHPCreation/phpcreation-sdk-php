# # CoordinatesJsonhalCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**location** | [**\OpenAPI\Client\Model\CoordinateLocationsJsonhalCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](CoordinateLocationsJsonhalCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**bills** | [**\OpenAPI\Client\Model\BillsJsonhalCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty[]**](BillsJsonhalCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) | Get type. | [optional]
**language** | [**\OpenAPI\Client\Model\LangLanguagesJsonhalCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](LangLanguagesJsonhalCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**priority** | **int** |  | [optional]
**person** | [**\OpenAPI\Client\Model\PeopleJsonhalCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PeopleJsonhalCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) | Get person. | [optional]
**type** | [**\OpenAPI\Client\Model\CoordinateTypesJsonhalCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](CoordinateTypesJsonhalCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**mbti** | [**\OpenAPI\Client\Model\CoordinateMbtisJsonhalCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](CoordinateMbtisJsonhalCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**gender** | [**\OpenAPI\Client\Model\CoordinateGendersJsonhalCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](CoordinateGendersJsonhalCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**contacts_full_name** | **string** |  | [optional]
**contacts_title** | **string** |  | [optional]
**contacts_email** | **string** |  | [optional]
**contacts_website** | **string** |  | [optional]
**contacts_tel** | **string** |  | [optional]
**contacts_fax** | **string** |  | [optional]
**contacts_cell** | **string** |  | [optional]
**contacts_page** | **string** |  | [optional]
**reachable** | **bool** |  | [default to true]
**newsletter** | **bool** |  |
**birthday** | **\DateTime** |  | [optional]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonhalCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonCorporationsJsonhalCoordinateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**notes** | **string** |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'CR']
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**tags** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**coordinate_naturalized_tel** | **string** |  | [optional] [readonly]
**coordinate_naturalized_fax** | **string** |  | [optional] [readonly]
**coordinate_naturalized_cell** | **string** |  | [optional] [readonly]
**coordinate_naturalized_page** | **string** |  | [optional] [readonly]
**invoices_listing** | **mixed** |  | [optional]
**bills_listing** | **string** | Get entries. | [optional] [readonly]
**coordinate_age** | **int** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
