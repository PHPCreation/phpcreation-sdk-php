# # InventoryBatchesAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deleted_at** | **\DateTime** | // @todo Remove delete_status mapping on a standard level OR add delete_status to DB | [optional]
**notes** | **string** |  | [optional]
**weight** | **string** |  |
**dimension_w** | **string** |  |
**dimension_h** | **string** |  |
**dimension_d** | **string** |  |
**tracking_number** | **string** |  | [optional]
**physical_identifier** | **string** |  | [optional]
**shipment** | [**\OpenAPI\Client\Model\ShippingShipmentsAddPost**](ShippingShipmentsAddPost.md) |  | [optional]
**invoice** | [**\OpenAPI\Client\Model\InvoicesAddPost**](InvoicesAddPost.md) |  | [optional]
**bill** | [**\OpenAPI\Client\Model\BillsAddPost**](BillsAddPost.md) |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
