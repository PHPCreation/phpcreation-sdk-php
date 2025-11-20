# # InventoryBatchesJsonldInventoryBatchShowIdTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**at_context** | [**\OpenAPI\Client\Model\AsyncRequestInputAsyncRequestOutputJsonldContext**](AsyncRequestInputAsyncRequestOutputJsonldContext.md) |  | [optional]
**at_id** | **string** |  | [optional] [readonly]
**at_type** | **string** |  | [optional] [readonly]
**timestamp** | **\DateTime** |  | [optional]
**notes** | **string** |  | [optional]
**weight** | **string** |  |
**dimension_w** | **string** |  |
**dimension_h** | **string** |  |
**dimension_d** | **string** |  |
**tracking_number** | **string** |  | [optional]
**physical_identifier** | **string** |  | [optional]
**shipment** | [**\OpenAPI\Client\Model\ShippingShipmentsJsonldInventoryBatchShowIdTimestampableTagTaggingList**](ShippingShipmentsJsonldInventoryBatchShowIdTimestampableTagTaggingList.md) |  | [optional]
**invoice** | [**\OpenAPI\Client\Model\InvoicesJsonldInventoryBatchShowIdTimestampableTagTaggingList**](InvoicesJsonldInventoryBatchShowIdTimestampableTagTaggingList.md) |  | [optional]
**bill** | [**\OpenAPI\Client\Model\BillsJsonldInventoryBatchShowIdTimestampableTagTaggingList**](BillsJsonldInventoryBatchShowIdTimestampableTagTaggingList.md) |  | [optional]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonldInventoryBatchShowIdTimestampableTagTaggingList**](PersonCorporationsJsonldInventoryBatchShowIdTimestampableTagTaggingList.md) |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'L']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**inventory_entries_listing** | **string** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
