<?php

namespace Amadeus\Client\Struct\Travel\OfferPrice\Party;

class Corporation
{
    public string $CorporateID = '';

    public function __construct(string $CorporateID)
    {
        $this->CorporateID = $CorporateID;
    }
}
