# # BillsJsonhalAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**timestamp** | **\DateTime** |  | [optional]
**date** | **\DateTime** |  |
**number** | **string** |  | [optional]
**supplier** | [**\OpenAPI\Client\Model\PersonSuppliersJsonhalAddPost**](PersonSuppliersJsonhalAddPost.md) | Get supplier. |
**project** | [**\OpenAPI\Client\Model\ProjectsJsonhalAddPost**](ProjectsJsonhalAddPost.md) |  | [optional]
**payer** | [**\OpenAPI\Client\Model\PeopleJsonhalAddPost**](PeopleJsonhalAddPost.md) | Get payer. |
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonhalAddPost**](PersonEmployeesJsonhalAddPost.md) | Get employe. |
**type** | [**\OpenAPI\Client\Model\BillTypesJsonhalAddPost**](BillTypesJsonhalAddPost.md) |  |
**distribution_type** | [**\OpenAPI\Client\Model\BillDistributiontypesJsonhalAddPost**](BillDistributiontypesJsonhalAddPost.md) |  |
**status** | [**\OpenAPI\Client\Model\BillStatusesJsonhalAddPost**](BillStatusesJsonhalAddPost.md) |  |
**delivery_date** | **\DateTime** |  | [optional]
**notes** | **string** |  | [optional]
**conditions** | **string** |  | [optional]
**coordinate** | [**\OpenAPI\Client\Model\CoordinatesJsonhalAddPost**](CoordinatesJsonhalAddPost.md) |  | [optional]
**supplier_ref** | **string** |  | [optional]
**currency** | [**\OpenAPI\Client\Model\FeeCurrenciesJsonhalAddPost**](FeeCurrenciesJsonhalAddPost.md) |  | [optional]
**conversion_rate** | **string** |  | [optional] [default to '1']
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
