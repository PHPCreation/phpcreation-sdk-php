# # CoordinateLocationsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**at_context** | [**\OpenAPI\Client\Model\AsyncRequestInputAsyncRequestOutputJsonldContext**](AsyncRequestInputAsyncRequestOutputJsonldContext.md) |  | [optional]
**at_id** | **string** |  | [optional] [readonly]
**at_type** | **string** |  | [optional] [readonly]
**coordinates** | [**\OpenAPI\Client\Model\CoordinatesJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](CoordinatesJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**shipment** | [**\OpenAPI\Client\Model\ShippingShipmentsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ShippingShipmentsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**task** | [**\OpenAPI\Client\Model\ProjectTasksJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ProjectTasksJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**address** | **string** |  | [optional]
**suite** | **string** |  | [optional]
**road** | **string** |  | [optional]
**city** | **string** |  | [optional]
**state** | **string** |  | [optional] [default to 'QC']
**country** | **string** |  | [default to 'CANADA']
**postal_code** | **string** |  | [optional]
**time_zone** | **string** |  | [optional]
**note** | **string** |  | [optional]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonCorporationsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**tax_customs** | [**\OpenAPI\Client\Model\FeeTaxCustomsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty[]**](FeeTaxCustomsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'CRL']
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**location_full_address** | **string** |  | [optional] [readonly]
**location_g_maps_query_string** | **string** |  | [optional] [readonly]
**coordinates_listing** | **int** | Get coordinates. | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
