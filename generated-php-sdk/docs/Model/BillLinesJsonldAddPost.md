# # BillLinesJsonldAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp** | **\DateTime** |  | [optional]
**priority** | **int** |  | [optional]
**bill** | [**\OpenAPI\Client\Model\BillsJsonldAddPost**](BillsJsonldAddPost.md) | Get bill. | [optional]
**code** | **string** |  | [optional]
**scan** | **string** | Raw code scanned | [optional]
**price** | **string** |  |
**discount_price** | **string** |  |
**number** | **string** | // Quantity by line | [default to '1']
**taxes** | **bool** |  | [default to true]
**type** | [**\OpenAPI\Client\Model\BillLineTypesJsonldAddPost**](BillLineTypesJsonldAddPost.md) |  |
**product** | [**\OpenAPI\Client\Model\ProductsJsonldAddPost**](ProductsJsonldAddPost.md) |  | [optional]
**description** | **string** |  | [optional]
**discountable** | **bool** |  | [default to true]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonldAddPost**](PersonCorporationsJsonldAddPost.md) |  | [optional]
**charging_invoices** | [**\OpenAPI\Client\Model\InvoicesJsonldAddPost[]**](InvoicesJsonldAddPost.md) |  | [optional]
**charging_projects** | [**\OpenAPI\Client\Model\ProjectsJsonldAddPost[]**](ProjectsJsonldAddPost.md) |  | [optional]
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
