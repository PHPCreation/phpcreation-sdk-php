# OpenAPI\Client\PersonEmployeesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPersonEmployeesGetCollection()**](PersonEmployeesApi.md#apiPersonEmployeesGetCollection) | **GET** /open-api/v3/person_employees | Retrieves the collection of person_employees resources. |
| [**apiPersonEmployeesIdDelete()**](PersonEmployeesApi.md#apiPersonEmployeesIdDelete) | **DELETE** /open-api/v3/person_employees/{id} | Removes the person_employees resource. |
| [**apiPersonEmployeesIdGet()**](PersonEmployeesApi.md#apiPersonEmployeesIdGet) | **GET** /open-api/v3/person_employees/{id} | Retrieves a person_employees resource. |
| [**apiPersonEmployeesIdPut()**](PersonEmployeesApi.md#apiPersonEmployeesIdPut) | **PUT** /open-api/v3/person_employees/{id} | Replaces the person_employees resource. |
| [**apiPersonEmployeesPost()**](PersonEmployeesApi.md#apiPersonEmployeesPost) | **POST** /open-api/v3/person_employees | Creates a person_employees resource. |
| [**personEmployeeApiFileUpload()**](PersonEmployeesApi.md#personEmployeeApiFileUpload) | **POST** /open-api/v3/person_employees/{id}/file/upload | Creates a person_employees resource. |
| [**personEmployeeDropDown()**](PersonEmployeesApi.md#personEmployeeDropDown) | **GET** /open-api/v3/person_employees/dropdown/get | Retrieves the collection of person_employees resources. |
| [**personEmployeeDuplicate()**](PersonEmployeesApi.md#personEmployeeDuplicate) | **GET** /open-api/v3/person_employees/duplicate/{id} | Retrieves a person_employees resource. |
| [**personEmployeeFetchFiles()**](PersonEmployeesApi.md#personEmployeeFetchFiles) | **GET** /open-api/v3/person_employees/fetch_files/{id} | Retrieves a person_employees resource. |
| [**personEmployeeGetBySlug()**](PersonEmployeesApi.md#personEmployeeGetBySlug) | **GET** /open-api/v3/person_employees/by_slug/{slug} | Retrieves a person_employees resource. |
| [**personEmployeeGetDeleteRelations()**](PersonEmployeesApi.md#personEmployeeGetDeleteRelations) | **GET** /open-api/v3/person_employees/get_delete_relations/{id} | Retrieves a person_employees resource. |
| [**personEmployeeMetadata()**](PersonEmployeesApi.md#personEmployeeMetadata) | **GET** /open-api/v3/perosn_employees/metadata/{id} | Retrieves a person_employees resource. |


## `apiPersonEmployeesGetCollection()`

```php
apiPersonEmployeesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $hiring_date_before, $hiring_date_strictly_before, $hiring_date_after, $hiring_date_strictly_after, $date_end_of_contract_before, $date_end_of_contract_strictly_before, $date_end_of_contract_after, $date_end_of_contract_strictly_after, $id, $id2, $slug, $slug2, $code, $code2, $nas, $nas2, $person, $person2, $sector, $sector2, $type, $type2, $working_type, $working_type2, $person_first_name, $person_first_name2, $person_last_name, $person_last_name2, $search, $hour_salary, $hour_salary2, $vacancy, $vacancy2, $annual_deduction_fed, $annual_deduction_fed2, $annual_deduction_prov, $annual_deduction_prov2, $annual_taxable_benefits, $annual_taxable_benefits2, $voluntary_retirement_savings_plan, $voluntary_retirement_savings_plan2, $registered_retirement_savings_plan, $registered_retirement_savings_plan2, $tax_free_saving_account, $tax_free_saving_account2, $estimated_time, $estimated_time2, $in_schedule, $reservable, $overtime, $pay_rrq, $pay_assemp, $pay_rqap, $pay_rpc, $pay_csst, $pay_fed_taxes, $pay_prov_taxes, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_date_end_of_contract, $exists_nas, $exists_code, $exists_internal_notes, $exists_payment_time, $order_id, $order_slug, $order_created_at, $order_updated_at, $order_hour_salary, $order_vacancy, $order_annual_deduction_fed, $order_annual_deduction_prov, $order_annual_taxable_benefits, $order_voluntary_retirement_savings_plan, $order_registered_retirement_savings_plan, $order_tax_free_saving_account, $order_estimated_time, $order_person_first_name, $order_person_last_name, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $first_name_partial, $first_name_start_with, $first_name_end_with, $last_name_partial, $last_name_start_with, $last_name_end_with, $code_partial, $code_start_with, $code_end_with, $nas_partial, $nas_start_with, $nas_end_with, $hour_salary_range, $vacancy_range, $annual_deduction_fed_range, $annual_deduction_prov_range, $annual_taxable_benefits_range, $voluntary_retirement_savings_plan_range, $registered_retirement_savings_plan_range, $tax_free_saving_account_range, $estimated_time_range): \OpenAPI\Client\Model\ApiPersonEmployeesGetCollection200Response
```

Retrieves the collection of person_employees resources.

Retrieves the collection of person_employees resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeesApi(
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
$hiring_date_before = 'hiring_date_before_example'; // string | 
$hiring_date_strictly_before = 'hiring_date_strictly_before_example'; // string | 
$hiring_date_after = 'hiring_date_after_example'; // string | 
$hiring_date_strictly_after = 'hiring_date_strictly_after_example'; // string | 
$date_end_of_contract_before = 'date_end_of_contract_before_example'; // string | 
$date_end_of_contract_strictly_before = 'date_end_of_contract_strictly_before_example'; // string | 
$date_end_of_contract_after = 'date_end_of_contract_after_example'; // string | 
$date_end_of_contract_strictly_after = 'date_end_of_contract_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$code = 'code_example'; // string | 
$code2 = array('code_example'); // string[] | 
$nas = 'nas_example'; // string | 
$nas2 = array('nas_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$sector = 'sector_example'; // string | 
$sector2 = array('sector_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$working_type = 'working_type_example'; // string | 
$working_type2 = array('working_type_example'); // string[] | 
$person_first_name = 'person_first_name_example'; // string | 
$person_first_name2 = array('person_first_name_example'); // string[] | 
$person_last_name = 'person_last_name_example'; // string | 
$person_last_name2 = array('person_last_name_example'); // string[] | 
$search = 'search_example'; // string | 
$hour_salary = 'hour_salary_example'; // string | 
$hour_salary2 = array('hour_salary_example'); // string[] | 
$vacancy = 'vacancy_example'; // string | 
$vacancy2 = array('vacancy_example'); // string[] | 
$annual_deduction_fed = 'annual_deduction_fed_example'; // string | 
$annual_deduction_fed2 = array('annual_deduction_fed_example'); // string[] | 
$annual_deduction_prov = 'annual_deduction_prov_example'; // string | 
$annual_deduction_prov2 = array('annual_deduction_prov_example'); // string[] | 
$annual_taxable_benefits = 'annual_taxable_benefits_example'; // string | 
$annual_taxable_benefits2 = array('annual_taxable_benefits_example'); // string[] | 
$voluntary_retirement_savings_plan = 'voluntary_retirement_savings_plan_example'; // string | 
$voluntary_retirement_savings_plan2 = array('voluntary_retirement_savings_plan_example'); // string[] | 
$registered_retirement_savings_plan = 'registered_retirement_savings_plan_example'; // string | 
$registered_retirement_savings_plan2 = array('registered_retirement_savings_plan_example'); // string[] | 
$tax_free_saving_account = 'tax_free_saving_account_example'; // string | 
$tax_free_saving_account2 = array('tax_free_saving_account_example'); // string[] | 
$estimated_time = 'estimated_time_example'; // string | 
$estimated_time2 = array('estimated_time_example'); // string[] | 
$in_schedule = True; // bool | 
$reservable = True; // bool | 
$overtime = True; // bool | 
$pay_rrq = True; // bool | 
$pay_assemp = True; // bool | 
$pay_rqap = True; // bool | 
$pay_rpc = True; // bool | 
$pay_csst = True; // bool | 
$pay_fed_taxes = True; // bool | 
$pay_prov_taxes = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_date_end_of_contract = True; // bool | 
$exists_nas = True; // bool | 
$exists_code = True; // bool | 
$exists_internal_notes = True; // bool | 
$exists_payment_time = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_hour_salary = 'order_hour_salary_example'; // string | 
$order_vacancy = 'order_vacancy_example'; // string | 
$order_annual_deduction_fed = 'order_annual_deduction_fed_example'; // string | 
$order_annual_deduction_prov = 'order_annual_deduction_prov_example'; // string | 
$order_annual_taxable_benefits = 'order_annual_taxable_benefits_example'; // string | 
$order_voluntary_retirement_savings_plan = 'order_voluntary_retirement_savings_plan_example'; // string | 
$order_registered_retirement_savings_plan = 'order_registered_retirement_savings_plan_example'; // string | 
$order_tax_free_saving_account = 'order_tax_free_saving_account_example'; // string | 
$order_estimated_time = 'order_estimated_time_example'; // string | 
$order_person_first_name = 'order_person_first_name_example'; // string | 
$order_person_last_name = 'order_person_last_name_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | person_employees slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_employees slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_employees slug_end_with
$id_partial = 'id_partial_example'; // string | person_employees id_partial
$id_start_with = 'id_start_with_example'; // string | person_employees id_start_with
$id_end_with = 'id_end_with_example'; // string | person_employees id_end_with
$first_name_partial = 'first_name_partial_example'; // string | person_employees firstName_partial
$first_name_start_with = 'first_name_start_with_example'; // string | person_employees firstName_start_with
$first_name_end_with = 'first_name_end_with_example'; // string | person_employees firstName_end_with
$last_name_partial = 'last_name_partial_example'; // string | person_employees lastName_partial
$last_name_start_with = 'last_name_start_with_example'; // string | person_employees lastName_start_with
$last_name_end_with = 'last_name_end_with_example'; // string | person_employees lastName_end_with
$code_partial = 'code_partial_example'; // string | person_employees code_partial
$code_start_with = 'code_start_with_example'; // string | person_employees code_start_with
$code_end_with = 'code_end_with_example'; // string | person_employees code_end_with
$nas_partial = 'nas_partial_example'; // string | person_employees nas_partial
$nas_start_with = 'nas_start_with_example'; // string | person_employees nas_start_with
$nas_end_with = 'nas_end_with_example'; // string | person_employees nas_end_with
$hour_salary_range = 'hour_salary_range_example'; // string | person_employees hourSalary_range
$vacancy_range = 'vacancy_range_example'; // string | person_employees vacancy_range
$annual_deduction_fed_range = 'annual_deduction_fed_range_example'; // string | person_employees annualDeductionFed_range
$annual_deduction_prov_range = 'annual_deduction_prov_range_example'; // string | person_employees annualDeductionProv_range
$annual_taxable_benefits_range = 'annual_taxable_benefits_range_example'; // string | person_employees annualTaxableBenefits_range
$voluntary_retirement_savings_plan_range = 'voluntary_retirement_savings_plan_range_example'; // string | person_employees voluntaryRetirementSavingsPlan_range
$registered_retirement_savings_plan_range = 'registered_retirement_savings_plan_range_example'; // string | person_employees registeredRetirementSavingsPlan_range
$tax_free_saving_account_range = 'tax_free_saving_account_range_example'; // string | person_employees taxFreeSavingAccount_range
$estimated_time_range = 'estimated_time_range_example'; // string | person_employees estimatedTime_range

try {
    $result = $apiInstance->apiPersonEmployeesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $hiring_date_before, $hiring_date_strictly_before, $hiring_date_after, $hiring_date_strictly_after, $date_end_of_contract_before, $date_end_of_contract_strictly_before, $date_end_of_contract_after, $date_end_of_contract_strictly_after, $id, $id2, $slug, $slug2, $code, $code2, $nas, $nas2, $person, $person2, $sector, $sector2, $type, $type2, $working_type, $working_type2, $person_first_name, $person_first_name2, $person_last_name, $person_last_name2, $search, $hour_salary, $hour_salary2, $vacancy, $vacancy2, $annual_deduction_fed, $annual_deduction_fed2, $annual_deduction_prov, $annual_deduction_prov2, $annual_taxable_benefits, $annual_taxable_benefits2, $voluntary_retirement_savings_plan, $voluntary_retirement_savings_plan2, $registered_retirement_savings_plan, $registered_retirement_savings_plan2, $tax_free_saving_account, $tax_free_saving_account2, $estimated_time, $estimated_time2, $in_schedule, $reservable, $overtime, $pay_rrq, $pay_assemp, $pay_rqap, $pay_rpc, $pay_csst, $pay_fed_taxes, $pay_prov_taxes, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_date_end_of_contract, $exists_nas, $exists_code, $exists_internal_notes, $exists_payment_time, $order_id, $order_slug, $order_created_at, $order_updated_at, $order_hour_salary, $order_vacancy, $order_annual_deduction_fed, $order_annual_deduction_prov, $order_annual_taxable_benefits, $order_voluntary_retirement_savings_plan, $order_registered_retirement_savings_plan, $order_tax_free_saving_account, $order_estimated_time, $order_person_first_name, $order_person_last_name, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $first_name_partial, $first_name_start_with, $first_name_end_with, $last_name_partial, $last_name_start_with, $last_name_end_with, $code_partial, $code_start_with, $code_end_with, $nas_partial, $nas_start_with, $nas_end_with, $hour_salary_range, $vacancy_range, $annual_deduction_fed_range, $annual_deduction_prov_range, $annual_taxable_benefits_range, $voluntary_retirement_savings_plan_range, $registered_retirement_savings_plan_range, $tax_free_saving_account_range, $estimated_time_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeesApi->apiPersonEmployeesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **hiring_date_before** | **string**|  | [optional] |
| **hiring_date_strictly_before** | **string**|  | [optional] |
| **hiring_date_after** | **string**|  | [optional] |
| **hiring_date_strictly_after** | **string**|  | [optional] |
| **date_end_of_contract_before** | **string**|  | [optional] |
| **date_end_of_contract_strictly_before** | **string**|  | [optional] |
| **date_end_of_contract_after** | **string**|  | [optional] |
| **date_end_of_contract_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **code** | **string**|  | [optional] |
| **code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **nas** | **string**|  | [optional] |
| **nas2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **sector** | **string**|  | [optional] |
| **sector2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **working_type** | **string**|  | [optional] |
| **working_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person_first_name** | **string**|  | [optional] |
| **person_first_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person_last_name** | **string**|  | [optional] |
| **person_last_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **hour_salary** | **string**|  | [optional] |
| **hour_salary2** | [**string[]**](../Model/string.md)|  | [optional] |
| **vacancy** | **string**|  | [optional] |
| **vacancy2** | [**string[]**](../Model/string.md)|  | [optional] |
| **annual_deduction_fed** | **string**|  | [optional] |
| **annual_deduction_fed2** | [**string[]**](../Model/string.md)|  | [optional] |
| **annual_deduction_prov** | **string**|  | [optional] |
| **annual_deduction_prov2** | [**string[]**](../Model/string.md)|  | [optional] |
| **annual_taxable_benefits** | **string**|  | [optional] |
| **annual_taxable_benefits2** | [**string[]**](../Model/string.md)|  | [optional] |
| **voluntary_retirement_savings_plan** | **string**|  | [optional] |
| **voluntary_retirement_savings_plan2** | [**string[]**](../Model/string.md)|  | [optional] |
| **registered_retirement_savings_plan** | **string**|  | [optional] |
| **registered_retirement_savings_plan2** | [**string[]**](../Model/string.md)|  | [optional] |
| **tax_free_saving_account** | **string**|  | [optional] |
| **tax_free_saving_account2** | [**string[]**](../Model/string.md)|  | [optional] |
| **estimated_time** | **string**|  | [optional] |
| **estimated_time2** | [**string[]**](../Model/string.md)|  | [optional] |
| **in_schedule** | **bool**|  | [optional] |
| **reservable** | **bool**|  | [optional] |
| **overtime** | **bool**|  | [optional] |
| **pay_rrq** | **bool**|  | [optional] |
| **pay_assemp** | **bool**|  | [optional] |
| **pay_rqap** | **bool**|  | [optional] |
| **pay_rpc** | **bool**|  | [optional] |
| **pay_csst** | **bool**|  | [optional] |
| **pay_fed_taxes** | **bool**|  | [optional] |
| **pay_prov_taxes** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_date_end_of_contract** | **bool**|  | [optional] |
| **exists_nas** | **bool**|  | [optional] |
| **exists_code** | **bool**|  | [optional] |
| **exists_internal_notes** | **bool**|  | [optional] |
| **exists_payment_time** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_hour_salary** | **string**|  | [optional] |
| **order_vacancy** | **string**|  | [optional] |
| **order_annual_deduction_fed** | **string**|  | [optional] |
| **order_annual_deduction_prov** | **string**|  | [optional] |
| **order_annual_taxable_benefits** | **string**|  | [optional] |
| **order_voluntary_retirement_savings_plan** | **string**|  | [optional] |
| **order_registered_retirement_savings_plan** | **string**|  | [optional] |
| **order_tax_free_saving_account** | **string**|  | [optional] |
| **order_estimated_time** | **string**|  | [optional] |
| **order_person_first_name** | **string**|  | [optional] |
| **order_person_last_name** | **string**|  | [optional] |
| **slug_partial** | **string**| person_employees slug_partial | [optional] |
| **slug_start_with** | **string**| person_employees slug_start_with | [optional] |
| **slug_end_with** | **string**| person_employees slug_end_with | [optional] |
| **id_partial** | **string**| person_employees id_partial | [optional] |
| **id_start_with** | **string**| person_employees id_start_with | [optional] |
| **id_end_with** | **string**| person_employees id_end_with | [optional] |
| **first_name_partial** | **string**| person_employees firstName_partial | [optional] |
| **first_name_start_with** | **string**| person_employees firstName_start_with | [optional] |
| **first_name_end_with** | **string**| person_employees firstName_end_with | [optional] |
| **last_name_partial** | **string**| person_employees lastName_partial | [optional] |
| **last_name_start_with** | **string**| person_employees lastName_start_with | [optional] |
| **last_name_end_with** | **string**| person_employees lastName_end_with | [optional] |
| **code_partial** | **string**| person_employees code_partial | [optional] |
| **code_start_with** | **string**| person_employees code_start_with | [optional] |
| **code_end_with** | **string**| person_employees code_end_with | [optional] |
| **nas_partial** | **string**| person_employees nas_partial | [optional] |
| **nas_start_with** | **string**| person_employees nas_start_with | [optional] |
| **nas_end_with** | **string**| person_employees nas_end_with | [optional] |
| **hour_salary_range** | **string**| person_employees hourSalary_range | [optional] |
| **vacancy_range** | **string**| person_employees vacancy_range | [optional] |
| **annual_deduction_fed_range** | **string**| person_employees annualDeductionFed_range | [optional] |
| **annual_deduction_prov_range** | **string**| person_employees annualDeductionProv_range | [optional] |
| **annual_taxable_benefits_range** | **string**| person_employees annualTaxableBenefits_range | [optional] |
| **voluntary_retirement_savings_plan_range** | **string**| person_employees voluntaryRetirementSavingsPlan_range | [optional] |
| **registered_retirement_savings_plan_range** | **string**| person_employees registeredRetirementSavingsPlan_range | [optional] |
| **tax_free_saving_account_range** | **string**| person_employees taxFreeSavingAccount_range | [optional] |
| **estimated_time_range** | **string**| person_employees estimatedTime_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPersonEmployeesGetCollection200Response**](../Model/ApiPersonEmployeesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonEmployeesIdDelete()`

```php
apiPersonEmployeesIdDelete($id)
```

Removes the person_employees resource.

Removes the person_employees resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_employees identifier

try {
    $apiInstance->apiPersonEmployeesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeesApi->apiPersonEmployeesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_employees identifier | |

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

## `apiPersonEmployeesIdGet()`

```php
apiPersonEmployeesIdGet($id): \OpenAPI\Client\Model\PersonEmployeesJsonldPersonEmployeeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_employees resource.

Retrieves a person_employees resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_employees identifier

try {
    $result = $apiInstance->apiPersonEmployeesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeesApi->apiPersonEmployeesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_employees identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonEmployeesJsonldPersonEmployeeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonEmployeesJsonldPersonEmployeeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonEmployeesIdPut()`

```php
apiPersonEmployeesIdPut($id, $person_employees_jsonld_add_post): \OpenAPI\Client\Model\PersonEmployeesJsonldPersonEmployeeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the person_employees resource.

Replaces the person_employees resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_employees identifier
$person_employees_jsonld_add_post = new \OpenAPI\Client\Model\PersonEmployeesJsonldAddPost(); // \OpenAPI\Client\Model\PersonEmployeesJsonldAddPost | The updated person_employees resource

try {
    $result = $apiInstance->apiPersonEmployeesIdPut($id, $person_employees_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeesApi->apiPersonEmployeesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_employees identifier | |
| **person_employees_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonEmployeesJsonldAddPost**](../Model/PersonEmployeesJsonldAddPost.md)| The updated person_employees resource | |

### Return type

[**\OpenAPI\Client\Model\PersonEmployeesJsonldPersonEmployeeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonEmployeesJsonldPersonEmployeeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonEmployeesPost()`

```php
apiPersonEmployeesPost($person_employees_jsonld_add_post): \OpenAPI\Client\Model\PersonEmployeesJsonldPersonEmployeeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a person_employees resource.

Creates a person_employees resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_employees_jsonld_add_post = new \OpenAPI\Client\Model\PersonEmployeesJsonldAddPost(); // \OpenAPI\Client\Model\PersonEmployeesJsonldAddPost | The new person_employees resource

try {
    $result = $apiInstance->apiPersonEmployeesPost($person_employees_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeesApi->apiPersonEmployeesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_employees_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonEmployeesJsonldAddPost**](../Model/PersonEmployeesJsonldAddPost.md)| The new person_employees resource | |

### Return type

[**\OpenAPI\Client\Model\PersonEmployeesJsonldPersonEmployeeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonEmployeesJsonldPersonEmployeeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personEmployeeApiFileUpload()`

```php
personEmployeeApiFileUpload($id, $person_employees_jsonld): \OpenAPI\Client\Model\PersonEmployeesJsonldPersonEmployeeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a person_employees resource.

Creates a person_employees resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_employees identifier
$person_employees_jsonld = new \OpenAPI\Client\Model\PersonEmployeesJsonld(); // \OpenAPI\Client\Model\PersonEmployeesJsonld | The new person_employees resource

try {
    $result = $apiInstance->personEmployeeApiFileUpload($id, $person_employees_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeesApi->personEmployeeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_employees identifier | |
| **person_employees_jsonld** | [**\OpenAPI\Client\Model\PersonEmployeesJsonld**](../Model/PersonEmployeesJsonld.md)| The new person_employees resource | |

### Return type

[**\OpenAPI\Client\Model\PersonEmployeesJsonldPersonEmployeeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonEmployeesJsonldPersonEmployeeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personEmployeeDropDown()`

```php
personEmployeeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $hiring_date_before, $hiring_date_strictly_before, $hiring_date_after, $hiring_date_strictly_after, $date_end_of_contract_before, $date_end_of_contract_strictly_before, $date_end_of_contract_after, $date_end_of_contract_strictly_after, $id, $id2, $slug, $slug2, $code, $code2, $nas, $nas2, $person, $person2, $sector, $sector2, $type, $type2, $working_type, $working_type2, $person_first_name, $person_first_name2, $person_last_name, $person_last_name2, $search, $hour_salary, $hour_salary2, $vacancy, $vacancy2, $annual_deduction_fed, $annual_deduction_fed2, $annual_deduction_prov, $annual_deduction_prov2, $annual_taxable_benefits, $annual_taxable_benefits2, $voluntary_retirement_savings_plan, $voluntary_retirement_savings_plan2, $registered_retirement_savings_plan, $registered_retirement_savings_plan2, $tax_free_saving_account, $tax_free_saving_account2, $estimated_time, $estimated_time2, $in_schedule, $reservable, $overtime, $pay_rrq, $pay_assemp, $pay_rqap, $pay_rpc, $pay_csst, $pay_fed_taxes, $pay_prov_taxes, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_date_end_of_contract, $exists_nas, $exists_code, $exists_internal_notes, $exists_payment_time, $order_id, $order_slug, $order_created_at, $order_updated_at, $order_hour_salary, $order_vacancy, $order_annual_deduction_fed, $order_annual_deduction_prov, $order_annual_taxable_benefits, $order_voluntary_retirement_savings_plan, $order_registered_retirement_savings_plan, $order_tax_free_saving_account, $order_estimated_time, $order_person_first_name, $order_person_last_name, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $first_name_partial, $first_name_start_with, $first_name_end_with, $last_name_partial, $last_name_start_with, $last_name_end_with, $code_partial, $code_start_with, $code_end_with, $nas_partial, $nas_start_with, $nas_end_with, $hour_salary_range, $vacancy_range, $annual_deduction_fed_range, $annual_deduction_prov_range, $annual_taxable_benefits_range, $voluntary_retirement_savings_plan_range, $registered_retirement_savings_plan_range, $tax_free_saving_account_range, $estimated_time_range): \OpenAPI\Client\Model\PersonEmployeeDropDown200Response
```

Retrieves the collection of person_employees resources.

Retrieves the collection of person_employees resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeesApi(
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
$hiring_date_before = 'hiring_date_before_example'; // string | 
$hiring_date_strictly_before = 'hiring_date_strictly_before_example'; // string | 
$hiring_date_after = 'hiring_date_after_example'; // string | 
$hiring_date_strictly_after = 'hiring_date_strictly_after_example'; // string | 
$date_end_of_contract_before = 'date_end_of_contract_before_example'; // string | 
$date_end_of_contract_strictly_before = 'date_end_of_contract_strictly_before_example'; // string | 
$date_end_of_contract_after = 'date_end_of_contract_after_example'; // string | 
$date_end_of_contract_strictly_after = 'date_end_of_contract_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$code = 'code_example'; // string | 
$code2 = array('code_example'); // string[] | 
$nas = 'nas_example'; // string | 
$nas2 = array('nas_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$sector = 'sector_example'; // string | 
$sector2 = array('sector_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$working_type = 'working_type_example'; // string | 
$working_type2 = array('working_type_example'); // string[] | 
$person_first_name = 'person_first_name_example'; // string | 
$person_first_name2 = array('person_first_name_example'); // string[] | 
$person_last_name = 'person_last_name_example'; // string | 
$person_last_name2 = array('person_last_name_example'); // string[] | 
$search = 'search_example'; // string | 
$hour_salary = 'hour_salary_example'; // string | 
$hour_salary2 = array('hour_salary_example'); // string[] | 
$vacancy = 'vacancy_example'; // string | 
$vacancy2 = array('vacancy_example'); // string[] | 
$annual_deduction_fed = 'annual_deduction_fed_example'; // string | 
$annual_deduction_fed2 = array('annual_deduction_fed_example'); // string[] | 
$annual_deduction_prov = 'annual_deduction_prov_example'; // string | 
$annual_deduction_prov2 = array('annual_deduction_prov_example'); // string[] | 
$annual_taxable_benefits = 'annual_taxable_benefits_example'; // string | 
$annual_taxable_benefits2 = array('annual_taxable_benefits_example'); // string[] | 
$voluntary_retirement_savings_plan = 'voluntary_retirement_savings_plan_example'; // string | 
$voluntary_retirement_savings_plan2 = array('voluntary_retirement_savings_plan_example'); // string[] | 
$registered_retirement_savings_plan = 'registered_retirement_savings_plan_example'; // string | 
$registered_retirement_savings_plan2 = array('registered_retirement_savings_plan_example'); // string[] | 
$tax_free_saving_account = 'tax_free_saving_account_example'; // string | 
$tax_free_saving_account2 = array('tax_free_saving_account_example'); // string[] | 
$estimated_time = 'estimated_time_example'; // string | 
$estimated_time2 = array('estimated_time_example'); // string[] | 
$in_schedule = True; // bool | 
$reservable = True; // bool | 
$overtime = True; // bool | 
$pay_rrq = True; // bool | 
$pay_assemp = True; // bool | 
$pay_rqap = True; // bool | 
$pay_rpc = True; // bool | 
$pay_csst = True; // bool | 
$pay_fed_taxes = True; // bool | 
$pay_prov_taxes = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_date_end_of_contract = True; // bool | 
$exists_nas = True; // bool | 
$exists_code = True; // bool | 
$exists_internal_notes = True; // bool | 
$exists_payment_time = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_hour_salary = 'order_hour_salary_example'; // string | 
$order_vacancy = 'order_vacancy_example'; // string | 
$order_annual_deduction_fed = 'order_annual_deduction_fed_example'; // string | 
$order_annual_deduction_prov = 'order_annual_deduction_prov_example'; // string | 
$order_annual_taxable_benefits = 'order_annual_taxable_benefits_example'; // string | 
$order_voluntary_retirement_savings_plan = 'order_voluntary_retirement_savings_plan_example'; // string | 
$order_registered_retirement_savings_plan = 'order_registered_retirement_savings_plan_example'; // string | 
$order_tax_free_saving_account = 'order_tax_free_saving_account_example'; // string | 
$order_estimated_time = 'order_estimated_time_example'; // string | 
$order_person_first_name = 'order_person_first_name_example'; // string | 
$order_person_last_name = 'order_person_last_name_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | person_employees slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_employees slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_employees slug_end_with
$id_partial = 'id_partial_example'; // string | person_employees id_partial
$id_start_with = 'id_start_with_example'; // string | person_employees id_start_with
$id_end_with = 'id_end_with_example'; // string | person_employees id_end_with
$first_name_partial = 'first_name_partial_example'; // string | person_employees firstName_partial
$first_name_start_with = 'first_name_start_with_example'; // string | person_employees firstName_start_with
$first_name_end_with = 'first_name_end_with_example'; // string | person_employees firstName_end_with
$last_name_partial = 'last_name_partial_example'; // string | person_employees lastName_partial
$last_name_start_with = 'last_name_start_with_example'; // string | person_employees lastName_start_with
$last_name_end_with = 'last_name_end_with_example'; // string | person_employees lastName_end_with
$code_partial = 'code_partial_example'; // string | person_employees code_partial
$code_start_with = 'code_start_with_example'; // string | person_employees code_start_with
$code_end_with = 'code_end_with_example'; // string | person_employees code_end_with
$nas_partial = 'nas_partial_example'; // string | person_employees nas_partial
$nas_start_with = 'nas_start_with_example'; // string | person_employees nas_start_with
$nas_end_with = 'nas_end_with_example'; // string | person_employees nas_end_with
$hour_salary_range = 'hour_salary_range_example'; // string | person_employees hourSalary_range
$vacancy_range = 'vacancy_range_example'; // string | person_employees vacancy_range
$annual_deduction_fed_range = 'annual_deduction_fed_range_example'; // string | person_employees annualDeductionFed_range
$annual_deduction_prov_range = 'annual_deduction_prov_range_example'; // string | person_employees annualDeductionProv_range
$annual_taxable_benefits_range = 'annual_taxable_benefits_range_example'; // string | person_employees annualTaxableBenefits_range
$voluntary_retirement_savings_plan_range = 'voluntary_retirement_savings_plan_range_example'; // string | person_employees voluntaryRetirementSavingsPlan_range
$registered_retirement_savings_plan_range = 'registered_retirement_savings_plan_range_example'; // string | person_employees registeredRetirementSavingsPlan_range
$tax_free_saving_account_range = 'tax_free_saving_account_range_example'; // string | person_employees taxFreeSavingAccount_range
$estimated_time_range = 'estimated_time_range_example'; // string | person_employees estimatedTime_range

try {
    $result = $apiInstance->personEmployeeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $hiring_date_before, $hiring_date_strictly_before, $hiring_date_after, $hiring_date_strictly_after, $date_end_of_contract_before, $date_end_of_contract_strictly_before, $date_end_of_contract_after, $date_end_of_contract_strictly_after, $id, $id2, $slug, $slug2, $code, $code2, $nas, $nas2, $person, $person2, $sector, $sector2, $type, $type2, $working_type, $working_type2, $person_first_name, $person_first_name2, $person_last_name, $person_last_name2, $search, $hour_salary, $hour_salary2, $vacancy, $vacancy2, $annual_deduction_fed, $annual_deduction_fed2, $annual_deduction_prov, $annual_deduction_prov2, $annual_taxable_benefits, $annual_taxable_benefits2, $voluntary_retirement_savings_plan, $voluntary_retirement_savings_plan2, $registered_retirement_savings_plan, $registered_retirement_savings_plan2, $tax_free_saving_account, $tax_free_saving_account2, $estimated_time, $estimated_time2, $in_schedule, $reservable, $overtime, $pay_rrq, $pay_assemp, $pay_rqap, $pay_rpc, $pay_csst, $pay_fed_taxes, $pay_prov_taxes, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_date_end_of_contract, $exists_nas, $exists_code, $exists_internal_notes, $exists_payment_time, $order_id, $order_slug, $order_created_at, $order_updated_at, $order_hour_salary, $order_vacancy, $order_annual_deduction_fed, $order_annual_deduction_prov, $order_annual_taxable_benefits, $order_voluntary_retirement_savings_plan, $order_registered_retirement_savings_plan, $order_tax_free_saving_account, $order_estimated_time, $order_person_first_name, $order_person_last_name, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $first_name_partial, $first_name_start_with, $first_name_end_with, $last_name_partial, $last_name_start_with, $last_name_end_with, $code_partial, $code_start_with, $code_end_with, $nas_partial, $nas_start_with, $nas_end_with, $hour_salary_range, $vacancy_range, $annual_deduction_fed_range, $annual_deduction_prov_range, $annual_taxable_benefits_range, $voluntary_retirement_savings_plan_range, $registered_retirement_savings_plan_range, $tax_free_saving_account_range, $estimated_time_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeesApi->personEmployeeDropDown: ', $e->getMessage(), PHP_EOL;
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
| **hiring_date_before** | **string**|  | [optional] |
| **hiring_date_strictly_before** | **string**|  | [optional] |
| **hiring_date_after** | **string**|  | [optional] |
| **hiring_date_strictly_after** | **string**|  | [optional] |
| **date_end_of_contract_before** | **string**|  | [optional] |
| **date_end_of_contract_strictly_before** | **string**|  | [optional] |
| **date_end_of_contract_after** | **string**|  | [optional] |
| **date_end_of_contract_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **code** | **string**|  | [optional] |
| **code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **nas** | **string**|  | [optional] |
| **nas2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **sector** | **string**|  | [optional] |
| **sector2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **working_type** | **string**|  | [optional] |
| **working_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person_first_name** | **string**|  | [optional] |
| **person_first_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person_last_name** | **string**|  | [optional] |
| **person_last_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **hour_salary** | **string**|  | [optional] |
| **hour_salary2** | [**string[]**](../Model/string.md)|  | [optional] |
| **vacancy** | **string**|  | [optional] |
| **vacancy2** | [**string[]**](../Model/string.md)|  | [optional] |
| **annual_deduction_fed** | **string**|  | [optional] |
| **annual_deduction_fed2** | [**string[]**](../Model/string.md)|  | [optional] |
| **annual_deduction_prov** | **string**|  | [optional] |
| **annual_deduction_prov2** | [**string[]**](../Model/string.md)|  | [optional] |
| **annual_taxable_benefits** | **string**|  | [optional] |
| **annual_taxable_benefits2** | [**string[]**](../Model/string.md)|  | [optional] |
| **voluntary_retirement_savings_plan** | **string**|  | [optional] |
| **voluntary_retirement_savings_plan2** | [**string[]**](../Model/string.md)|  | [optional] |
| **registered_retirement_savings_plan** | **string**|  | [optional] |
| **registered_retirement_savings_plan2** | [**string[]**](../Model/string.md)|  | [optional] |
| **tax_free_saving_account** | **string**|  | [optional] |
| **tax_free_saving_account2** | [**string[]**](../Model/string.md)|  | [optional] |
| **estimated_time** | **string**|  | [optional] |
| **estimated_time2** | [**string[]**](../Model/string.md)|  | [optional] |
| **in_schedule** | **bool**|  | [optional] |
| **reservable** | **bool**|  | [optional] |
| **overtime** | **bool**|  | [optional] |
| **pay_rrq** | **bool**|  | [optional] |
| **pay_assemp** | **bool**|  | [optional] |
| **pay_rqap** | **bool**|  | [optional] |
| **pay_rpc** | **bool**|  | [optional] |
| **pay_csst** | **bool**|  | [optional] |
| **pay_fed_taxes** | **bool**|  | [optional] |
| **pay_prov_taxes** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_date_end_of_contract** | **bool**|  | [optional] |
| **exists_nas** | **bool**|  | [optional] |
| **exists_code** | **bool**|  | [optional] |
| **exists_internal_notes** | **bool**|  | [optional] |
| **exists_payment_time** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_hour_salary** | **string**|  | [optional] |
| **order_vacancy** | **string**|  | [optional] |
| **order_annual_deduction_fed** | **string**|  | [optional] |
| **order_annual_deduction_prov** | **string**|  | [optional] |
| **order_annual_taxable_benefits** | **string**|  | [optional] |
| **order_voluntary_retirement_savings_plan** | **string**|  | [optional] |
| **order_registered_retirement_savings_plan** | **string**|  | [optional] |
| **order_tax_free_saving_account** | **string**|  | [optional] |
| **order_estimated_time** | **string**|  | [optional] |
| **order_person_first_name** | **string**|  | [optional] |
| **order_person_last_name** | **string**|  | [optional] |
| **slug_partial** | **string**| person_employees slug_partial | [optional] |
| **slug_start_with** | **string**| person_employees slug_start_with | [optional] |
| **slug_end_with** | **string**| person_employees slug_end_with | [optional] |
| **id_partial** | **string**| person_employees id_partial | [optional] |
| **id_start_with** | **string**| person_employees id_start_with | [optional] |
| **id_end_with** | **string**| person_employees id_end_with | [optional] |
| **first_name_partial** | **string**| person_employees firstName_partial | [optional] |
| **first_name_start_with** | **string**| person_employees firstName_start_with | [optional] |
| **first_name_end_with** | **string**| person_employees firstName_end_with | [optional] |
| **last_name_partial** | **string**| person_employees lastName_partial | [optional] |
| **last_name_start_with** | **string**| person_employees lastName_start_with | [optional] |
| **last_name_end_with** | **string**| person_employees lastName_end_with | [optional] |
| **code_partial** | **string**| person_employees code_partial | [optional] |
| **code_start_with** | **string**| person_employees code_start_with | [optional] |
| **code_end_with** | **string**| person_employees code_end_with | [optional] |
| **nas_partial** | **string**| person_employees nas_partial | [optional] |
| **nas_start_with** | **string**| person_employees nas_start_with | [optional] |
| **nas_end_with** | **string**| person_employees nas_end_with | [optional] |
| **hour_salary_range** | **string**| person_employees hourSalary_range | [optional] |
| **vacancy_range** | **string**| person_employees vacancy_range | [optional] |
| **annual_deduction_fed_range** | **string**| person_employees annualDeductionFed_range | [optional] |
| **annual_deduction_prov_range** | **string**| person_employees annualDeductionProv_range | [optional] |
| **annual_taxable_benefits_range** | **string**| person_employees annualTaxableBenefits_range | [optional] |
| **voluntary_retirement_savings_plan_range** | **string**| person_employees voluntaryRetirementSavingsPlan_range | [optional] |
| **registered_retirement_savings_plan_range** | **string**| person_employees registeredRetirementSavingsPlan_range | [optional] |
| **tax_free_saving_account_range** | **string**| person_employees taxFreeSavingAccount_range | [optional] |
| **estimated_time_range** | **string**| person_employees estimatedTime_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\PersonEmployeeDropDown200Response**](../Model/PersonEmployeeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personEmployeeDuplicate()`

```php
personEmployeeDuplicate($id): \OpenAPI\Client\Model\PersonEmployeesJsonldPersonEmployeeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_employees resource.

Retrieves a person_employees resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_employees identifier

try {
    $result = $apiInstance->personEmployeeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeesApi->personEmployeeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_employees identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonEmployeesJsonldPersonEmployeeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonEmployeesJsonldPersonEmployeeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personEmployeeFetchFiles()`

```php
personEmployeeFetchFiles($id): \OpenAPI\Client\Model\PersonEmployeesJsonld
```

Retrieves a person_employees resource.

Retrieves a person_employees resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_employees identifier

try {
    $result = $apiInstance->personEmployeeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeesApi->personEmployeeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_employees identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonEmployeesJsonld**](../Model/PersonEmployeesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personEmployeeGetBySlug()`

```php
personEmployeeGetBySlug($slug): \OpenAPI\Client\Model\PersonEmployeesJsonldPersonEmployeeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_employees resource.

Retrieves a person_employees resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | person_employees identifier

try {
    $result = $apiInstance->personEmployeeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeesApi->personEmployeeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| person_employees identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonEmployeesJsonldPersonEmployeeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonEmployeesJsonldPersonEmployeeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personEmployeeGetDeleteRelations()`

```php
personEmployeeGetDeleteRelations($id): \OpenAPI\Client\Model\PersonEmployeesJsonldPersonEmployeeRelations
```

Retrieves a person_employees resource.

Retrieves a person_employees resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_employees identifier

try {
    $result = $apiInstance->personEmployeeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeesApi->personEmployeeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_employees identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonEmployeesJsonldPersonEmployeeRelations**](../Model/PersonEmployeesJsonldPersonEmployeeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personEmployeeMetadata()`

```php
personEmployeeMetadata($id): \OpenAPI\Client\Model\PersonEmployeesJsonldIdStandardMetadataPersonEmployeeMetadataTagTaggingListPersonEmployeeRelationsTimestampable
```

Retrieves a person_employees resource.

Retrieves a person_employees resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_employees identifier

try {
    $result = $apiInstance->personEmployeeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeesApi->personEmployeeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_employees identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonEmployeesJsonldIdStandardMetadataPersonEmployeeMetadataTagTaggingListPersonEmployeeRelationsTimestampable**](../Model/PersonEmployeesJsonldIdStandardMetadataPersonEmployeeMetadataTagTaggingListPersonEmployeeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
