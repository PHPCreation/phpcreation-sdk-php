# # InvoiceTaxesJsonapiDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auto_update** | **bool** |  | [optional] [default to true]
**shortcode** | **string** |  | [optional] [readonly] [default to 'IT']
**name** | **string** |  | [optional]
**rate** | **string** |  | [optional]
**original_rate** | **string** | Original rate returned from the tax API | [optional] [readonly]
**amount** | **string** |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**_id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional] [readonly]
**updated_at** | **\DateTime** |  | [optional] [readonly]
**disabled_at** | **\DateTime** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**raw_amount** | **float** | Get raw amount. | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
