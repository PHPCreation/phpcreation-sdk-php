# # PayrollsJsonapiDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timesheet_date_start** | **\DateTime** |  |
**timesheet_date_end** | **\DateTime** |  |
**created_date** | **\DateTime** |  |
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
**notes** | **string** |  | [optional]
**shortcode** | **string** |  | [optional] [readonly] [default to 'P']
**deleted_at** | **\DateTime** |  | [optional]
**_id** | **int** | DB Identifier | [optional] [readonly]
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
**timesheets_listing** | **string** |  | [optional] [readonly]
**bonis_listing** | **string** |  | [optional] [readonly]
**allowances_listing** | **string** |  | [optional] [readonly]
**comptable_date_start** | **\DateTime** | Get timesheetDateStart. | [optional] [readonly]
**comptable_date_end** | **\DateTime** |  | [optional] [readonly]
**employee_saving** | **float** |  | [optional] [readonly]
**employee_saving_taxable_reduction** | **float** | EmployeeSavingTaxableReduction will influence the TaxeFed &amp; TaxeProv as an decrease amount | [optional] [readonly]
**employee_ras** | **float** |  | [optional] [readonly]
**employee_taxes** | **float** |  | [optional] [readonly]
**total_employee_das_amount** | **float** |  | [optional] [readonly]
**total_employer_das_amount** | **float** |  | [optional] [readonly]
**total_provincial** | **float** |  | [optional] [readonly]
**total_federal** | **float** |  | [optional] [readonly]
**payments_listing** | **string** |  | [optional] [readonly]
**anonymous_token** | **string** |  | [optional] [readonly]
**total** | **float** |  | [optional] [readonly]
**payroll_total** | **float** |  | [optional] [readonly]
**net_salary_with_savings** | **mixed** |  | [optional] [readonly]
**payroll_net_salary_with_savings** | **float** |  | [optional] [readonly]
**payroll_savings** | **float** |  | [optional] [readonly]
**total_to_pay** | **float** |  | [optional] [readonly]
**payroll_total_to_pay** | **float** |  | [optional] [readonly]
**followups_listing** | **string** |  | [optional] [readonly]
**t4s** | [**\OpenAPI\Client\Model\CollectionJsonapi**](CollectionJsonapi.md) | Get t4s. | [optional] [readonly]
**t4s_listing** | **string** | Get entries. | [optional] [readonly]
**payroll_date_interval** | **string** |  | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**accountable** | **bool** |  | [optional] [readonly]
**api_shortname** | **string** |  | [optional] [readonly]
**table_name** | **string** |  | [optional] [readonly]
**full_entity_string** | **string** |  | [optional] [readonly]
**token_string** | **string** |  | [optional] [readonly]
**entity_metatada_endpoint** | **string** |  | [optional] [readonly]
**files_listing** | **string** |  | [optional] [readonly]
**modification_history_listing** | **string** |  | [optional] [readonly]
**notes_listing** | **string** |  | [optional] [readonly]
**ownerships_listing** | **string** |  | [optional] [readonly]
**approvals_listing** | **string** |  | [optional] [readonly]
**f_qcn** | **string** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**api_custom_data** | **mixed** |  | [optional] [readonly]
**timestamp** | **\DateTime** | Get createdAt. | [optional]
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
