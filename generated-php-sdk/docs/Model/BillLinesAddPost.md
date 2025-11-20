# # BillLinesAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp** | **\DateTime** |  | [optional]
**priority** | **int** |  | [optional]
**bill** | [**\OpenAPI\Client\Model\BillsAddPost**](BillsAddPost.md) | Get bill. | [optional]
**code** | **string** |  | [optional]
**scan** | **string** | Raw code scanned | [optional]
**price** | **string** |  |
**discount_price** | **string** |  |
**number** | **string** | // Quantity by line | [default to '1']
**taxes** | **bool** |  | [default to true]
**type** | [**\OpenAPI\Client\Model\BillLineTypesAddPost**](BillLineTypesAddPost.md) |  |
**product** | [**\OpenAPI\Client\Model\ProductsAddPost**](ProductsAddPost.md) |  | [optional]
**description** | **string** |  | [optional]
**discountable** | **bool** |  | [default to true]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsAddPost**](PersonCorporationsAddPost.md) |  | [optional]
**charging_invoices** | [**\OpenAPI\Client\Model\InvoicesAddPost[]**](InvoicesAddPost.md) |  | [optional]
**charging_projects** | [**\OpenAPI\Client\Model\ProjectsAddPost[]**](ProjectsAddPost.md) |  | [optional]
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
