# # AccountingTransactionsJsonhalPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**child** | [**\OpenAPI\Client\Model\AccountingTransactionsJsonhalPost**](AccountingTransactionsJsonhalPost.md) |  | [optional]
**parent** | [**\OpenAPI\Client\Model\AccountingTransactionsJsonhalPost**](AccountingTransactionsJsonhalPost.md) |  | [optional]
**date** | **\DateTime** |  | [optional]
**comment** | **string** |  | [optional]
**system_trace** | **string** |  | [optional]
**origin** | **string** |  | [optional]
**ref_table** | **string** |  | [optional]
**ref_row_id** | **int** |  | [optional]
**entries** | [**\OpenAPI\Client\Model\AccountingEntriesJsonhalPost[]**](AccountingEntriesJsonhalPost.md) | Get entries. | [optional]
**period** | [**\OpenAPI\Client\Model\AccountingPeriodsJsonhalPost**](AccountingPeriodsJsonhalPost.md) |  | [optional]
**notes** | **string** |  | [optional]
**type** | [**\OpenAPI\Client\Model\AccountingTransactiontypesJsonhalPost**](AccountingTransactiontypesJsonhalPost.md) |  |
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
