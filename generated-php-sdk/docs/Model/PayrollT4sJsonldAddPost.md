# # PayrollT4sJsonldAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_date** | **\DateTime** |  | [optional]
**date_start** | **\DateTime** |  |
**date_end** | **\DateTime** |  |
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonldAddPost**](PersonEmployeesJsonldAddPost.md) |  | [optional]
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
**payroll** | [**\OpenAPI\Client\Model\PayrollsJsonldAddPost**](PayrollsJsonldAddPost.md) |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
