<?php

namespace Amadeus\Client\Struct\Travel\OfferPrice\Party;

class OperatingCarrier
{
    public string $AirlineDesigCode = '';

    public function __construct(string $AirlineDesigCode)
    {
        $this->AirlineDesigCode = $AirlineDesigCode;
    }
}
