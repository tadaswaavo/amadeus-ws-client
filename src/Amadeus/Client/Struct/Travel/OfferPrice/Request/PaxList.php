<?php

namespace Amadeus\Client\Struct\Travel\OfferPrice\Request;

class PaxList
{
    /**
     * @var Pax[]
     */
    public array $Pax = [];

    /**
     * @param Pax[] $Pax
     */
    public function __construct(array $Pax)
    {
        $this->Pax = $Pax;
    }
}
