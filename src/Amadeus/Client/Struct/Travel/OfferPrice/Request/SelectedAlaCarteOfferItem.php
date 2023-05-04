<?php

namespace Amadeus\Client\Struct\Travel\OfferPrice\Request;

class SelectedAlaCarteOfferItem
{
    public string $Qty;

    public function __construct(string $Qty)
    {
        $this->Qty = $Qty;
    }
}
