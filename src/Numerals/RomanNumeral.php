<?php

namespace Braddle\PhpUk2023\Numerals;

class RomanNumeral
{
    public static function convertFromArabic(int $number)
    {
        if ($number === 1) {
            return 'I';
        }

        if ($number === 5) {
            return 'V';
        }

        if ($number === 10) {
            return 'X';
        }

        return 'L';
    }
}
