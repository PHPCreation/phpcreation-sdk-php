# # HrSchedulesJsonhalHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**note** | **string** |  | [optional]
**description** | **string** |  | [optional]
**location** | **string** |  | [optional]
**project** | [**\OpenAPI\Client\Model\ProjectsJsonhalHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ProjectsJsonhalHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**task** | [**\OpenAPI\Client\Model\ProjectTasksJsonhalHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ProjectTasksJsonhalHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**availability_type** | [**\OpenAPI\Client\Model\HrAvailabilitytypesJsonhalHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](HrAvailabilitytypesJsonhalHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  |
**scheduled_employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonhalHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonEmployeesJsonhalHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) | Get scheduledEmployee. | [optional]
**scheduler** | [**\OpenAPI\Client\Model\PersonEmployeesJsonhalHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonEmployeesJsonhalHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) | Get scheduler. | [optional]
**date_start** | **\DateTime** |  |
**date_end** | **\DateTime** |  |
**shortcode** | **string** |  | [optional] [readonly] [default to 'HRD']
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonhalHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonCorporationsJsonhalHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
