# # PersonClientsJsonhalPostAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**created_date** | **\DateTime** |  |
**potential** | **string** |  |
**potential_notes** | **string** |  | [optional]
**satisfaction** | **string** |  |
**satisfaction_notes** | **string** |  | [optional]
**satisfaction_date** | **\DateTime** |  | [optional]
**marketing_source** | [**\OpenAPI\Client\Model\PersonMarketingsourcesJsonhalPostAdd**](PersonMarketingsourcesJsonhalPostAdd.md) |  | [optional]
**person** | [**\OpenAPI\Client\Model\PeopleJsonhalPostAdd**](PeopleJsonhalPostAdd.md) | Get person. |
**discount** | **string** |  |
**code** | **string** |  | [optional]
**account_number** | **string** |  | [optional]
**notes** | **string** |  | [optional]
**payment_terms** | **string** |  | [optional]
**responsible** | [**\OpenAPI\Client\Model\PersonEmployeesJsonhalPostAdd**](PersonEmployeesJsonhalPostAdd.md) | Get responsible. | [optional]
**shipper** | [**\OpenAPI\Client\Model\ShippingShippersJsonhalPostAdd**](ShippingShippersJsonhalPostAdd.md) |  | [optional]
**delivery_time** | **int** |  | [optional] [default to 30]
**max_credit** | **int** |  | [optional]
**payment_time** | **int** |  | [optional]
**interests_on_payment** | **string** |  |
**payment_discount** | **string** |  |
**nb_days_payment_discount** | **int** |  | [optional] [default to 10]
**project_type** | [**\OpenAPI\Client\Model\ProjectTypesJsonhalPostAdd**](ProjectTypesJsonhalPostAdd.md) |  | [optional]
**partners** | [**\OpenAPI\Client\Model\PersonPartnersJsonhalPostAdd[]**](PersonPartnersJsonhalPostAdd.md) |  | [optional]
**product_sell_prices** | [**\OpenAPI\Client\Model\ProductProductsellpricesJsonhalPostAdd[]**](ProductProductsellpricesJsonhalPostAdd.md) |  | [optional]
**order_min_amount** | **string** |  | [optional]
**order_max_amount** | **string** |  | [optional]
**account_max_amount** | **string** |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
