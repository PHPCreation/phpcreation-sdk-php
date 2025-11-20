# # AccountsJsonldPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\OpenAPI\Client\Model\AccountTypesJsonldPost**](AccountTypesJsonldPost.md) |  | [optional]
**ref** | **string** |  | [optional]
**igrf** | **string** |  | [optional]
**metadata** | **string** |  | [optional]
**is_repertoire** | **bool** |  |
**accepts_transactions** | **bool** |  | [default to true]
**budget** | **string** |  |
**parent** | [**\OpenAPI\Client\Model\AccountsJsonldPost**](AccountsJsonldPost.md) |  | [optional]
**children** | [**\OpenAPI\Client\Model\AccountsJsonldPost[]**](AccountsJsonldPost.md) | // MUST BE MAPPED IN ENTITY | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**api_translations** | **string[]** |  | [optional]
**title** | **mixed** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
