# # InvoicesJsonhalPostAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**timestamp** | **\DateTime** |  | [optional]
**taxes** | [**\OpenAPI\Client\Model\InvoiceTaxesJsonhalPostAdd[]**](InvoiceTaxesJsonhalPostAdd.md) |  | [optional]
**date** | **\DateTime** |  |
**delivery_date** | **\DateTime** |  | [optional]
**client** | [**\OpenAPI\Client\Model\PersonClientsJsonhalPostAdd**](PersonClientsJsonhalPostAdd.md) | Get client. |
**coordinate** | [**\OpenAPI\Client\Model\CoordinatesJsonhalPostAdd**](CoordinatesJsonhalPostAdd.md) |  | [optional]
**project** | [**\OpenAPI\Client\Model\ProjectsJsonhalPostAdd**](ProjectsJsonhalPostAdd.md) |  | [optional]
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonhalPostAdd**](PersonEmployeesJsonhalPostAdd.md) | Get employe. |
**distribution_type** | [**\OpenAPI\Client\Model\InvoiceDistributionTypesJsonhalPostAdd**](InvoiceDistributionTypesJsonhalPostAdd.md) |  |
**type** | [**\OpenAPI\Client\Model\InvoiceTypesJsonhalPostAdd**](InvoiceTypesJsonhalPostAdd.md) |  |
**status** | [**\OpenAPI\Client\Model\InvoiceStatusesJsonhalPostAdd**](InvoiceStatusesJsonhalPostAdd.md) |  |
**notes** | **string** |  | [optional]
**conditions** | **string** |  | [optional]
**client_ref** | **string** |  | [optional]
**auto_email** | **bool** |  | [optional]
**auto_interests** | **bool** |  | [optional]
**currency** | [**\OpenAPI\Client\Model\FeeCurrenciesJsonhalPostAdd**](FeeCurrenciesJsonhalPostAdd.md) |  | [optional]
**conversion_rate** | **string** |  | [optional] [default to '1']
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
