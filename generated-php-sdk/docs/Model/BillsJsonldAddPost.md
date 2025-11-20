# # BillsJsonldAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp** | **\DateTime** |  | [optional]
**date** | **\DateTime** |  |
**number** | **string** |  | [optional]
**supplier** | [**\OpenAPI\Client\Model\PersonSuppliersJsonldAddPost**](PersonSuppliersJsonldAddPost.md) | Get supplier. |
**project** | [**\OpenAPI\Client\Model\ProjectsJsonldAddPost**](ProjectsJsonldAddPost.md) |  | [optional]
**payer** | [**\OpenAPI\Client\Model\PeopleJsonldAddPost**](PeopleJsonldAddPost.md) | Get payer. |
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonldAddPost**](PersonEmployeesJsonldAddPost.md) | Get employe. |
**type** | [**\OpenAPI\Client\Model\BillTypesJsonldAddPost**](BillTypesJsonldAddPost.md) |  |
**distribution_type** | [**\OpenAPI\Client\Model\BillDistributiontypesJsonldAddPost**](BillDistributiontypesJsonldAddPost.md) |  |
**status** | [**\OpenAPI\Client\Model\BillStatusesJsonldAddPost**](BillStatusesJsonldAddPost.md) |  |
**delivery_date** | **\DateTime** |  | [optional]
**notes** | **string** |  | [optional]
**conditions** | **string** |  | [optional]
**coordinate** | [**\OpenAPI\Client\Model\CoordinatesJsonldAddPost**](CoordinatesJsonldAddPost.md) |  | [optional]
**supplier_ref** | **string** |  | [optional]
**currency** | [**\OpenAPI\Client\Model\FeeCurrenciesJsonldAddPost**](FeeCurrenciesJsonldAddPost.md) |  | [optional]
**conversion_rate** | **string** |  | [optional] [default to '1']
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
