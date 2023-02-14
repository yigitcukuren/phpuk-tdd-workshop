<?php

namespace Numerals;

use Braddle\PhpUk2023\Numerals\RomanNumeral;
use PHPUnit\Framework\TestCase;

class RomanNumeralTest extends TestCase
{
    public function test1IsI()
    {
        $this->assertEquals('I', RomanNumeral::convertFromArabic(1));
    }

    public function test5IsV()
    {
        $this->assertEquals('V', RomanNumeral::convertFromArabic(5));
    }
}
