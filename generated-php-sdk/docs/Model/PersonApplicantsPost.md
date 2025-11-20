# # PersonApplicantsPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | [**\OpenAPI\Client\Model\HrStatusesPost**](HrStatusesPost.md) |  |
**person** | [**\OpenAPI\Client\Model\PeoplePost**](PeoplePost.md) |  |
**date_entry** | **\DateTime** |  | [optional]
**notes** | **string** |  | [optional]
**expertise** | **string** |  | [optional]
**personality** | **string** |  | [optional]
**potential** | **string** |  |
**desired_salary** | **string** |  |
**desired_time** | **string** |  | [default to '40']
**type** | [**\OpenAPI\Client\Model\PersonEmployeeTypesPost**](PersonEmployeeTypesPost.md) |  | [optional]
**working_type** | [**\OpenAPI\Client\Model\PersonWorkingtypesPost**](PersonWorkingtypesPost.md) |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
