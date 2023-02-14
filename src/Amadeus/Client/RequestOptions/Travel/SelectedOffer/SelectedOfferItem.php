<?php

namespace Amadeus\Client\RequestOptions\Travel\SelectedOffer;

use Amadeus\Client\LoadParamsFromArray;

class SelectedOfferItem extends LoadParamsFromArray
{
    public $offerItemRefID;

    public $paxRefID;

    /**
     * @var SelectedAlaCarteOfferItem
     */
    public $selectedAlaCarteOfferItem;

    /**
     * @var SelectedSeat
     */
    public $selectedSeat;
}
