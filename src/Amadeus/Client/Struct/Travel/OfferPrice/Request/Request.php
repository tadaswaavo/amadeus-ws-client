<?php

namespace Amadeus\Client\Struct\Travel\OfferPrice\Request;

class Request
{
    public DataLists $DataLists;
    public PricedOffer $PricedOffer;

    /**
     * @param Pax[] $pax
     */
    public function __construct(
        array $pax,
        string $offerID,
        string $OwnerCode,
        string $ShoppingResponseRefID
    ) {
        $this->DataLists = new DataLists($pax);
        $this->PricedOffer = new PricedOffer(
            new SelectedOffer(
                $offerID,
                $OwnerCode,
                $ShoppingResponseRefID,
                [
                    new SelectedOfferItem(
                        '',
                        'T1',
                        [new SelectedAlaCarteOfferItem('1')]
                    )
                ]
            )
        );
    }
}
