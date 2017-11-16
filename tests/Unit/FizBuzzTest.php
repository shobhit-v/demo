<?php


namespace Demo\Test;


use Demo\FizBuzz;
use Mockery\Exception\InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

class FizBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function shouldReturnNumberIfPassedOne()
    {
        Assert::assertEquals(1, FizBuzz::checkForFizBuzz(1));
    }

    /**
     * @test
     */
    public function shouldReturnNumberIfPassedTwo()
    {
        Assert::assertEquals(2, FizBuzz::checkForFizBuzz(2));
    }

    /**
     * @test
     */
    public function shouldReturnFizzIfPassedThree()
    {
        Assert::assertEquals('Fizz', FizBuzz::checkForFizBuzz(3));
    }
    /**
     * @test
     */
    public function shouldReturnFizzIfPassedSix()
    {
        Assert::assertEquals('Fizz', FizBuzz::checkForFizBuzz(6));
    }

    /**
     * @test
     */
    public function shouldReturnBuzzIfPassedTen()
    {
        Assert::assertEquals('Buzz', FizBuzz::checkForFizBuzz(10));
    }

    /**
     * @test
     */
    public function shouldReturnBuzzIfPassedFive()
    {
        Assert::assertEquals('Buzz', FizBuzz::checkForFizBuzz(5));
    }

    /**
     * @test
     */
    public function shouldReturnFizzBuzzIfPassedFifteen()
    {
        Assert::assertEquals('FizzBuzz', FizBuzz::checkForFizBuzz(15));
    }

    /**
     * @test
     */
    public function shouldReturnFizzBuzzIfPassedThirty()
    {
        Assert::assertEquals('FizzBuzz', FizBuzz::checkForFizBuzz(30));
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function shouldThrowExceptionIfPassedZero()
    {
        FizBuzz::checkForFizBuzz(0);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function shouldThrowExceptionIfPassedNegative()
    {
        FizBuzz::checkForFizBuzz(-1);
    }


}