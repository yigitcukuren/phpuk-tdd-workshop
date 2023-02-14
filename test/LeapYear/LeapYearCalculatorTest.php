<?php

namespace LeapYear;

use Braddle\PhpUk2023\LeapYear\LeapYearCalculator;
use PHPUnit\Framework\TestCase;

class LeapYearCalculatorTest extends TestCase
{
    public function test2023IsNotALeapYear()
    {
        $this->assertFalse(LeapYearCalculator::isA(2023));
    }

    public function test2024IsALeapYear()
    {
        $this->assertTrue(LeapYearCalculator::isA(2024));
    }

    public function test2020IsALeapYear()
    {
        $this->assertTrue(LeapYearCalculator::isA(2020));
    }
}
