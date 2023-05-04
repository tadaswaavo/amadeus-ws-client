<?php

namespace Amadeus\Client\Struct\Travel\OfferPrice\Request;

class DataLists
{
    public PaxList $PaxList;

    /**
     * @param Pax[] $pax
     */
    public function __construct(array $pax)
    {
        $this->PaxList = new PaxList($pax);
    }
}
