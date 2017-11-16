<?php


namespace Demo\PrimeFactor;


class Main
{
    public function calculatePrimeFactorFor(int $n): array
    {
        $primeFactors = array();
        for ($counter = 2; $n > 1; $counter++) {
            for (; $n % $counter == 0; $n /= $counter) {
                array_push($primeFactors, $counter);
            }
        }
        return $primeFactors;
    }
}