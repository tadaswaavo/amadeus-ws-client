<?php

namespace Amadeus\Client\Struct\Travel\OfferPrice\Request;

class SelectedOfferItem
{
    public string $OfferItemRefID;
    public string $PaxRefID;

    /** @var array<SelectedAlaCarteOfferItem>  */
    public array $SelectedAlaCarteOfferItem = [];

    public function __construct(string $OfferItemRefID, string $PaxRefID, array $SelectedAlaCarteOfferItem)
    {
        $this->OfferItemRefID = $OfferItemRefID;
        $this->PaxRefID = $PaxRefID;
        $this->SelectedAlaCarteOfferItem = $SelectedAlaCarteOfferItem;
    }
}
