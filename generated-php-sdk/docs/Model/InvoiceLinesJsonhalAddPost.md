# # InvoiceLinesJsonhalAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**timestamp** | **\DateTime** |  | [optional]
**priority** | **int** |  | [optional]
**invoice** | [**\OpenAPI\Client\Model\InvoicesJsonhalAddPost**](InvoicesJsonhalAddPost.md) | Get invoice. | [optional]
**code** | **string** |  | [optional]
**scan** | **string** | Raw code scanned | [optional]
**price** | **string** |  |
**discount_price** | **string** |  |
**number** | **string** |  | [default to '1']
**taxes** | **bool** |  | [default to true]
**type** | [**\OpenAPI\Client\Model\InvoiceLineTypesJsonhalAddPost**](InvoiceLineTypesJsonhalAddPost.md) |  |
**tax_customs** | [**\OpenAPI\Client\Model\FeeTaxCustomsJsonhalAddPost[]**](FeeTaxCustomsJsonhalAddPost.md) |  | [optional]
**product** | [**\OpenAPI\Client\Model\ProductsJsonhalAddPost**](ProductsJsonhalAddPost.md) |  | [optional]
**description** | **string** |  | [optional]
**discountable** | **bool** |  | [default to true]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonhalAddPost**](PersonCorporationsJsonhalAddPost.md) |  | [optional]
**converted_price** | **string** |  |
**notes** | **string** |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
