<?php

namespace Aditya\LogicTest;

class FizzBuzz
{
  public function __invoke(int $number): array
  {
    $result = [];
    for ($i = 1; $i <= $number; $i++) {
      if ($i % 3 === 0 && $i % 5 === 0) {
        array_push($result, 'FizzBuzz');
      } elseif ($i % 3 === 0) {
        array_push($result, 'Fizz');
      } elseif ($i % 5 === 0) {
        array_push($result, 'Buzz');
      } else {
        array_push($result, $i);
      }
    }

    return $result;
  }
}
