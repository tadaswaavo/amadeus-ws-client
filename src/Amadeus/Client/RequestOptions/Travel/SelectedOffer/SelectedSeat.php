<?php

namespace Amadeus\Client\RequestOptions\Travel\SelectedOffer;

use Amadeus\Client\LoadParamsFromArray;

class SelectedSeat extends LoadParamsFromArray
{
    public $columnID;

    public $seatRowNumber;
}
