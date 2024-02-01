# Retailer

The bol.com API for retailers.

# Authentication
Our API requires authentication via OAuth2. The detailed steps to authenticate are explained [here](https://api.bol.com/retailer/public/Retailer-API/authentication.html) 

# Demo scenarios
Our API specification includes examples of the responses you can expect. For more information as well as more examples, we refer you to the following resources:  
- [Demo environment](https://api.bol.com/retailer/public/Retailer-API/demo/demo.html)
- [Demo scenarios](https://api.bol.com/retailer/public/Retailer-API/demo/v10-index.html)


For more information, please visit [https://developers.bol.com](https://developers.bol.com).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Retailer/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\CommissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ean = 0000007740404; // string | The EAN number associated with this product.
$unitPrice = 59; // float | The price of the product with a period as a decimal separator. The price should always have two decimals precision.
$condition = 'condition_example'; // string | The condition of the offer.

try {
    $result = $apiInstance->getCommission($ean, $unitPrice, $condition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommissionsApi->getCommission: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.bol.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CommissionsApi* | [**getCommission**](docs/Api/CommissionsApi.md#getcommission) | **GET** /retailer/commission/{ean} | Get all commissions and reductions by EAN per single EAN
*CommissionsApi* | [**getCommissionRates**](docs/Api/CommissionsApi.md#getcommissionrates) | **POST** /retailer/commissions | Get a list of commissions by EAN (BETA)
*CommissionsApi* | [**getCommissions**](docs/Api/CommissionsApi.md#getcommissions) | **POST** /retailer/commission | Get all commissions and reductions by EAN in bulk
*InsightsApi* | [**getOfferInsights**](docs/Api/InsightsApi.md#getofferinsights) | **GET** /retailer/insights/offer | Get offer insights
*InsightsApi* | [**getPerformanceIndicators**](docs/Api/InsightsApi.md#getperformanceindicators) | **GET** /retailer/insights/performance/indicator | Get performance indicators
*InsightsApi* | [**getProductRanks**](docs/Api/InsightsApi.md#getproductranks) | **GET** /retailer/insights/product-ranks | Get product ranks
*InsightsApi* | [**getSalesForecast**](docs/Api/InsightsApi.md#getsalesforecast) | **GET** /retailer/insights/sales-forecast | Get sales forecast
*InsightsApi* | [**getSearchTerms**](docs/Api/InsightsApi.md#getsearchterms) | **GET** /retailer/insights/search-terms | Get search terms
*InventoryApi* | [**getInventory**](docs/Api/InventoryApi.md#getinventory) | **GET** /retailer/inventory | Get LVB/FBB inventory
*InvoicesApi* | [**getInvoice**](docs/Api/InvoicesApi.md#getinvoice) | **GET** /retailer/invoices/{invoice-id} | Get an invoice by invoice id
*InvoicesApi* | [**getInvoiceSpecification**](docs/Api/InvoicesApi.md#getinvoicespecification) | **GET** /retailer/invoices/{invoice-id}/specification | Get an invoice specification by invoice id
*InvoicesApi* | [**getInvoices**](docs/Api/InvoicesApi.md#getinvoices) | **GET** /retailer/invoices | Get all invoices
*OffersApi* | [**deleteOffer**](docs/Api/OffersApi.md#deleteoffer) | **DELETE** /retailer/offers/{offer-id} | Delete offer by id
*OffersApi* | [**getOffer**](docs/Api/OffersApi.md#getoffer) | **GET** /retailer/offers/{offer-id} | Retrieve an offer by its offer id
*OffersApi* | [**getOfferExport**](docs/Api/OffersApi.md#getofferexport) | **GET** /retailer/offers/export/{report-id} | Retrieve an offer export file by report id
*OffersApi* | [**getUnpublishedOfferReport**](docs/Api/OffersApi.md#getunpublishedofferreport) | **GET** /retailer/offers/unpublished/{report-id} | Retrieve an unpublished offer report by report id
*OffersApi* | [**postOffer**](docs/Api/OffersApi.md#postoffer) | **POST** /retailer/offers | Create a new offer
*OffersApi* | [**postOfferExport**](docs/Api/OffersApi.md#postofferexport) | **POST** /retailer/offers/export | Request an offer export file
*OffersApi* | [**postUnpublishedOfferReport**](docs/Api/OffersApi.md#postunpublishedofferreport) | **POST** /retailer/offers/unpublished | Request an unpublished offer report
*OffersApi* | [**putOffer**](docs/Api/OffersApi.md#putoffer) | **PUT** /retailer/offers/{offer-id} | Update an offer
*OffersApi* | [**updateOfferPrice**](docs/Api/OffersApi.md#updateofferprice) | **PUT** /retailer/offers/{offer-id}/price | Update price(s) for offer by id
*OffersApi* | [**updateOfferStock**](docs/Api/OffersApi.md#updateofferstock) | **PUT** /retailer/offers/{offer-id}/stock | Update stock for offer by id
*OrdersApi* | [**cancelOrderItem**](docs/Api/OrdersApi.md#cancelorderitem) | **PUT** /retailer/orders/cancellation | Cancel an order item by an order item id
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /retailer/orders/{order-id} | Get an order by order id
*OrdersApi* | [**getOrders**](docs/Api/OrdersApi.md#getorders) | **GET** /retailer/orders | Get a list of orders
*ProductContentApi* | [**getCatalogProduct**](docs/Api/ProductContentApi.md#getcatalogproduct) | **GET** /retailer/content/catalog-products/{ean} | Get catalog product details by EAN
*ProductContentApi* | [**getChunkRecommendations**](docs/Api/ProductContentApi.md#getchunkrecommendations) | **POST** /retailer/content/chunk-recommendations | Get chunk recommendations
*ProductContentApi* | [**getUploadReport**](docs/Api/ProductContentApi.md#getuploadreport) | **GET** /retailer/content/upload-report/{upload-id} | Get an upload report by upload id
*ProductContentApi* | [**postProductContent**](docs/Api/ProductContentApi.md#postproductcontent) | **POST** /retailer/content/products | Create content for a product
*ProductsApi* | [**getCompetingOffers**](docs/Api/ProductsApi.md#getcompetingoffers) | **GET** /retailer/products/{ean}/offers | Get a list of competing offers by EAN
*ProductsApi* | [**getPriceStarBoundaries**](docs/Api/ProductsApi.md#getpricestarboundaries) | **GET** /retailer/products/{ean}/price-star-boundaries | Get price star boundaries by EAN
*ProductsApi* | [**getProductAssets**](docs/Api/ProductsApi.md#getproductassets) | **GET** /retailer/products/{ean}/assets | Get product assets
*ProductsApi* | [**getProductIds**](docs/Api/ProductsApi.md#getproductids) | **GET** /retailer/products/{ean}/product-ids | Get product ids by EAN
*ProductsApi* | [**getProductList**](docs/Api/ProductsApi.md#getproductlist) | **POST** /retailer/products/list | Get product list
*ProductsApi* | [**getProductListFilters**](docs/Api/ProductsApi.md#getproductlistfilters) | **GET** /retailer/products/list-filters | Get product list filters
*ProductsApi* | [**getProductPlacement**](docs/Api/ProductsApi.md#getproductplacement) | **GET** /retailer/products/{ean}/placement | Get product placement
*ProductsApi* | [**getProductRatings**](docs/Api/ProductsApi.md#getproductratings) | **GET** /retailer/products/{ean}/ratings | Get product ratings
*PromotionsApi* | [**getProducts**](docs/Api/PromotionsApi.md#getproducts) | **GET** /retailer/promotions/{promotion-id}/products | Get a list of products
*PromotionsApi* | [**getPromotion**](docs/Api/PromotionsApi.md#getpromotion) | **GET** /retailer/promotions/{promotion-id} | Get a promotion by promotion id
*PromotionsApi* | [**getPromotions**](docs/Api/PromotionsApi.md#getpromotions) | **GET** /retailer/promotions | Get a list of promotions
*ReplenishmentsApi* | [**getDeliveryDates**](docs/Api/ReplenishmentsApi.md#getdeliverydates) | **GET** /retailer/replenishments/delivery-dates | Get delivery dates
*ReplenishmentsApi* | [**getLoadCarrierLabels**](docs/Api/ReplenishmentsApi.md#getloadcarrierlabels) | **GET** /retailer/replenishments/{replenishment-id}/load-carrier-labels | Get load carrier labels
*ReplenishmentsApi* | [**getPickList**](docs/Api/ReplenishmentsApi.md#getpicklist) | **GET** /retailer/replenishments/{replenishment-id}/pick-list | Get pick list
*ReplenishmentsApi* | [**getProductDestinations**](docs/Api/ReplenishmentsApi.md#getproductdestinations) | **GET** /retailer/replenishments/product-destinations/{product-destinations-id} | Get product destinations by product destinations id
*ReplenishmentsApi* | [**getReplenishment**](docs/Api/ReplenishmentsApi.md#getreplenishment) | **GET** /retailer/replenishments/{replenishment-id} | Get a replenishment by replenishment id
*ReplenishmentsApi* | [**getReplenishments**](docs/Api/ReplenishmentsApi.md#getreplenishments) | **GET** /retailer/replenishments | Get replenishments
*ReplenishmentsApi* | [**postPickupTimeSlots**](docs/Api/ReplenishmentsApi.md#postpickuptimeslots) | **POST** /retailer/replenishments/pickup-time-slots | Post pickup time slots
*ReplenishmentsApi* | [**postProductLabels**](docs/Api/ReplenishmentsApi.md#postproductlabels) | **POST** /retailer/replenishments/product-labels | Post product labels
*ReplenishmentsApi* | [**postReplenishment**](docs/Api/ReplenishmentsApi.md#postreplenishment) | **POST** /retailer/replenishments | Create a replenishment
*ReplenishmentsApi* | [**postRequestProductDestinations**](docs/Api/ReplenishmentsApi.md#postrequestproductdestinations) | **POST** /retailer/replenishments/product-destinations | Request product destinations
*ReplenishmentsApi* | [**putReplenishment**](docs/Api/ReplenishmentsApi.md#putreplenishment) | **PUT** /retailer/replenishments/{replenishment-id} | Update a replenishment by replenishment id
*RetailersApi* | [**getRetailerInformation**](docs/Api/RetailersApi.md#getretailerinformation) | **GET** /retailer/retailers/{retailer-id} | Get retailer information by retailer id
*ReturnsApi* | [**createReturn**](docs/Api/ReturnsApi.md#createreturn) | **POST** /retailer/returns | Create a return
*ReturnsApi* | [**getReturn**](docs/Api/ReturnsApi.md#getreturn) | **GET** /retailer/returns/{return-id} | Get a return by return id
*ReturnsApi* | [**getReturns**](docs/Api/ReturnsApi.md#getreturns) | **GET** /retailer/returns | Get returns
*ReturnsApi* | [**handleReturn**](docs/Api/ReturnsApi.md#handlereturn) | **PUT** /retailer/returns/{rma-id} | Handle a return by rma id
*ShipmentsApi* | [**createShipment**](docs/Api/ShipmentsApi.md#createshipment) | **POST** /retailer/shipments | Create a shipment
*ShipmentsApi* | [**getInvoiceRequests**](docs/Api/ShipmentsApi.md#getinvoicerequests) | **GET** /retailer/shipments/invoices/requests | Get a list of invoice requests
*ShipmentsApi* | [**getShipment**](docs/Api/ShipmentsApi.md#getshipment) | **GET** /retailer/shipments/{shipment-id} | Get a shipment by shipment id
*ShipmentsApi* | [**getShipments**](docs/Api/ShipmentsApi.md#getshipments) | **GET** /retailer/shipments | Get shipment list
*ShipmentsApi* | [**uploadInvoice**](docs/Api/ShipmentsApi.md#uploadinvoice) | **POST** /retailer/shipments/invoices/{shipment-id} | Upload an invoice for shipment id
*ShippingLabelsApi* | [**getDeliveryOptions**](docs/Api/ShippingLabelsApi.md#getdeliveryoptions) | **POST** /retailer/shipping-labels/delivery-options | Get delivery options
*ShippingLabelsApi* | [**getShippingLabel**](docs/Api/ShippingLabelsApi.md#getshippinglabel) | **GET** /retailer/shipping-labels/{shipping-label-id} | Get a shipping label
*ShippingLabelsApi* | [**postShippingLabel**](docs/Api/ShippingLabelsApi.md#postshippinglabel) | **POST** /retailer/shipping-labels | Create a shipping label
*SubscriptionsApi* | [**deletePushNotificationSubscription**](docs/Api/SubscriptionsApi.md#deletepushnotificationsubscription) | **DELETE** /retailer/subscriptions/{subscription-id} | Remove Event Notification Subscription
*SubscriptionsApi* | [**getPushNotificationSubscription**](docs/Api/SubscriptionsApi.md#getpushnotificationsubscription) | **GET** /retailer/subscriptions/{subscription-id} | Retrieve Specific Event Notification Subscription (BETA)
*SubscriptionsApi* | [**getPushNotificationSubscriptions**](docs/Api/SubscriptionsApi.md#getpushnotificationsubscriptions) | **GET** /retailer/subscriptions | Retrieve Event Notification Subscriptions (BETA)
*SubscriptionsApi* | [**getSubscriptionKeys**](docs/Api/SubscriptionsApi.md#getsubscriptionkeys) | **GET** /retailer/subscriptions/signature-keys | Retrieve public keys for push notification signature validation.
*SubscriptionsApi* | [**postPushNotificationSubscription**](docs/Api/SubscriptionsApi.md#postpushnotificationsubscription) | **POST** /retailer/subscriptions | Create Event Notification Subscription (BETA)
*SubscriptionsApi* | [**postTestPushNotification**](docs/Api/SubscriptionsApi.md#posttestpushnotification) | **POST** /retailer/subscriptions/test/{subscription-id} | Send test push notification for subscriptions
*SubscriptionsApi* | [**putPushNotificationSubscription**](docs/Api/SubscriptionsApi.md#putpushnotificationsubscription) | **PUT** /retailer/subscriptions/{subscription-id} | Update Event Notification Subscription (BETA)
*TransportsApi* | [**addTransportInformationByTransportId**](docs/Api/TransportsApi.md#addtransportinformationbytransportid) | **PUT** /retailer/transports/{transport-id} | Add transport information by transport id

## Models

- [AdditionalService](docs/Model/AdditionalService.md)
- [Address](docs/Model/Address.md)
- [Asset](docs/Model/Asset.md)
- [Attribute](docs/Model/Attribute.md)
- [AttributeValue](docs/Model/AttributeValue.md)
- [Attributes](docs/Model/Attributes.md)
- [AudioTracks](docs/Model/AudioTracks.md)
- [BillingDetails](docs/Model/BillingDetails.md)
- [BulkCommissionQuery](docs/Model/BulkCommissionQuery.md)
- [BulkCommissionRatesMultiStatusResponse](docs/Model/BulkCommissionRatesMultiStatusResponse.md)
- [BulkCommissionRequest](docs/Model/BulkCommissionRequest.md)
- [BulkCommissionResponse](docs/Model/BulkCommissionResponse.md)
- [BundlePrice](docs/Model/BundlePrice.md)
- [Campaign](docs/Model/Campaign.md)
- [CancellationRequest](docs/Model/CancellationRequest.md)
- [CatalogProduct](docs/Model/CatalogProduct.md)
- [Categories](docs/Model/Categories.md)
- [Category](docs/Model/Category.md)
- [CategoryValues](docs/Model/CategoryValues.md)
- [ChangeTransportRequest](docs/Model/ChangeTransportRequest.md)
- [ChunkRecommendationsAttribute](docs/Model/ChunkRecommendationsAttribute.md)
- [ChunkRecommendationsAttributes](docs/Model/ChunkRecommendationsAttributes.md)
- [ChunkRecommendationsPrediction](docs/Model/ChunkRecommendationsPrediction.md)
- [ChunkRecommendationsPredictions](docs/Model/ChunkRecommendationsPredictions.md)
- [ChunkRecommendationsRequest](docs/Model/ChunkRecommendationsRequest.md)
- [ChunkRecommendationsResponse](docs/Model/ChunkRecommendationsResponse.md)
- [ChunkRecommendationsValue](docs/Model/ChunkRecommendationsValue.md)
- [Commission](docs/Model/Commission.md)
- [CommissionDateRange](docs/Model/CommissionDateRange.md)
- [CommissionDateRate](docs/Model/CommissionDateRate.md)
- [CommissionFailedQuery](docs/Model/CommissionFailedQuery.md)
- [CommissionPriceRange](docs/Model/CommissionPriceRange.md)
- [CommissionProducts](docs/Model/CommissionProducts.md)
- [CommissionRange](docs/Model/CommissionRange.md)
- [CommissionRate](docs/Model/CommissionRate.md)
- [CommissionSuccessfulQuery](docs/Model/CommissionSuccessfulQuery.md)
- [CompetingOffersResponse](docs/Model/CompetingOffersResponse.md)
- [Condition](docs/Model/Condition.md)
- [Countries](docs/Model/Countries.md)
- [CreateAddress](docs/Model/CreateAddress.md)
- [CreateDeliveryInfo](docs/Model/CreateDeliveryInfo.md)
- [CreateOfferExportRequest](docs/Model/CreateOfferExportRequest.md)
- [CreateOfferRequest](docs/Model/CreateOfferRequest.md)
- [CreatePickupAppointment](docs/Model/CreatePickupAppointment.md)
- [CreatePickupTimeSlot](docs/Model/CreatePickupTimeSlot.md)
- [CreateProductContentSingleRequest](docs/Model/CreateProductContentSingleRequest.md)
- [CreateReplenishmentLine](docs/Model/CreateReplenishmentLine.md)
- [CreateReplenishmentRequest](docs/Model/CreateReplenishmentRequest.md)
- [CreateReturnRequest](docs/Model/CreateReturnRequest.md)
- [CreateUnpublishedOfferReportRequest](docs/Model/CreateUnpublishedOfferReportRequest.md)
- [CustomerDetails](docs/Model/CustomerDetails.md)
- [DeliveryDatesResponse](docs/Model/DeliveryDatesResponse.md)
- [DeliveryInformation](docs/Model/DeliveryInformation.md)
- [DeliveryOption](docs/Model/DeliveryOption.md)
- [DeliveryOptionsRequest](docs/Model/DeliveryOptionsRequest.md)
- [DeliveryOptionsRequestOrderItem](docs/Model/DeliveryOptionsRequestOrderItem.md)
- [DeliveryOptionsResponse](docs/Model/DeliveryOptionsResponse.md)
- [DestinationWarehouse](docs/Model/DestinationWarehouse.md)
- [Details](docs/Model/Details.md)
- [Ean](docs/Model/Ean.md)
- [Enrichment](docs/Model/Enrichment.md)
- [FilterRanges](docs/Model/FilterRanges.md)
- [FilterValues](docs/Model/FilterValues.md)
- [Filters](docs/Model/Filters.md)
- [Fulfilment](docs/Model/Fulfilment.md)
- [Gpc](docs/Model/Gpc.md)
- [HandoverDetails](docs/Model/HandoverDetails.md)
- [InvalidReplenishmentLine](docs/Model/InvalidReplenishmentLine.md)
- [Inventory](docs/Model/Inventory.md)
- [InventoryResponse](docs/Model/InventoryResponse.md)
- [InvoiceRequests](docs/Model/InvoiceRequests.md)
- [InvoiceRequestsBillingDetails](docs/Model/InvoiceRequestsBillingDetails.md)
- [InvoiceRequestsProducts](docs/Model/InvoiceRequestsProducts.md)
- [InvoiceRequestsResponse](docs/Model/InvoiceRequestsResponse.md)
- [KeySet](docs/Model/KeySet.md)
- [KeySetResponse](docs/Model/KeySetResponse.md)
- [LabelPrice](docs/Model/LabelPrice.md)
- [Link](docs/Model/Link.md)
- [LoadCarrier](docs/Model/LoadCarrier.md)
- [ModelReturn](docs/Model/ModelReturn.md)
- [Norm](docs/Model/Norm.md)
- [NotPublishableReason](docs/Model/NotPublishableReason.md)
- [Offer](docs/Model/Offer.md)
- [OfferInsight](docs/Model/OfferInsight.md)
- [OfferInsights](docs/Model/OfferInsights.md)
- [OfferInsightsCountry](docs/Model/OfferInsightsCountry.md)
- [OfferInsightsPeriod](docs/Model/OfferInsightsPeriod.md)
- [OffersCountryCode](docs/Model/OffersCountryCode.md)
- [Order](docs/Model/Order.md)
- [OrderFulfilment](docs/Model/OrderFulfilment.md)
- [OrderItem](docs/Model/OrderItem.md)
- [OrderItemCancellation](docs/Model/OrderItemCancellation.md)
- [OrderOffer](docs/Model/OrderOffer.md)
- [OrderOrderItem](docs/Model/OrderOrderItem.md)
- [OrderProduct](docs/Model/OrderProduct.md)
- [PackageRestrictions](docs/Model/PackageRestrictions.md)
- [Party](docs/Model/Party.md)
- [PerformanceIndicator](docs/Model/PerformanceIndicator.md)
- [PerformanceIndicatorPeriod](docs/Model/PerformanceIndicatorPeriod.md)
- [PerformanceIndicators](docs/Model/PerformanceIndicators.md)
- [Periods](docs/Model/Periods.md)
- [PickupAppointment](docs/Model/PickupAppointment.md)
- [PickupTimeSlot](docs/Model/PickupTimeSlot.md)
- [PickupTimeSlotsAddress](docs/Model/PickupTimeSlotsAddress.md)
- [PickupTimeSlotsRequest](docs/Model/PickupTimeSlotsRequest.md)
- [PickupTimeSlotsResponse](docs/Model/PickupTimeSlotsResponse.md)
- [PriceStarBoundaries](docs/Model/PriceStarBoundaries.md)
- [PriceStarBoundaryLevels](docs/Model/PriceStarBoundaryLevels.md)
- [Pricing](docs/Model/Pricing.md)
- [Problem](docs/Model/Problem.md)
- [ProcessStatus](docs/Model/ProcessStatus.md)
- [Product](docs/Model/Product.md)
- [ProductAssets](docs/Model/ProductAssets.md)
- [ProductAssetsResponse](docs/Model/ProductAssetsResponse.md)
- [ProductAssetsVariants](docs/Model/ProductAssetsVariants.md)
- [ProductDestination](docs/Model/ProductDestination.md)
- [ProductDestinationAddress](docs/Model/ProductDestinationAddress.md)
- [ProductDestinationWarehouse](docs/Model/ProductDestinationWarehouse.md)
- [ProductDestinationsResponse](docs/Model/ProductDestinationsResponse.md)
- [ProductIdsEan](docs/Model/ProductIdsEan.md)
- [ProductIdsResponse](docs/Model/ProductIdsResponse.md)
- [ProductLabelsProduct](docs/Model/ProductLabelsProduct.md)
- [ProductLabelsRequest](docs/Model/ProductLabelsRequest.md)
- [ProductListFilterRange](docs/Model/ProductListFilterRange.md)
- [ProductListFilterValue](docs/Model/ProductListFilterValue.md)
- [ProductListFiltersRequest](docs/Model/ProductListFiltersRequest.md)
- [ProductListFiltersResponse](docs/Model/ProductListFiltersResponse.md)
- [ProductListProduct](docs/Model/ProductListProduct.md)
- [ProductListProductEan](docs/Model/ProductListProductEan.md)
- [ProductListRequest](docs/Model/ProductListRequest.md)
- [ProductListResponse](docs/Model/ProductListResponse.md)
- [ProductPlacementResponse](docs/Model/ProductPlacementResponse.md)
- [ProductRanks](docs/Model/ProductRanks.md)
- [ProductRatingsRating](docs/Model/ProductRatingsRating.md)
- [ProductRatingsResponse](docs/Model/ProductRatingsResponse.md)
- [Products](docs/Model/Products.md)
- [Promotion](docs/Model/Promotion.md)
- [PromotionCountryCode](docs/Model/PromotionCountryCode.md)
- [Promotions](docs/Model/Promotions.md)
- [Rank](docs/Model/Rank.md)
- [ReducedInvalidReplenishmentLine](docs/Model/ReducedInvalidReplenishmentLine.md)
- [ReducedOrder](docs/Model/ReducedOrder.md)
- [ReducedOrderItem](docs/Model/ReducedOrderItem.md)
- [ReducedOrders](docs/Model/ReducedOrders.md)
- [ReducedPromotion](docs/Model/ReducedPromotion.md)
- [ReducedReplenishment](docs/Model/ReducedReplenishment.md)
- [ReducedReplenishmentLines](docs/Model/ReducedReplenishmentLines.md)
- [ReducedReturn](docs/Model/ReducedReturn.md)
- [ReducedReturnItem](docs/Model/ReducedReturnItem.md)
- [ReducedShipment](docs/Model/ReducedShipment.md)
- [ReducedShipmentItem](docs/Model/ReducedShipmentItem.md)
- [ReducedShipmentOrder](docs/Model/ReducedShipmentOrder.md)
- [ReducedTransport](docs/Model/ReducedTransport.md)
- [Reduction](docs/Model/Reduction.md)
- [RelatedSearchTerm](docs/Model/RelatedSearchTerm.md)
- [RelevanceScore](docs/Model/RelevanceScore.md)
- [ReplenishmentLine](docs/Model/ReplenishmentLine.md)
- [ReplenishmentPickupTimeSlot](docs/Model/ReplenishmentPickupTimeSlot.md)
- [ReplenishmentResponse](docs/Model/ReplenishmentResponse.md)
- [ReplenishmentsResponse](docs/Model/ReplenishmentsResponse.md)
- [RequestProductDestinationsRequest](docs/Model/RequestProductDestinationsRequest.md)
- [RetailerInformationResponse](docs/Model/RetailerInformationResponse.md)
- [RetailerOffer](docs/Model/RetailerOffer.md)
- [RetailerRating](docs/Model/RetailerRating.md)
- [RetailerReview](docs/Model/RetailerReview.md)
- [ReturnItem](docs/Model/ReturnItem.md)
- [ReturnProcessingResult](docs/Model/ReturnProcessingResult.md)
- [ReturnReason](docs/Model/ReturnReason.md)
- [ReturnRequest](docs/Model/ReturnRequest.md)
- [ReturnsResponse](docs/Model/ReturnsResponse.md)
- [SalesForecastPeriod](docs/Model/SalesForecastPeriod.md)
- [SalesForecastResponse](docs/Model/SalesForecastResponse.md)
- [Score](docs/Model/Score.md)
- [SearchTerm](docs/Model/SearchTerm.md)
- [SearchTerms](docs/Model/SearchTerms.md)
- [SearchTermsCountry](docs/Model/SearchTermsCountry.md)
- [SearchTermsPeriod](docs/Model/SearchTermsPeriod.md)
- [Serie](docs/Model/Serie.md)
- [Shipment](docs/Model/Shipment.md)
- [ShipmentDetails](docs/Model/ShipmentDetails.md)
- [ShipmentFulfilment](docs/Model/ShipmentFulfilment.md)
- [ShipmentItem](docs/Model/ShipmentItem.md)
- [ShipmentOrder](docs/Model/ShipmentOrder.md)
- [ShipmentRequest](docs/Model/ShipmentRequest.md)
- [ShipmentTransport](docs/Model/ShipmentTransport.md)
- [ShipmentsResponse](docs/Model/ShipmentsResponse.md)
- [ShippingLabelRequest](docs/Model/ShippingLabelRequest.md)
- [StateTransition](docs/Model/StateTransition.md)
- [StatusTransitions](docs/Model/StatusTransitions.md)
- [Stock](docs/Model/Stock.md)
- [StockCreate](docs/Model/StockCreate.md)
- [Store](docs/Model/Store.md)
- [SubCategory](docs/Model/SubCategory.md)
- [SubscriptionRequest](docs/Model/SubscriptionRequest.md)
- [SubscriptionResponse](docs/Model/SubscriptionResponse.md)
- [SubscriptionsResponse](docs/Model/SubscriptionsResponse.md)
- [Total](docs/Model/Total.md)
- [TotalPeriod](docs/Model/TotalPeriod.md)
- [TransportEvent](docs/Model/TransportEvent.md)
- [TransportInstruction](docs/Model/TransportInstruction.md)
- [UpdateDeliveryInfo](docs/Model/UpdateDeliveryInfo.md)
- [UpdateLoadCarrier](docs/Model/UpdateLoadCarrier.md)
- [UpdateOfferPriceRequest](docs/Model/UpdateOfferPriceRequest.md)
- [UpdateOfferRequest](docs/Model/UpdateOfferRequest.md)
- [UpdateOfferStockRequest](docs/Model/UpdateOfferStockRequest.md)
- [UpdateReplenishmentRequest](docs/Model/UpdateReplenishmentRequest.md)
- [UploadInvoiceRequest](docs/Model/UploadInvoiceRequest.md)
- [UploadReportAsset](docs/Model/UploadReportAsset.md)
- [UploadReportAttribute](docs/Model/UploadReportAttribute.md)
- [UploadReportResponse](docs/Model/UploadReportResponse.md)
- [UploadReportValue](docs/Model/UploadReportValue.md)
- [Values](docs/Model/Values.md)
- [Violation](docs/Model/Violation.md)

## Authorization

Authentication schemes defined for the API:
### OAuth2

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `10.x`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`