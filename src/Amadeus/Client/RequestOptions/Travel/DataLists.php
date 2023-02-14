<?php

namespace Amadeus\Client\RequestOptions\Travel;

use Amadeus\Client\LoadParamsFromArray;
use Amadeus\Client\RequestOptions\Travel\DataLists\Pax;

class DataLists extends LoadParamsFromArray
{
    /**
     * @var Pax[]
     */
    public $paxList = [];
}
