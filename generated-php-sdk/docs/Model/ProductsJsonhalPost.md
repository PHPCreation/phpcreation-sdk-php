# # ProductsJsonhalPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**sectors** | [**\OpenAPI\Client\Model\ProjectSectorsJsonhalPost[]**](ProjectSectorsJsonhalPost.md) |  | [optional]
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
**type** | [**\OpenAPI\Client\Model\ProductTypesJsonhalPost**](ProductTypesJsonhalPost.md) |  |
**brand** | [**\OpenAPI\Client\Model\ProductBrandsJsonhalPost**](ProductBrandsJsonhalPost.md) |  | [optional]
**supplier** | [**\OpenAPI\Client\Model\PersonSuppliersJsonhalPost**](PersonSuppliersJsonhalPost.md) |  | [optional]
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
**product_options** | [**\OpenAPI\Client\Model\ProductProductOptionsJsonhalPost[]**](ProductProductOptionsJsonhalPost.md) |  | [optional]
**product_buy_costs** | [**\OpenAPI\Client\Model\ProductProductbuycostsJsonhalPost[]**](ProductProductbuycostsJsonhalPost.md) |  | [optional]
**product_sell_prices** | [**\OpenAPI\Client\Model\ProductProductsellpricesJsonhalPost[]**](ProductProductsellpricesJsonhalPost.md) |  | [optional]
**sub_product_options** | [**\OpenAPI\Client\Model\ProductProductOptionsJsonhalPost[]**](ProductProductOptionsJsonhalPost.md) |  | [optional]
**unit_type** | [**\OpenAPI\Client\Model\ProductUnitTypesJsonhalPost**](ProductUnitTypesJsonhalPost.md) |  | [optional]
**unit_nb** | **string** |  | [optional] [default to '1']
**supplier_code** | **string** |  | [optional]
**client_code** | **string** |  | [optional]
**sh_code** | **string** |  | [optional]
**reservation_periodicity** | [**\OpenAPI\Client\Model\ParameterPeriodsJsonhalPost**](ParameterPeriodsJsonhalPost.md) |  | [optional]
**periodicity_precision** | **string** |  |
**bookable** | **bool** |  | [default to true]
**discountable** | **bool** |  | [default to true]
**salable** | **bool** |  | [default to true]
**invoice_line_type** | [**\OpenAPI\Client\Model\InvoiceLineTypesJsonhalPost**](InvoiceLineTypesJsonhalPost.md) |  | [optional]
**purchasable** | **bool** |  | [default to true]
**bill_line_type** | [**\OpenAPI\Client\Model\BillLineTypesJsonhalPost**](BillLineTypesJsonhalPost.md) |  | [optional]
**on_distribution** | **bool** |  | [default to true]
**on_website** | **bool** |  | [default to true]
**is_variable_expense** | **bool** |  | [default to true]
**is_immo** | **bool** |  |
**is_consumable** | **bool** |  | [default to true]
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**api_translations** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
