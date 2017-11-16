<?php


namespace Demo;

use Mockery\Exception\InvalidArgumentException;

class FizBuzz
{

    static function checkForFizBuzz(int $number)
    {
        self::checkNumber($number);
        return self::calculate($number);
    }

    /**
     * @param int $number
     * @return bool
     */
    public static function isMultipleOfFive(int $number): bool
    {
        return $number % 5 == 0;
    }

    /**
     * @param int $number
     * @return bool
     */
    public static function isMultipleOfThree(int $number): bool
    {
        return $number % 3 == 0;
    }

    /**
     * @param int $number
     */
    public static function checkNumber(int $number): void
    {
        if ($number <= 0) {
            throw new InvalidArgumentException("Number IS less then 1");
        }
    }

    /**
     * @param int $number
     * @return int|string
     */
    public static function calculate(int $number)
    {
        $result = $number;
        if (self::isMultipleOfFive($number) && self::isMultipleOfThree($number)) {
            $result = 'FizzBuzz';
        } elseif (self::isMultipleOfThree($number)) {
            $result = 'Fizz';
        } elseif (self::isMultipleOfFive($number)) {
            $result = 'Buzz';
        }
        return $result;
    }


}