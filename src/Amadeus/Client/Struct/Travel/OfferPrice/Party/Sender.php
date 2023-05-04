<?php

namespace Amadeus\Client\Struct\Travel\OfferPrice\Party;

class Sender
{
//    public ?Aggregator $Aggregator = null;
//    public ?EnabledSystem $EnabledSystem = null;
//    public ?Corporation $Corporation = null;
//    public ?MarketingCarrier $MarketingCarrier = null;
//    public ?OperatingCarrier $OperatingCarrier = null;
//    public ?ORA $ORA = null;
//    public ?POA $POA = null;
//    public ?RetailPartner $RetailPartner = null;
    public ?TravelAgency $TravelAgency = null;

    public function __construct(
//        ?Aggregator $Aggregator = null,
//        ?EnabledSystem $EnabledSystem = null,
//        ?Corporation $Corporation = null,
//        ?MarketingCarrier $MarketingCarrier = null,
//        ?OperatingCarrier $OperatingCarrier = null,
//        ?ORA $ORA = null,
//        ?POA $POA = null,
//        ?RetailPartner $RetailPartner = null,
        ?TravelAgency $TravelAgency = null
    ) {
//        $this->Aggregator = $Aggregator ?? new Aggregator('123-waavo');
//        $this->EnabledSystem = $EnabledSystem ?? new EnabledSystem('');
//        $this->Corporation = $Corporation ?? new Corporation('');
//        $this->MarketingCarrier = $MarketingCarrier ?? new MarketingCarrier('');
//        $this->OperatingCarrier = $OperatingCarrier ?? new OperatingCarrier('');
//        $this->ORA = $ORA ?? new ORA('');
//        $this->POA = $POA ?? new POA('');
//        $this->RetailPartner = $RetailPartner ?? new RetailPartner('');
        $this->TravelAgency = $TravelAgency ?? new TravelAgency('unused');
    }
}
