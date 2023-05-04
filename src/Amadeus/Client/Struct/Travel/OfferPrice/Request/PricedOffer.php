<?php

namespace Amadeus\Client\Struct\Travel\OfferPrice\Request;

class PricedOffer
{
    public SelectedOffer $SelectedOffer;

    public function __construct(SelectedOffer $SelectedOffer)
    {
        $this->SelectedOffer = $SelectedOffer;
    }
}
