<?php

namespace Amadeus\Client\Struct\Travel\OfferPrice\Request;

class SelectedOffer
{
    public string $OfferRefID;
    public string $OwnerCode;
    public string $ShoppingResponseRefID;

    /** @var array<SelectedOfferItem> */
    public array $SelectedOfferItem;

    public function __construct(
        string $OfferRefID,
        string $OwnerCode,
        string $ShoppingResponseRefID,
        array $SelectedOfferItem
    ) {
        $this->OfferRefID = $OfferRefID;
        $this->OwnerCode = $OwnerCode;
        $this->ShoppingResponseRefID = $ShoppingResponseRefID;
        $this->SelectedOfferItem = $SelectedOfferItem;
    }
}
