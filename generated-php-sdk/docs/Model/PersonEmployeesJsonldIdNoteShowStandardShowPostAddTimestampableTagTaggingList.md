# # PersonEmployeesJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**at_context** | [**\OpenAPI\Client\Model\AsyncRequestInputAsyncRequestOutputJsonldContext**](AsyncRequestInputAsyncRequestOutputJsonldContext.md) |  | [optional]
**at_id** | **string** |  | [optional] [readonly]
**at_type** | **string** |  | [optional] [readonly]
**person** | [**\OpenAPI\Client\Model\PeopleJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList**](PeopleJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) | Get person. |
**responsible** | [**\OpenAPI\Client\Model\PersonEmployeesJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList**](PersonEmployeesJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**sector** | [**\OpenAPI\Client\Model\ProjectSectorsJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList**](ProjectSectorsJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**type** | [**\OpenAPI\Client\Model\PersonEmployeeTypesJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList**](PersonEmployeeTypesJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**working_type** | [**\OpenAPI\Client\Model\PersonWorkingtypesJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList**](PersonWorkingtypesJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md) |  | [optional]
**hour_salary** | **string** |  | [default to '15']
**hiring_date** | **\DateTime** |  | [optional]
**date_end_of_contract** | **\DateTime** |  | [optional]
**vacancy** | **string** |  | [default to '0.04']
**nas** | **string** |  | [optional]
**in_schedule** | **bool** |  | [optional]
**reservable** | **bool** |  | [optional]
**overtime** | **bool** |  | [optional] [default to true]
**pay_rrq** | **bool** |  | [optional] [default to true]
**pay_assemp** | **bool** |  | [optional] [default to true]
**pay_fss** | **bool** |  | [optional] [default to true]
**pay_rqap** | **bool** |  | [optional] [default to true]
**pay_rpc** | **bool** |  | [optional] [default to true]
**pay_csst** | **bool** |  | [optional] [default to true]
**pay_fed_taxes** | **bool** |  | [optional] [default to true]
**pay_prov_taxes** | **bool** |  | [optional] [default to true]
**annual_deduction_fed** | **string** |  |
**annual_deduction_prov** | **string** |  |
**annual_taxable_benefits** | **string** |  |
**voluntary_retirement_savings_plan** | **string** |  |
**registered_retirement_savings_plan** | **string** |  |
**tax_free_saving_account** | **string** |  |
**code** | **string** |  | [optional]
**notes** | **string** |  | [optional]
**internal_notes** | **string** |  | [optional]
**holiday_payment_annually** | **bool** |  | [optional]
**estimated_time** | **string** |  | [default to '40']
**payment_time** | **int** |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'E']
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
