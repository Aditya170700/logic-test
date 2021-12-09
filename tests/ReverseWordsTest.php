<?php

namespace Aditya\LogicTest;

use PHPUnit\Framework\TestCase;

class ReverseWordsTest extends TestCase
{
  public function testReverseWords()
  {
    $reverseWords = new ReverseWords();

    $this->assertEquals("I ma A Taerg namuh", $reverseWords("I am A Great human"));
  }
}
