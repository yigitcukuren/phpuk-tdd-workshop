<?php

namespace Braddle\PhpUk2023\DrivingLicence;

class NumberGenerator
{
    protected $randomNumbersGenerator;

    public function __construct(RandomNumbersGenerator $randomNumbersGenerator)
    {
        $this->randomNumbersGenerator = $randomNumbersGenerator;
    }

    public function getNumber(LicenceApplicant $applicant)
    {
        if ($applicant->getAge() < 17) {
            throw new InvalidDriverException();
        }

        $number = $applicant->getInitials();

        $number .= $applicant->getDateOfBirth()->format('dmY');

        $requiredNumber = 16 - strlen($number);

        $number .= $this->randomNumbersGenerator->generate($requiredNumber);

        return $number;
    }
}
