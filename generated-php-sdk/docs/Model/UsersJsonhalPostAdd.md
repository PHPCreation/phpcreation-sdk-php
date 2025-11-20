# # UsersJsonhalPostAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**person** | [**\OpenAPI\Client\Model\PeopleJsonhalPostAdd**](PeopleJsonhalPostAdd.md) |  | [optional]
**key_value** | [**\OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonhalPostAdd[]**](KeyvaluestoreKeyvaluesJsonhalPostAdd.md) |  | [optional]
**system_salt** | **string** |  | [optional]
**username** | **string** |  | [optional]
**username_canonical** | **string** |  | [optional]
**email** | **string** |  | [optional]
**email_canonical** | **string** |  | [optional]
**first_name** | **string** |  | [optional]
**last_name** | **string** |  |
**phone_number** | **string** |  | [optional]
**salt** | **string** | The salt to use for hashing. | [optional]
**plain_password** | **string** | Plain password. Used for model validation. Must not be persisted. | [optional]
**last_login** | **\DateTime** |  | [optional]
**confirmation_token** | **string** | Random string sent to the user email address in order to verify it. | [optional]
**password_requested_at** | **\DateTime** |  | [optional]
**notes** | **string** |  | [optional]
**roles** | [**\OpenAPI\Client\Model\UserRolesJsonhalPostAdd[]**](UserRolesJsonhalPostAdd.md) |  | [optional]
**default_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonhalPostAdd**](PersonCorporationsJsonhalPostAdd.md) |  | [optional]
**landing_page_url** | **string** |  | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**slug** | **string** | DB Identifier |
**custom_data** | **string[]** |  | [optional]
**disabled_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
