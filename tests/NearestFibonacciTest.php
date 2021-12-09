<?php

namespace Aditya\LogicTest;

use PHPUnit\Framework\TestCase;

class NearestFibonacciTest extends TestCase
{
  public function testNearestFibonacci()
  {
    $nearestFibonacci = new NearestFibonacci();

    $this->assertEquals(2, $nearestFibonacci([15, 1, 3]));
  }
}
