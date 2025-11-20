# # InvoicesPostAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp** | **\DateTime** |  | [optional]
**taxes** | [**\OpenAPI\Client\Model\InvoiceTaxesPostAdd[]**](InvoiceTaxesPostAdd.md) |  | [optional]
**date** | **\DateTime** |  |
**delivery_date** | **\DateTime** |  | [optional]
**client** | [**\OpenAPI\Client\Model\PersonClientsPostAdd**](PersonClientsPostAdd.md) | Get client. |
**coordinate** | [**\OpenAPI\Client\Model\CoordinatesPostAdd**](CoordinatesPostAdd.md) |  | [optional]
**project** | [**\OpenAPI\Client\Model\ProjectsPostAdd**](ProjectsPostAdd.md) |  | [optional]
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesPostAdd**](PersonEmployeesPostAdd.md) | Get employe. |
**distribution_type** | [**\OpenAPI\Client\Model\InvoiceDistributionTypesPostAdd**](InvoiceDistributionTypesPostAdd.md) |  |
**type** | [**\OpenAPI\Client\Model\InvoiceTypesPostAdd**](InvoiceTypesPostAdd.md) |  |
**status** | [**\OpenAPI\Client\Model\InvoiceStatusesPostAdd**](InvoiceStatusesPostAdd.md) |  |
**notes** | **string** |  | [optional]
**conditions** | **string** |  | [optional]
**client_ref** | **string** |  | [optional]
**auto_email** | **bool** |  | [optional]
**auto_interests** | **bool** |  | [optional]
**currency** | [**\OpenAPI\Client\Model\FeeCurrenciesPostAdd**](FeeCurrenciesPostAdd.md) |  | [optional]
**conversion_rate** | **string** |  | [optional] [default to '1']
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
