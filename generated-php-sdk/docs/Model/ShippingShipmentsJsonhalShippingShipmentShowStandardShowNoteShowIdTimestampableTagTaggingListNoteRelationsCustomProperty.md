# # ShippingShipmentsJsonhalShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**invoice** | [**\OpenAPI\Client\Model\InvoicesJsonhalShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](InvoicesJsonhalShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**bill** | [**\OpenAPI\Client\Model\BillsJsonhalShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](BillsJsonhalShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**shipper** | [**\OpenAPI\Client\Model\ShippingShippersJsonhalShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ShippingShippersJsonhalShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**date_send** | **\DateTime** |  |
**date_received** | **\DateTime** |  |
**tracking_number** | **string** |  | [optional]
**physical_identifier** | **string** |  | [optional]
**tracking_website** | **string** |  | [optional]
**notes** | **string** |  | [optional]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonhalShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonCorporationsJsonhalShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'S']
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**location_listing** | **string** |  | [optional] [readonly]
**batches_listing** | **string** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
