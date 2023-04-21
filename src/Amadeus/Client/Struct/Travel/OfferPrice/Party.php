<?php

namespace Amadeus\Client\Struct\Travel\OfferPrice;

class Party
{
    public Sender $Sender;

    public function __construct()
    {
        $this->Sender = new Sender();
    }
}
