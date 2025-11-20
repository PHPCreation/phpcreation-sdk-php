# # ProjectSectorsJsonhalProjectSectorShowIdTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**employees** | [**\OpenAPI\Client\Model\PersonEmployeesJsonhalProjectSectorShowIdTimestampableTagTaggingList[]**](PersonEmployeesJsonhalProjectSectorShowIdTimestampableTagTaggingList.md) |  | [optional]
**tasks** | [**\OpenAPI\Client\Model\ProjectTasksJsonhalProjectSectorShowIdTimestampableTagTaggingList[]**](ProjectTasksJsonhalProjectSectorShowIdTimestampableTagTaggingList.md) |  | [optional]
**hourly_rate** | **string** |  |
**responsible_employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonhalProjectSectorShowIdTimestampableTagTaggingList**](PersonEmployeesJsonhalProjectSectorShowIdTimestampableTagTaggingList.md) |  | [optional]
**product** | [**\OpenAPI\Client\Model\ProductsJsonhalProjectSectorShowIdTimestampableTagTaggingList**](ProductsJsonhalProjectSectorShowIdTimestampableTagTaggingList.md) |  | [optional]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonhalProjectSectorShowIdTimestampableTagTaggingList**](PersonCorporationsJsonhalProjectSectorShowIdTimestampableTagTaggingList.md) |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'SE']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**number** | **string** |  | [optional]
**notes** | **string** |  | [optional]
**color** | **string** |  | [optional]
**icon** | **string** |  | [optional]
**tasks_listing** | **string** |  | [optional] [readonly]
**projects_sector_listing** | **string** |  | [optional] [readonly]
**employees_listing** | **string** |  | [optional] [readonly]
**translations_listing** | **string** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
