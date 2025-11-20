# # ProjectTasksProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**completed_time** | **string** |  |
**project** | [**\OpenAPI\Client\Model\ProjectsProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ProjectsProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  |
**product_quantity** | **int** |  | [optional]
**product** | [**\OpenAPI\Client\Model\ProductsProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ProductsProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**sender** | [**\OpenAPI\Client\Model\PersonEmployeesProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonEmployeesProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  |
**receiver** | [**\OpenAPI\Client\Model\PersonEmployeesProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonEmployeesProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  |
**sector** | [**\OpenAPI\Client\Model\ProjectSectorsProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ProjectSectorsProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  |
**estimated_time** | **string** |  |
**cost** | **string** |  |
**cost_description** | **string** |  | [optional]
**priority** | [**\OpenAPI\Client\Model\ProjectPrioritiesProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ProjectPrioritiesProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  |
**status** | [**\OpenAPI\Client\Model\ProjectStatusesProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ProjectStatusesProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  |
**date_created** | **\DateTime** |  | [optional]
**date_start** | **\DateTime** |  | [optional]
**deadline** | **\DateTime** |  |
**date_completed** | **\DateTime** |  | [optional]
**notes** | **string** |  | [optional]
**parent** | [**\OpenAPI\Client\Model\ProjectTasksProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ProjectTasksProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**children** | [**\OpenAPI\Client\Model\ProjectTasksProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty[]**](ProjectTasksProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) | // MUST BE MAPPED IN ENTITY | [optional]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonCorporationsProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'T']
**duplicate_origin** | **int** |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**root** | **int** | Get root. | [optional]
**lvl** | **int** | Get lvl. | [optional]
**lft** | **int** | Get lft. | [optional]
**rgt** | **int** | Get rgt. | [optional]
**title** | **string** |  | [optional]
**location** | [**\OpenAPI\Client\Model\CoordinateLocationsProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](CoordinateLocationsProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**inventory_entries_listing** | **string** |  | [optional] [readonly]
**bonis_listing** | **string** |  | [optional] [readonly]
**allowances_listing** | **string** |  | [optional] [readonly]
**rents_listing** | **string** |  | [optional] [readonly]
**task_total_time** | **string** |  | [optional] [readonly]
**task_total_time_in_hours** | [**\OpenAPI\Client\Model\ProjectTasksTaskTotalTimeInHours**](ProjectTasksTaskTotalTimeInHours.md) |  | [optional]
**timesheets_listing** | **string** |  | [optional] [readonly]
**children_listing** | **string** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
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
