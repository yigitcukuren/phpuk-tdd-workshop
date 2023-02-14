<?php

namespace Braddle\PhpUk2023\DrivingLicence;

use Braddle\PhpUk2023\DrivingLicence\LicenceApplicant;
use DateTime;

class ValidApplicant implements LicenceApplicant
{
    public $initial;

    public function __construct($initial)
    {
        $this->initial = $initial;
    }

    public function getAge(): int
    {
        return 17;
    }

    public function getDateOfBirth(): DateTime
    {
        return \DateTime::createFromFormat('d/m/Y', '14/02/2023');
    }

    public function getInitials(): string
    {
        return $this->initial;
    }
}
