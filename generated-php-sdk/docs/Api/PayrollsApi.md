# OpenAPI\Client\PayrollsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPayrollsGetCollection()**](PayrollsApi.md#apiPayrollsGetCollection) | **GET** /open-api/v3/payrolls | Retrieves the collection of payrolls resources. |
| [**apiPayrollsIdDelete()**](PayrollsApi.md#apiPayrollsIdDelete) | **DELETE** /open-api/v3/payrolls/{id} | Removes the payrolls resource. |
| [**apiPayrollsIdGet()**](PayrollsApi.md#apiPayrollsIdGet) | **GET** /open-api/v3/payrolls/{id} | Retrieves a payrolls resource. |
| [**apiPayrollsIdPut()**](PayrollsApi.md#apiPayrollsIdPut) | **PUT** /open-api/v3/payrolls/{id} | Replaces the payrolls resource. |
| [**apiPayrollsPost()**](PayrollsApi.md#apiPayrollsPost) | **POST** /open-api/v3/payrolls | Creates a payrolls resource. |
| [**payrollApiCorporationAdd()**](PayrollsApi.md#payrollApiCorporationAdd) | **POST** /open-api/v3/payrolls/{id}/corporation/add | Creates a payrolls resource. |
| [**payrollApiCorporationRemove()**](PayrollsApi.md#payrollApiCorporationRemove) | **POST** /open-api/v3/payrolls/{id}/corporation/remove | Creates a payrolls resource. |
| [**payrollApiFileUpload()**](PayrollsApi.md#payrollApiFileUpload) | **POST** /open-api/v3/payrolls/{id}/file/upload | Creates a payrolls resource. |
| [**payrollDropDown()**](PayrollsApi.md#payrollDropDown) | **GET** /open-api/v3/payrolls/dropdown/get | Retrieves the collection of payrolls resources. |
| [**payrollDuplicate()**](PayrollsApi.md#payrollDuplicate) | **GET** /open-api/v3/payrolls/duplicate/{id} | Retrieves a payrolls resource. |
| [**payrollFetchFiles()**](PayrollsApi.md#payrollFetchFiles) | **GET** /open-api/v3/payrolls/fetch_files/{id} | Retrieves a payrolls resource. |
| [**payrollGetBySlug()**](PayrollsApi.md#payrollGetBySlug) | **GET** /open-api/v3/payrolls/by_slug/{slug} | Retrieves a payrolls resource. |
| [**payrollGetDeleteRelations()**](PayrollsApi.md#payrollGetDeleteRelations) | **GET** /open-api/v3/payrolls/get_delete_relations/{id} | Retrieves a payrolls resource. |
| [**payrollMetadata()**](PayrollsApi.md#payrollMetadata) | **GET** /open-api/v3/payrolls/metadata/{id} | Retrieves a payrolls resource. |


## `apiPayrollsGetCollection()`

```php
apiPayrollsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timesheet_date_start_before, $timesheet_date_start_strictly_before, $timesheet_date_start_after, $timesheet_date_start_strictly_after, $timesheet_date_end_before, $timesheet_date_end_strictly_before, $timesheet_date_end_after, $timesheet_date_end_strictly_after, $id, $id2, $slug, $slug2, $status, $status2, $bonis, $bonis2, $employee, $employee2, $search, $nb_hours, $nb_hours2, $holiday_nb_hours, $holiday_nb_hours2, $employee_hour_salary, $employee_hour_salary2, $vacancy_paid, $vacancy_paid2, $employee_vacancy, $employee_vacancy2, $bonus, $bonus2, $gross_salary, $gross_salary2, $employee_assemp, $employee_assemp2, $employee_rqap, $employee_rqap2, $employee_rrq, $employee_rrq2, $employee_impot_fed, $employee_impot_fed2, $voluntary_retirement_savings_plan, $voluntary_retirement_savings_plan2, $employer_assemp, $employer_assemp2, $employer_rrq, $employer_rrq2, $employer_rqap, $employer_rqap2, $employer_fss, $employer_fss2, $employer_csst, $employer_csst2, $allowance_total, $allowance_total2, $net_salary, $net_salary2, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_timesheet_date_start, $exists_timesheet_date_end, $order_id, $order_created_at, $order_updated_at, $order_nb_hours, $order_employee_hour_salary, $order_vacancy_paid, $order_employee_vacancy, $order_bonus, $order_gross_salary, $order_employee_assemp, $order_employee_rqap, $order_employee_rrq, $order_employee_impot_fed, $order_voluntary_retirement_savings_plan, $order_employer_assemp, $order_employer_rrq, $order_employer_rqap, $order_employer_fss, $order_employer_csst, $order_allowance_total, $order_net_salary, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $nb_hours_range, $holiday_nb_hours_range, $employee_hour_salary_range, $vacancy_paid_range, $employee_vacancy_range, $bonus_range, $gross_salary_range, $employee_assemp_range, $employee_rqap_range, $employee_rrq_range, $employee_rcp_range, $employee_impot_fed_range, $employee_impotprov_range, $voluntary_retirement_savings_plan_range, $employer_assemp_range, $employer_rrq_range, $employer_rqap_range, $employer_rcp_range, $employer_fss_range, $employer_csst_range, $allowance_total_range, $net_salary_range): \OpenAPI\Client\Model\ApiPayrollsGetCollection200Response
```

Retrieves the collection of payrolls resources.

Retrieves the collection of payrolls resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollsApi(
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
$timesheet_date_start_before = 'timesheet_date_start_before_example'; // string | 
$timesheet_date_start_strictly_before = 'timesheet_date_start_strictly_before_example'; // string | 
$timesheet_date_start_after = 'timesheet_date_start_after_example'; // string | 
$timesheet_date_start_strictly_after = 'timesheet_date_start_strictly_after_example'; // string | 
$timesheet_date_end_before = 'timesheet_date_end_before_example'; // string | 
$timesheet_date_end_strictly_before = 'timesheet_date_end_strictly_before_example'; // string | 
$timesheet_date_end_after = 'timesheet_date_end_after_example'; // string | 
$timesheet_date_end_strictly_after = 'timesheet_date_end_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$bonis = 'bonis_example'; // string | 
$bonis2 = array('bonis_example'); // string[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$search = 'search_example'; // string | 
$nb_hours = 'nb_hours_example'; // string | 
$nb_hours2 = array('nb_hours_example'); // string[] | 
$holiday_nb_hours = 'holiday_nb_hours_example'; // string | 
$holiday_nb_hours2 = array('holiday_nb_hours_example'); // string[] | 
$employee_hour_salary = 'employee_hour_salary_example'; // string | 
$employee_hour_salary2 = array('employee_hour_salary_example'); // string[] | 
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
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_timesheet_date_start = True; // bool | 
$exists_timesheet_date_end = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_nb_hours = 'order_nb_hours_example'; // string | 
$order_employee_hour_salary = 'order_employee_hour_salary_example'; // string | 
$order_vacancy_paid = 'order_vacancy_paid_example'; // string | 
$order_employee_vacancy = 'order_employee_vacancy_example'; // string | 
$order_bonus = 'order_bonus_example'; // string | 
$order_gross_salary = 'order_gross_salary_example'; // string | 
$order_employee_assemp = 'order_employee_assemp_example'; // string | 
$order_employee_rqap = 'order_employee_rqap_example'; // string | 
$order_employee_rrq = 'order_employee_rrq_example'; // string | 
$order_employee_impot_fed = 'order_employee_impot_fed_example'; // string | 
$order_voluntary_retirement_savings_plan = 'order_voluntary_retirement_savings_plan_example'; // string | 
$order_employer_assemp = 'order_employer_assemp_example'; // string | 
$order_employer_rrq = 'order_employer_rrq_example'; // string | 
$order_employer_rqap = 'order_employer_rqap_example'; // string | 
$order_employer_fss = 'order_employer_fss_example'; // string | 
$order_employer_csst = 'order_employer_csst_example'; // string | 
$order_allowance_total = 'order_allowance_total_example'; // string | 
$order_net_salary = 'order_net_salary_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | payrolls slug_partial
$slug_start_with = 'slug_start_with_example'; // string | payrolls slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | payrolls slug_end_with
$id_partial = 'id_partial_example'; // string | payrolls id_partial
$id_start_with = 'id_start_with_example'; // string | payrolls id_start_with
$id_end_with = 'id_end_with_example'; // string | payrolls id_end_with
$nb_hours_range = 'nb_hours_range_example'; // string | payrolls nbHours_range
$holiday_nb_hours_range = 'holiday_nb_hours_range_example'; // string | payrolls holidayNbHours_range
$employee_hour_salary_range = 'employee_hour_salary_range_example'; // string | payrolls employeeHourSalary_range
$vacancy_paid_range = 'vacancy_paid_range_example'; // string | payrolls vacancyPaid_range
$employee_vacancy_range = 'employee_vacancy_range_example'; // string | payrolls employeeVacancy_range
$bonus_range = 'bonus_range_example'; // string | payrolls bonus_range
$gross_salary_range = 'gross_salary_range_example'; // string | payrolls grossSalary_range
$employee_assemp_range = 'employee_assemp_range_example'; // string | payrolls employeeAssemp_range
$employee_rqap_range = 'employee_rqap_range_example'; // string | payrolls employeeRqap_range
$employee_rrq_range = 'employee_rrq_range_example'; // string | payrolls employeeRrq_range
$employee_rcp_range = 'employee_rcp_range_example'; // string | payrolls employeeRcp_range
$employee_impot_fed_range = 'employee_impot_fed_range_example'; // string | payrolls employeeImpotFed_range
$employee_impotprov_range = 'employee_impotprov_range_example'; // string | payrolls employeeImpotprov_range
$voluntary_retirement_savings_plan_range = 'voluntary_retirement_savings_plan_range_example'; // string | payrolls voluntaryRetirementSavingsPlan_range
$employer_assemp_range = 'employer_assemp_range_example'; // string | payrolls employerAssemp_range
$employer_rrq_range = 'employer_rrq_range_example'; // string | payrolls employerRrq_range
$employer_rqap_range = 'employer_rqap_range_example'; // string | payrolls employerRqap_range
$employer_rcp_range = 'employer_rcp_range_example'; // string | payrolls employerRcp_range
$employer_fss_range = 'employer_fss_range_example'; // string | payrolls employerFss_range
$employer_csst_range = 'employer_csst_range_example'; // string | payrolls employerCsst_range
$allowance_total_range = 'allowance_total_range_example'; // string | payrolls allowanceTotal_range
$net_salary_range = 'net_salary_range_example'; // string | payrolls netSalary_range

try {
    $result = $apiInstance->apiPayrollsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timesheet_date_start_before, $timesheet_date_start_strictly_before, $timesheet_date_start_after, $timesheet_date_start_strictly_after, $timesheet_date_end_before, $timesheet_date_end_strictly_before, $timesheet_date_end_after, $timesheet_date_end_strictly_after, $id, $id2, $slug, $slug2, $status, $status2, $bonis, $bonis2, $employee, $employee2, $search, $nb_hours, $nb_hours2, $holiday_nb_hours, $holiday_nb_hours2, $employee_hour_salary, $employee_hour_salary2, $vacancy_paid, $vacancy_paid2, $employee_vacancy, $employee_vacancy2, $bonus, $bonus2, $gross_salary, $gross_salary2, $employee_assemp, $employee_assemp2, $employee_rqap, $employee_rqap2, $employee_rrq, $employee_rrq2, $employee_impot_fed, $employee_impot_fed2, $voluntary_retirement_savings_plan, $voluntary_retirement_savings_plan2, $employer_assemp, $employer_assemp2, $employer_rrq, $employer_rrq2, $employer_rqap, $employer_rqap2, $employer_fss, $employer_fss2, $employer_csst, $employer_csst2, $allowance_total, $allowance_total2, $net_salary, $net_salary2, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_timesheet_date_start, $exists_timesheet_date_end, $order_id, $order_created_at, $order_updated_at, $order_nb_hours, $order_employee_hour_salary, $order_vacancy_paid, $order_employee_vacancy, $order_bonus, $order_gross_salary, $order_employee_assemp, $order_employee_rqap, $order_employee_rrq, $order_employee_impot_fed, $order_voluntary_retirement_savings_plan, $order_employer_assemp, $order_employer_rrq, $order_employer_rqap, $order_employer_fss, $order_employer_csst, $order_allowance_total, $order_net_salary, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $nb_hours_range, $holiday_nb_hours_range, $employee_hour_salary_range, $vacancy_paid_range, $employee_vacancy_range, $bonus_range, $gross_salary_range, $employee_assemp_range, $employee_rqap_range, $employee_rrq_range, $employee_rcp_range, $employee_impot_fed_range, $employee_impotprov_range, $voluntary_retirement_savings_plan_range, $employer_assemp_range, $employer_rrq_range, $employer_rqap_range, $employer_rcp_range, $employer_fss_range, $employer_csst_range, $allowance_total_range, $net_salary_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->apiPayrollsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **timesheet_date_start_before** | **string**|  | [optional] |
| **timesheet_date_start_strictly_before** | **string**|  | [optional] |
| **timesheet_date_start_after** | **string**|  | [optional] |
| **timesheet_date_start_strictly_after** | **string**|  | [optional] |
| **timesheet_date_end_before** | **string**|  | [optional] |
| **timesheet_date_end_strictly_before** | **string**|  | [optional] |
| **timesheet_date_end_after** | **string**|  | [optional] |
| **timesheet_date_end_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **bonis** | **string**|  | [optional] |
| **bonis2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **nb_hours** | **string**|  | [optional] |
| **nb_hours2** | [**string[]**](../Model/string.md)|  | [optional] |
| **holiday_nb_hours** | **string**|  | [optional] |
| **holiday_nb_hours2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee_hour_salary** | **string**|  | [optional] |
| **employee_hour_salary2** | [**string[]**](../Model/string.md)|  | [optional] |
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
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_timesheet_date_start** | **bool**|  | [optional] |
| **exists_timesheet_date_end** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_nb_hours** | **string**|  | [optional] |
| **order_employee_hour_salary** | **string**|  | [optional] |
| **order_vacancy_paid** | **string**|  | [optional] |
| **order_employee_vacancy** | **string**|  | [optional] |
| **order_bonus** | **string**|  | [optional] |
| **order_gross_salary** | **string**|  | [optional] |
| **order_employee_assemp** | **string**|  | [optional] |
| **order_employee_rqap** | **string**|  | [optional] |
| **order_employee_rrq** | **string**|  | [optional] |
| **order_employee_impot_fed** | **string**|  | [optional] |
| **order_voluntary_retirement_savings_plan** | **string**|  | [optional] |
| **order_employer_assemp** | **string**|  | [optional] |
| **order_employer_rrq** | **string**|  | [optional] |
| **order_employer_rqap** | **string**|  | [optional] |
| **order_employer_fss** | **string**|  | [optional] |
| **order_employer_csst** | **string**|  | [optional] |
| **order_allowance_total** | **string**|  | [optional] |
| **order_net_salary** | **string**|  | [optional] |
| **slug_partial** | **string**| payrolls slug_partial | [optional] |
| **slug_start_with** | **string**| payrolls slug_start_with | [optional] |
| **slug_end_with** | **string**| payrolls slug_end_with | [optional] |
| **id_partial** | **string**| payrolls id_partial | [optional] |
| **id_start_with** | **string**| payrolls id_start_with | [optional] |
| **id_end_with** | **string**| payrolls id_end_with | [optional] |
| **nb_hours_range** | **string**| payrolls nbHours_range | [optional] |
| **holiday_nb_hours_range** | **string**| payrolls holidayNbHours_range | [optional] |
| **employee_hour_salary_range** | **string**| payrolls employeeHourSalary_range | [optional] |
| **vacancy_paid_range** | **string**| payrolls vacancyPaid_range | [optional] |
| **employee_vacancy_range** | **string**| payrolls employeeVacancy_range | [optional] |
| **bonus_range** | **string**| payrolls bonus_range | [optional] |
| **gross_salary_range** | **string**| payrolls grossSalary_range | [optional] |
| **employee_assemp_range** | **string**| payrolls employeeAssemp_range | [optional] |
| **employee_rqap_range** | **string**| payrolls employeeRqap_range | [optional] |
| **employee_rrq_range** | **string**| payrolls employeeRrq_range | [optional] |
| **employee_rcp_range** | **string**| payrolls employeeRcp_range | [optional] |
| **employee_impot_fed_range** | **string**| payrolls employeeImpotFed_range | [optional] |
| **employee_impotprov_range** | **string**| payrolls employeeImpotprov_range | [optional] |
| **voluntary_retirement_savings_plan_range** | **string**| payrolls voluntaryRetirementSavingsPlan_range | [optional] |
| **employer_assemp_range** | **string**| payrolls employerAssemp_range | [optional] |
| **employer_rrq_range** | **string**| payrolls employerRrq_range | [optional] |
| **employer_rqap_range** | **string**| payrolls employerRqap_range | [optional] |
| **employer_rcp_range** | **string**| payrolls employerRcp_range | [optional] |
| **employer_fss_range** | **string**| payrolls employerFss_range | [optional] |
| **employer_csst_range** | **string**| payrolls employerCsst_range | [optional] |
| **allowance_total_range** | **string**| payrolls allowanceTotal_range | [optional] |
| **net_salary_range** | **string**| payrolls netSalary_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPayrollsGetCollection200Response**](../Model/ApiPayrollsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPayrollsIdDelete()`

```php
apiPayrollsIdDelete($id)
```

Removes the payrolls resource.

Removes the payrolls resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payrolls identifier

try {
    $apiInstance->apiPayrollsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->apiPayrollsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payrolls identifier | |

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

## `apiPayrollsIdGet()`

```php
apiPayrollsIdGet($id): \OpenAPI\Client\Model\PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a payrolls resource.

Retrieves a payrolls resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payrolls identifier

try {
    $result = $apiInstance->apiPayrollsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->apiPayrollsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payrolls identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPayrollsIdPut()`

```php
apiPayrollsIdPut($id, $payrolls_jsonld_add_post): \OpenAPI\Client\Model\PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the payrolls resource.

Replaces the payrolls resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payrolls identifier
$payrolls_jsonld_add_post = new \OpenAPI\Client\Model\PayrollsJsonldAddPost(); // \OpenAPI\Client\Model\PayrollsJsonldAddPost | The updated payrolls resource

try {
    $result = $apiInstance->apiPayrollsIdPut($id, $payrolls_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->apiPayrollsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payrolls identifier | |
| **payrolls_jsonld_add_post** | [**\OpenAPI\Client\Model\PayrollsJsonldAddPost**](../Model/PayrollsJsonldAddPost.md)| The updated payrolls resource | |

### Return type

[**\OpenAPI\Client\Model\PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPayrollsPost()`

```php
apiPayrollsPost($payrolls_jsonld_add_post): \OpenAPI\Client\Model\PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a payrolls resource.

Creates a payrolls resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payrolls_jsonld_add_post = new \OpenAPI\Client\Model\PayrollsJsonldAddPost(); // \OpenAPI\Client\Model\PayrollsJsonldAddPost | The new payrolls resource

try {
    $result = $apiInstance->apiPayrollsPost($payrolls_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->apiPayrollsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payrolls_jsonld_add_post** | [**\OpenAPI\Client\Model\PayrollsJsonldAddPost**](../Model/PayrollsJsonldAddPost.md)| The new payrolls resource | |

### Return type

[**\OpenAPI\Client\Model\PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollApiCorporationAdd()`

```php
payrollApiCorporationAdd($id, $payrolls_jsonld): \OpenAPI\Client\Model\PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a payrolls resource.

Creates a payrolls resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payrolls identifier
$payrolls_jsonld = new \OpenAPI\Client\Model\PayrollsJsonld(); // \OpenAPI\Client\Model\PayrollsJsonld | The new payrolls resource

try {
    $result = $apiInstance->payrollApiCorporationAdd($id, $payrolls_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->payrollApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payrolls identifier | |
| **payrolls_jsonld** | [**\OpenAPI\Client\Model\PayrollsJsonld**](../Model/PayrollsJsonld.md)| The new payrolls resource | |

### Return type

[**\OpenAPI\Client\Model\PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollApiCorporationRemove()`

```php
payrollApiCorporationRemove($id, $payrolls_jsonld): \OpenAPI\Client\Model\PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a payrolls resource.

Creates a payrolls resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payrolls identifier
$payrolls_jsonld = new \OpenAPI\Client\Model\PayrollsJsonld(); // \OpenAPI\Client\Model\PayrollsJsonld | The new payrolls resource

try {
    $result = $apiInstance->payrollApiCorporationRemove($id, $payrolls_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->payrollApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payrolls identifier | |
| **payrolls_jsonld** | [**\OpenAPI\Client\Model\PayrollsJsonld**](../Model/PayrollsJsonld.md)| The new payrolls resource | |

### Return type

[**\OpenAPI\Client\Model\PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollApiFileUpload()`

```php
payrollApiFileUpload($id, $payrolls_jsonld): \OpenAPI\Client\Model\PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a payrolls resource.

Creates a payrolls resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payrolls identifier
$payrolls_jsonld = new \OpenAPI\Client\Model\PayrollsJsonld(); // \OpenAPI\Client\Model\PayrollsJsonld | The new payrolls resource

try {
    $result = $apiInstance->payrollApiFileUpload($id, $payrolls_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->payrollApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payrolls identifier | |
| **payrolls_jsonld** | [**\OpenAPI\Client\Model\PayrollsJsonld**](../Model/PayrollsJsonld.md)| The new payrolls resource | |

### Return type

[**\OpenAPI\Client\Model\PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollDropDown()`

```php
payrollDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timesheet_date_start_before, $timesheet_date_start_strictly_before, $timesheet_date_start_after, $timesheet_date_start_strictly_after, $timesheet_date_end_before, $timesheet_date_end_strictly_before, $timesheet_date_end_after, $timesheet_date_end_strictly_after, $id, $id2, $slug, $slug2, $status, $status2, $bonis, $bonis2, $employee, $employee2, $search, $nb_hours, $nb_hours2, $holiday_nb_hours, $holiday_nb_hours2, $employee_hour_salary, $employee_hour_salary2, $vacancy_paid, $vacancy_paid2, $employee_vacancy, $employee_vacancy2, $bonus, $bonus2, $gross_salary, $gross_salary2, $employee_assemp, $employee_assemp2, $employee_rqap, $employee_rqap2, $employee_rrq, $employee_rrq2, $employee_impot_fed, $employee_impot_fed2, $voluntary_retirement_savings_plan, $voluntary_retirement_savings_plan2, $employer_assemp, $employer_assemp2, $employer_rrq, $employer_rrq2, $employer_rqap, $employer_rqap2, $employer_fss, $employer_fss2, $employer_csst, $employer_csst2, $allowance_total, $allowance_total2, $net_salary, $net_salary2, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_timesheet_date_start, $exists_timesheet_date_end, $order_id, $order_created_at, $order_updated_at, $order_nb_hours, $order_employee_hour_salary, $order_vacancy_paid, $order_employee_vacancy, $order_bonus, $order_gross_salary, $order_employee_assemp, $order_employee_rqap, $order_employee_rrq, $order_employee_impot_fed, $order_voluntary_retirement_savings_plan, $order_employer_assemp, $order_employer_rrq, $order_employer_rqap, $order_employer_fss, $order_employer_csst, $order_allowance_total, $order_net_salary, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $nb_hours_range, $holiday_nb_hours_range, $employee_hour_salary_range, $vacancy_paid_range, $employee_vacancy_range, $bonus_range, $gross_salary_range, $employee_assemp_range, $employee_rqap_range, $employee_rrq_range, $employee_rcp_range, $employee_impot_fed_range, $employee_impotprov_range, $voluntary_retirement_savings_plan_range, $employer_assemp_range, $employer_rrq_range, $employer_rqap_range, $employer_rcp_range, $employer_fss_range, $employer_csst_range, $allowance_total_range, $net_salary_range): \OpenAPI\Client\Model\PayrollDropDown200Response
```

Retrieves the collection of payrolls resources.

Retrieves the collection of payrolls resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollsApi(
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
$timesheet_date_start_before = 'timesheet_date_start_before_example'; // string | 
$timesheet_date_start_strictly_before = 'timesheet_date_start_strictly_before_example'; // string | 
$timesheet_date_start_after = 'timesheet_date_start_after_example'; // string | 
$timesheet_date_start_strictly_after = 'timesheet_date_start_strictly_after_example'; // string | 
$timesheet_date_end_before = 'timesheet_date_end_before_example'; // string | 
$timesheet_date_end_strictly_before = 'timesheet_date_end_strictly_before_example'; // string | 
$timesheet_date_end_after = 'timesheet_date_end_after_example'; // string | 
$timesheet_date_end_strictly_after = 'timesheet_date_end_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$bonis = 'bonis_example'; // string | 
$bonis2 = array('bonis_example'); // string[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$search = 'search_example'; // string | 
$nb_hours = 'nb_hours_example'; // string | 
$nb_hours2 = array('nb_hours_example'); // string[] | 
$holiday_nb_hours = 'holiday_nb_hours_example'; // string | 
$holiday_nb_hours2 = array('holiday_nb_hours_example'); // string[] | 
$employee_hour_salary = 'employee_hour_salary_example'; // string | 
$employee_hour_salary2 = array('employee_hour_salary_example'); // string[] | 
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
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_timesheet_date_start = True; // bool | 
$exists_timesheet_date_end = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_nb_hours = 'order_nb_hours_example'; // string | 
$order_employee_hour_salary = 'order_employee_hour_salary_example'; // string | 
$order_vacancy_paid = 'order_vacancy_paid_example'; // string | 
$order_employee_vacancy = 'order_employee_vacancy_example'; // string | 
$order_bonus = 'order_bonus_example'; // string | 
$order_gross_salary = 'order_gross_salary_example'; // string | 
$order_employee_assemp = 'order_employee_assemp_example'; // string | 
$order_employee_rqap = 'order_employee_rqap_example'; // string | 
$order_employee_rrq = 'order_employee_rrq_example'; // string | 
$order_employee_impot_fed = 'order_employee_impot_fed_example'; // string | 
$order_voluntary_retirement_savings_plan = 'order_voluntary_retirement_savings_plan_example'; // string | 
$order_employer_assemp = 'order_employer_assemp_example'; // string | 
$order_employer_rrq = 'order_employer_rrq_example'; // string | 
$order_employer_rqap = 'order_employer_rqap_example'; // string | 
$order_employer_fss = 'order_employer_fss_example'; // string | 
$order_employer_csst = 'order_employer_csst_example'; // string | 
$order_allowance_total = 'order_allowance_total_example'; // string | 
$order_net_salary = 'order_net_salary_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | payrolls slug_partial
$slug_start_with = 'slug_start_with_example'; // string | payrolls slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | payrolls slug_end_with
$id_partial = 'id_partial_example'; // string | payrolls id_partial
$id_start_with = 'id_start_with_example'; // string | payrolls id_start_with
$id_end_with = 'id_end_with_example'; // string | payrolls id_end_with
$nb_hours_range = 'nb_hours_range_example'; // string | payrolls nbHours_range
$holiday_nb_hours_range = 'holiday_nb_hours_range_example'; // string | payrolls holidayNbHours_range
$employee_hour_salary_range = 'employee_hour_salary_range_example'; // string | payrolls employeeHourSalary_range
$vacancy_paid_range = 'vacancy_paid_range_example'; // string | payrolls vacancyPaid_range
$employee_vacancy_range = 'employee_vacancy_range_example'; // string | payrolls employeeVacancy_range
$bonus_range = 'bonus_range_example'; // string | payrolls bonus_range
$gross_salary_range = 'gross_salary_range_example'; // string | payrolls grossSalary_range
$employee_assemp_range = 'employee_assemp_range_example'; // string | payrolls employeeAssemp_range
$employee_rqap_range = 'employee_rqap_range_example'; // string | payrolls employeeRqap_range
$employee_rrq_range = 'employee_rrq_range_example'; // string | payrolls employeeRrq_range
$employee_rcp_range = 'employee_rcp_range_example'; // string | payrolls employeeRcp_range
$employee_impot_fed_range = 'employee_impot_fed_range_example'; // string | payrolls employeeImpotFed_range
$employee_impotprov_range = 'employee_impotprov_range_example'; // string | payrolls employeeImpotprov_range
$voluntary_retirement_savings_plan_range = 'voluntary_retirement_savings_plan_range_example'; // string | payrolls voluntaryRetirementSavingsPlan_range
$employer_assemp_range = 'employer_assemp_range_example'; // string | payrolls employerAssemp_range
$employer_rrq_range = 'employer_rrq_range_example'; // string | payrolls employerRrq_range
$employer_rqap_range = 'employer_rqap_range_example'; // string | payrolls employerRqap_range
$employer_rcp_range = 'employer_rcp_range_example'; // string | payrolls employerRcp_range
$employer_fss_range = 'employer_fss_range_example'; // string | payrolls employerFss_range
$employer_csst_range = 'employer_csst_range_example'; // string | payrolls employerCsst_range
$allowance_total_range = 'allowance_total_range_example'; // string | payrolls allowanceTotal_range
$net_salary_range = 'net_salary_range_example'; // string | payrolls netSalary_range

try {
    $result = $apiInstance->payrollDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timesheet_date_start_before, $timesheet_date_start_strictly_before, $timesheet_date_start_after, $timesheet_date_start_strictly_after, $timesheet_date_end_before, $timesheet_date_end_strictly_before, $timesheet_date_end_after, $timesheet_date_end_strictly_after, $id, $id2, $slug, $slug2, $status, $status2, $bonis, $bonis2, $employee, $employee2, $search, $nb_hours, $nb_hours2, $holiday_nb_hours, $holiday_nb_hours2, $employee_hour_salary, $employee_hour_salary2, $vacancy_paid, $vacancy_paid2, $employee_vacancy, $employee_vacancy2, $bonus, $bonus2, $gross_salary, $gross_salary2, $employee_assemp, $employee_assemp2, $employee_rqap, $employee_rqap2, $employee_rrq, $employee_rrq2, $employee_impot_fed, $employee_impot_fed2, $voluntary_retirement_savings_plan, $voluntary_retirement_savings_plan2, $employer_assemp, $employer_assemp2, $employer_rrq, $employer_rrq2, $employer_rqap, $employer_rqap2, $employer_fss, $employer_fss2, $employer_csst, $employer_csst2, $allowance_total, $allowance_total2, $net_salary, $net_salary2, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_timesheet_date_start, $exists_timesheet_date_end, $order_id, $order_created_at, $order_updated_at, $order_nb_hours, $order_employee_hour_salary, $order_vacancy_paid, $order_employee_vacancy, $order_bonus, $order_gross_salary, $order_employee_assemp, $order_employee_rqap, $order_employee_rrq, $order_employee_impot_fed, $order_voluntary_retirement_savings_plan, $order_employer_assemp, $order_employer_rrq, $order_employer_rqap, $order_employer_fss, $order_employer_csst, $order_allowance_total, $order_net_salary, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $nb_hours_range, $holiday_nb_hours_range, $employee_hour_salary_range, $vacancy_paid_range, $employee_vacancy_range, $bonus_range, $gross_salary_range, $employee_assemp_range, $employee_rqap_range, $employee_rrq_range, $employee_rcp_range, $employee_impot_fed_range, $employee_impotprov_range, $voluntary_retirement_savings_plan_range, $employer_assemp_range, $employer_rrq_range, $employer_rqap_range, $employer_rcp_range, $employer_fss_range, $employer_csst_range, $allowance_total_range, $net_salary_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->payrollDropDown: ', $e->getMessage(), PHP_EOL;
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
| **timesheet_date_start_before** | **string**|  | [optional] |
| **timesheet_date_start_strictly_before** | **string**|  | [optional] |
| **timesheet_date_start_after** | **string**|  | [optional] |
| **timesheet_date_start_strictly_after** | **string**|  | [optional] |
| **timesheet_date_end_before** | **string**|  | [optional] |
| **timesheet_date_end_strictly_before** | **string**|  | [optional] |
| **timesheet_date_end_after** | **string**|  | [optional] |
| **timesheet_date_end_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **bonis** | **string**|  | [optional] |
| **bonis2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **nb_hours** | **string**|  | [optional] |
| **nb_hours2** | [**string[]**](../Model/string.md)|  | [optional] |
| **holiday_nb_hours** | **string**|  | [optional] |
| **holiday_nb_hours2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee_hour_salary** | **string**|  | [optional] |
| **employee_hour_salary2** | [**string[]**](../Model/string.md)|  | [optional] |
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
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_timesheet_date_start** | **bool**|  | [optional] |
| **exists_timesheet_date_end** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_nb_hours** | **string**|  | [optional] |
| **order_employee_hour_salary** | **string**|  | [optional] |
| **order_vacancy_paid** | **string**|  | [optional] |
| **order_employee_vacancy** | **string**|  | [optional] |
| **order_bonus** | **string**|  | [optional] |
| **order_gross_salary** | **string**|  | [optional] |
| **order_employee_assemp** | **string**|  | [optional] |
| **order_employee_rqap** | **string**|  | [optional] |
| **order_employee_rrq** | **string**|  | [optional] |
| **order_employee_impot_fed** | **string**|  | [optional] |
| **order_voluntary_retirement_savings_plan** | **string**|  | [optional] |
| **order_employer_assemp** | **string**|  | [optional] |
| **order_employer_rrq** | **string**|  | [optional] |
| **order_employer_rqap** | **string**|  | [optional] |
| **order_employer_fss** | **string**|  | [optional] |
| **order_employer_csst** | **string**|  | [optional] |
| **order_allowance_total** | **string**|  | [optional] |
| **order_net_salary** | **string**|  | [optional] |
| **slug_partial** | **string**| payrolls slug_partial | [optional] |
| **slug_start_with** | **string**| payrolls slug_start_with | [optional] |
| **slug_end_with** | **string**| payrolls slug_end_with | [optional] |
| **id_partial** | **string**| payrolls id_partial | [optional] |
| **id_start_with** | **string**| payrolls id_start_with | [optional] |
| **id_end_with** | **string**| payrolls id_end_with | [optional] |
| **nb_hours_range** | **string**| payrolls nbHours_range | [optional] |
| **holiday_nb_hours_range** | **string**| payrolls holidayNbHours_range | [optional] |
| **employee_hour_salary_range** | **string**| payrolls employeeHourSalary_range | [optional] |
| **vacancy_paid_range** | **string**| payrolls vacancyPaid_range | [optional] |
| **employee_vacancy_range** | **string**| payrolls employeeVacancy_range | [optional] |
| **bonus_range** | **string**| payrolls bonus_range | [optional] |
| **gross_salary_range** | **string**| payrolls grossSalary_range | [optional] |
| **employee_assemp_range** | **string**| payrolls employeeAssemp_range | [optional] |
| **employee_rqap_range** | **string**| payrolls employeeRqap_range | [optional] |
| **employee_rrq_range** | **string**| payrolls employeeRrq_range | [optional] |
| **employee_rcp_range** | **string**| payrolls employeeRcp_range | [optional] |
| **employee_impot_fed_range** | **string**| payrolls employeeImpotFed_range | [optional] |
| **employee_impotprov_range** | **string**| payrolls employeeImpotprov_range | [optional] |
| **voluntary_retirement_savings_plan_range** | **string**| payrolls voluntaryRetirementSavingsPlan_range | [optional] |
| **employer_assemp_range** | **string**| payrolls employerAssemp_range | [optional] |
| **employer_rrq_range** | **string**| payrolls employerRrq_range | [optional] |
| **employer_rqap_range** | **string**| payrolls employerRqap_range | [optional] |
| **employer_rcp_range** | **string**| payrolls employerRcp_range | [optional] |
| **employer_fss_range** | **string**| payrolls employerFss_range | [optional] |
| **employer_csst_range** | **string**| payrolls employerCsst_range | [optional] |
| **allowance_total_range** | **string**| payrolls allowanceTotal_range | [optional] |
| **net_salary_range** | **string**| payrolls netSalary_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\PayrollDropDown200Response**](../Model/PayrollDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollDuplicate()`

```php
payrollDuplicate($id): \OpenAPI\Client\Model\PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a payrolls resource.

Retrieves a payrolls resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payrolls identifier

try {
    $result = $apiInstance->payrollDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->payrollDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payrolls identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollFetchFiles()`

```php
payrollFetchFiles($id): \OpenAPI\Client\Model\PayrollsJsonld
```

Retrieves a payrolls resource.

Retrieves a payrolls resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payrolls identifier

try {
    $result = $apiInstance->payrollFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->payrollFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payrolls identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollsJsonld**](../Model/PayrollsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollGetBySlug()`

```php
payrollGetBySlug($slug): \OpenAPI\Client\Model\PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a payrolls resource.

Retrieves a payrolls resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | payrolls identifier

try {
    $result = $apiInstance->payrollGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->payrollGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| payrolls identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollsJsonldPayrollShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollGetDeleteRelations()`

```php
payrollGetDeleteRelations($id): \OpenAPI\Client\Model\PayrollsJsonldPayrollRelations
```

Retrieves a payrolls resource.

Retrieves a payrolls resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payrolls identifier

try {
    $result = $apiInstance->payrollGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->payrollGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payrolls identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollsJsonldPayrollRelations**](../Model/PayrollsJsonldPayrollRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollMetadata()`

```php
payrollMetadata($id): \OpenAPI\Client\Model\PayrollsJsonldIdStandardMetadataPayrollMetadataTagTaggingListPayrollRelationsTimestampable
```

Retrieves a payrolls resource.

Retrieves a payrolls resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payrolls identifier

try {
    $result = $apiInstance->payrollMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollsApi->payrollMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payrolls identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollsJsonldIdStandardMetadataPayrollMetadataTagTaggingListPayrollRelationsTimestampable**](../Model/PayrollsJsonldIdStandardMetadataPayrollMetadataTagTaggingListPayrollRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
