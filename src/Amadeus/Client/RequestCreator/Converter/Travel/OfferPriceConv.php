<?php

namespace Amadeus\Client\RequestCreator\Converter\Travel;

use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\Struct\Travel\OfferPrice\OfferPrice;

class OfferPriceConv extends BaseConverter
{
    public function convert($requestOptions, $version)
    {
        return new OfferPrice($requestOptions);
    }
}
