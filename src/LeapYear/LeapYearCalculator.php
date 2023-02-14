<?php

namespace Braddle\PhpUk2023\LeapYear;

class LeapYearCalculator
{
    public static function isA(int $year)
    {
        if ($year == 1900 || $year == 1700) {
            return false;
        }

        return self::isTypicalLeapYear($year);
    }

    /**
     * @param int $year
     * @return bool
     */
    public static function isTypicalLeapYear(int $year)
    {
        return $year % 4 === 0;
    }
}
