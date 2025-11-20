# # RentsRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**project** | [**\OpenAPI\Client\Model\ProjectsRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ProjectsRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**location** | **string** |  | [optional]
**task** | [**\OpenAPI\Client\Model\ProjectTasksRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ProjectTasksRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**date_start** | **\DateTime** |  |
**date_end** | **\DateTime** |  |
**date_checkout** | **\DateTime** |  | [optional]
**date_checkin** | **\DateTime** |  | [optional]
**chargeable** | **bool** |  | [default to true]
**description** | **string** |  | [optional]
**note** | **string** |  | [optional]
**client** | [**\OpenAPI\Client\Model\PersonClientsRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonClientsRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  |
**responsible** | [**\OpenAPI\Client\Model\PersonEmployeesRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonEmployeesRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**reserved_employee** | [**\OpenAPI\Client\Model\PersonEmployeesRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonEmployeesRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**product** | [**\OpenAPI\Client\Model\ProductsRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ProductsRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**charged_product** | [**\OpenAPI\Client\Model\ProductsRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](ProductsRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**type** | [**\OpenAPI\Client\Model\RentTypesRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](RentTypesRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  |
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonCorporationsRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'RE']
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**charging_invoices_listing** | **string** |  | [optional] [readonly]
**charging_projects_listing** | **string** |  | [optional] [readonly]
**chargeable_qty** | **int** |  | [optional] [readonly]
**valid_chargeable** | **bool** |  | [optional] [readonly]
**to_string** | **string** |  | [optional] [readonly]
**is_returned** | **bool** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**days** | **string[]** |  | [optional]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
