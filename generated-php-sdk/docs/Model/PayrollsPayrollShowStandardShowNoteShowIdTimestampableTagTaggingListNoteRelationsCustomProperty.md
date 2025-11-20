# # PayrollsPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cumulative_t4** | [**\OpenAPI\Client\Model\PayrollT4sPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PayrollT4sPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**timesheet_date_start** | **\DateTime** |  |
**timesheet_date_end** | **\DateTime** |  |
**status** | [**\OpenAPI\Client\Model\PayrollStatusesPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PayrollStatusesPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) | Get status. |
**created_date** | **\DateTime** |  |
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonEmployeesPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) | Get employesId. |
**nb_hours** | **string** |  |
**holiday_nb_hours** | **string** | // To keep track of the number of holiday hours, mostly for prints/reports etc, // does not have an impact since it is counted in the nbHours of the payroll anyway |
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
**timesheets** | [**\OpenAPI\Client\Model\TimesheetsPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty[]**](TimesheetsPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**notes** | **string** |  | [optional]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](PersonCorporationsPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'P']
**vacancy_boni** | [**\OpenAPI\Client\Model\TimesheetBonisPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](TimesheetBonisPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md) |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]
**to_string** | **string** |  | [optional] [readonly]
**timesheets_listing** | **string** |  | [optional] [readonly]
**bonis_listing** | **string** |  | [optional] [readonly]
**allowances_listing** | **string** |  | [optional] [readonly]
**payments_listing** | **string** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**payroll_total** | **float** |  | [optional] [readonly]
**payroll_net_salary_with_savings** | **float** |  | [optional] [readonly]
**payroll_total_to_pay** | **float** |  | [optional] [readonly]
**followups_listing** | **string** |  | [optional] [readonly]
**t4s** | **object** | Get t4s. | [optional] [readonly]
**t4s_listing** | **string** | Get entries. | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]
**enabled** | **bool** | Check if the entity is enabled. | [optional] [readonly]
**disabled** | **bool** | Check if the entit is enabled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
