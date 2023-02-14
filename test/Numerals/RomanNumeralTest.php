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

    public function test4IsIV()
    {
        $this->assertEquals('IV', RomanNumeral::convertFromArabic(4));
    }

    public function test5IsV()
    {
        $this->assertEquals('V', RomanNumeral::convertFromArabic(5));
    }

    public function test9IsIX()
    {
        $this->assertEquals('IX', RomanNumeral::convertFromArabic(9));
    }

    public function test10IsX()
    {
        $this->assertEquals('X', RomanNumeral::convertFromArabic(10));
    }

    public function test58IsL()
    {
        $this->assertEquals('LVIII', RomanNumeral::convertFromArabic(58));
    }
}
