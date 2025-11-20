# # ProjectTasksJsonldProjectTaskManagerListingIdTimestampableTagTaggingListStandardShow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**at_context** | [**\OpenAPI\Client\Model\AsyncRequestInputAsyncRequestOutputJsonldContext**](AsyncRequestInputAsyncRequestOutputJsonldContext.md) |  | [optional]
**at_id** | **string** |  | [optional] [readonly]
**at_type** | **string** |  | [optional] [readonly]
**completed_time** | **string** |  |
**project** | [**\OpenAPI\Client\Model\ProjectsJsonldProjectTaskManagerListingIdTimestampableTagTaggingListStandardShow**](ProjectsJsonldProjectTaskManagerListingIdTimestampableTagTaggingListStandardShow.md) |  |
**estimated_time** | **string** |  |
**priority** | [**\OpenAPI\Client\Model\ProjectPrioritiesJsonldProjectTaskManagerListingIdTimestampableTagTaggingListStandardShow**](ProjectPrioritiesJsonldProjectTaskManagerListingIdTimestampableTagTaggingListStandardShow.md) |  |
**status** | [**\OpenAPI\Client\Model\ProjectStatusesJsonldProjectTaskManagerListingIdTimestampableTagTaggingListStandardShow**](ProjectStatusesJsonldProjectTaskManagerListingIdTimestampableTagTaggingListStandardShow.md) |  |
**date_start** | **\DateTime** |  | [optional]
**deadline** | **\DateTime** |  |
**parent** | [**\OpenAPI\Client\Model\ProjectTasksJsonldProjectTaskManagerListingIdTimestampableTagTaggingListStandardShow**](ProjectTasksJsonldProjectTaskManagerListingIdTimestampableTagTaggingListStandardShow.md) |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'T']
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**root** | **int** | Get root. | [optional]
**lvl** | **int** | Get lvl. | [optional]
**lft** | **int** | Get lft. | [optional]
**rgt** | **int** | Get rgt. | [optional]
**title** | **string** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**task_total_time_in_hours** | [**\OpenAPI\Client\Model\ProjectTasksTaskTotalTimeInHours**](ProjectTasksTaskTotalTimeInHours.md) |  | [optional]
**timesheets_count** | **mixed** |  | [optional] [readonly]
**description** | **string** |  | [optional]
**leaf** | **bool** |  | [optional] [readonly]
**leaf_api** | **bool** |  | [optional] [readonly]
**level_api** | **int** |  | [optional] [readonly]
**translation_title_property_name** | **string** |  | [optional] [readonly]
**translation_description_property_name** | **string** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
