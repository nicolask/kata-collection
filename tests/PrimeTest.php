<?php
declare(strict_types=1);


namespace Kata;


use PHPUnit\Framework\TestCase;

/**
 * Implement a function that tests, if a number is prime.
 *
 *
 * @package Kata
 */
class PrimeTest extends TestCase
{
    public function testIsPrime()
    {
        $this->assertFalse(isPrime(1));
        $this->assertTrue(isPrime(2));
        $this->assertTrue(isPrime(3));
        $this->assertFalse(isPrime(4));
        $this->assertTrue(isPrime(13));
    }
}

function isPrime(int $number) {
    return false;
}