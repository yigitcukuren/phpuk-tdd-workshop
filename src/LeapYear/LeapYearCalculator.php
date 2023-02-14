<?php

namespace Braddle\PhpUk2023\LeapYear;

class LeapYearCalculator
{
    public static function isA(int $year)
    {

        if (self::isATypicalLeapYear($year)) {
            return true;
        }

        if (self::isATypicalCommonYear($year)) {
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

    /**
     * @param int $year
     * @return bool
     */
    public static function isATypicalCommonYear(int $year)
    {
        return $year % 100 === 0;
    }

    /**
     * @param int $year
     * @return bool
     */
    public static function isATypicalLeapYear(int $year)
    {
        return $year % 400 === 0;
    }
}
