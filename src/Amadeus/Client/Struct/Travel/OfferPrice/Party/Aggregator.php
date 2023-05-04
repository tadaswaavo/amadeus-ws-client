<?php

namespace Amadeus\Client\Struct\Travel\OfferPrice\Party;

class Aggregator
{
    public string $AggregatorID = 'unused';

    public function __construct(string $AggregatorID)
    {
        $this->AggregatorID = $AggregatorID;
    }
}
