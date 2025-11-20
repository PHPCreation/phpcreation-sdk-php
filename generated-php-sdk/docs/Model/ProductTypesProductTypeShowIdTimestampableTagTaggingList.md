# # ProductTypesProductTypeShowIdTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parent** | [**\OpenAPI\Client\Model\ProductTypesProductTypeShowIdTimestampableTagTaggingList**](ProductTypesProductTypeShowIdTimestampableTagTaggingList.md) |  | [optional]
**children** | [**\OpenAPI\Client\Model\ProductTypesProductTypeShowIdTimestampableTagTaggingList[]**](ProductTypesProductTypeShowIdTimestampableTagTaggingList.md) | // MUST BE MAPPED IN ENTITY | [optional]
**visible_status** | **bool** |  | [optional] [default to true]
**discount** | **string** |  |
**target_profitability** | **string** |  |
**shortcode** | **string** |  | [optional] [readonly] [default to 'AT']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**number** | **string** |  | [optional]
**notes** | **string** |  | [optional]
**color** | **string** |  | [optional]
**icon** | **string** |  | [optional]
**root** | **int** | Get root. | [optional]
**lvl** | **int** | Get lvl. | [optional]
**lft** | **int** | Get lft. | [optional]
**rgt** | **int** | Get rgt. | [optional]
**visible_children** | **string[]** | getVisibleChildren. | [optional]
**children_listing** | **string** |  | [optional] [readonly]
**products_listing** | **string** |  | [optional] [readonly]
**type_title** | **string** |  | [optional] [readonly]
**type_full_title** | **string** |  | [optional] [readonly]
**translations_listing** | **string** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**leaf** | **bool** |  | [optional] [readonly]
**leaf_api** | **bool** |  | [optional] [readonly]
**level_api** | **int** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
