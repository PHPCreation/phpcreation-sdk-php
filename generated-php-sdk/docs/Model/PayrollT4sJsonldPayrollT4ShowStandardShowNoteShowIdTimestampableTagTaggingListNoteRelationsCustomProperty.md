# # PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**at_context** | [**\OpenAPI\Client\Model\AsyncRequestInputAsyncRequestOutputJsonldContext**](AsyncRequestInputAsyncRequestOutputJsonldContext.md) |  | [optional]
**at_id** | **string** |  | [optional] [readonly]
**at_type** | **string** |  | [optional] [readonly]
**created_date** | **\DateTime** |  | [optional]
**date_start** | **\DateTime** |  |
**date_end** | **\DateTime** |  |
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonEmployeesJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**nb_hours** | **string** |  |
**holiday_nb_hours** | **string** |  |
**nb_employee** | **int** |  |
**employee_hour_salary** | **string** |  |
**vacancy_paid** | **string** |  |
**vacancy_amount** | **string** |  |
**employee_vacancy** | **string** |  |
**bonus** | **string** |  |
**gross_salary** | **string** |  |
**employee_assemp** | **string** |  |
**employee_rrq** | **string** |  |
**employee_rqap** | **string** |  |
**employee_rpc** | **string** |  |
**employee_impot_fed** | **string** |  |
**employee_impot_prov** | **string** |  |
**employee_taxable_benefits** | **string** | EmployeeTaxableBenefits will influence the TaxeFed &amp; TaxeProv as an increase amount |
**voluntary_retirement_savings_plan** | **string** | Also call RVER / VRSP EmployeeSavingTaxableReduction will influence the TaxeFed &amp; TaxeProv as an decrease amount |
**registered_retirement_savings_plan** | **string** | Also call REER / RRSP EmployeeSavingTaxableReduction will influence the TaxeFed &amp; TaxeProv as an decrease amount |
**tax_free_saving_account** | **string** | Also call CELI / TFSA EmployeeSavingTaxableReduction not influence the TaxeFed &amp; TaxeProv so amount will not change |
**employer_assemp** | **string** |  |
**employer_rrq** | **string** |  |
**employer_rqap** | **string** |  |
**employer_rpc** | **string** |  |
**employer_fss** | **string** |  |
**employer_csst** | **string** |  |
**allowance_total** | **string** |  |
**net_salary** | **string** |  |
**payrolls** | [**\OpenAPI\Client\Model\PayrollsJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty[]**](PayrollsJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**payroll** | [**\OpenAPI\Client\Model\PayrollsJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PayrollsJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**notes** | **string** |  | [optional]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonCorporationsJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'RAS']
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**payroll_listing** | **string** | Get entries. | [optional] [readonly]
**timesheets_listing** | **string** |  | [optional] [readonly]
**to_string** | **string** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
