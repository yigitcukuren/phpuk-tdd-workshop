<?php

namespace Braddle\PhpUk2023\Numerals;

class RomanNumeral
{
    private static $romanNumeralMap = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    ];

    public static function convertFromArabic(int $number)
    {
        if ($number === 1) {
            return 'I';
        }

        if ($number === 4) {
            return 'IV';
        }

        if ($number === 5) {
            return 'V';
        }

        if ($number === 9) {
            return 'IX';
        }

        if ($number === 10) {
            return 'X';
        }

        if ($number === 50) {
            return 'L';
        }

        return self::convertFromArabicGeneric($number);
    }

    public static function convertFromArabicGeneric(int $number)
    {
        $romanNumerals = '';
        while ($number > 0) {
            foreach (self::$romanNumeralMap as $roman => $arabic) {
                if ($number >= $arabic) {
                    $number -= $arabic;
                    $romanNumerals .= $roman;
                    break;
                }
            }
        }
        return $romanNumerals;
    }
}
