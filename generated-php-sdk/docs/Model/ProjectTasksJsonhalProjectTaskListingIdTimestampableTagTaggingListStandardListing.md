# # ProjectTasksJsonhalProjectTaskListingIdTimestampableTagTaggingListStandardListing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**priority** | [**\OpenAPI\Client\Model\ProjectPrioritiesJsonhalProjectTaskListingIdTimestampableTagTaggingListStandardListing**](ProjectPrioritiesJsonhalProjectTaskListingIdTimestampableTagTaggingListStandardListing.md) |  |
**status** | [**\OpenAPI\Client\Model\ProjectStatusesJsonhalProjectTaskListingIdTimestampableTagTaggingListStandardListing**](ProjectStatusesJsonhalProjectTaskListingIdTimestampableTagTaggingListStandardListing.md) |  |
**deadline** | **\DateTime** |  |
**parent** | [**\OpenAPI\Client\Model\ProjectTasksJsonhalProjectTaskListingIdTimestampableTagTaggingListStandardListing**](ProjectTasksJsonhalProjectTaskListingIdTimestampableTagTaggingListStandardListing.md) |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'T']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**root** | **int** | Get root. | [optional]
**lvl** | **int** | Get lvl. | [optional]
**lft** | **int** | Get lft. | [optional]
**rgt** | **int** | Get rgt. | [optional]
**title** | **string** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**description** | **string** |  | [optional]
**leaf** | **bool** |  | [optional] [readonly]
**leaf_api** | **bool** |  | [optional] [readonly]
**level_api** | **int** |  | [optional] [readonly]
**translation_title_property_name** | **string** |  | [optional] [readonly]
**translation_description_property_name** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
