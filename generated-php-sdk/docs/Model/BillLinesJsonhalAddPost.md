# # BillLinesJsonhalAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**timestamp** | **\DateTime** |  | [optional]
**priority** | **int** |  | [optional]
**bill** | [**\OpenAPI\Client\Model\BillsJsonhalAddPost**](BillsJsonhalAddPost.md) | Get bill. | [optional]
**code** | **string** |  | [optional]
**scan** | **string** | Raw code scanned | [optional]
**price** | **string** |  |
**discount_price** | **string** |  |
**number** | **string** | // Quantity by line | [default to '1']
**taxes** | **bool** |  | [default to true]
**type** | [**\OpenAPI\Client\Model\BillLineTypesJsonhalAddPost**](BillLineTypesJsonhalAddPost.md) |  |
**product** | [**\OpenAPI\Client\Model\ProductsJsonhalAddPost**](ProductsJsonhalAddPost.md) |  | [optional]
**description** | **string** |  | [optional]
**discountable** | **bool** |  | [default to true]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonhalAddPost**](PersonCorporationsJsonhalAddPost.md) |  | [optional]
**charging_invoices** | [**\OpenAPI\Client\Model\InvoicesJsonhalAddPost[]**](InvoicesJsonhalAddPost.md) |  | [optional]
**charging_projects** | [**\OpenAPI\Client\Model\ProjectsJsonhalAddPost[]**](ProjectsJsonhalAddPost.md) |  | [optional]
**chargeable** | **bool** |  |
**chargeable_amount** | **string** |  |
**fisc_percent** | **string** |  |
**converted_price** | **string** |  |
**notes** | **string** |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
