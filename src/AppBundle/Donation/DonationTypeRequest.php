<?php

namespace AppBundle\Donation;

use AppBundle\Validator\DonationFrequency;

class DonationTypeRequest
{
    /**
     * @DonationFrequency()
     */
    private $frequency;

    public function __construct()
    {
        $this->frequency = '01';
    }

    public function getFrequency(): string
    {
        return $this->frequency;
    }

    public function setFrequency(string $frequency)
    {
        $this->frequency = $frequency;
    }


}