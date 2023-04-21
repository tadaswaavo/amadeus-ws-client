<?php

namespace Amadeus\Client\Struct\Travel;

use Amadeus\Client\RequestOptions\TravelOfferPriceOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Travel\OfferPrice\Party;
use Amadeus\Client\Struct\Travel\OfferPrice\Request;

class OfferPrice extends BaseWsMessage
{
    public Party $Party;

    public Request $Request;

    public function __construct(TravelOfferPriceOptions $options)
    {
        $this->Party = new Party();
        $this->Request = new Request();
    }
}
