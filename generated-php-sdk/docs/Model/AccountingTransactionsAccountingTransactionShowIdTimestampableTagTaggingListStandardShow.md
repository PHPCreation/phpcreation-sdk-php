# # AccountingTransactionsAccountingTransactionShowIdTimestampableTagTaggingListStandardShow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**child** | [**\OpenAPI\Client\Model\AccountingTransactionsAccountingTransactionShowIdTimestampableTagTaggingListStandardShow**](AccountingTransactionsAccountingTransactionShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**parent** | [**\OpenAPI\Client\Model\AccountingTransactionsAccountingTransactionShowIdTimestampableTagTaggingListStandardShow**](AccountingTransactionsAccountingTransactionShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**date** | **\DateTime** |  | [optional]
**comment** | **string** |  | [optional]
**ref** | **string** | (Used by generation processing!) | [optional]
**system_trace** | **string** |  | [optional]
**origin** | **string** |  | [optional]
**ref_table** | **string** |  | [optional]
**ref_row_id** | **int** |  | [optional]
**period** | [**\OpenAPI\Client\Model\AccountingPeriodsAccountingTransactionShowIdTimestampableTagTaggingListStandardShow**](AccountingPeriodsAccountingTransactionShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**type** | [**\OpenAPI\Client\Model\AccountingTransactiontypesAccountingTransactionShowIdTimestampableTagTaggingListStandardShow**](AccountingTransactiontypesAccountingTransactionShowIdTimestampableTagTaggingListStandardShow.md) |  |
**shortcode** | **string** |  | [optional] [readonly] [default to 'N']
**metadata** | **string** |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**transaction_raw_comment** | **string** |  | [optional] [readonly]
**entries_listing** | **string** | Get entries. | [optional] [readonly]
**transaction_sum** | **float** |  | [optional] [readonly]
**transaction_total_amount** | **float** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
