# # PayrollsAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cumulative_t4** | [**\OpenAPI\Client\Model\PayrollT4sAddPost**](PayrollT4sAddPost.md) |  | [optional]
**timesheet_date_start** | **\DateTime** |  |
**timesheet_date_end** | **\DateTime** |  |
**status** | [**\OpenAPI\Client\Model\PayrollStatusesAddPost**](PayrollStatusesAddPost.md) | Get status. |
**created_date** | **\DateTime** |  |
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesAddPost**](PersonEmployeesAddPost.md) | Get employesId. |
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
**bonis** | [**\OpenAPI\Client\Model\TimesheetBonisAddPost[]**](TimesheetBonisAddPost.md) |  | [optional]
**timesheets** | [**\OpenAPI\Client\Model\TimesheetsAddPost[]**](TimesheetsAddPost.md) |  | [optional]
**notes** | **string** |  | [optional]
**vacancy_boni** | [**\OpenAPI\Client\Model\TimesheetBonisAddPost**](TimesheetBonisAddPost.md) |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
