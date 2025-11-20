# # InvoicesJsonhalAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**timestamp** | **\DateTime** |  | [optional]
**taxes** | [**\OpenAPI\Client\Model\InvoiceTaxesJsonhalAddPost[]**](InvoiceTaxesJsonhalAddPost.md) |  | [optional]
**date** | **\DateTime** |  |
**delivery_date** | **\DateTime** |  | [optional]
**client** | [**\OpenAPI\Client\Model\PersonClientsJsonhalAddPost**](PersonClientsJsonhalAddPost.md) | Get client. |
**coordinate** | [**\OpenAPI\Client\Model\CoordinatesJsonhalAddPost**](CoordinatesJsonhalAddPost.md) |  | [optional]
**project** | [**\OpenAPI\Client\Model\ProjectsJsonhalAddPost**](ProjectsJsonhalAddPost.md) |  | [optional]
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonhalAddPost**](PersonEmployeesJsonhalAddPost.md) | Get employe. |
**distribution_type** | [**\OpenAPI\Client\Model\InvoiceDistributionTypesJsonhalAddPost**](InvoiceDistributionTypesJsonhalAddPost.md) |  |
**type** | [**\OpenAPI\Client\Model\InvoiceTypesJsonhalAddPost**](InvoiceTypesJsonhalAddPost.md) |  |
**status** | [**\OpenAPI\Client\Model\InvoiceStatusesJsonhalAddPost**](InvoiceStatusesJsonhalAddPost.md) |  |
**notes** | **string** |  | [optional]
**conditions** | **string** |  | [optional]
**client_ref** | **string** |  | [optional]
**auto_email** | **bool** |  | [optional]
**auto_interests** | **bool** |  | [optional]
**currency** | [**\OpenAPI\Client\Model\FeeCurrenciesJsonhalAddPost**](FeeCurrenciesJsonhalAddPost.md) |  | [optional]
**conversion_rate** | **string** |  | [optional] [default to '1']
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
