<?php

namespace AppBundle\Donation;

class DonationFrequencyRequestFactory
{
    public function createFromRequest(): DonationTypeRequest
    {
        return new DonationTypeRequest();
    }
}