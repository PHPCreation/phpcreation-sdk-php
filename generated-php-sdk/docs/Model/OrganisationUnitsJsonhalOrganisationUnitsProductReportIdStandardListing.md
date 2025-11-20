# # OrganisationUnitsJsonhalOrganisationUnitsProductReportIdStandardListing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**parent** | [**\OpenAPI\Client\Model\OrganisationUnitsJsonhalOrganisationUnitsProductReportIdStandardListing**](OrganisationUnitsJsonhalOrganisationUnitsProductReportIdStandardListing.md) |  | [optional]
**children** | [**\OpenAPI\Client\Model\OrganisationUnitsJsonhalOrganisationUnitsProductReportIdStandardListing[]**](OrganisationUnitsJsonhalOrganisationUnitsProductReportIdStandardListing.md) | // MUST BE MAPPED IN ENTITY | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'OU']
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**icon** | **string** |  | [optional]
**root** | **int** | Get root. | [optional]
**lvl** | **int** | Get lvl. | [optional]
**lft** | **int** | Get lft. | [optional]
**rgt** | **int** | Get rgt. | [optional]
**to_string** | **string** |  | [optional] [readonly]
**translation_title_property_name** | **string** |  | [optional] [readonly]
**translation_description_property_name** | **string** |  | [optional] [readonly]
**leaf** | **bool** |  | [optional] [readonly]
**leaf_api** | **bool** |  | [optional] [readonly]
**level_api** | **int** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
