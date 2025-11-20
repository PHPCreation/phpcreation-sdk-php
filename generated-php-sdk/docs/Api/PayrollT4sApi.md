# OpenAPI\Client\PayrollT4sApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPayrollT4sGetCollection()**](PayrollT4sApi.md#apiPayrollT4sGetCollection) | **GET** /open-api/v3/payroll_t4s | Retrieves the collection of payroll_t4s resources. |
| [**apiPayrollT4sIdDelete()**](PayrollT4sApi.md#apiPayrollT4sIdDelete) | **DELETE** /open-api/v3/payroll_t4s/{id} | Removes the payroll_t4s resource. |
| [**apiPayrollT4sIdGet()**](PayrollT4sApi.md#apiPayrollT4sIdGet) | **GET** /open-api/v3/payroll_t4s/{id} | Retrieves a payroll_t4s resource. |
| [**apiPayrollT4sIdPut()**](PayrollT4sApi.md#apiPayrollT4sIdPut) | **PUT** /open-api/v3/payroll_t4s/{id} | Replaces the payroll_t4s resource. |
| [**apiPayrollT4sPost()**](PayrollT4sApi.md#apiPayrollT4sPost) | **POST** /open-api/v3/payroll_t4s | Creates a payroll_t4s resource. |
| [**payrollT4ApiCorporationAdd()**](PayrollT4sApi.md#payrollT4ApiCorporationAdd) | **POST** /open-api/v3/payroll_t4s/{id}/corporation/add | Creates a payroll_t4s resource. |
| [**payrollT4ApiCorporationRemove()**](PayrollT4sApi.md#payrollT4ApiCorporationRemove) | **POST** /open-api/v3/payroll_t4s/{id}/corporation/remove | Creates a payroll_t4s resource. |
| [**payrollT4ApiFileUpload()**](PayrollT4sApi.md#payrollT4ApiFileUpload) | **POST** /open-api/v3/payroll_t4s/{id}/file/upload | Creates a payroll_t4s resource. |
| [**payrollT4DropDown()**](PayrollT4sApi.md#payrollT4DropDown) | **GET** /open-api/v3/payroll_t4s/dropdown/get | Retrieves the collection of payroll_t4s resources. |
| [**payrollT4Duplicate()**](PayrollT4sApi.md#payrollT4Duplicate) | **GET** /open-api/v3/payroll_t4s/duplicate/{id} | Retrieves a payroll_t4s resource. |
| [**payrollT4FetchFiles()**](PayrollT4sApi.md#payrollT4FetchFiles) | **GET** /open-api/v3/payroll_t4s/fetch_files/{id} | Retrieves a payroll_t4s resource. |
| [**payrollT4GetBySlug()**](PayrollT4sApi.md#payrollT4GetBySlug) | **GET** /open-api/v3/payroll_t4s/by_slug/{slug} | Retrieves a payroll_t4s resource. |
| [**payrollT4GetDeleteRelations()**](PayrollT4sApi.md#payrollT4GetDeleteRelations) | **GET** /open-api/v3/payroll_t4s/get_delete_relations/{id} | Retrieves a payroll_t4s resource. |
| [**payrollT4Metadata()**](PayrollT4sApi.md#payrollT4Metadata) | **GET** /open-api/v3/payroll_t4s/metadata/{id} | Retrieves a payroll_t4s resource. |


## `apiPayrollT4sGetCollection()`

```php
apiPayrollT4sGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $id, $id2, $slug, $slug2, $employee, $employee2, $search, $nb_hours, $nb_hours2, $holiday_nb_hours, $holiday_nb_hours2, $nb_employee, $nb_employee2, $vacancy_paid, $vacancy_paid2, $employee_vacancy, $employee_vacancy2, $bonus, $bonus2, $gross_salary, $gross_salary2, $employee_assemp, $employee_assemp2, $employee_rqap, $employee_rqap2, $employee_rrq, $employee_rrq2, $employee_impot_fed, $employee_impot_fed2, $voluntary_retirement_savings_plan, $voluntary_retirement_savings_plan2, $tax_free_saving_account, $tax_free_saving_account2, $employer_assemp, $employer_assemp2, $employer_rrq, $employer_rrq2, $employer_rqap, $employer_rqap2, $employer_fss, $employer_fss2, $employer_csst, $employer_csst2, $allowance_total, $allowance_total2, $net_salary, $net_salary2, $order_id, $order_created_at, $order_updated_at, $order_date_start, $order_date_end, $order_nb_hours, $order_holiday_nb_hours, $order_nb_employee, $order_vacancy_paid, $order_employee_vacancy, $order_bonus, $order_gross_salary, $order_employee_assemp, $order_employee_rqap, $order_employee_rrq, $order_employee_impot_fed, $order_voluntary_retirement_savings_plan, $order_tax_free_saving_account, $order_employer_assemp, $order_employer_rrq, $order_employer_rqap, $order_employer_fss, $order_employer_csst, $order_allowance_total, $order_net_salary, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $nb_hours_range, $holiday_nb_hours_range, $nb_employee_range, $vacancy_paid_range, $employee_vacancy_range, $bonus_range, $gross_salary_range, $employee_assemp_range, $employee_rqap_range, $employee_rrq_range, $employee_rcp_range, $employee_impot_fed_range, $employee_impotprov_range, $voluntary_retirement_savings_plan_range, $tax_free_saving_account_range, $employer_assemp_range, $employer_rrq_range, $employer_rqap_range, $employer_rcp_range, $employer_fss_range, $employer_csst_range, $allowance_total_range, $net_salary_range): \OpenAPI\Client\Model\ApiPayrollT4sGetCollection200Response
```

Retrieves the collection of payroll_t4s resources.

Retrieves the collection of payroll_t4s resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollT4sApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$updated_at_before = 'updated_at_before_example'; // string | 
$updated_at_strictly_before = 'updated_at_strictly_before_example'; // string | 
$updated_at_after = 'updated_at_after_example'; // string | 
$updated_at_strictly_after = 'updated_at_strictly_after_example'; // string | 
$created_at_before = 'created_at_before_example'; // string | 
$created_at_strictly_before = 'created_at_strictly_before_example'; // string | 
$created_at_after = 'created_at_after_example'; // string | 
$created_at_strictly_after = 'created_at_strictly_after_example'; // string | 
$date_start_before = 'date_start_before_example'; // string | 
$date_start_strictly_before = 'date_start_strictly_before_example'; // string | 
$date_start_after = 'date_start_after_example'; // string | 
$date_start_strictly_after = 'date_start_strictly_after_example'; // string | 
$date_end_before = 'date_end_before_example'; // string | 
$date_end_strictly_before = 'date_end_strictly_before_example'; // string | 
$date_end_after = 'date_end_after_example'; // string | 
$date_end_strictly_after = 'date_end_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$search = 'search_example'; // string | 
$nb_hours = 'nb_hours_example'; // string | 
$nb_hours2 = array('nb_hours_example'); // string[] | 
$holiday_nb_hours = 'holiday_nb_hours_example'; // string | 
$holiday_nb_hours2 = array('holiday_nb_hours_example'); // string[] | 
$nb_employee = 56; // int | 
$nb_employee2 = array(56); // int[] | 
$vacancy_paid = 'vacancy_paid_example'; // string | 
$vacancy_paid2 = array('vacancy_paid_example'); // string[] | 
$employee_vacancy = 'employee_vacancy_example'; // string | 
$employee_vacancy2 = array('employee_vacancy_example'); // string[] | 
$bonus = 'bonus_example'; // string | 
$bonus2 = array('bonus_example'); // string[] | 
$gross_salary = 'gross_salary_example'; // string | 
$gross_salary2 = array('gross_salary_example'); // string[] | 
$employee_assemp = 'employee_assemp_example'; // string | 
$employee_assemp2 = array('employee_assemp_example'); // string[] | 
$employee_rqap = 'employee_rqap_example'; // string | 
$employee_rqap2 = array('employee_rqap_example'); // string[] | 
$employee_rrq = 'employee_rrq_example'; // string | 
$employee_rrq2 = array('employee_rrq_example'); // string[] | 
$employee_impot_fed = 'employee_impot_fed_example'; // string | 
$employee_impot_fed2 = array('employee_impot_fed_example'); // string[] | 
$voluntary_retirement_savings_plan = 'voluntary_retirement_savings_plan_example'; // string | 
$voluntary_retirement_savings_plan2 = array('voluntary_retirement_savings_plan_example'); // string[] | 
$tax_free_saving_account = 'tax_free_saving_account_example'; // string | 
$tax_free_saving_account2 = array('tax_free_saving_account_example'); // string[] | 
$employer_assemp = 'employer_assemp_example'; // string | 
$employer_assemp2 = array('employer_assemp_example'); // string[] | 
$employer_rrq = 'employer_rrq_example'; // string | 
$employer_rrq2 = array('employer_rrq_example'); // string[] | 
$employer_rqap = 'employer_rqap_example'; // string | 
$employer_rqap2 = array('employer_rqap_example'); // string[] | 
$employer_fss = 'employer_fss_example'; // string | 
$employer_fss2 = array('employer_fss_example'); // string[] | 
$employer_csst = 'employer_csst_example'; // string | 
$employer_csst2 = array('employer_csst_example'); // string[] | 
$allowance_total = 'allowance_total_example'; // string | 
$allowance_total2 = array('allowance_total_example'); // string[] | 
$net_salary = 'net_salary_example'; // string | 
$net_salary2 = array('net_salary_example'); // string[] | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_date_start = 'order_date_start_example'; // string | 
$order_date_end = 'order_date_end_example'; // string | 
$order_nb_hours = 'order_nb_hours_example'; // string | 
$order_holiday_nb_hours = 'order_holiday_nb_hours_example'; // string | 
$order_nb_employee = 'order_nb_employee_example'; // string | 
$order_vacancy_paid = 'order_vacancy_paid_example'; // string | 
$order_employee_vacancy = 'order_employee_vacancy_example'; // string | 
$order_bonus = 'order_bonus_example'; // string | 
$order_gross_salary = 'order_gross_salary_example'; // string | 
$order_employee_assemp = 'order_employee_assemp_example'; // string | 
$order_employee_rqap = 'order_employee_rqap_example'; // string | 
$order_employee_rrq = 'order_employee_rrq_example'; // string | 
$order_employee_impot_fed = 'order_employee_impot_fed_example'; // string | 
$order_voluntary_retirement_savings_plan = 'order_voluntary_retirement_savings_plan_example'; // string | 
$order_tax_free_saving_account = 'order_tax_free_saving_account_example'; // string | 
$order_employer_assemp = 'order_employer_assemp_example'; // string | 
$order_employer_rrq = 'order_employer_rrq_example'; // string | 
$order_employer_rqap = 'order_employer_rqap_example'; // string | 
$order_employer_fss = 'order_employer_fss_example'; // string | 
$order_employer_csst = 'order_employer_csst_example'; // string | 
$order_allowance_total = 'order_allowance_total_example'; // string | 
$order_net_salary = 'order_net_salary_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | payroll_t4s slug_partial
$slug_start_with = 'slug_start_with_example'; // string | payroll_t4s slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | payroll_t4s slug_end_with
$id_partial = 'id_partial_example'; // string | payroll_t4s id_partial
$id_start_with = 'id_start_with_example'; // string | payroll_t4s id_start_with
$id_end_with = 'id_end_with_example'; // string | payroll_t4s id_end_with
$nb_hours_range = 'nb_hours_range_example'; // string | payroll_t4s nbHours_range
$holiday_nb_hours_range = 'holiday_nb_hours_range_example'; // string | payroll_t4s holidayNbHours_range
$nb_employee_range = 'nb_employee_range_example'; // string | payroll_t4s nbEmployee_range
$vacancy_paid_range = 'vacancy_paid_range_example'; // string | payroll_t4s vacancyPaid_range
$employee_vacancy_range = 'employee_vacancy_range_example'; // string | payroll_t4s employeeVacancy_range
$bonus_range = 'bonus_range_example'; // string | payroll_t4s bonus_range
$gross_salary_range = 'gross_salary_range_example'; // string | payroll_t4s grossSalary_range
$employee_assemp_range = 'employee_assemp_range_example'; // string | payroll_t4s employeeAssemp_range
$employee_rqap_range = 'employee_rqap_range_example'; // string | payroll_t4s employeeRqap_range
$employee_rrq_range = 'employee_rrq_range_example'; // string | payroll_t4s employeeRrq_range
$employee_rcp_range = 'employee_rcp_range_example'; // string | payroll_t4s employeeRcp_range
$employee_impot_fed_range = 'employee_impot_fed_range_example'; // string | payroll_t4s employeeImpotFed_range
$employee_impotprov_range = 'employee_impotprov_range_example'; // string | payroll_t4s employeeImpotprov_range
$voluntary_retirement_savings_plan_range = 'voluntary_retirement_savings_plan_range_example'; // string | payroll_t4s voluntaryRetirementSavingsPlan_range
$tax_free_saving_account_range = 'tax_free_saving_account_range_example'; // string | payroll_t4s taxFreeSavingAccount_range
$employer_assemp_range = 'employer_assemp_range_example'; // string | payroll_t4s employerAssemp_range
$employer_rrq_range = 'employer_rrq_range_example'; // string | payroll_t4s employerRrq_range
$employer_rqap_range = 'employer_rqap_range_example'; // string | payroll_t4s employerRqap_range
$employer_rcp_range = 'employer_rcp_range_example'; // string | payroll_t4s employerRcp_range
$employer_fss_range = 'employer_fss_range_example'; // string | payroll_t4s employerFss_range
$employer_csst_range = 'employer_csst_range_example'; // string | payroll_t4s employerCsst_range
$allowance_total_range = 'allowance_total_range_example'; // string | payroll_t4s allowanceTotal_range
$net_salary_range = 'net_salary_range_example'; // string | payroll_t4s netSalary_range

try {
    $result = $apiInstance->apiPayrollT4sGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $id, $id2, $slug, $slug2, $employee, $employee2, $search, $nb_hours, $nb_hours2, $holiday_nb_hours, $holiday_nb_hours2, $nb_employee, $nb_employee2, $vacancy_paid, $vacancy_paid2, $employee_vacancy, $employee_vacancy2, $bonus, $bonus2, $gross_salary, $gross_salary2, $employee_assemp, $employee_assemp2, $employee_rqap, $employee_rqap2, $employee_rrq, $employee_rrq2, $employee_impot_fed, $employee_impot_fed2, $voluntary_retirement_savings_plan, $voluntary_retirement_savings_plan2, $tax_free_saving_account, $tax_free_saving_account2, $employer_assemp, $employer_assemp2, $employer_rrq, $employer_rrq2, $employer_rqap, $employer_rqap2, $employer_fss, $employer_fss2, $employer_csst, $employer_csst2, $allowance_total, $allowance_total2, $net_salary, $net_salary2, $order_id, $order_created_at, $order_updated_at, $order_date_start, $order_date_end, $order_nb_hours, $order_holiday_nb_hours, $order_nb_employee, $order_vacancy_paid, $order_employee_vacancy, $order_bonus, $order_gross_salary, $order_employee_assemp, $order_employee_rqap, $order_employee_rrq, $order_employee_impot_fed, $order_voluntary_retirement_savings_plan, $order_tax_free_saving_account, $order_employer_assemp, $order_employer_rrq, $order_employer_rqap, $order_employer_fss, $order_employer_csst, $order_allowance_total, $order_net_salary, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $nb_hours_range, $holiday_nb_hours_range, $nb_employee_range, $vacancy_paid_range, $employee_vacancy_range, $bonus_range, $gross_salary_range, $employee_assemp_range, $employee_rqap_range, $employee_rrq_range, $employee_rcp_range, $employee_impot_fed_range, $employee_impotprov_range, $voluntary_retirement_savings_plan_range, $tax_free_saving_account_range, $employer_assemp_range, $employer_rrq_range, $employer_rqap_range, $employer_rcp_range, $employer_fss_range, $employer_csst_range, $allowance_total_range, $net_salary_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollT4sApi->apiPayrollT4sGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **updated_at_before** | **string**|  | [optional] |
| **updated_at_strictly_before** | **string**|  | [optional] |
| **updated_at_after** | **string**|  | [optional] |
| **updated_at_strictly_after** | **string**|  | [optional] |
| **created_at_before** | **string**|  | [optional] |
| **created_at_strictly_before** | **string**|  | [optional] |
| **created_at_after** | **string**|  | [optional] |
| **created_at_strictly_after** | **string**|  | [optional] |
| **date_start_before** | **string**|  | [optional] |
| **date_start_strictly_before** | **string**|  | [optional] |
| **date_start_after** | **string**|  | [optional] |
| **date_start_strictly_after** | **string**|  | [optional] |
| **date_end_before** | **string**|  | [optional] |
| **date_end_strictly_before** | **string**|  | [optional] |
| **date_end_after** | **string**|  | [optional] |
| **date_end_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **nb_hours** | **string**|  | [optional] |
| **nb_hours2** | [**string[]**](../Model/string.md)|  | [optional] |
| **holiday_nb_hours** | **string**|  | [optional] |
| **holiday_nb_hours2** | [**string[]**](../Model/string.md)|  | [optional] |
| **nb_employee** | **int**|  | [optional] |
| **nb_employee2** | [**int[]**](../Model/int.md)|  | [optional] |
| **vacancy_paid** | **string**|  | [optional] |
| **vacancy_paid2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee_vacancy** | **string**|  | [optional] |
| **employee_vacancy2** | [**string[]**](../Model/string.md)|  | [optional] |
| **bonus** | **string**|  | [optional] |
| **bonus2** | [**string[]**](../Model/string.md)|  | [optional] |
| **gross_salary** | **string**|  | [optional] |
| **gross_salary2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee_assemp** | **string**|  | [optional] |
| **employee_assemp2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee_rqap** | **string**|  | [optional] |
| **employee_rqap2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee_rrq** | **string**|  | [optional] |
| **employee_rrq2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee_impot_fed** | **string**|  | [optional] |
| **employee_impot_fed2** | [**string[]**](../Model/string.md)|  | [optional] |
| **voluntary_retirement_savings_plan** | **string**|  | [optional] |
| **voluntary_retirement_savings_plan2** | [**string[]**](../Model/string.md)|  | [optional] |
| **tax_free_saving_account** | **string**|  | [optional] |
| **tax_free_saving_account2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employer_assemp** | **string**|  | [optional] |
| **employer_assemp2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employer_rrq** | **string**|  | [optional] |
| **employer_rrq2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employer_rqap** | **string**|  | [optional] |
| **employer_rqap2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employer_fss** | **string**|  | [optional] |
| **employer_fss2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employer_csst** | **string**|  | [optional] |
| **employer_csst2** | [**string[]**](../Model/string.md)|  | [optional] |
| **allowance_total** | **string**|  | [optional] |
| **allowance_total2** | [**string[]**](../Model/string.md)|  | [optional] |
| **net_salary** | **string**|  | [optional] |
| **net_salary2** | [**string[]**](../Model/string.md)|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_date_start** | **string**|  | [optional] |
| **order_date_end** | **string**|  | [optional] |
| **order_nb_hours** | **string**|  | [optional] |
| **order_holiday_nb_hours** | **string**|  | [optional] |
| **order_nb_employee** | **string**|  | [optional] |
| **order_vacancy_paid** | **string**|  | [optional] |
| **order_employee_vacancy** | **string**|  | [optional] |
| **order_bonus** | **string**|  | [optional] |
| **order_gross_salary** | **string**|  | [optional] |
| **order_employee_assemp** | **string**|  | [optional] |
| **order_employee_rqap** | **string**|  | [optional] |
| **order_employee_rrq** | **string**|  | [optional] |
| **order_employee_impot_fed** | **string**|  | [optional] |
| **order_voluntary_retirement_savings_plan** | **string**|  | [optional] |
| **order_tax_free_saving_account** | **string**|  | [optional] |
| **order_employer_assemp** | **string**|  | [optional] |
| **order_employer_rrq** | **string**|  | [optional] |
| **order_employer_rqap** | **string**|  | [optional] |
| **order_employer_fss** | **string**|  | [optional] |
| **order_employer_csst** | **string**|  | [optional] |
| **order_allowance_total** | **string**|  | [optional] |
| **order_net_salary** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| payroll_t4s slug_partial | [optional] |
| **slug_start_with** | **string**| payroll_t4s slug_start_with | [optional] |
| **slug_end_with** | **string**| payroll_t4s slug_end_with | [optional] |
| **id_partial** | **string**| payroll_t4s id_partial | [optional] |
| **id_start_with** | **string**| payroll_t4s id_start_with | [optional] |
| **id_end_with** | **string**| payroll_t4s id_end_with | [optional] |
| **nb_hours_range** | **string**| payroll_t4s nbHours_range | [optional] |
| **holiday_nb_hours_range** | **string**| payroll_t4s holidayNbHours_range | [optional] |
| **nb_employee_range** | **string**| payroll_t4s nbEmployee_range | [optional] |
| **vacancy_paid_range** | **string**| payroll_t4s vacancyPaid_range | [optional] |
| **employee_vacancy_range** | **string**| payroll_t4s employeeVacancy_range | [optional] |
| **bonus_range** | **string**| payroll_t4s bonus_range | [optional] |
| **gross_salary_range** | **string**| payroll_t4s grossSalary_range | [optional] |
| **employee_assemp_range** | **string**| payroll_t4s employeeAssemp_range | [optional] |
| **employee_rqap_range** | **string**| payroll_t4s employeeRqap_range | [optional] |
| **employee_rrq_range** | **string**| payroll_t4s employeeRrq_range | [optional] |
| **employee_rcp_range** | **string**| payroll_t4s employeeRcp_range | [optional] |
| **employee_impot_fed_range** | **string**| payroll_t4s employeeImpotFed_range | [optional] |
| **employee_impotprov_range** | **string**| payroll_t4s employeeImpotprov_range | [optional] |
| **voluntary_retirement_savings_plan_range** | **string**| payroll_t4s voluntaryRetirementSavingsPlan_range | [optional] |
| **tax_free_saving_account_range** | **string**| payroll_t4s taxFreeSavingAccount_range | [optional] |
| **employer_assemp_range** | **string**| payroll_t4s employerAssemp_range | [optional] |
| **employer_rrq_range** | **string**| payroll_t4s employerRrq_range | [optional] |
| **employer_rqap_range** | **string**| payroll_t4s employerRqap_range | [optional] |
| **employer_rcp_range** | **string**| payroll_t4s employerRcp_range | [optional] |
| **employer_fss_range** | **string**| payroll_t4s employerFss_range | [optional] |
| **employer_csst_range** | **string**| payroll_t4s employerCsst_range | [optional] |
| **allowance_total_range** | **string**| payroll_t4s allowanceTotal_range | [optional] |
| **net_salary_range** | **string**| payroll_t4s netSalary_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPayrollT4sGetCollection200Response**](../Model/ApiPayrollT4sGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPayrollT4sIdDelete()`

```php
apiPayrollT4sIdDelete($id)
```

Removes the payroll_t4s resource.

Removes the payroll_t4s resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollT4sApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_t4s identifier

try {
    $apiInstance->apiPayrollT4sIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PayrollT4sApi->apiPayrollT4sIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_t4s identifier | |

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPayrollT4sIdGet()`

```php
apiPayrollT4sIdGet($id): \OpenAPI\Client\Model\PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a payroll_t4s resource.

Retrieves a payroll_t4s resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollT4sApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_t4s identifier

try {
    $result = $apiInstance->apiPayrollT4sIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollT4sApi->apiPayrollT4sIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_t4s identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPayrollT4sIdPut()`

```php
apiPayrollT4sIdPut($id, $payroll_t4s_jsonld_add_post): \OpenAPI\Client\Model\PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the payroll_t4s resource.

Replaces the payroll_t4s resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollT4sApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_t4s identifier
$payroll_t4s_jsonld_add_post = new \OpenAPI\Client\Model\PayrollT4sJsonldAddPost(); // \OpenAPI\Client\Model\PayrollT4sJsonldAddPost | The updated payroll_t4s resource

try {
    $result = $apiInstance->apiPayrollT4sIdPut($id, $payroll_t4s_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollT4sApi->apiPayrollT4sIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_t4s identifier | |
| **payroll_t4s_jsonld_add_post** | [**\OpenAPI\Client\Model\PayrollT4sJsonldAddPost**](../Model/PayrollT4sJsonldAddPost.md)| The updated payroll_t4s resource | |

### Return type

[**\OpenAPI\Client\Model\PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPayrollT4sPost()`

```php
apiPayrollT4sPost($payroll_t4s_jsonld_add_post): \OpenAPI\Client\Model\PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a payroll_t4s resource.

Creates a payroll_t4s resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollT4sApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll_t4s_jsonld_add_post = new \OpenAPI\Client\Model\PayrollT4sJsonldAddPost(); // \OpenAPI\Client\Model\PayrollT4sJsonldAddPost | The new payroll_t4s resource

try {
    $result = $apiInstance->apiPayrollT4sPost($payroll_t4s_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollT4sApi->apiPayrollT4sPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll_t4s_jsonld_add_post** | [**\OpenAPI\Client\Model\PayrollT4sJsonldAddPost**](../Model/PayrollT4sJsonldAddPost.md)| The new payroll_t4s resource | |

### Return type

[**\OpenAPI\Client\Model\PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollT4ApiCorporationAdd()`

```php
payrollT4ApiCorporationAdd($id, $payroll_t4s_jsonld): \OpenAPI\Client\Model\PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a payroll_t4s resource.

Creates a payroll_t4s resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollT4sApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_t4s identifier
$payroll_t4s_jsonld = new \OpenAPI\Client\Model\PayrollT4sJsonld(); // \OpenAPI\Client\Model\PayrollT4sJsonld | The new payroll_t4s resource

try {
    $result = $apiInstance->payrollT4ApiCorporationAdd($id, $payroll_t4s_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollT4sApi->payrollT4ApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_t4s identifier | |
| **payroll_t4s_jsonld** | [**\OpenAPI\Client\Model\PayrollT4sJsonld**](../Model/PayrollT4sJsonld.md)| The new payroll_t4s resource | |

### Return type

[**\OpenAPI\Client\Model\PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollT4ApiCorporationRemove()`

```php
payrollT4ApiCorporationRemove($id, $payroll_t4s_jsonld): \OpenAPI\Client\Model\PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a payroll_t4s resource.

Creates a payroll_t4s resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollT4sApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_t4s identifier
$payroll_t4s_jsonld = new \OpenAPI\Client\Model\PayrollT4sJsonld(); // \OpenAPI\Client\Model\PayrollT4sJsonld | The new payroll_t4s resource

try {
    $result = $apiInstance->payrollT4ApiCorporationRemove($id, $payroll_t4s_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollT4sApi->payrollT4ApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_t4s identifier | |
| **payroll_t4s_jsonld** | [**\OpenAPI\Client\Model\PayrollT4sJsonld**](../Model/PayrollT4sJsonld.md)| The new payroll_t4s resource | |

### Return type

[**\OpenAPI\Client\Model\PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollT4ApiFileUpload()`

```php
payrollT4ApiFileUpload($id, $payroll_t4s_jsonld): \OpenAPI\Client\Model\PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a payroll_t4s resource.

Creates a payroll_t4s resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollT4sApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_t4s identifier
$payroll_t4s_jsonld = new \OpenAPI\Client\Model\PayrollT4sJsonld(); // \OpenAPI\Client\Model\PayrollT4sJsonld | The new payroll_t4s resource

try {
    $result = $apiInstance->payrollT4ApiFileUpload($id, $payroll_t4s_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollT4sApi->payrollT4ApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_t4s identifier | |
| **payroll_t4s_jsonld** | [**\OpenAPI\Client\Model\PayrollT4sJsonld**](../Model/PayrollT4sJsonld.md)| The new payroll_t4s resource | |

### Return type

[**\OpenAPI\Client\Model\PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollT4DropDown()`

```php
payrollT4DropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $id, $id2, $slug, $slug2, $employee, $employee2, $search, $nb_hours, $nb_hours2, $holiday_nb_hours, $holiday_nb_hours2, $nb_employee, $nb_employee2, $vacancy_paid, $vacancy_paid2, $employee_vacancy, $employee_vacancy2, $bonus, $bonus2, $gross_salary, $gross_salary2, $employee_assemp, $employee_assemp2, $employee_rqap, $employee_rqap2, $employee_rrq, $employee_rrq2, $employee_impot_fed, $employee_impot_fed2, $voluntary_retirement_savings_plan, $voluntary_retirement_savings_plan2, $tax_free_saving_account, $tax_free_saving_account2, $employer_assemp, $employer_assemp2, $employer_rrq, $employer_rrq2, $employer_rqap, $employer_rqap2, $employer_fss, $employer_fss2, $employer_csst, $employer_csst2, $allowance_total, $allowance_total2, $net_salary, $net_salary2, $order_id, $order_created_at, $order_updated_at, $order_date_start, $order_date_end, $order_nb_hours, $order_holiday_nb_hours, $order_nb_employee, $order_vacancy_paid, $order_employee_vacancy, $order_bonus, $order_gross_salary, $order_employee_assemp, $order_employee_rqap, $order_employee_rrq, $order_employee_impot_fed, $order_voluntary_retirement_savings_plan, $order_tax_free_saving_account, $order_employer_assemp, $order_employer_rrq, $order_employer_rqap, $order_employer_fss, $order_employer_csst, $order_allowance_total, $order_net_salary, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $nb_hours_range, $holiday_nb_hours_range, $nb_employee_range, $vacancy_paid_range, $employee_vacancy_range, $bonus_range, $gross_salary_range, $employee_assemp_range, $employee_rqap_range, $employee_rrq_range, $employee_rcp_range, $employee_impot_fed_range, $employee_impotprov_range, $voluntary_retirement_savings_plan_range, $tax_free_saving_account_range, $employer_assemp_range, $employer_rrq_range, $employer_rqap_range, $employer_rcp_range, $employer_fss_range, $employer_csst_range, $allowance_total_range, $net_salary_range): \OpenAPI\Client\Model\PayrollT4DropDown200Response
```

Retrieves the collection of payroll_t4s resources.

Retrieves the collection of payroll_t4s resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollT4sApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$updated_at_before = 'updated_at_before_example'; // string | 
$updated_at_strictly_before = 'updated_at_strictly_before_example'; // string | 
$updated_at_after = 'updated_at_after_example'; // string | 
$updated_at_strictly_after = 'updated_at_strictly_after_example'; // string | 
$created_at_before = 'created_at_before_example'; // string | 
$created_at_strictly_before = 'created_at_strictly_before_example'; // string | 
$created_at_after = 'created_at_after_example'; // string | 
$created_at_strictly_after = 'created_at_strictly_after_example'; // string | 
$date_start_before = 'date_start_before_example'; // string | 
$date_start_strictly_before = 'date_start_strictly_before_example'; // string | 
$date_start_after = 'date_start_after_example'; // string | 
$date_start_strictly_after = 'date_start_strictly_after_example'; // string | 
$date_end_before = 'date_end_before_example'; // string | 
$date_end_strictly_before = 'date_end_strictly_before_example'; // string | 
$date_end_after = 'date_end_after_example'; // string | 
$date_end_strictly_after = 'date_end_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$search = 'search_example'; // string | 
$nb_hours = 'nb_hours_example'; // string | 
$nb_hours2 = array('nb_hours_example'); // string[] | 
$holiday_nb_hours = 'holiday_nb_hours_example'; // string | 
$holiday_nb_hours2 = array('holiday_nb_hours_example'); // string[] | 
$nb_employee = 56; // int | 
$nb_employee2 = array(56); // int[] | 
$vacancy_paid = 'vacancy_paid_example'; // string | 
$vacancy_paid2 = array('vacancy_paid_example'); // string[] | 
$employee_vacancy = 'employee_vacancy_example'; // string | 
$employee_vacancy2 = array('employee_vacancy_example'); // string[] | 
$bonus = 'bonus_example'; // string | 
$bonus2 = array('bonus_example'); // string[] | 
$gross_salary = 'gross_salary_example'; // string | 
$gross_salary2 = array('gross_salary_example'); // string[] | 
$employee_assemp = 'employee_assemp_example'; // string | 
$employee_assemp2 = array('employee_assemp_example'); // string[] | 
$employee_rqap = 'employee_rqap_example'; // string | 
$employee_rqap2 = array('employee_rqap_example'); // string[] | 
$employee_rrq = 'employee_rrq_example'; // string | 
$employee_rrq2 = array('employee_rrq_example'); // string[] | 
$employee_impot_fed = 'employee_impot_fed_example'; // string | 
$employee_impot_fed2 = array('employee_impot_fed_example'); // string[] | 
$voluntary_retirement_savings_plan = 'voluntary_retirement_savings_plan_example'; // string | 
$voluntary_retirement_savings_plan2 = array('voluntary_retirement_savings_plan_example'); // string[] | 
$tax_free_saving_account = 'tax_free_saving_account_example'; // string | 
$tax_free_saving_account2 = array('tax_free_saving_account_example'); // string[] | 
$employer_assemp = 'employer_assemp_example'; // string | 
$employer_assemp2 = array('employer_assemp_example'); // string[] | 
$employer_rrq = 'employer_rrq_example'; // string | 
$employer_rrq2 = array('employer_rrq_example'); // string[] | 
$employer_rqap = 'employer_rqap_example'; // string | 
$employer_rqap2 = array('employer_rqap_example'); // string[] | 
$employer_fss = 'employer_fss_example'; // string | 
$employer_fss2 = array('employer_fss_example'); // string[] | 
$employer_csst = 'employer_csst_example'; // string | 
$employer_csst2 = array('employer_csst_example'); // string[] | 
$allowance_total = 'allowance_total_example'; // string | 
$allowance_total2 = array('allowance_total_example'); // string[] | 
$net_salary = 'net_salary_example'; // string | 
$net_salary2 = array('net_salary_example'); // string[] | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_date_start = 'order_date_start_example'; // string | 
$order_date_end = 'order_date_end_example'; // string | 
$order_nb_hours = 'order_nb_hours_example'; // string | 
$order_holiday_nb_hours = 'order_holiday_nb_hours_example'; // string | 
$order_nb_employee = 'order_nb_employee_example'; // string | 
$order_vacancy_paid = 'order_vacancy_paid_example'; // string | 
$order_employee_vacancy = 'order_employee_vacancy_example'; // string | 
$order_bonus = 'order_bonus_example'; // string | 
$order_gross_salary = 'order_gross_salary_example'; // string | 
$order_employee_assemp = 'order_employee_assemp_example'; // string | 
$order_employee_rqap = 'order_employee_rqap_example'; // string | 
$order_employee_rrq = 'order_employee_rrq_example'; // string | 
$order_employee_impot_fed = 'order_employee_impot_fed_example'; // string | 
$order_voluntary_retirement_savings_plan = 'order_voluntary_retirement_savings_plan_example'; // string | 
$order_tax_free_saving_account = 'order_tax_free_saving_account_example'; // string | 
$order_employer_assemp = 'order_employer_assemp_example'; // string | 
$order_employer_rrq = 'order_employer_rrq_example'; // string | 
$order_employer_rqap = 'order_employer_rqap_example'; // string | 
$order_employer_fss = 'order_employer_fss_example'; // string | 
$order_employer_csst = 'order_employer_csst_example'; // string | 
$order_allowance_total = 'order_allowance_total_example'; // string | 
$order_net_salary = 'order_net_salary_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | payroll_t4s slug_partial
$slug_start_with = 'slug_start_with_example'; // string | payroll_t4s slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | payroll_t4s slug_end_with
$id_partial = 'id_partial_example'; // string | payroll_t4s id_partial
$id_start_with = 'id_start_with_example'; // string | payroll_t4s id_start_with
$id_end_with = 'id_end_with_example'; // string | payroll_t4s id_end_with
$nb_hours_range = 'nb_hours_range_example'; // string | payroll_t4s nbHours_range
$holiday_nb_hours_range = 'holiday_nb_hours_range_example'; // string | payroll_t4s holidayNbHours_range
$nb_employee_range = 'nb_employee_range_example'; // string | payroll_t4s nbEmployee_range
$vacancy_paid_range = 'vacancy_paid_range_example'; // string | payroll_t4s vacancyPaid_range
$employee_vacancy_range = 'employee_vacancy_range_example'; // string | payroll_t4s employeeVacancy_range
$bonus_range = 'bonus_range_example'; // string | payroll_t4s bonus_range
$gross_salary_range = 'gross_salary_range_example'; // string | payroll_t4s grossSalary_range
$employee_assemp_range = 'employee_assemp_range_example'; // string | payroll_t4s employeeAssemp_range
$employee_rqap_range = 'employee_rqap_range_example'; // string | payroll_t4s employeeRqap_range
$employee_rrq_range = 'employee_rrq_range_example'; // string | payroll_t4s employeeRrq_range
$employee_rcp_range = 'employee_rcp_range_example'; // string | payroll_t4s employeeRcp_range
$employee_impot_fed_range = 'employee_impot_fed_range_example'; // string | payroll_t4s employeeImpotFed_range
$employee_impotprov_range = 'employee_impotprov_range_example'; // string | payroll_t4s employeeImpotprov_range
$voluntary_retirement_savings_plan_range = 'voluntary_retirement_savings_plan_range_example'; // string | payroll_t4s voluntaryRetirementSavingsPlan_range
$tax_free_saving_account_range = 'tax_free_saving_account_range_example'; // string | payroll_t4s taxFreeSavingAccount_range
$employer_assemp_range = 'employer_assemp_range_example'; // string | payroll_t4s employerAssemp_range
$employer_rrq_range = 'employer_rrq_range_example'; // string | payroll_t4s employerRrq_range
$employer_rqap_range = 'employer_rqap_range_example'; // string | payroll_t4s employerRqap_range
$employer_rcp_range = 'employer_rcp_range_example'; // string | payroll_t4s employerRcp_range
$employer_fss_range = 'employer_fss_range_example'; // string | payroll_t4s employerFss_range
$employer_csst_range = 'employer_csst_range_example'; // string | payroll_t4s employerCsst_range
$allowance_total_range = 'allowance_total_range_example'; // string | payroll_t4s allowanceTotal_range
$net_salary_range = 'net_salary_range_example'; // string | payroll_t4s netSalary_range

try {
    $result = $apiInstance->payrollT4DropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $id, $id2, $slug, $slug2, $employee, $employee2, $search, $nb_hours, $nb_hours2, $holiday_nb_hours, $holiday_nb_hours2, $nb_employee, $nb_employee2, $vacancy_paid, $vacancy_paid2, $employee_vacancy, $employee_vacancy2, $bonus, $bonus2, $gross_salary, $gross_salary2, $employee_assemp, $employee_assemp2, $employee_rqap, $employee_rqap2, $employee_rrq, $employee_rrq2, $employee_impot_fed, $employee_impot_fed2, $voluntary_retirement_savings_plan, $voluntary_retirement_savings_plan2, $tax_free_saving_account, $tax_free_saving_account2, $employer_assemp, $employer_assemp2, $employer_rrq, $employer_rrq2, $employer_rqap, $employer_rqap2, $employer_fss, $employer_fss2, $employer_csst, $employer_csst2, $allowance_total, $allowance_total2, $net_salary, $net_salary2, $order_id, $order_created_at, $order_updated_at, $order_date_start, $order_date_end, $order_nb_hours, $order_holiday_nb_hours, $order_nb_employee, $order_vacancy_paid, $order_employee_vacancy, $order_bonus, $order_gross_salary, $order_employee_assemp, $order_employee_rqap, $order_employee_rrq, $order_employee_impot_fed, $order_voluntary_retirement_savings_plan, $order_tax_free_saving_account, $order_employer_assemp, $order_employer_rrq, $order_employer_rqap, $order_employer_fss, $order_employer_csst, $order_allowance_total, $order_net_salary, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $nb_hours_range, $holiday_nb_hours_range, $nb_employee_range, $vacancy_paid_range, $employee_vacancy_range, $bonus_range, $gross_salary_range, $employee_assemp_range, $employee_rqap_range, $employee_rrq_range, $employee_rcp_range, $employee_impot_fed_range, $employee_impotprov_range, $voluntary_retirement_savings_plan_range, $tax_free_saving_account_range, $employer_assemp_range, $employer_rrq_range, $employer_rqap_range, $employer_rcp_range, $employer_fss_range, $employer_csst_range, $allowance_total_range, $net_salary_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollT4sApi->payrollT4DropDown: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **updated_at_before** | **string**|  | [optional] |
| **updated_at_strictly_before** | **string**|  | [optional] |
| **updated_at_after** | **string**|  | [optional] |
| **updated_at_strictly_after** | **string**|  | [optional] |
| **created_at_before** | **string**|  | [optional] |
| **created_at_strictly_before** | **string**|  | [optional] |
| **created_at_after** | **string**|  | [optional] |
| **created_at_strictly_after** | **string**|  | [optional] |
| **date_start_before** | **string**|  | [optional] |
| **date_start_strictly_before** | **string**|  | [optional] |
| **date_start_after** | **string**|  | [optional] |
| **date_start_strictly_after** | **string**|  | [optional] |
| **date_end_before** | **string**|  | [optional] |
| **date_end_strictly_before** | **string**|  | [optional] |
| **date_end_after** | **string**|  | [optional] |
| **date_end_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **nb_hours** | **string**|  | [optional] |
| **nb_hours2** | [**string[]**](../Model/string.md)|  | [optional] |
| **holiday_nb_hours** | **string**|  | [optional] |
| **holiday_nb_hours2** | [**string[]**](../Model/string.md)|  | [optional] |
| **nb_employee** | **int**|  | [optional] |
| **nb_employee2** | [**int[]**](../Model/int.md)|  | [optional] |
| **vacancy_paid** | **string**|  | [optional] |
| **vacancy_paid2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee_vacancy** | **string**|  | [optional] |
| **employee_vacancy2** | [**string[]**](../Model/string.md)|  | [optional] |
| **bonus** | **string**|  | [optional] |
| **bonus2** | [**string[]**](../Model/string.md)|  | [optional] |
| **gross_salary** | **string**|  | [optional] |
| **gross_salary2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee_assemp** | **string**|  | [optional] |
| **employee_assemp2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee_rqap** | **string**|  | [optional] |
| **employee_rqap2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee_rrq** | **string**|  | [optional] |
| **employee_rrq2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee_impot_fed** | **string**|  | [optional] |
| **employee_impot_fed2** | [**string[]**](../Model/string.md)|  | [optional] |
| **voluntary_retirement_savings_plan** | **string**|  | [optional] |
| **voluntary_retirement_savings_plan2** | [**string[]**](../Model/string.md)|  | [optional] |
| **tax_free_saving_account** | **string**|  | [optional] |
| **tax_free_saving_account2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employer_assemp** | **string**|  | [optional] |
| **employer_assemp2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employer_rrq** | **string**|  | [optional] |
| **employer_rrq2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employer_rqap** | **string**|  | [optional] |
| **employer_rqap2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employer_fss** | **string**|  | [optional] |
| **employer_fss2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employer_csst** | **string**|  | [optional] |
| **employer_csst2** | [**string[]**](../Model/string.md)|  | [optional] |
| **allowance_total** | **string**|  | [optional] |
| **allowance_total2** | [**string[]**](../Model/string.md)|  | [optional] |
| **net_salary** | **string**|  | [optional] |
| **net_salary2** | [**string[]**](../Model/string.md)|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_date_start** | **string**|  | [optional] |
| **order_date_end** | **string**|  | [optional] |
| **order_nb_hours** | **string**|  | [optional] |
| **order_holiday_nb_hours** | **string**|  | [optional] |
| **order_nb_employee** | **string**|  | [optional] |
| **order_vacancy_paid** | **string**|  | [optional] |
| **order_employee_vacancy** | **string**|  | [optional] |
| **order_bonus** | **string**|  | [optional] |
| **order_gross_salary** | **string**|  | [optional] |
| **order_employee_assemp** | **string**|  | [optional] |
| **order_employee_rqap** | **string**|  | [optional] |
| **order_employee_rrq** | **string**|  | [optional] |
| **order_employee_impot_fed** | **string**|  | [optional] |
| **order_voluntary_retirement_savings_plan** | **string**|  | [optional] |
| **order_tax_free_saving_account** | **string**|  | [optional] |
| **order_employer_assemp** | **string**|  | [optional] |
| **order_employer_rrq** | **string**|  | [optional] |
| **order_employer_rqap** | **string**|  | [optional] |
| **order_employer_fss** | **string**|  | [optional] |
| **order_employer_csst** | **string**|  | [optional] |
| **order_allowance_total** | **string**|  | [optional] |
| **order_net_salary** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| payroll_t4s slug_partial | [optional] |
| **slug_start_with** | **string**| payroll_t4s slug_start_with | [optional] |
| **slug_end_with** | **string**| payroll_t4s slug_end_with | [optional] |
| **id_partial** | **string**| payroll_t4s id_partial | [optional] |
| **id_start_with** | **string**| payroll_t4s id_start_with | [optional] |
| **id_end_with** | **string**| payroll_t4s id_end_with | [optional] |
| **nb_hours_range** | **string**| payroll_t4s nbHours_range | [optional] |
| **holiday_nb_hours_range** | **string**| payroll_t4s holidayNbHours_range | [optional] |
| **nb_employee_range** | **string**| payroll_t4s nbEmployee_range | [optional] |
| **vacancy_paid_range** | **string**| payroll_t4s vacancyPaid_range | [optional] |
| **employee_vacancy_range** | **string**| payroll_t4s employeeVacancy_range | [optional] |
| **bonus_range** | **string**| payroll_t4s bonus_range | [optional] |
| **gross_salary_range** | **string**| payroll_t4s grossSalary_range | [optional] |
| **employee_assemp_range** | **string**| payroll_t4s employeeAssemp_range | [optional] |
| **employee_rqap_range** | **string**| payroll_t4s employeeRqap_range | [optional] |
| **employee_rrq_range** | **string**| payroll_t4s employeeRrq_range | [optional] |
| **employee_rcp_range** | **string**| payroll_t4s employeeRcp_range | [optional] |
| **employee_impot_fed_range** | **string**| payroll_t4s employeeImpotFed_range | [optional] |
| **employee_impotprov_range** | **string**| payroll_t4s employeeImpotprov_range | [optional] |
| **voluntary_retirement_savings_plan_range** | **string**| payroll_t4s voluntaryRetirementSavingsPlan_range | [optional] |
| **tax_free_saving_account_range** | **string**| payroll_t4s taxFreeSavingAccount_range | [optional] |
| **employer_assemp_range** | **string**| payroll_t4s employerAssemp_range | [optional] |
| **employer_rrq_range** | **string**| payroll_t4s employerRrq_range | [optional] |
| **employer_rqap_range** | **string**| payroll_t4s employerRqap_range | [optional] |
| **employer_rcp_range** | **string**| payroll_t4s employerRcp_range | [optional] |
| **employer_fss_range** | **string**| payroll_t4s employerFss_range | [optional] |
| **employer_csst_range** | **string**| payroll_t4s employerCsst_range | [optional] |
| **allowance_total_range** | **string**| payroll_t4s allowanceTotal_range | [optional] |
| **net_salary_range** | **string**| payroll_t4s netSalary_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\PayrollT4DropDown200Response**](../Model/PayrollT4DropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollT4Duplicate()`

```php
payrollT4Duplicate($id): \OpenAPI\Client\Model\PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a payroll_t4s resource.

Retrieves a payroll_t4s resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollT4sApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_t4s identifier

try {
    $result = $apiInstance->payrollT4Duplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollT4sApi->payrollT4Duplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_t4s identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollT4FetchFiles()`

```php
payrollT4FetchFiles($id): \OpenAPI\Client\Model\PayrollT4sJsonld
```

Retrieves a payroll_t4s resource.

Retrieves a payroll_t4s resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollT4sApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_t4s identifier

try {
    $result = $apiInstance->payrollT4FetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollT4sApi->payrollT4FetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_t4s identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollT4sJsonld**](../Model/PayrollT4sJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollT4GetBySlug()`

```php
payrollT4GetBySlug($slug): \OpenAPI\Client\Model\PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a payroll_t4s resource.

Retrieves a payroll_t4s resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollT4sApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | payroll_t4s identifier

try {
    $result = $apiInstance->payrollT4GetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollT4sApi->payrollT4GetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| payroll_t4s identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollT4sJsonldPayrollT4ShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollT4GetDeleteRelations()`

```php
payrollT4GetDeleteRelations($id): \OpenAPI\Client\Model\PayrollT4sJsonldPayrollT4Relations
```

Retrieves a payroll_t4s resource.

Retrieves a payroll_t4s resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollT4sApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_t4s identifier

try {
    $result = $apiInstance->payrollT4GetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollT4sApi->payrollT4GetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_t4s identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollT4sJsonldPayrollT4Relations**](../Model/PayrollT4sJsonldPayrollT4Relations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollT4Metadata()`

```php
payrollT4Metadata($id): \OpenAPI\Client\Model\PayrollT4sJsonldIdStandardMetadataPayrollT4MetadataTagTaggingListPayrollT4RelationsTimestampable
```

Retrieves a payroll_t4s resource.

Retrieves a payroll_t4s resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollT4sApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_t4s identifier

try {
    $result = $apiInstance->payrollT4Metadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollT4sApi->payrollT4Metadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_t4s identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollT4sJsonldIdStandardMetadataPayrollT4MetadataTagTaggingListPayrollT4RelationsTimestampable**](../Model/PayrollT4sJsonldIdStandardMetadataPayrollT4MetadataTagTaggingListPayrollT4RelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
