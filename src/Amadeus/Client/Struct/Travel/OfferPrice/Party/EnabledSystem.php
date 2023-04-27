<?php

namespace Amadeus\Client\Struct\Travel\OfferPrice\Party;

class EnabledSystem
{
    public string $SystemID = '';

    public function __construct(string $SystemID)
    {
        $this->SystemID = $SystemID;
    }
}
