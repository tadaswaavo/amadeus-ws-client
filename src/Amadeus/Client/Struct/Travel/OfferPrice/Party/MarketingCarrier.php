<?php

namespace Amadeus\Client\Struct\Travel\OfferPrice\Party;

class MarketingCarrier
{
    public string $AirlineDesigCode = '';

    public function __construct(string $AirlineDesigCode)
    {
        $this->AirlineDesigCode = $AirlineDesigCode;
    }
}
