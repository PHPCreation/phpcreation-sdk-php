# # InventoryBatchesJsonhalInventoryBatchShowIdTimestampableTagTaggingListStandardShow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**deleted_at** | **\DateTime** | // @todo Remove delete_status mapping on a standard level OR add delete_status to DB | [optional]
**timestamp** | **\DateTime** |  | [optional]
**notes** | **string** |  | [optional]
**weight** | **string** |  |
**dimension_w** | **string** |  |
**dimension_h** | **string** |  |
**dimension_d** | **string** |  |
**tracking_number** | **string** |  | [optional]
**physical_identifier** | **string** |  | [optional]
**shipment** | [**\OpenAPI\Client\Model\ShippingShipmentsJsonhalInventoryBatchShowIdTimestampableTagTaggingListStandardShow**](ShippingShipmentsJsonhalInventoryBatchShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**invoice** | [**\OpenAPI\Client\Model\InvoicesJsonhalInventoryBatchShowIdTimestampableTagTaggingListStandardShow**](InvoicesJsonhalInventoryBatchShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**bill** | [**\OpenAPI\Client\Model\BillsJsonhalInventoryBatchShowIdTimestampableTagTaggingListStandardShow**](BillsJsonhalInventoryBatchShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonhalInventoryBatchShowIdTimestampableTagTaggingListStandardShow**](PersonCorporationsJsonhalInventoryBatchShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'L']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**inventory_entries_listing** | **string** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
