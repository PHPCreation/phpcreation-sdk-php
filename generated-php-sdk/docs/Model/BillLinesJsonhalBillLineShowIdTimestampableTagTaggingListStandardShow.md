# # BillLinesJsonhalBillLineShowIdTimestampableTagTaggingListStandardShow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**timestamp** | **\DateTime** |  | [optional]
**priority** | **int** |  | [optional]
**bill** | [**\OpenAPI\Client\Model\BillsJsonhalBillLineShowIdTimestampableTagTaggingListStandardShow**](BillsJsonhalBillLineShowIdTimestampableTagTaggingListStandardShow.md) | Get bill. | [optional]
**code** | **string** |  | [optional]
**scan** | **string** | Raw code scanned | [optional]
**price** | **string** |  |
**discount_price** | **string** |  |
**number** | **string** | // Quantity by line | [default to '1']
**taxes** | **bool** |  | [default to true]
**tax_customs** | [**\OpenAPI\Client\Model\FeeTaxCustomsJsonhalBillLineShowIdTimestampableTagTaggingListStandardShow[]**](FeeTaxCustomsJsonhalBillLineShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**type** | [**\OpenAPI\Client\Model\BillLineTypesJsonhalBillLineShowIdTimestampableTagTaggingListStandardShow**](BillLineTypesJsonhalBillLineShowIdTimestampableTagTaggingListStandardShow.md) |  |
**product** | [**\OpenAPI\Client\Model\ProductsJsonhalBillLineShowIdTimestampableTagTaggingListStandardShow**](ProductsJsonhalBillLineShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**description** | **string** |  | [optional]
**discountable** | **bool** |  | [default to true]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonhalBillLineShowIdTimestampableTagTaggingListStandardShow**](PersonCorporationsJsonhalBillLineShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**chargeable** | **bool** |  |
**chargeable_amount** | **string** |  |
**fisc_percent** | **string** |  |
**converted_price** | **string** |  |
**notes** | **string** |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'BL']
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**chargeable_price** | **int** |  | [optional] [readonly]
**charging_invoices_listing** | **string** |  | [optional] [readonly]
**tax_customs_listing** | [**\OpenAPI\Client\Model\CollectionJsonhalBillLineShowIdTimestampableTagTaggingListStandardShow**](CollectionJsonhalBillLineShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional] [readonly]
**charging_projects_listing** | **string** |  | [optional] [readonly]
**parent** | [**\OpenAPI\Client\Model\BillsJsonhalBillLineShowIdTimestampableTagTaggingListStandardShow**](BillsJsonhalBillLineShowIdTimestampableTagTaggingListStandardShow.md) | Get bill.getValue | [optional] [readonly]
**taxable** | **bool** |  | [optional] [readonly]
**value** | **mixed** |  | [optional] [readonly]
**converted_value** | **mixed** |  | [optional] [readonly]
**bill_line_converted_value** | **float** |  | [optional] [readonly]
**display_title** | **mixed** |  | [optional] [readonly]
**bill_line_display_title** | **string** |  | [optional] [readonly]
**display_code** | **mixed** |  | [optional] [readonly]
**bill_line_display_code** | **string** |  | [optional] [readonly]
**same_supplier_on_product_and_bill** | **bool** |  | [optional] [readonly]
**taxable_value** | **mixed** |  | [optional] [readonly]
**converted_taxable_value** | **mixed** |  | [optional] [readonly]
**accountable** | **bool** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**to_string** | **string** |  | [optional] [readonly]
**total** | **mixed** |  | [optional]
**converted_total** | **mixed** |  | [optional]
**correction** | **mixed** |  | [optional] [readonly]
**original_price** | **float** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
