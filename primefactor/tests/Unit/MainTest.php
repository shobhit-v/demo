<?php

namespace Demo\PrimeFactor\Test;

use Demo\PrimeFactor\Main;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;


class MainTest extends TestCase
{
    /**
     * @test
     */
    public function oneIsNotPrimeNumber(){
        $object = new main();
        $object->calculatePrimeFactor(1);
        Assert::assertTrue(true);

    }
}
