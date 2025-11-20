# # KeyvaluestoreKeyvaluesAddPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** |  | [optional]
**value** | **string** |  | [optional]
**description** | **string** |  | [optional]
**user** | [**\OpenAPI\Client\Model\UsersAddPost**](UsersAddPost.md) |  | [optional]
**corporation** | [**\OpenAPI\Client\Model\PersonCorporationsAddPost**](PersonCorporationsAddPost.md) |  | [optional]
**notes** | **string** |  | [optional]
**clearance_level** | **int** | 0 secret 1 super-admin 2 admin 3 super user 4 manager 5 sub manager 6 user 7 limiter user 8 almost general 9 general 10 public  https://github.com/PHPCreation/phpr_erp/issues/3316 | [optional] [default to 7]
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
