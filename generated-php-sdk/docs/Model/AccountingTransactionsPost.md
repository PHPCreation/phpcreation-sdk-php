# # AccountingTransactionsPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**child** | [**\OpenAPI\Client\Model\AccountingTransactionsPost**](AccountingTransactionsPost.md) |  | [optional]
**parent** | [**\OpenAPI\Client\Model\AccountingTransactionsPost**](AccountingTransactionsPost.md) |  | [optional]
**date** | **\DateTime** |  | [optional]
**comment** | **string** |  | [optional]
**system_trace** | **string** |  | [optional]
**origin** | **string** |  | [optional]
**ref_table** | **string** |  | [optional]
**ref_row_id** | **int** |  | [optional]
**entries** | [**\OpenAPI\Client\Model\AccountingEntriesPost[]**](AccountingEntriesPost.md) | Get entries. | [optional]
**period** | [**\OpenAPI\Client\Model\AccountingPeriodsPost**](AccountingPeriodsPost.md) |  | [optional]
**notes** | **string** |  | [optional]
**type** | [**\OpenAPI\Client\Model\AccountingTransactiontypesPost**](AccountingTransactiontypesPost.md) |  |
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
