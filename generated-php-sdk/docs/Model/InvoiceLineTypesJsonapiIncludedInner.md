# # InvoiceLineTypesJsonapiIncludedInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp** | **\DateTime** |  | [optional]
**priority** | **int** |  | [optional]
**invoice** | [**\OpenAPI\Client\Model\InvoicesJsonapi**](InvoicesJsonapi.md) | Get invoice. | [optional]
**code** | **string** |  | [optional]
**scan** | **string** | Raw code scanned | [optional]
**price** | **string** |  |
**discount_price** | **string** |  |
**number** | **string** |  | [default to '1']
**taxes** | **bool** |  | [default to true]
**type** | [**\OpenAPI\Client\Model\InvoiceLineTypesJsonapi**](InvoiceLineTypesJsonapi.md) |  |
**tax_customs** | [**\OpenAPI\Client\Model\FeeTaxCustomsJsonapi[]**](FeeTaxCustomsJsonapi.md) |  | [optional]
**product** | [**\OpenAPI\Client\Model\ProductsJsonapi**](ProductsJsonapi.md) |  | [optional]
**description** | **string** |  | [optional]
**discountable** | **bool** |  | [default to true]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonapi**](PersonCorporationsJsonapi.md) |  | [optional]
**converted_price** | **string** |  |
**notes** | **string** |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'IL']
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional] [readonly]
**updated_at** | **\DateTime** |  | [optional] [readonly]
**disabled_at** | **\DateTime** |  | [optional]
**parent** | [**\OpenAPI\Client\Model\InvoicesJsonapi**](InvoicesJsonapi.md) | Get invoice. | [optional] [readonly]
**taxable** | **bool** |  | [optional] [readonly]
**value** | **float** |  | [optional] [readonly]
**line_value** | **float** |  | [optional] [readonly]
**converted_value** | **mixed** |  | [optional] [readonly]
**display_title** | **string** |  | [optional] [readonly]
**line_display_title** | **string** |  | [optional] [readonly]
**display_code** | **string** |  | [optional] [readonly]
**line_display_code** | **string** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**tax_customs_listing** | [**\OpenAPI\Client\Model\CollectionJsonapi**](CollectionJsonapi.md) |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**total** | **mixed** |  | [optional]
**converted_total** | **mixed** |  | [optional]
**correction** | **mixed** |  | [optional] [readonly]
**original_price** | **float** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
