<?php

namespace Braddle\PhpUk2023\Numerals;

class RomanNumeral
{
    public static function convertFromArabic(int $number)
    {
        if ($number === 1) {
            return 'I';
        }

        return 'V';
    }
}
