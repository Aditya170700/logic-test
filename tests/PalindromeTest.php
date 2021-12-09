<?php

namespace Aditya\LogicTest;

use PHPUnit\Framework\TestCase;

class PalindromeTest extends TestCase
{
  public function testPalindrome()
  {
    $isPalindrome = new Palindrome();

    $this->assertTrue($isPalindrome("Radar"));
    $this->assertTrue($isPalindrome("Malam"));
    $this->assertTrue($isPalindrome("Kasur ini rusak"));
    $this->assertTrue($isPalindrome("Ibu Ratna antar ubi"));
    $this->assertFalse($isPalindrome("Malas"));
    $this->assertFalse($isPalindrome("Makan nasi goreng"));
    $this->assertFalse($isPalindrome("Balonku ada lima"));
  }
}
