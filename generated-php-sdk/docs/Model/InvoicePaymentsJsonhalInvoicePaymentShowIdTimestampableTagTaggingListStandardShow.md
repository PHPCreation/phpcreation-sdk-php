# # InvoicePaymentsJsonhalInvoicePaymentShowIdTimestampableTagTaggingListStandardShow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**timestamp** | **\DateTime** |  | [optional]
**amount** | **string** |  |
**date** | **\DateTime** |  |
**deposit_date** | **\DateTime** |  |
**invoice** | [**\OpenAPI\Client\Model\InvoicesJsonhalInvoicePaymentShowIdTimestampableTagTaggingListStandardShow**](InvoicesJsonhalInvoicePaymentShowIdTimestampableTagTaggingListStandardShow.md) | Get invoice. |
**type** | [**\OpenAPI\Client\Model\InvoicePaymentTypesJsonhalInvoicePaymentShowIdTimestampableTagTaggingListStandardShow**](InvoicePaymentTypesJsonhalInvoicePaymentShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**ref** | **string** |  | [optional]
**note** | **string** |  | [optional]
**metadata** | **string** |  | [optional]
**confirmed_at** | **\DateTime** |  | [optional]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonhalInvoicePaymentShowIdTimestampableTagTaggingListStandardShow**](PersonCorporationsJsonhalInvoicePaymentShowIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'IP']
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**to_string** | **string** |  | [optional] [readonly]
**confirmed** | **bool** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
