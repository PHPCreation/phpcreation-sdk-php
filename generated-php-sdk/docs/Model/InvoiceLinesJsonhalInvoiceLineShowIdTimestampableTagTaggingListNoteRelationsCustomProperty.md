# # InvoiceLinesJsonhalInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**timestamp** | **\DateTime** |  | [optional]
**priority** | **int** |  | [optional]
**invoice** | [**\OpenAPI\Client\Model\InvoicesJsonhalInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](InvoicesJsonhalInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) | Get invoice. | [optional]
**code** | **string** |  | [optional]
**scan** | **string** | Raw code scanned | [optional]
**price** | **string** |  |
**discount_price** | **string** |  |
**number** | **string** |  | [default to '1']
**taxes** | **bool** |  | [default to true]
**type** | [**\OpenAPI\Client\Model\InvoiceLineTypesJsonhalInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](InvoiceLineTypesJsonhalInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  |
**tax_customs** | [**\OpenAPI\Client\Model\FeeTaxCustomsJsonhalInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty[]**](FeeTaxCustomsJsonhalInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**product** | [**\OpenAPI\Client\Model\ProductsJsonhalInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ProductsJsonhalInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**description** | **string** |  | [optional]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonhalInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonCorporationsJsonhalInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**converted_price** | **string** |  |
**notes** | **string** |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'IL']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**parent** | [**\OpenAPI\Client\Model\InvoicesJsonhalInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](InvoicesJsonhalInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) | Get invoice. | [optional] [readonly]
**taxable** | **bool** |  | [optional] [readonly]
**value** | **float** |  | [optional] [readonly]
**line_value** | **float** |  | [optional] [readonly]
**converted_value** | **mixed** |  | [optional] [readonly]
**display_title** | **string** |  | [optional] [readonly]
**line_display_title** | **string** |  | [optional] [readonly]
**display_code** | **string** |  | [optional] [readonly]
**line_display_code** | **string** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**tax_customs_listing** | [**\OpenAPI\Client\Model\CollectionJsonhalInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](CollectionJsonhalInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**total** | **mixed** |  | [optional]
**converted_total** | **mixed** |  | [optional]
**correction** | **mixed** |  | [optional] [readonly]
**original_price** | **float** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
