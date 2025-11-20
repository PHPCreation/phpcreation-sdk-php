# # AccountsJsonldAccountingAccountShowIdTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**at_context** | [**\OpenAPI\Client\Model\AsyncRequestInputAsyncRequestOutputJsonldContext**](AsyncRequestInputAsyncRequestOutputJsonldContext.md) |  | [optional]
**at_id** | **string** |  | [optional] [readonly]
**at_type** | **string** |  | [optional] [readonly]
**type** | [**\OpenAPI\Client\Model\AccountTypesJsonldAccountingAccountShowIdTimestampableTagTaggingList**](AccountTypesJsonldAccountingAccountShowIdTimestampableTagTaggingList.md) |  | [optional]
**ref** | **string** |  | [optional]
**igrf** | **string** |  | [optional]
**metadata** | **string** |  | [optional]
**is_repertoire** | **bool** |  |
**accepts_transactions** | **bool** |  | [default to true]
**parent** | [**\OpenAPI\Client\Model\AccountsJsonldAccountingAccountShowIdTimestampableTagTaggingList**](AccountsJsonldAccountingAccountShowIdTimestampableTagTaggingList.md) |  | [optional]
**children** | [**\OpenAPI\Client\Model\AccountsJsonldAccountingAccountShowIdTimestampableTagTaggingList[]**](AccountsJsonldAccountingAccountShowIdTimestampableTagTaggingList.md) | // MUST BE MAPPED IN ENTITY | [optional]
**notes** | **string** |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'AC']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**root** | **int** | Get root. | [optional]
**lvl** | **int** | Get lvl. | [optional]
**lft** | **int** | Get lft. | [optional]
**rgt** | **int** | Get rgt. | [optional]
**account_full_name** | **string** |  | [optional] [readonly]
**account_tool_tip** | **string** |  | [optional] [readonly]
**account_name** | **string** |  | [optional] [readonly]
**entries_listing** | **string** | Get Lines Listing | [optional] [readonly]
**translations_listing** | **string** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**leaf** | **bool** |  | [optional] [readonly]
**leaf_api** | **bool** |  | [optional] [readonly]
**level_api** | **int** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
