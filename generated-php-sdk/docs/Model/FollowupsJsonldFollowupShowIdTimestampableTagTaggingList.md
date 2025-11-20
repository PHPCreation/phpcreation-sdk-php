# # FollowupsJsonldFollowupShowIdTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**at_context** | [**\OpenAPI\Client\Model\AsyncRequestInputAsyncRequestOutputJsonldContext**](AsyncRequestInputAsyncRequestOutputJsonldContext.md) |  | [optional]
**at_id** | **string** |  | [optional] [readonly]
**at_type** | **string** |  | [optional] [readonly]
**date** | **\DateTime** |  |
**ref_followups** | [**\OpenAPI\Client\Model\FollowupsJsonldFollowupShowIdTimestampableTagTaggingList**](FollowupsJsonldFollowupShowIdTimestampableTagTaggingList.md) |  | [optional]
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonldFollowupShowIdTimestampableTagTaggingList**](PersonEmployeesJsonldFollowupShowIdTimestampableTagTaggingList.md) |  | [optional]
**invoice** | [**\OpenAPI\Client\Model\InvoicesJsonldFollowupShowIdTimestampableTagTaggingList**](InvoicesJsonldFollowupShowIdTimestampableTagTaggingList.md) |  | [optional]
**bill** | [**\OpenAPI\Client\Model\BillsJsonldFollowupShowIdTimestampableTagTaggingList**](BillsJsonldFollowupShowIdTimestampableTagTaggingList.md) |  | [optional]
**payroll** | [**\OpenAPI\Client\Model\PayrollsJsonldFollowupShowIdTimestampableTagTaggingList**](PayrollsJsonldFollowupShowIdTimestampableTagTaggingList.md) |  | [optional]
**person** | [**\OpenAPI\Client\Model\PeopleJsonldFollowupShowIdTimestampableTagTaggingList**](PeopleJsonldFollowupShowIdTimestampableTagTaggingList.md) |  | [optional]
**project** | [**\OpenAPI\Client\Model\ProjectsJsonldFollowupShowIdTimestampableTagTaggingList**](ProjectsJsonldFollowupShowIdTimestampableTagTaggingList.md) |  | [optional]
**recall_why** | **string** |  | [optional]
**method** | [**\OpenAPI\Client\Model\FollowupMethodsJsonldFollowupShowIdTimestampableTagTaggingList**](FollowupMethodsJsonldFollowupShowIdTimestampableTagTaggingList.md) |  | [optional]
**note** | **string** |  |
**recall_date** | **\DateTime** |  |
**recall_method** | [**\OpenAPI\Client\Model\FollowupMethodsJsonldFollowupShowIdTimestampableTagTaggingList**](FollowupMethodsJsonldFollowupShowIdTimestampableTagTaggingList.md) |  | [optional]
**recall_employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonldFollowupShowIdTimestampableTagTaggingList**](PersonEmployeesJsonldFollowupShowIdTimestampableTagTaggingList.md) |  | [optional]
**important** | **bool** |  |
**goal** | **string** |  | [optional]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonldFollowupShowIdTimestampableTagTaggingList**](PersonCorporationsJsonldFollowupShowIdTimestampableTagTaggingList.md) |  | [optional]
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
**followup_parent** | [**\OpenAPI\Client\Model\NestedEntityInterfaceJsonldFollowupShowIdTimestampableTagTaggingList**](NestedEntityInterfaceJsonldFollowupShowIdTimestampableTagTaggingList.md) |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**leaf** | **bool** |  | [optional] [readonly]
**leaf_api** | **bool** |  | [optional] [readonly]
**level_api** | **int** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
