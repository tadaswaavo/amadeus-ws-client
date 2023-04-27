<?php

namespace Amadeus\Client\Struct\Travel\OfferPrice\Party;

class TravelAgency
{
    public string $AgencyID = '';

    public function __construct(string $AgencyID)
    {
        $this->AgencyID = $AgencyID;
    }
}
