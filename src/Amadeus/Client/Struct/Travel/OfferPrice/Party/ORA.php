<?php

namespace Amadeus\Client\Struct\Travel\OfferPrice\Party;

class ORA
{
    public string $AirlineDesigCode = '';

    public function __construct(string $AirlineDesigCode)
    {
        $this->AirlineDesigCode = $AirlineDesigCode;
    }
}
