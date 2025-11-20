# # AccountingPeriodsJsonhalStandardShowAccountingPeriodShowIdCustomPropertyTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**closed_at** | **\DateTime** |  | [optional]
**date_start** | **\DateTime** |  |
**date_end** | **\DateTime** |  | [optional]
**periodicity** | [**\OpenAPI\Client\Model\ParameterPeriodsJsonhalStandardShowAccountingPeriodShowIdCustomPropertyTimestampableTagTaggingList**](ParameterPeriodsJsonhalStandardShowAccountingPeriodShowIdCustomPropertyTimestampableTagTaggingList.md) |  | [optional]
**year_end** | **bool** |  |
**child** | [**\OpenAPI\Client\Model\AccountingPeriodsJsonhalStandardShowAccountingPeriodShowIdCustomPropertyTimestampableTagTaggingList**](AccountingPeriodsJsonhalStandardShowAccountingPeriodShowIdCustomPropertyTimestampableTagTaggingList.md) |  | [optional]
**parent** | [**\OpenAPI\Client\Model\AccountingPeriodsJsonhalStandardShowAccountingPeriodShowIdCustomPropertyTimestampableTagTaggingList**](AccountingPeriodsJsonhalStandardShowAccountingPeriodShowIdCustomPropertyTimestampableTagTaggingList.md) |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'AP']
**closing_amount** | **string** |  | [optional]
**closing_diff** | **string** |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**to_string** | **string** | Used by Api Platform | [optional] [readonly]
**transactions_listing** | **string** | Get transactions. | [optional] [readonly]
**period_closed** | **bool** |  | [optional] [readonly]
**period_number_days** | **int** |  | [optional] [readonly]
**accounting_period_number** | **int** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
