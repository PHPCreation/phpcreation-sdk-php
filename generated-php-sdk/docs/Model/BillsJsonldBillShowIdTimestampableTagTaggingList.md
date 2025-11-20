# # BillsJsonldBillShowIdTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**at_context** | [**\OpenAPI\Client\Model\AsyncRequestInputAsyncRequestOutputJsonldContext**](AsyncRequestInputAsyncRequestOutputJsonldContext.md) |  | [optional]
**at_id** | **string** |  | [optional] [readonly]
**at_type** | **string** |  | [optional] [readonly]
**timestamp** | **\DateTime** |  | [optional]
**date** | **\DateTime** |  |
**payments** | [**\OpenAPI\Client\Model\BillPaymentsJsonldBillShowIdTimestampableTagTaggingList[]**](BillPaymentsJsonldBillShowIdTimestampableTagTaggingList.md) |  | [optional]
**supplier** | [**\OpenAPI\Client\Model\PersonSuppliersJsonldBillShowIdTimestampableTagTaggingList**](PersonSuppliersJsonldBillShowIdTimestampableTagTaggingList.md) | Get supplier. |
**project** | [**\OpenAPI\Client\Model\ProjectsJsonldBillShowIdTimestampableTagTaggingList**](ProjectsJsonldBillShowIdTimestampableTagTaggingList.md) |  | [optional]
**payer** | [**\OpenAPI\Client\Model\PeopleJsonldBillShowIdTimestampableTagTaggingList**](PeopleJsonldBillShowIdTimestampableTagTaggingList.md) | Get payer. |
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesJsonldBillShowIdTimestampableTagTaggingList**](PersonEmployeesJsonldBillShowIdTimestampableTagTaggingList.md) | Get employe. |
**type** | [**\OpenAPI\Client\Model\BillTypesJsonldBillShowIdTimestampableTagTaggingList**](BillTypesJsonldBillShowIdTimestampableTagTaggingList.md) |  |
**distribution_type** | [**\OpenAPI\Client\Model\BillDistributiontypesJsonldBillShowIdTimestampableTagTaggingList**](BillDistributiontypesJsonldBillShowIdTimestampableTagTaggingList.md) |  |
**status** | [**\OpenAPI\Client\Model\BillStatusesJsonldBillShowIdTimestampableTagTaggingList**](BillStatusesJsonldBillShowIdTimestampableTagTaggingList.md) |  |
**shipments** | [**\OpenAPI\Client\Model\ShippingShipmentsJsonldBillShowIdTimestampableTagTaggingList[]**](ShippingShipmentsJsonldBillShowIdTimestampableTagTaggingList.md) |  | [optional]
**batches** | [**\OpenAPI\Client\Model\InventoryBatchesJsonldBillShowIdTimestampableTagTaggingList[]**](InventoryBatchesJsonldBillShowIdTimestampableTagTaggingList.md) |  | [optional]
**delivery_date** | **\DateTime** |  | [optional]
**notes** | **string** |  | [optional]
**conditions** | **string** |  | [optional]
**coordinate** | [**\OpenAPI\Client\Model\CoordinatesJsonldBillShowIdTimestampableTagTaggingList**](CoordinatesJsonldBillShowIdTimestampableTagTaggingList.md) |  | [optional]
**followups** | [**\OpenAPI\Client\Model\FollowupsJsonldBillShowIdTimestampableTagTaggingList[]**](FollowupsJsonldBillShowIdTimestampableTagTaggingList.md) | Get Followups | [optional]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsJsonldBillShowIdTimestampableTagTaggingList**](PersonCorporationsJsonldBillShowIdTimestampableTagTaggingList.md) |  | [optional]
**supplier_ref** | **string** |  | [optional]
**currency** | [**\OpenAPI\Client\Model\FeeCurrenciesJsonldBillShowIdTimestampableTagTaggingList**](FeeCurrenciesJsonldBillShowIdTimestampableTagTaggingList.md) |  | [optional]
**conversion_rate** | **string** |  | [optional] [default to '1']
**shortcode** | **string** |  | [optional] [readonly] [default to 'B']
**auto_email** | **bool** |  | [optional]
**auto_interests** | **bool** |  | [optional]
**id** | **int** | DB Identifier | [optional] [readonly]
**slug** | **string** | DB Identifier |
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
**person_of_interest** | [**\OpenAPI\Client\Model\PeopleJsonldBillShowIdTimestampableTagTaggingList**](PeopleJsonldBillShowIdTimestampableTagTaggingList.md) |  | [optional] [readonly]
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
