# # AccountingEntriesJsonldAccountingEntryShowIdTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**at_context** | [**\OpenAPI\Client\Model\AsyncRequestInputAsyncRequestOutputJsonldContext**](AsyncRequestInputAsyncRequestOutputJsonldContext.md) |  | [optional]
**at_id** | **string** |  | [optional] [readonly]
**at_type** | **string** |  | [optional] [readonly]
**transaction** | [**\OpenAPI\Client\Model\AccountingTransactionsJsonldAccountingEntryShowIdTimestampableTagTaggingList**](AccountingTransactionsJsonldAccountingEntryShowIdTimestampableTagTaggingList.md) |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**account** | [**\OpenAPI\Client\Model\AccountsJsonldAccountingEntryShowIdTimestampableTagTaggingList**](AccountsJsonldAccountingEntryShowIdTimestampableTagTaggingList.md) | // @todo No cascade persists because of the generator (issue #1 https://tools.phpcreation.com/confluence/display/PHPRDoc/Bundle_Accounting-Listener_2017) | [optional]
**amount** | **string** |  |
**comment** | **string** |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'Y']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**updated_at** | **\DateTime** |  | [optional]
**absolute_amount** | **float** | Get amount absolute | [optional] [readonly]
**relative_amount** | **float** | Get amount relative to account type. | [optional]
**dt_balance** | **float** | Get the sum in Dt for the transactions entries. | [optional]
**ct_balance** | **float** | Get the sum in Ct for the transactions entries. | [optional]
**day** | **\DateTime** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
