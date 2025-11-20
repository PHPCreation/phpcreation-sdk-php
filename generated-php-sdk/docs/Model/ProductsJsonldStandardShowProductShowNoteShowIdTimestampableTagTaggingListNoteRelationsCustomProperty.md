# # ProductsJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**at_context** | [**\OpenAPI\Client\Model\AsyncRequestInputAsyncRequestOutputJsonldContext**](AsyncRequestInputAsyncRequestOutputJsonldContext.md) |  | [optional]
**at_id** | **string** |  | [optional] [readonly]
**at_type** | **string** |  | [optional] [readonly]
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**timestamp** | **\DateTime** |  |
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
**type** | [**\OpenAPI\Client\Model\ProductTypesJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ProductTypesJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  |
**brand** | [**\OpenAPI\Client\Model\ProductBrandsJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ProductBrandsJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**supplier** | [**\OpenAPI\Client\Model\PersonSuppliersJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonSuppliersJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
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
**unit_type** | [**\OpenAPI\Client\Model\ProductUnitTypesJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ProductUnitTypesJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**unit_nb** | **string** |  | [optional] [default to '1']
**supplier_code** | **string** |  | [optional]
**client_code** | **string** |  | [optional]
**sh_code** | **string** |  | [optional]
**reservation_periodicity** | [**\OpenAPI\Client\Model\ParameterPeriodsJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ParameterPeriodsJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**periodicity_precision** | **string** |  |
**bookable** | **bool** |  | [default to true]
**discountable** | **bool** |  | [default to true]
**salable** | **bool** |  | [default to true]
**invoice_line_type** | [**\OpenAPI\Client\Model\InvoiceLineTypesJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](InvoiceLineTypesJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**purchasable** | **bool** |  | [default to true]
**bill_line_type** | [**\OpenAPI\Client\Model\BillLineTypesJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](BillLineTypesJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**on_distribution** | **bool** |  | [default to true]
**on_website** | **bool** |  | [default to true]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonCorporationsJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**is_variable_expense** | **bool** |  | [default to true]
**is_immo** | **bool** |  |
**is_consumable** | **bool** |  | [default to true]
**shortcode** | **string** |  | [optional] [readonly] [default to 'A']
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**bill_lines_listing** | **string** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**invoice_lines_listing** | **string** |  | [optional] [readonly]
**rents_listing** | **string** |  | [optional] [readonly]
**rents_charged_listing** | **string** |  | [optional] [readonly]
**inventory_entries_listing** | **string** |  | [optional] [readonly]
**applicable_cost** | **float** |  | [optional] [readonly]
**translation_title_property_name** | **string** |  | [optional] [readonly]
**applicable_price** | **float** |  | [optional] [readonly]
**in_stock** | **int** | Symfony Serialization for API Platform | [optional] [readonly]
**product_stock_progress_bar** | **float** |  | [optional] [readonly]
**product_stock_ratio** | **float** |  | [optional] [readonly]
**product_stock_percentage** | **float** |  | [optional] [readonly]
**correction** | **float** |  | [optional] [readonly]
**last_inventory_entry** | **\DateTime** |  | [optional] [readonly]
**product_options_listing** | **string** |  | [optional] [readonly]
**sub_product_options_listing** | **string** |  | [optional] [readonly]
**product_components_listing** | **string** |  | [optional] [readonly]
**component_products_listing** | **string** |  | [optional] [readonly]
**translations_listing** | **string** |  | [optional] [readonly]
**buyable_base_price** | **float** |  | [optional] [readonly]
**discount** | **int** |  | [optional] [readonly]
**max_production_capacity** | **int** |  | [optional] [readonly]
**applicable_supplier_code** | **string** | Not accessible by API, because it can be confusing, given that this is only used in a specific situation. | [optional] [readonly]
**applicable_client_code** | **string** | Not accessible by API, because it can be confusing, given that this is only used in a specific situation. | [optional] [readonly]
**consumable** | **bool** |  | [optional] [readonly]
**translation_description_property_name** | **string** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
