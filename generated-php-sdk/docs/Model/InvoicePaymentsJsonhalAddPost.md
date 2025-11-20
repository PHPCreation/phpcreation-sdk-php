# # InvoicePaymentsJsonhalAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**timestamp** | **\DateTime** |  | [optional]
**amount** | **string** |  |
**date** | **\DateTime** |  |
**deposit_date** | **\DateTime** |  |
**invoice** | [**\OpenAPI\Client\Model\InvoicesJsonhalAddPost**](InvoicesJsonhalAddPost.md) | Get invoice. |
**type** | [**\OpenAPI\Client\Model\InvoicePaymentTypesJsonhalAddPost**](InvoicePaymentTypesJsonhalAddPost.md) |  | [optional]
**ref** | **string** |  | [optional]
**note** | **string** |  | [optional]
**metadata** | **string** |  | [optional]
**confirmed_at** | **\DateTime** |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
