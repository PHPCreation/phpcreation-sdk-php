# # InvoiceLinesJsonldAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp** | **\DateTime** |  | [optional]
**priority** | **int** |  | [optional]
**invoice** | [**\OpenAPI\Client\Model\InvoicesJsonldAddPost**](InvoicesJsonldAddPost.md) | Get invoice. | [optional]
**code** | **string** |  | [optional]
**scan** | **string** | Raw code scanned | [optional]
**price** | **string** |  |
**discount_price** | **string** |  |
**number** | **string** |  | [default to '1']
**taxes** | **bool** |  | [default to true]
**type** | [**\OpenAPI\Client\Model\InvoiceLineTypesJsonldAddPost**](InvoiceLineTypesJsonldAddPost.md) |  |
**tax_customs** | [**\OpenAPI\Client\Model\FeeTaxCustomsJsonldAddPost[]**](FeeTaxCustomsJsonldAddPost.md) |  | [optional]
**product** | [**\OpenAPI\Client\Model\ProductsJsonldAddPost**](ProductsJsonldAddPost.md) |  | [optional]
**description** | **string** |  | [optional]
**discountable** | **bool** |  | [default to true]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonldAddPost**](PersonCorporationsJsonldAddPost.md) |  | [optional]
**converted_price** | **string** |  |
**notes** | **string** |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
