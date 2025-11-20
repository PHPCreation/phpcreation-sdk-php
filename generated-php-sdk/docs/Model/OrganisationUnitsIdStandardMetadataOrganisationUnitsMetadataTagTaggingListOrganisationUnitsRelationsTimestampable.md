# # OrganisationUnitsIdStandardMetadataOrganisationUnitsMetadataTagTaggingListOrganisationUnitsRelationsTimestampable

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parent** | [**\OpenAPI\Client\Model\OrganisationUnitsIdStandardMetadataOrganisationUnitsMetadataTagTaggingListOrganisationUnitsRelationsTimestampable**](OrganisationUnitsIdStandardMetadataOrganisationUnitsMetadataTagTaggingListOrganisationUnitsRelationsTimestampable.md) |  | [optional]
**children** | [**\OpenAPI\Client\Model\OrganisationUnitsIdStandardMetadataOrganisationUnitsMetadataTagTaggingListOrganisationUnitsRelationsTimestampable[]**](OrganisationUnitsIdStandardMetadataOrganisationUnitsMetadataTagTaggingListOrganisationUnitsRelationsTimestampable.md) | // MUST BE MAPPED IN ENTITY | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'OU']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**root** | **int** | Get root. | [optional]
**lvl** | **int** | Get lvl. | [optional]
**lft** | **int** | Get lft. | [optional]
**rgt** | **int** | Get rgt. | [optional]
**leaf** | **bool** |  | [optional] [readonly]
**leaf_api** | **bool** |  | [optional] [readonly]
**level_api** | **int** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**entity_metatada_endpoint** | **string** |  | [optional] [readonly]
**f_qcn** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
