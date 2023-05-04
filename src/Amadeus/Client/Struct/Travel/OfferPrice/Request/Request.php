<?php

namespace Amadeus\Client\Struct\Travel\OfferPrice\Request;

class Request
{
    public DataLists $DataLists;
    public PricedOffer $PricedOffer;

    /**
     * @param Pax[] $Pax
     */
    public function __construct(
        array $Pax,
        string $OfferID,
        string $OfferItemRefID,
        string $OwnerCode,
        string $ShoppingResponseRefID
    ) {
        $this->DataLists = new DataLists($Pax);
        $this->PricedOffer = new PricedOffer(
            new SelectedOffer(
                $OfferID,
                $OwnerCode,
                $ShoppingResponseRefID,
                [
                    new SelectedOfferItem(
                        $OfferItemRefID,
                        'T1',
                        [new SelectedAlaCarteOfferItem('1')]
                    )
                ]
            )
        );
    }
}
