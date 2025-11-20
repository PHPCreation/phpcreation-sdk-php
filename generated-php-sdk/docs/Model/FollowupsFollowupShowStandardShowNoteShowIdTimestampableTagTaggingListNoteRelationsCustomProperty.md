# # FollowupsFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **\DateTime** |  |
**ref_followups** | [**\OpenAPI\Client\Model\FollowupsFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](FollowupsFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonEmployeesFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**invoice** | [**\OpenAPI\Client\Model\InvoicesFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](InvoicesFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**bill** | [**\OpenAPI\Client\Model\BillsFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](BillsFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**payroll** | [**\OpenAPI\Client\Model\PayrollsFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PayrollsFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**person** | [**\OpenAPI\Client\Model\PeopleFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PeopleFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**project** | [**\OpenAPI\Client\Model\ProjectsFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ProjectsFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**recall_why** | **string** |  | [optional]
**method** | [**\OpenAPI\Client\Model\FollowupMethodsFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](FollowupMethodsFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**note** | **string** |  |
**recall_date** | **\DateTime** |  |
**recall_method** | [**\OpenAPI\Client\Model\FollowupMethodsFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](FollowupMethodsFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**recall_employee** | [**\OpenAPI\Client\Model\PersonEmployeesFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonEmployeesFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**important** | **bool** |  |
**goal** | **string** |  | [optional]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonCorporationsFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'V']
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
**to_string** | **string** |  | [optional] [readonly]
**ref_followups_listing** | **string** | Get refFollowupsId. | [optional] [readonly]
**ancestors_listing** | **string** |  | [optional] [readonly]
**followup_parent** | **object** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**children_listing** | **string** |  | [optional] [readonly]
**leaf** | **bool** |  | [optional] [readonly]
**leaf_api** | **bool** |  | [optional] [readonly]
**level_api** | **int** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
