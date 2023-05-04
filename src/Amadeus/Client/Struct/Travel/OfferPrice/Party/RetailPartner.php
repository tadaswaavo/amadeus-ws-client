<?php

namespace Amadeus\Client\Struct\Travel\OfferPrice\Party;

class RetailPartner
{
    public string $RetailPartnerID = '';

    public function __construct(string $RetailPartnerID)
    {
        $this->RetailPartnerID = $RetailPartnerID;
    }
}
