# # PersonClientsPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**potential** | **string** |  |
**potential_notes** | **string** |  | [optional]
**satisfaction** | **string** |  |
**satisfaction_notes** | **string** |  | [optional]
**satisfaction_date** | **\DateTime** |  | [optional]
**marketing_source** | [**\OpenAPI\Client\Model\PersonMarketingsourcesPost**](PersonMarketingsourcesPost.md) |  | [optional]
**person** | [**\OpenAPI\Client\Model\PeoplePost**](PeoplePost.md) | Get person. |
**discount** | **string** |  |
**code** | **string** |  | [optional]
**account_number** | **string** |  | [optional]
**notes** | **string** |  | [optional]
**payment_terms** | **string** |  | [optional]
**responsible** | [**\OpenAPI\Client\Model\PersonEmployeesPost**](PersonEmployeesPost.md) | Get responsible. | [optional]
**shipper** | [**\OpenAPI\Client\Model\ShippingShippersPost**](ShippingShippersPost.md) |  | [optional]
**delivery_time** | **int** |  | [optional] [default to 30]
**max_credit** | **int** |  | [optional]
**payment_time** | **int** |  | [optional]
**interests_on_payment** | **string** |  |
**payment_discount** | **string** |  |
**nb_days_payment_discount** | **int** |  | [optional] [default to 10]
**project_type** | [**\OpenAPI\Client\Model\ProjectTypesPost**](ProjectTypesPost.md) |  | [optional]
**partners** | [**\OpenAPI\Client\Model\PersonPartnersPost[]**](PersonPartnersPost.md) |  | [optional]
**product_sell_prices** | [**\OpenAPI\Client\Model\ProductProductsellpricesPost[]**](ProductProductsellpricesPost.md) |  | [optional]
**order_min_amount** | **string** |  | [optional]
**order_max_amount** | **string** |  | [optional]
**account_max_amount** | **string** |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
