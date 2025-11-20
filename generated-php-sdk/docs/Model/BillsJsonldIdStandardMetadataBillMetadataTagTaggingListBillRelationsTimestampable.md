# # BillsJsonldIdStandardMetadataBillMetadataTagTaggingListBillRelationsTimestampable

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**at_context** | [**\OpenAPI\Client\Model\AsyncRequestInputAsyncRequestOutputJsonldContext**](AsyncRequestInputAsyncRequestOutputJsonldContext.md) |  | [optional]
**at_id** | **string** |  | [optional] [readonly]
**at_type** | **string** |  | [optional] [readonly]
**payments** | [**\OpenAPI\Client\Model\BillPaymentsJsonldIdStandardMetadataBillMetadataTagTaggingListBillRelationsTimestampable[]**](BillPaymentsJsonldIdStandardMetadataBillMetadataTagTaggingListBillRelationsTimestampable.md) |  | [optional]
**batches** | [**\OpenAPI\Client\Model\InventoryBatchesJsonldIdStandardMetadataBillMetadataTagTaggingListBillRelationsTimestampable[]**](InventoryBatchesJsonldIdStandardMetadataBillMetadataTagTaggingListBillRelationsTimestampable.md) |  | [optional]
**followups** | [**\OpenAPI\Client\Model\FollowupsJsonldIdStandardMetadataBillMetadataTagTaggingListBillRelationsTimestampable[]**](FollowupsJsonldIdStandardMetadataBillMetadataTagTaggingListBillRelationsTimestampable.md) | Get Followups | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'B']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**taxes_listing** | **string** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**lines_listing** | **string** | Get Lines Listing | [optional] [readonly]
**inventory_entries_listing** | **string** | Get Inventory Entries Listing | [optional] [readonly]
**payments_listing** | **string** | Get Inventory Entries Listing | [optional] [readonly]
**shipments_listing** | **string** | Get Inventory Entries Listing | [optional] [readonly]
**batches_listing** | **string** | Get Inventory Entries Listing | [optional] [readonly]
**followups_listing** | **string** | Get Inventory Entries Listing | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**api_shortname** | **string** |  | [optional] [readonly]
**table_name** | **string** |  | [optional] [readonly]
**entity_metatada_endpoint** | **string** |  | [optional] [readonly]
**f_qcn** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
