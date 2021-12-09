<?php

namespace Aditya\LogicTest;

class NearestFibonacci
{
  public function __invoke(array $numbers): int
  {
    $total = 0;

    foreach ($numbers as $number) {
      $total += $number;
    }

    $first = 0;
    $second = 1;
    $third = $first + $second;

    while ($third <= $total) {
      $first = $second;
      $second = $third;
      $third = $first + $second;
    }

    if (abs($third - $total) >= abs($second - $total)) {
      return $total - $second;
    }

    return $third - $total;
  }
}
