<?php

namespace Aditya\LogicTest;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
  public function testFizzBuzz()
  {
    $fizzBuzz = new FizzBuzz();

    $this->assertEquals(["1", "2", "Fizz"], $fizzBuzz(3));
    $this->assertEquals(["1", "2", "Fizz", "4", "Buzz"], $fizzBuzz(5));
    $this->assertEquals(["1", "2", "Fizz", "4", "Buzz", "Fizz", "7", "8", "Fizz", "Buzz", "11", "Fizz", "13", "14", "FizzBuzz"], $fizzBuzz(15));
  }
}
