# # PersonSuppliersJsonhalPostAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**person** | [**\OpenAPI\Client\Model\PeopleJsonhalPostAdd**](PeopleJsonhalPostAdd.md) | Get person. |
**discount** | **string** |  |
**notes** | **string** |  | [optional]
**payment_terms** | **string** |  | [optional]
**responsible** | [**\OpenAPI\Client\Model\PersonEmployeesJsonhalPostAdd**](PersonEmployeesJsonhalPostAdd.md) |  | [optional]
**social_reason** | **string** |  | [optional]
**owner** | **string** |  | [optional]
**fed_tax_number** | **string** |  | [optional]
**prov_tax_number** | **string** |  | [optional]
**order_day** | **string** |  | [optional]
**file_types** | **string** |  | [optional]
**code** | **string** |  | [optional]
**account_number** | **string** |  | [optional]
**payment_time** | **int** |  | [optional]
**interests_on_payment** | **string** |  |
**payment_discount** | **string** |  |
**nb_days_payment_discount** | **int** |  | [optional] [default to 10]
**shipper** | [**\OpenAPI\Client\Model\ShippingShippersJsonhalPostAdd**](ShippingShippersJsonhalPostAdd.md) |  | [optional]
**delivery_time** | **int** |  | [optional] [default to 30]
**delivery_frequency** | **int** |  | [optional]
**order_min_amount** | **string** |  | [optional]
**order_max_amount** | **string** |  | [optional]
**account_max_amount** | **string** |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
