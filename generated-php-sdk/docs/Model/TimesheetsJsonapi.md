# # TimesheetsJsonapi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entry_mode** | **string** | Get timesheetsEntryModesId. |
**timestamp** | **\DateTime** |  |
**payrolls** | **string[]** |  | [optional]
**charging_invoices** | **string[]** |  | [optional]
**charging_projects** | **string[]** |  | [optional]
**employee** | **string** | Get employesId. |
**task** | **string** | Get tasks. |
**chargeable** | **bool** |  | [default to true]
**datetime_start** | **\DateTime** |  |
**datetime_end** | **\DateTime** |  | [optional]
**description** | **string** |  | [optional]
**status** | **string** | Get status. |
**ratio** | **string** |  | [default to '1']
**type** | **string** | Get timesheetsTypesId. |
**notes** | **string** |  | [optional]
**owning_corporation** | **string** |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'TS']
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**tags** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**entity_files** | [**\OpenAPI\Client\Model\CollectionJsonapi**](CollectionJsonapi.md) |  | [optional]
**upload_filename** | **string** |  | [optional]
**upload_subfolder** | **string** |  | [optional]
**upload_file** | **string** |  | [optional]
**upload_file_link** | **string** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**charging_projects_listing** | **string** |  | [optional] [readonly]
**charging_invoices_listing** | **string** |  | [optional] [readonly]
**chargeable_qty** | **float** |  | [optional] [readonly]
**total_time** | **string** |  | [optional] [readonly]
**chargeable_price** | **float** |  | [optional] [readonly]
**payrolls_listing** | **string** |  | [optional] [readonly]
**chargeable_group** | **string** |  | [optional] [readonly]
**valid_chargeable** | **bool** |  | [optional] [readonly]
**timesheets_entry_mode** | **int** | Get timesheetsEntryModesId. | [optional]
**total_hours** | **float** |  | [optional] [readonly]
**timesheet_total_hours** | **float** |  | [optional] [readonly]
**in_progress** | **bool** |  | [optional] [readonly]
**timesheet_in_progress** | **bool** |  | [optional] [readonly]
**state** | **string** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**api_shortname** | **string** |  | [optional] [readonly]
**full_entity_string** | **string** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**token_string** | **string** |  | [optional] [readonly]
**entity_metatada_endpoint** | **string** |  | [optional] [readonly]
**files_listing** | **string** |  | [optional] [readonly]
**modification_history_listing** | **string** |  | [optional] [readonly]
**notes_listing** | **string** |  | [optional] [readonly]
**ownerships_listing** | **string** |  | [optional] [readonly]
**approvals_listing** | **string** |  | [optional] [readonly]
**table_name** | **string** |  | [optional] [readonly]
**f_qcn** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**api_custom_data** | **mixed** |  | [optional] [readonly]
**deleted** | **bool** | Check if the entity has been soft deleted. | [optional] [readonly]
**taggable_type** | **string** |  | [optional] [readonly]
**taggable_id** | **int** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**enabled_virtual** | **bool** | Virtual isEnabled property. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]
**upload_subfolder** | **string** |  | [optional]
**upload_file** | **string** |  | [optional]
**upload_file_link** | **string** |  | [optional]
**entity_storage_folder** | **string** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
