# # InventoryEntriesInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deleted_at** | **\DateTime** | // @todo Remove delete_status mapping on a standard level OR add delete_status to DB | [optional]
**timestamp** | **\DateTime** |  | [optional]
**number** | **string** |  |
**product** | [**\OpenAPI\Client\Model\ProductsInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ProductsInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**description** | **string** |  | [optional]
**bill** | [**\OpenAPI\Client\Model\BillsInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](BillsInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**invoice** | [**\OpenAPI\Client\Model\InvoicesInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](InvoicesInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**task** | [**\OpenAPI\Client\Model\ProjectTasksInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ProjectTasksInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**person** | [**\OpenAPI\Client\Model\PeopleInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PeopleInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**notes** | **string** |  | [optional]
**datetime** | **\DateTime** |  |
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonCorporationsInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**batch** | [**\OpenAPI\Client\Model\InventoryBatchesInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](InventoryBatchesInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**transfer_entry_id** | **int** |  | [optional]
**scan** | **string** | Raw code scanned | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'LY']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**raw_description** | **string** | Get raw Description. | [optional] [readonly]
**origin** | **string[]** |  | [optional]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
