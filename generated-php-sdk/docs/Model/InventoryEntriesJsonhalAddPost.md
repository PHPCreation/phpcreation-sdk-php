# # InventoryEntriesJsonhalAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**deleted_at** | **\DateTime** | // @todo Remove delete_status mapping on a standard level OR add delete_status to DB | [optional]
**number** | **string** |  |
**product** | [**\OpenAPI\Client\Model\ProductsJsonhalAddPost**](ProductsJsonhalAddPost.md) |  | [optional]
**description** | **string** |  | [optional]
**bill** | [**\OpenAPI\Client\Model\BillsJsonhalAddPost**](BillsJsonhalAddPost.md) |  | [optional]
**invoice** | [**\OpenAPI\Client\Model\InvoicesJsonhalAddPost**](InvoicesJsonhalAddPost.md) |  | [optional]
**task** | [**\OpenAPI\Client\Model\ProjectTasksJsonhalAddPost**](ProjectTasksJsonhalAddPost.md) |  | [optional]
**person** | [**\OpenAPI\Client\Model\PeopleJsonhalAddPost**](PeopleJsonhalAddPost.md) |  | [optional]
**notes** | **string** |  | [optional]
**datetime** | **\DateTime** |  |
**batch** | [**\OpenAPI\Client\Model\InventoryBatchesJsonhalAddPost**](InventoryBatchesJsonhalAddPost.md) |  | [optional]
**transfer_entry_id** | **int** |  | [optional]
**scan** | **string** | Raw code scanned | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
