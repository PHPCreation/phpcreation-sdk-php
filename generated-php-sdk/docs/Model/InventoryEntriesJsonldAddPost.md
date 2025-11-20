# # InventoryEntriesJsonldAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deleted_at** | **\DateTime** | // @todo Remove delete_status mapping on a standard level OR add delete_status to DB | [optional]
**number** | **string** |  |
**product** | [**\OpenAPI\Client\Model\ProductsJsonldAddPost**](ProductsJsonldAddPost.md) |  | [optional]
**description** | **string** |  | [optional]
**bill** | [**\OpenAPI\Client\Model\BillsJsonldAddPost**](BillsJsonldAddPost.md) |  | [optional]
**invoice** | [**\OpenAPI\Client\Model\InvoicesJsonldAddPost**](InvoicesJsonldAddPost.md) |  | [optional]
**task** | [**\OpenAPI\Client\Model\ProjectTasksJsonldAddPost**](ProjectTasksJsonldAddPost.md) |  | [optional]
**person** | [**\OpenAPI\Client\Model\PeopleJsonldAddPost**](PeopleJsonldAddPost.md) |  | [optional]
**notes** | **string** |  | [optional]
**datetime** | **\DateTime** |  |
**batch** | [**\OpenAPI\Client\Model\InventoryBatchesJsonldAddPost**](InventoryBatchesJsonldAddPost.md) |  | [optional]
**transfer_entry_id** | **int** |  | [optional]
**scan** | **string** | Raw code scanned | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
