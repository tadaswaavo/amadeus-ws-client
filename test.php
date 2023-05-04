<?php

use Amadeus\Client;
use Amadeus\Client\Params;
use Amadeus\Client\RequestOptions\Fare\MPDate;
use Amadeus\Client\RequestOptions\Fare\MPFeeId;
use Amadeus\Client\RequestOptions\Fare\MPItinerary;
use Amadeus\Client\RequestOptions\Fare\MPLocation;
use Amadeus\Client\RequestOptions\Fare\MPPassenger;
use Amadeus\Client\RequestOptions\FareMasterPricerExSearchOptions;
use Amadeus\Client\RequestOptions\FareMasterPricerTbSearch;
use Amadeus\Client\RequestOptions\MpBaseOptions;
use Amadeus\Client\RequestOptions\TravelOfferPriceOptions;

include __DIR__ . '/vendor/autoload.php';

error_reporting(E_ALL&~E_NOTICE&~E_DEPRECATED);
ini_set('default_socket_timeout', '30');
ini_set('soap.wsdl_cache_enabled', '0');

$client = new Client(new Params([
    'authParams' => [
        'officeId' => 'VNOLJ2812',
        'userId' => 'WSSBT6KR',
        'passwordData' => base64_encode('9U5]#wDW'),
    ],
    'sessionHandlerParams' => [
        'soapClientOptions' => [
            'connection_timeout' => 30,
            'cache_wsdl' => WSDL_CACHE_NONE,
        ],
        'soapHeaderVersion' => Client::HEADER_V4,
        'wsdl' => [
            __DIR__ . '/1ASIWSKRBT6_PDT_20230413_110208/1ASIWSKRBT6_PDT_20230413_110208.wsdl',
            __DIR__ . '/1ASIWSKRBT6_PDT_20230413_110208/1ASIWSKRBT6_PDT_Travel_Management_1.9_4.0.wsdl',
        ],
        'stateful' => false,
        'logger' => new Psr\Log\NullLogger(),
    ],
    'requestCreatorParams' => [
        'receivedFrom' => 'Waavo IBE',
    ],
    'returnXml' => false,
]));

$opt =
$searchResponse = $client->fareMasterPricerTravelBoardSearch(new FareMasterPricerTbSearch([
    'nrOfRequestedResults' => 100,
    'nrOfRequestedPassengers' => 1,
    'passengers' => [
        new MPPassenger([
            'type' => MPPassenger::TYPE_ADULT,
            'count' => 1,
        ]),
    ],
    'itinerary' => [
        new MPItinerary([
            'departureLocation' => new MPLocation([
                'city' => 'RIX',
            ]),
            'arrivalLocation' => new MPLocation([
                'city' => 'VNO',
            ]),
            'date' => new MPDate([
                'dateTime' => (new DateTime())->modify('+30 days')
            ]),
            'airlineOptions' => [
                MPItinerary::AIRLINEOPT_EXCLUDED => ['DY', 'D8', 'HY'],
            ],
        ]),
    ],
    'cabinClass' => FareMasterPricerExSearchOptions::CABIN_ECONOMY,
    'cabinOption' => FareMasterPricerExSearchOptions::CABINOPT_MANDATORY,
    'flightOptions' => [
        MpBaseOptions::FLIGHTOPT_ELECTRONIC_TICKET,
        MpBaseOptions::FLIGHTOPT_PUBLISHED,
        MpBaseOptions::FLIGHTOPT_UNIFARES,
    ],
    'feeIds' => [
        new MPFeeId([
            'type' => MPFeeId::FEETYPE_FARE_FAMILY_INFORMATION,
            'number' => 1
        ]),
    ],
]));

$xmlSearchResponse = $client->getLastResponse();
$xmlSearchRequest = $client->getLastRequest();

$rec = null;
foreach ($searchResponse->response->recommendation as $recommendation) {
    if ($recommendation->itemNumber->priceTicketing->priceType ?? null) {
        $rec = $recommendation;
        break;
    }
}

if (!$rec) {
    echo 'No NDC';
    exit(1);
}

$offerNumber = $rec->itemNumber->itemNumberId->number;
$flight = null;
foreach ($searchResponse->response->flightIndex->groupOfFlights as $f) {
    if ($f->propFlightGrDetail->flightProposal[0]->ref ?? null === $offerNumber) {
        $flight = $f;
        break;
    }
}


$shoppingResponseRefID = $searchResponse->response->offersGroup->response->applicationDetails->internalId ?? null;
$offerItemId = reset($searchResponse->response->offersGroup->offers)->offerItems->offerItemDetails->offerItemId ?? null;
$offerItemRefId = "W-TEST-{$flight->flightDetails->flightInformation->flightOrtrainNumber}";
$ownerCode = $flight->flightDetails->flightInformation->companyId->operatingCarrier;

$response = $client->travelOfferPrice(new TravelOfferPriceOptions([
    'offerItemID' => $offerItemId,
    'offerItemRefID' => $offerItemRefId,
    'ownerCode' => $ownerCode,
    'shoppingResponseRefID' => $shoppingResponseRefID,
]));

$xmlResponse = $client->getLastResponse();
$xmlRequest = $client->getLastRequest();

echo 'ok';
