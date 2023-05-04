<?php

namespace Amadeus\Client\Struct\Travel\OfferPrice\Request;

class Pax
{
    public const PTC_INF = 'INF'; // infant
    public const PTC_CHD = 'CHD'; // child
    public const PTC_ADT = 'ADT'; // adult

    public string $PaxID;
    public string $PTC;

    public function __construct(string $PaxID, string $PTC)
    {
        $this->PaxID = $PaxID;
        $this->PTC = $PTC;
    }
}
