# # InvoicePaymentsJsonhal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**timestamp** | **\DateTime** |  | [optional]
**amount** | **string** |  |
**date** | **\DateTime** |  |
**deposit_date** | **\DateTime** |  |
**invoice** | **string** | Get invoice. |
**type** | **string** |  | [optional]
**ref** | **string** |  | [optional]
**note** | **string** |  | [optional]
**metadata** | **string** |  | [optional]
**confirmed_at** | **\DateTime** |  | [optional]
**owning_corporation** | **string** |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'IP']
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**tags** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**entity_files** | [**\OpenAPI\Client\Model\CollectionJsonhal**](CollectionJsonhal.md) |  | [optional]
**upload_filename** | **string** |  | [optional]
**upload_subfolder** | **string** |  | [optional]
**upload_file** | **string** |  | [optional]
**upload_file_link** | **string** |  | [optional]
**image** | **string** |  | [optional]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**accountable** | **bool** |  | [optional] [readonly]
**api_shortname** | **string** |  | [optional] [readonly]
**to_string** | **string** |  | [optional] [readonly]
**confirmed** | **bool** |  | [optional] [readonly]
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
