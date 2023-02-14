<?php

namespace Amadeus\Client\RequestOptions\Travel;

use Amadeus\Client\LoadParamsFromArray;
use Amadeus\Client\RequestOptions\Travel\SelectedOffer\SelectedOfferItem;

class SelectedOffer extends LoadParamsFromArray
{
    public $offerRefID;

    public $ownerCode;

    public $shoppingResponseRefID;

    /**
     * @var SelectedOfferItem[]
     */
    public $selectedOfferItems = [];
}
