<?php

namespace Aditya\LogicTest;

class ReverseWords
{
  public function __invoke(string $str)
  {
    $result = "";
    foreach (explode(" ", $str) as $key => $word) {
      for ($i = 0; $i < count(str_split($word)); $i++) {
        if (ctype_upper($word[$i])) {
          $result .= strtoupper($word[count(str_split($word)) - $i - 1]);
        } else {
          $result .= strtolower($word[count(str_split($word)) - $i - 1]);
        }
      }

      $result .= $key != count(explode(" ", $str)) - 1 ? " " : "";
    }
    return $result;
  }
}
