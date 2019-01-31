<?php
require('./src/KercodeWar.php');

use PHPUnit\Framework\TestCase;

class KercodeWarTest extends TestCase
{
  public function testWeekday()
  {
    $this->assertEquals('Sunday', KercodeWar::weekday(1));
    $this->assertEquals('Monday', KercodeWar::weekday(2));
    $this->assertEquals('Tuesday', KercodeWar::weekday(3));
    $this->assertEquals('Wednesday', KercodeWar::weekday(4));
    $this->assertEquals('Thursday', KercodeWar::weekday(5));
    $this->assertEquals('Friday', KercodeWar::weekday(6));
    $this->assertEquals('Saturday', KercodeWar::weekday(7));
    $this->assertEquals('Wrong, please enter a number between 1 and 7', KercodeWar::weekday('plop'));
  }
}
