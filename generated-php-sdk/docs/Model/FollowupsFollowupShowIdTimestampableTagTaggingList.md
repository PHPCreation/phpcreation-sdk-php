# # FollowupsFollowupShowIdTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **\DateTime** |  |
**ref_followups** | [**\OpenAPI\Client\Model\FollowupsFollowupShowIdTimestampableTagTaggingList**](FollowupsFollowupShowIdTimestampableTagTaggingList.md) |  | [optional]
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesFollowupShowIdTimestampableTagTaggingList**](PersonEmployeesFollowupShowIdTimestampableTagTaggingList.md) |  | [optional]
**invoice** | [**\OpenAPI\Client\Model\InvoicesFollowupShowIdTimestampableTagTaggingList**](InvoicesFollowupShowIdTimestampableTagTaggingList.md) |  | [optional]
**bill** | [**\OpenAPI\Client\Model\BillsFollowupShowIdTimestampableTagTaggingList**](BillsFollowupShowIdTimestampableTagTaggingList.md) |  | [optional]
**payroll** | [**\OpenAPI\Client\Model\PayrollsFollowupShowIdTimestampableTagTaggingList**](PayrollsFollowupShowIdTimestampableTagTaggingList.md) |  | [optional]
**person** | [**\OpenAPI\Client\Model\PeopleFollowupShowIdTimestampableTagTaggingList**](PeopleFollowupShowIdTimestampableTagTaggingList.md) |  | [optional]
**project** | [**\OpenAPI\Client\Model\ProjectsFollowupShowIdTimestampableTagTaggingList**](ProjectsFollowupShowIdTimestampableTagTaggingList.md) |  | [optional]
**recall_why** | **string** |  | [optional]
**method** | [**\OpenAPI\Client\Model\FollowupMethodsFollowupShowIdTimestampableTagTaggingList**](FollowupMethodsFollowupShowIdTimestampableTagTaggingList.md) |  | [optional]
**note** | **string** |  |
**recall_date** | **\DateTime** |  |
**recall_method** | [**\OpenAPI\Client\Model\FollowupMethodsFollowupShowIdTimestampableTagTaggingList**](FollowupMethodsFollowupShowIdTimestampableTagTaggingList.md) |  | [optional]
**recall_employee** | [**\OpenAPI\Client\Model\PersonEmployeesFollowupShowIdTimestampableTagTaggingList**](PersonEmployeesFollowupShowIdTimestampableTagTaggingList.md) |  | [optional]
**important** | **bool** |  |
**goal** | **string** |  | [optional]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsFollowupShowIdTimestampableTagTaggingList**](PersonCorporationsFollowupShowIdTimestampableTagTaggingList.md) |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'V']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**root** | **int** | Get root. | [optional]
**lvl** | **int** | Get lvl. | [optional]
**lft** | **int** | Get lft. | [optional]
**rgt** | **int** | Get rgt. | [optional]
**ref_followups_listing** | **string** | Get refFollowupsId. | [optional] [readonly]
**ancestors_listing** | **string** |  | [optional] [readonly]
**followup_parent** | **object** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**leaf** | **bool** |  | [optional] [readonly]
**leaf_api** | **bool** |  | [optional] [readonly]
**level_api** | **int** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
