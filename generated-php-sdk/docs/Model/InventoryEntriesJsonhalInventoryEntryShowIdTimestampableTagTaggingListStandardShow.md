# # InventoryEntriesJsonhalInventoryEntryShowIdTimestampableTagTaggingListStandardShow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**deleted_at** | **\DateTime** | // @todo Remove delete_status mapping on a standard level OR add delete_status to DB | [optional]
**timestamp** | **\DateTime** |  | [optional]
**number** | **string** |  |
**product** | [**\OpenAPI\Client\Model\ProductsJsonhalInventoryEntryShowIdTimestampableTagTaggingListStandardShow**](ProductsJsonhalInventoryEntryShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**description** | **string** |  | [optional]
**bill** | [**\OpenAPI\Client\Model\BillsJsonhalInventoryEntryShowIdTimestampableTagTaggingListStandardShow**](BillsJsonhalInventoryEntryShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**invoice** | [**\OpenAPI\Client\Model\InvoicesJsonhalInventoryEntryShowIdTimestampableTagTaggingListStandardShow**](InvoicesJsonhalInventoryEntryShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**task** | [**\OpenAPI\Client\Model\ProjectTasksJsonhalInventoryEntryShowIdTimestampableTagTaggingListStandardShow**](ProjectTasksJsonhalInventoryEntryShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**person** | [**\OpenAPI\Client\Model\PeopleJsonhalInventoryEntryShowIdTimestampableTagTaggingListStandardShow**](PeopleJsonhalInventoryEntryShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**notes** | **string** |  | [optional]
**datetime** | **\DateTime** |  |
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonhalInventoryEntryShowIdTimestampableTagTaggingListStandardShow**](PersonCorporationsJsonhalInventoryEntryShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**batch** | [**\OpenAPI\Client\Model\InventoryBatchesJsonhalInventoryEntryShowIdTimestampableTagTaggingListStandardShow**](InventoryBatchesJsonhalInventoryEntryShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**transfer_entry_id** | **int** |  | [optional]
**scan** | **string** | Raw code scanned | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'LY']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
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
