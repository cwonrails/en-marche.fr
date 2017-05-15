<?php

namespace AppBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class DonationFrequencyValidator extends ConstraintValidator
{
    private $frequencies;

    public function __construct($frequencies)
    {
        $this->frequencies = $frequencies;
        $this->frequencies[] = '01';
    }

    public function validate($value, Constraint $constraint)
    {
        if (!in_array($value, $this->frequencies)) {
            $this
                ->context
                ->buildViolation($constraint->message)
                ->addViolation();
        }
    }


}