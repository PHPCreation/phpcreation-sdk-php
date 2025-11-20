# # InvoicesJsonldPostAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp** | **\DateTime** |  | [optional]
**taxes** | [**\OpenAPI\Client\Model\InvoiceTaxesJsonldPostAdd[]**](InvoiceTaxesJsonldPostAdd.md) |  | [optional]
**date** | **\DateTime** |  |
**delivery_date** | **\DateTime** |  | [optional]
**client** | [**\OpenAPI\Client\Model\PersonClientsJsonldPostAdd**](PersonClientsJsonldPostAdd.md) | Get client. |
**coordinate** | [**\OpenAPI\Client\Model\CoordinatesJsonldPostAdd**](CoordinatesJsonldPostAdd.md) |  | [optional]
**project** | [**\OpenAPI\Client\Model\ProjectsJsonldPostAdd**](ProjectsJsonldPostAdd.md) |  | [optional]
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonldPostAdd**](PersonEmployeesJsonldPostAdd.md) | Get employe. |
**distribution_type** | [**\OpenAPI\Client\Model\InvoiceDistributionTypesJsonldPostAdd**](InvoiceDistributionTypesJsonldPostAdd.md) |  |
**type** | [**\OpenAPI\Client\Model\InvoiceTypesJsonldPostAdd**](InvoiceTypesJsonldPostAdd.md) |  |
**status** | [**\OpenAPI\Client\Model\InvoiceStatusesJsonldPostAdd**](InvoiceStatusesJsonldPostAdd.md) |  |
**notes** | **string** |  | [optional]
**conditions** | **string** |  | [optional]
**client_ref** | **string** |  | [optional]
**auto_email** | **bool** |  | [optional]
**auto_interests** | **bool** |  | [optional]
**currency** | [**\OpenAPI\Client\Model\FeeCurrenciesJsonldPostAdd**](FeeCurrenciesJsonldPostAdd.md) |  | [optional]
**conversion_rate** | **string** |  | [optional] [default to '1']
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
