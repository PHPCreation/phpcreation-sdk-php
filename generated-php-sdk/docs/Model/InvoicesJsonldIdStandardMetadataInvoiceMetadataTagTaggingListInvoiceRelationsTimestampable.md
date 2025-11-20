# # InvoicesJsonldIdStandardMetadataInvoiceMetadataTagTaggingListInvoiceRelationsTimestampable

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**at_context** | [**\OpenAPI\Client\Model\AsyncRequestInputAsyncRequestOutputJsonldContext**](AsyncRequestInputAsyncRequestOutputJsonldContext.md) |  | [optional]
**at_id** | **string** |  | [optional] [readonly]
**at_type** | **string** |  | [optional] [readonly]
**payments** | [**\OpenAPI\Client\Model\InvoicePaymentsJsonldIdStandardMetadataInvoiceMetadataTagTaggingListInvoiceRelationsTimestampable[]**](InvoicePaymentsJsonldIdStandardMetadataInvoiceMetadataTagTaggingListInvoiceRelationsTimestampable.md) |  | [optional]
**followups** | [**\OpenAPI\Client\Model\FollowupsJsonldIdStandardMetadataInvoiceMetadataTagTaggingListInvoiceRelationsTimestampable[]**](FollowupsJsonldIdStandardMetadataInvoiceMetadataTagTaggingListInvoiceRelationsTimestampable.md) | Get Followups | [optional]
**shipments** | [**\OpenAPI\Client\Model\ShippingShipmentsJsonldIdStandardMetadataInvoiceMetadataTagTaggingListInvoiceRelationsTimestampable[]**](ShippingShipmentsJsonldIdStandardMetadataInvoiceMetadataTagTaggingListInvoiceRelationsTimestampable.md) |  | [optional]
**batches** | [**\OpenAPI\Client\Model\InventoryBatchesJsonldIdStandardMetadataInvoiceMetadataTagTaggingListInvoiceRelationsTimestampable[]**](InventoryBatchesJsonldIdStandardMetadataInvoiceMetadataTagTaggingListInvoiceRelationsTimestampable.md) |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'I']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**anonymous_token** | **string** |  | [optional] [readonly]
**taxes_listing** | **string** |  | [optional] [readonly]
**charged_bill_lines_listing** | **string** |  | [optional] [readonly]
**charged_rents_listing** | **string** |  | [optional] [readonly]
**charged_timesheets_listing** | **string** |  | [optional] [readonly]
**charged_allowances_listing** | **string** |  | [optional] [readonly]
**lines_listing** | **string** | Get Lines Listing | [optional] [readonly]
**inventory_entries_listing** | **string** | Get Inventory Entries Listing | [optional] [readonly]
**payments_listing** | **string** | Get Payment Listing | [optional] [readonly]
**followups_listing** | **string** | Get Followup Listing | [optional] [readonly]
**shipments_listing** | **string** | Get Shipment Listing | [optional] [readonly]
**batches_listing** | **string** | Get Inventory Batches Listing | [optional] [readonly]
**api_shortname** | **string** |  | [optional] [readonly]
**table_name** | **string** |  | [optional] [readonly]
**entity_metatada_endpoint** | **string** |  | [optional] [readonly]
**f_qcn** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
