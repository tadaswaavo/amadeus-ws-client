<?php

use Amadeus\Client;
use Amadeus\Client\Params;
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

$response = $client->travelOfferPrice(new TravelOfferPriceOptions());


echo 'ok';
