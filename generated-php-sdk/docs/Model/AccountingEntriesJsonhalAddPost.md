# # AccountingEntriesJsonhalAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**transaction** | [**\OpenAPI\Client\Model\AccountingTransactionsJsonhalAddPost**](AccountingTransactionsJsonhalAddPost.md) |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**account** | [**\OpenAPI\Client\Model\AccountsJsonhalAddPost**](AccountsJsonhalAddPost.md) | // @todo No cascade persists because of the generator (issue #1 https://tools.phpcreation.com/confluence/display/PHPRDoc/Bundle_Accounting-Listener_2017) | [optional]
**amount** | **string** |  |
**comment** | **string** |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**relative_amount** | **float** | Get amount relative to account type. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
