<?php

namespace DrivingLicence;

use Braddle\PhpUk2023\DrivingLicence\FakeRand;
use Braddle\PhpUk2023\DrivingLicence\InvalidDriverException;
use Braddle\PhpUk2023\DrivingLicence\NumberGenerator;
use Braddle\PhpUk2023\DrivingLicence\UnderAgeApplicant;
use Braddle\PhpUk2023\DrivingLicence\ValidApplicant;
use PHPUnit\Framework\TestCase;

class NumberGeneratorTest extends TestCase
{
    public function testUnderAge()
    {
        $this->expectException(InvalidDriverException::class);

        $gen = new NumberGenerator(new FakeRand());

        $gen->getNumber(new UnderAgeApplicant());
    }

    public function testValidApplicant()
    {
        $gen = new NumberGenerator(new FakeRand());

        $licence = $gen->getNumber(new ValidApplicant('SYN'));

        $this->assertEquals('SYN1402202300000', $licence);
    }

    public function testValidApplicantNoMiddleName()
    {
        $gen = new NumberGenerator(new FakeRand());

        $licence = $gen->getNumber(new ValidApplicant('SY'));

        $this->assertEquals('SY14022023000000', $licence);
    }
}
