<?php

namespace Amadeus\Client\RequestOptions\Travel\DataLists;

use Amadeus\Client\LoadParamsFromArray;

class Pax extends LoadParamsFromArray
{
    const PTC_INF = 'INF'; // infant
    const PTC_CHD = 'CHD'; // child
    const PTC_ADT = 'ADT'; // adult

    public $paxID;

    public $PTC;
}
