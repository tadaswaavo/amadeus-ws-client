<?php

namespace Amadeus\Client\Struct\Travel\OfferPrice;

use Amadeus\Client\RequestOptions\TravelOfferPriceOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Travel\OfferPrice\Party\Party;
use Amadeus\Client\Struct\Travel\OfferPrice\Party\Sender;
use Amadeus\Client\Struct\Travel\OfferPrice\Party\TravelAgency;
use Amadeus\Client\Struct\Travel\OfferPrice\Request\Pax;
use Amadeus\Client\Struct\Travel\OfferPrice\Request\Request;

class OfferPrice extends BaseWsMessage
{
    public Party $Party;

    public Request $Request;

    public function __construct(TravelOfferPriceOptions $options)
    {
        $this->Party = new Party(
            new Sender(
                new TravelAgency('unused')
            )
        );
        $passengers = [
            new Pax('T1', PAX::PTC_ADT),
            new Pax('T2', PAX::PTC_ADT),
            new Pax('T3', PAX::PTC_CHD),
            new Pax('T1.1', PAX::PTC_INF),
        ];
        $this->Request = new Request(
            $passengers,
            $options->offerItemID,
            $options->ownerCode,
            $options->shoppingResponseRefID
        );
    }
}
