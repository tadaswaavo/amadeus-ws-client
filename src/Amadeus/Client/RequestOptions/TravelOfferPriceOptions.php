<?php

namespace Amadeus\Client\RequestOptions;

use Amadeus\Client\RequestOptions\Travel\DataLists;
use Amadeus\Client\RequestOptions\Travel\PricedOffer;

class TravelOfferPriceOptions extends Base
{
    /**
     * @var DataLists
     */
    public $dataLists;

    /**
     * @var PricedOffer
     */
    public $pricedOffer;
}
