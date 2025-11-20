# # InventoryEntriesAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deleted_at** | **\DateTime** | // @todo Remove delete_status mapping on a standard level OR add delete_status to DB | [optional]
**number** | **string** |  |
**product** | [**\OpenAPI\Client\Model\ProductsAddPost**](ProductsAddPost.md) |  | [optional]
**description** | **string** |  | [optional]
**bill** | [**\OpenAPI\Client\Model\BillsAddPost**](BillsAddPost.md) |  | [optional]
**invoice** | [**\OpenAPI\Client\Model\InvoicesAddPost**](InvoicesAddPost.md) |  | [optional]
**task** | [**\OpenAPI\Client\Model\ProjectTasksAddPost**](ProjectTasksAddPost.md) |  | [optional]
**person** | [**\OpenAPI\Client\Model\PeopleAddPost**](PeopleAddPost.md) |  | [optional]
**notes** | **string** |  | [optional]
**datetime** | **\DateTime** |  |
**batch** | [**\OpenAPI\Client\Model\InventoryBatchesAddPost**](InventoryBatchesAddPost.md) |  | [optional]
**transfer_entry_id** | **int** |  | [optional]
**scan** | **string** | Raw code scanned | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
