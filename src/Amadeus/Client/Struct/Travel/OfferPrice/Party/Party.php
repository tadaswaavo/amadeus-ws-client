<?php

namespace Amadeus\Client\Struct\Travel\OfferPrice\Party;

class Party
{
    public Sender $Sender;

    public function __construct(Sender $Sender)
    {
        $this->Sender = $Sender;
    }
}
