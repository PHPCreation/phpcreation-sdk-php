# # ProductsJsonhalStandardListingProductListingNoteListingIdTimestampableTagTaggingListNoteRelationsCustomProperty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**name** | **string** |  | [optional]
**sku** | **string** |  | [optional]
**price** | **string** |  |
**place** | **string** |  | [optional]
**brand** | [**\OpenAPI\Client\Model\ProductBrandsJsonhalStandardListingProductListingNoteListingIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ProductBrandsJsonhalStandardListingProductListingNoteListingIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**supplier** | [**\OpenAPI\Client\Model\PersonSuppliersJsonhalStandardListingProductListingNoteListingIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonSuppliersJsonhalStandardListingProductListingNoteListingIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**cost** | **string** |  |
**supplier_code** | **string** |  | [optional]
**client_code** | **string** |  | [optional]
**is_consumable** | **bool** |  | [default to true]
**shortcode** | **string** |  | [optional] [readonly] [default to 'A']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**in_stock** | **int** | Symfony Serialization for API Platform | [optional] [readonly]
**translation_description_property_name** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
