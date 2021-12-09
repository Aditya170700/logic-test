<?php

namespace Aditya\LogicTest;

class Palindrome
{
  public function __invoke(string $str): bool
  {
    $array = str_split(strtolower($str));

    for ($i = 0; $i < count($array); $i++) {
      if ($array[$i] != $array[count($array) - $i - 1]) {
        return false;
      }
    }

    return true;
  }
}
