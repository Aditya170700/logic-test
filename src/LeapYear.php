<?php

namespace Aditya\LogicTest;

class LeapYear
{
  public function __invoke(int $start, int $end): string
  {
    $result = "";
    for ($i = $start; $i <= $end; $i++) {
      if ($i % 4 == 0 && $i > $start) {
        $result .= $result == "" ? $i : ", $i";
      }
    }
    return $result;
  }
}
