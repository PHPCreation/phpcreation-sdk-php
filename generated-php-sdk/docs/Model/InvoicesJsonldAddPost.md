# # InvoicesJsonldAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp** | **\DateTime** |  | [optional]
**taxes** | [**\OpenAPI\Client\Model\InvoiceTaxesJsonldAddPost[]**](InvoiceTaxesJsonldAddPost.md) |  | [optional]
**date** | **\DateTime** |  |
**delivery_date** | **\DateTime** |  | [optional]
**client** | [**\OpenAPI\Client\Model\PersonClientsJsonldAddPost**](PersonClientsJsonldAddPost.md) | Get client. |
**coordinate** | [**\OpenAPI\Client\Model\CoordinatesJsonldAddPost**](CoordinatesJsonldAddPost.md) |  | [optional]
**project** | [**\OpenAPI\Client\Model\ProjectsJsonldAddPost**](ProjectsJsonldAddPost.md) |  | [optional]
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonldAddPost**](PersonEmployeesJsonldAddPost.md) | Get employe. |
**distribution_type** | [**\OpenAPI\Client\Model\InvoiceDistributionTypesJsonldAddPost**](InvoiceDistributionTypesJsonldAddPost.md) |  |
**type** | [**\OpenAPI\Client\Model\InvoiceTypesJsonldAddPost**](InvoiceTypesJsonldAddPost.md) |  |
**status** | [**\OpenAPI\Client\Model\InvoiceStatusesJsonldAddPost**](InvoiceStatusesJsonldAddPost.md) |  |
**notes** | **string** |  | [optional]
**conditions** | **string** |  | [optional]
**client_ref** | **string** |  | [optional]
**auto_email** | **bool** |  | [optional]
**auto_interests** | **bool** |  | [optional]
**currency** | [**\OpenAPI\Client\Model\FeeCurrenciesJsonldAddPost**](FeeCurrenciesJsonldAddPost.md) |  | [optional]
**conversion_rate** | **string** |  | [optional] [default to '1']
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
