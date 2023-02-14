<?php

// Take a look spies
namespace DrivingLicence;

use Braddle\PhpUk2023\DrivingLicence\InvalidDriverException;
use Braddle\PhpUk2023\DrivingLicence\LicenceApplicant;
use Braddle\PhpUk2023\DrivingLicence\NumberGenerator;
use Braddle\PhpUk2023\DrivingLicence\RandomNumbersGenerator;
use Mockery;
use PHPUnit\Framework\TestCase;

class NumberGeneratorMockeryTest extends TestCase
{
    protected function tearDown(): void
    {
        Mockery::close();
    }

    public function testUnderAgeWithMockery()
    {
        $this->expectException(InvalidDriverException::class);

        $fakeRand = Mockery::mock(RandomNumbersGenerator::class);

        $gen = new NumberGenerator($fakeRand);

        $underAgeApplicant = Mockery::mock(LicenceApplicant::class);
        $underAgeApplicant->shouldReceive('getAge')
            ->andReturn(16);

        $gen->getNumber($underAgeApplicant);
    }

    public function testValidApplicantWithMockery()
    {
        $fakeRand = Mockery::mock(RandomNumbersGenerator::class);
        $fakeRand->shouldReceive('generate')->andReturn('00000');

        $gen = new NumberGenerator($fakeRand);

        $validApplicant = Mockery::mock(LicenceApplicant::class);
        $validApplicant->shouldReceive('getAge')
            ->andReturn(17);
        $validApplicant->shouldReceive('getInitials')
            ->andReturn('SYN');
        $validApplicant->shouldReceive('getDateOfBirth')
            ->andReturn(\DateTime::createFromFormat('d/m/Y', '14/02/2023'));

        $licence = $gen->getNumber($validApplicant);

        $this->assertEquals('SYN1402202300000', $licence);
    }

    public function testValidApplicantNoMiddleNameWithMockery()
    {
        $fakeRand = Mockery::mock(RandomNumbersGenerator::class);
        $fakeRand->shouldReceive('generate')
            ->andReturn('000000');

        $gen = new NumberGenerator($fakeRand);

        $validApplicant = Mockery::mock(LicenceApplicant::class);
        $validApplicant->shouldReceive('getAge')
            ->andReturn(17);
        $validApplicant->shouldReceive('getInitials')
            ->andReturn('SY');
        $validApplicant->shouldReceive('getDateOfBirth')
            ->andReturn(\DateTime::createFromFormat('d/m/Y', '14/02/2023'));

        $licence = $gen->getNumber($validApplicant);

        $this->assertEquals('SY14022023000000', $licence);
    }
}
