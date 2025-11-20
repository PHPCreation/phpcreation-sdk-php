# # BillsJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\OpenAPI\Client\Model\AccessTokenJsonhalLinks**](AccessTokenJsonhalLinks.md) |  | [optional]
**timestamp** | **\DateTime** |  | [optional]
**date** | **\DateTime** |  |
**payments** | [**\OpenAPI\Client\Model\BillPaymentsJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList[]**](BillPaymentsJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md) |  | [optional]
**supplier** | [**\OpenAPI\Client\Model\PersonSuppliersJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList**](PersonSuppliersJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md) | Get supplier. |
**project** | [**\OpenAPI\Client\Model\ProjectsJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList**](ProjectsJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md) |  | [optional]
**payer** | [**\OpenAPI\Client\Model\PeopleJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList**](PeopleJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md) | Get payer. |
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList**](PersonEmployeesJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md) | Get employe. |
**type** | [**\OpenAPI\Client\Model\BillTypesJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList**](BillTypesJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md) |  |
**distribution_type** | [**\OpenAPI\Client\Model\BillDistributiontypesJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList**](BillDistributiontypesJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md) |  |
**status** | [**\OpenAPI\Client\Model\BillStatusesJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList**](BillStatusesJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md) |  |
**shipments** | [**\OpenAPI\Client\Model\ShippingShipmentsJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList[]**](ShippingShipmentsJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md) |  | [optional]
**batches** | [**\OpenAPI\Client\Model\InventoryBatchesJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList[]**](InventoryBatchesJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md) |  | [optional]
**delivery_date** | **\DateTime** |  | [optional]
**notes** | **string** |  | [optional]
**conditions** | **string** |  | [optional]
**coordinate** | [**\OpenAPI\Client\Model\CoordinatesJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList**](CoordinatesJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md) |  | [optional]
**followups** | [**\OpenAPI\Client\Model\FollowupsJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList[]**](FollowupsJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md) | Get Followups | [optional]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList**](PersonCorporationsJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md) |  | [optional]
**supplier_ref** | **string** |  | [optional]
**currency** | [**\OpenAPI\Client\Model\FeeCurrenciesJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList**](FeeCurrenciesJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md) |  | [optional]
**conversion_rate** | **string** |  | [optional] [default to '1']
**shortcode** | **string** |  | [optional] [readonly] [default to 'B']
**auto_email** | **bool** |  | [optional]
**auto_interests** | **bool** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
**custom_properties** | **mixed** |  | [optional]
**custom_data** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**taxes_listing** | **string** |  | [optional] [readonly]
**total** | **float** |  | [optional] [readonly]
**total_to_pay** | **float** |  | [optional] [readonly]
**sub_total** | **float** |  | [optional] [readonly]
**converted_sub_total** | **float** |  | [optional] [readonly]
**converted_total** | **float** |  | [optional] [readonly]
**converted_taxes_amount** | **float** |  | [optional] [readonly]
**product_sub_total** | **float** |  | [optional] [readonly]
**converted_product_sub_total** | **float** |  | [optional] [readonly]
**total_items_quantity** | **float** |  | [optional] [readonly]
**nb_products** | **float** |  | [optional] [readonly]
**nb_products_counted_in_inventory** | **float** | // @deprecated | [optional] [readonly]
**current_taxes** | **string[]** |  | [optional]
**taxes_count** | **mixed** |  | [optional] [readonly]
**taxes_fetchable** | **bool** |  | [optional] [readonly]
**taxes_overrited** | **bool** |  | [optional] [readonly]
**person_of_interest** | [**\OpenAPI\Client\Model\PeopleJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList**](PeopleJsonhalBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md) |  | [optional] [readonly]
**lines_listing** | **string** | Get Lines Listing | [optional] [readonly]
**inventory_entries_listing** | **string** | Get Inventory Entries Listing | [optional] [readonly]
**payments_listing** | **string** | Get Inventory Entries Listing | [optional] [readonly]
**shipments_listing** | **string** | Get Inventory Entries Listing | [optional] [readonly]
**batches_listing** | **string** | Get Inventory Entries Listing | [optional] [readonly]
**followups_listing** | **string** | Get Inventory Entries Listing | [optional] [readonly]
**custom_properties_listing** | **string** |  | [optional] [readonly]
**base_transaction_valued_inventory** | **string[]** |  | [optional]
**accountable** | **bool** |  | [optional] [readonly]
**unique_id** | **string** |  | [optional] [readonly]
**tagging_listing** | **string** | Get Tagging Listing Why this crashes get annotations (proxy class?) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
