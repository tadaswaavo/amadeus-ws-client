<?php

namespace Amadeus\Client\Struct\Travel\OfferPrice;

class Sender
{
    public ?Aggregator $Aggregator = null;
    public ?EnabledSystem $EnabledSystem = null;
    public ?Corporation $Corporation = null;
    public ?MarketingCarrier $MarketingCarrier = null;
    public ?OperatingCarrier $OperatingCarrier = null;
    public ?ORA $ORA = null;
    public ?POA $POA = null;
    public ?RetailPartner $RetailPartner = null;
    public ?TravelAgency $TravelAgency = null;

    /**
     * @param Aggregator|null       $Aggregator
     * @param EnabledSystem|null    $EnabledSystem
     * @param Corporation|null      $Corporation
     * @param MarketingCarrier|null $MarketingCarrier
     * @param OperatingCarrier|null $OperatingCarrier
     * @param ORA|null              $ORA
     * @param POA|null              $POA
     * @param RetailPartner|null    $RetailPartner
     * @param TravelAgency|null     $TravelAgency
     */
    public function __construct(
        ?Aggregator $Aggregator = null,
        ?EnabledSystem $EnabledSystem = null,
        ?Corporation $Corporation = null,
        ?MarketingCarrier $MarketingCarrier = null,
        ?OperatingCarrier $OperatingCarrier = null,
        ?ORA $ORA = null,
        ?POA $POA = null,
        ?RetailPartner $RetailPartner = null,
        ?TravelAgency $TravelAgency = null
    ) {
        $this->Aggregator = $Aggregator ?? new Aggregator();
        $this->EnabledSystem = $EnabledSystem ?? new EnabledSystem();
        $this->Corporation = $Corporation ?? new Corporation();
        $this->MarketingCarrier = $MarketingCarrier ?? new MarketingCarrier();
        $this->OperatingCarrier = $OperatingCarrier ?? new OperatingCarrier();
        $this->ORA = $ORA ?? new ORA();
        $this->POA = $POA ?? new POA();
        $this->RetailPartner = $RetailPartner ?? new RetailPartner();
        $this->TravelAgency = $TravelAgency ?? new TravelAgency();
    }
}
