# # BillsBillShowIdTimestampableTagTaggingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp** | **\DateTime** |  | [optional]
**date** | **\DateTime** |  |
**payments** | [**\OpenAPI\Client\Model\BillPaymentsBillShowIdTimestampableTagTaggingList[]**](BillPaymentsBillShowIdTimestampableTagTaggingList.md) |  | [optional]
**supplier** | [**\OpenAPI\Client\Model\PersonSuppliersBillShowIdTimestampableTagTaggingList**](PersonSuppliersBillShowIdTimestampableTagTaggingList.md) | Get supplier. |
**project** | [**\OpenAPI\Client\Model\ProjectsBillShowIdTimestampableTagTaggingList**](ProjectsBillShowIdTimestampableTagTaggingList.md) |  | [optional]
**payer** | [**\OpenAPI\Client\Model\PeopleBillShowIdTimestampableTagTaggingList**](PeopleBillShowIdTimestampableTagTaggingList.md) | Get payer. |
**employee** | [**\OpenAPI\Client\Model\PersonEmployeesBillShowIdTimestampableTagTaggingList**](PersonEmployeesBillShowIdTimestampableTagTaggingList.md) | Get employe. |
**type** | [**\OpenAPI\Client\Model\BillTypesBillShowIdTimestampableTagTaggingList**](BillTypesBillShowIdTimestampableTagTaggingList.md) |  |
**distribution_type** | [**\OpenAPI\Client\Model\BillDistributiontypesBillShowIdTimestampableTagTaggingList**](BillDistributiontypesBillShowIdTimestampableTagTaggingList.md) |  |
**status** | [**\OpenAPI\Client\Model\BillStatusesBillShowIdTimestampableTagTaggingList**](BillStatusesBillShowIdTimestampableTagTaggingList.md) |  |
**shipments** | [**\OpenAPI\Client\Model\ShippingShipmentsBillShowIdTimestampableTagTaggingList[]**](ShippingShipmentsBillShowIdTimestampableTagTaggingList.md) |  | [optional]
**batches** | [**\OpenAPI\Client\Model\InventoryBatchesBillShowIdTimestampableTagTaggingList[]**](InventoryBatchesBillShowIdTimestampableTagTaggingList.md) |  | [optional]
**delivery_date** | **\DateTime** |  | [optional]
**notes** | **string** |  | [optional]
**conditions** | **string** |  | [optional]
**coordinate** | [**\OpenAPI\Client\Model\CoordinatesBillShowIdTimestampableTagTaggingList**](CoordinatesBillShowIdTimestampableTagTaggingList.md) |  | [optional]
**followups** | [**\OpenAPI\Client\Model\FollowupsBillShowIdTimestampableTagTaggingList[]**](FollowupsBillShowIdTimestampableTagTaggingList.md) | Get Followups | [optional]
**owning_corporation** | [**\OpenAPI\Client\Model\PersonCorporationsBillShowIdTimestampableTagTaggingList**](PersonCorporationsBillShowIdTimestampableTagTaggingList.md) |  | [optional]
**supplier_ref** | **string** |  | [optional]
**currency** | [**\OpenAPI\Client\Model\FeeCurrenciesBillShowIdTimestampableTagTaggingList**](FeeCurrenciesBillShowIdTimestampableTagTaggingList.md) |  | [optional]
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
**person_of_interest** | [**\OpenAPI\Client\Model\PeopleBillShowIdTimestampableTagTaggingList**](PeopleBillShowIdTimestampableTagTaggingList.md) |  | [optional] [readonly]
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
