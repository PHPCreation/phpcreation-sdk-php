# # InvoicesAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp** | **\DateTime** |  | [optional]
**taxes** | [**\OpenAPI\Client\Model\InvoiceTaxesAddPost[]**](InvoiceTaxesAddPost.md) |  | [optional]
**date** | **\DateTime** |  |
**delivery_date** | **\DateTime** |  | [optional]
**client** | [**\OpenAPI\Client\Model\PersonClientsAddPost**](PersonClientsAddPost.md) | Get client. |
**coordinate** | [**\OpenAPI\Client\Model\CoordinatesAddPost**](CoordinatesAddPost.md) |  | [optional]
**project** | [**\OpenAPI\Client\Model\ProjectsAddPost**](ProjectsAddPost.md) |  | [optional]
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesAddPost**](PersonEmployeesAddPost.md) | Get employe. |
**distribution_type** | [**\OpenAPI\Client\Model\InvoiceDistributionTypesAddPost**](InvoiceDistributionTypesAddPost.md) |  |
**type** | [**\OpenAPI\Client\Model\InvoiceTypesAddPost**](InvoiceTypesAddPost.md) |  |
**status** | [**\OpenAPI\Client\Model\InvoiceStatusesAddPost**](InvoiceStatusesAddPost.md) |  |
**notes** | **string** |  | [optional]
**conditions** | **string** |  | [optional]
**client_ref** | **string** |  | [optional]
**auto_email** | **bool** |  | [optional]
**auto_interests** | **bool** |  | [optional]
**currency** | [**\OpenAPI\Client\Model\FeeCurrenciesAddPost**](FeeCurrenciesAddPost.md) |  | [optional]
**conversion_rate** | **string** |  | [optional] [default to '1']
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
