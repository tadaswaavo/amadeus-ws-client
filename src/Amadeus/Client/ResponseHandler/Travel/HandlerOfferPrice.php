<?php

namespace Amadeus\Client\ResponseHandler\Travel;

use Amadeus\Client\ResponseHandler\StandardResponseHandler;
use Amadeus\Client\Session\Handler\SendResult;

class HandlerOfferPrice extends StandardResponseHandler
{
    public function analyze(SendResult $response)
    {
        return $this->analyzeSimpleResponseErrorCodeAndMessageStatusCode($response);
    }
}
