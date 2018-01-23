<?php
declare(strict_types=1);


namespace Kata;


use PHPUnit\Framework\TestCase;

/**
 * Implement a function that turns every other character
 * into an upper case character.
 *
 * @package Kata
 */
class UpperCaseTest extends TestCase
{
    public function testUpperCase()
    {
        $this->assertEquals("a", upperCase("a"));
        $this->assertEquals("A", upperCase("A"));
        $this->assertEquals("aA", upperCase("aa"));
        $this->assertEquals("aAbB", upperCase("aabb"));
        $this->assertEquals("ALpHa BEtA GaMmA", upperCase("Alpha Beta Gamma"));
    }
}

function upperCase(string $str) {
    return "";
}