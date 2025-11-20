# # ProductsJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**at_context** | [**\OpenAPI\Client\Model\AsyncRequestInputAsyncRequestOutputJsonldContext**](AsyncRequestInputAsyncRequestOutputJsonldContext.md) |  | [optional]
**at_id** | **string** |  | [optional] [readonly]
**at_type** | **string** |  | [optional] [readonly]
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**sectors** | [**\OpenAPI\Client\Model\ProjectSectorsJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList[]**](ProjectSectorsJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**sku** | **string** |  | [optional]
**version** | **string** |  | [optional]
**price** | **string** |  |
**price_special** | **string** |  |
**visible_status** | **bool** |  | [default to true]
**taxable** | **bool** |  | [default to true]
**country** | **string** |  | [optional]
**place** | **string** |  | [optional]
**place_precision** | **string** |  | [optional]
**producible** | **bool** |  | [default to true]
**new_status** | **bool** |  | [default to true]
**type** | [**\OpenAPI\Client\Model\ProductTypesJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList**](ProductTypesJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  |
**brand** | [**\OpenAPI\Client\Model\ProductBrandsJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList**](ProductBrandsJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**supplier** | [**\OpenAPI\Client\Model\PersonSuppliersJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList**](PersonSuppliersJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**weight** | **string** |  |
**dimension_w** | **string** |  |
**dimension_h** | **string** |  |
**dimension_d** | **string** |  |
**time** | **string** | Assert\\NotNull(     message &#x3D; \&quot;product.time.notNull\&quot; ) | [optional]
**cost** | **string** |  |
**additionnal_production_cost** | **string** |  |
**cost_special** | **string** |  |
**inv_qty_min** | **string** |  |
**inv_qty_max** | **string** |  |
**moq** | **string** |  |
**package_order** | **string** |  |
**inventory_tracking** | **bool** |  |
**rent_tracking** | **bool** |  |
**counted_in_inventory** | **bool** |  |
**shipping_tracking** | **bool** |  |
**notes** | **string** |  | [optional]
**notes_invoice** | **string** |  | [optional]
**notes_bill** | **string** |  | [optional]
**notes_rent** | **string** |  | [optional]
**notes_production** | **string** |  | [optional]
**notes_inventory** | **string** |  | [optional]
**notes_shipping** | **string** |  | [optional]
**product_options** | [**\OpenAPI\Client\Model\ProductProductOptionsJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList[]**](ProductProductOptionsJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**product_buy_costs** | [**\OpenAPI\Client\Model\ProductProductbuycostsJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList[]**](ProductProductbuycostsJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**product_sell_prices** | [**\OpenAPI\Client\Model\ProductProductsellpricesJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList[]**](ProductProductsellpricesJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**sub_product_options** | [**\OpenAPI\Client\Model\ProductProductOptionsJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList[]**](ProductProductOptionsJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**unit_type** | [**\OpenAPI\Client\Model\ProductUnitTypesJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList**](ProductUnitTypesJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**unit_nb** | **string** |  | [optional] [default to '1']
**supplier_code** | **string** |  | [optional]
**client_code** | **string** |  | [optional]
**sh_code** | **string** |  | [optional]
**reservation_periodicity** | [**\OpenAPI\Client\Model\ParameterPeriodsJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList**](ParameterPeriodsJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**periodicity_precision** | **string** |  |
**bookable** | **bool** |  | [default to true]
**discountable** | **bool** |  | [default to true]
**salable** | **bool** |  | [default to true]
**invoice_line_type** | [**\OpenAPI\Client\Model\InvoiceLineTypesJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList**](InvoiceLineTypesJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**purchasable** | **bool** |  | [default to true]
**bill_line_type** | [**\OpenAPI\Client\Model\BillLineTypesJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList**](BillLineTypesJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**on_distribution** | **bool** |  | [default to true]
**on_website** | **bool** |  | [default to true]
**is_variable_expense** | **bool** |  | [default to true]
**is_immo** | **bool** |  |
**is_consumable** | **bool** |  | [default to true]
**shortcode** | **string** |  | [optional] [readonly] [default to 'A']
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**api_translations** | **string[]** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**translation_description_property_name** | **string** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
