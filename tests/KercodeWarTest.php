<?php
require('./src/KercodeWar.php');

use PHPUnit\Framework\TestCase;

class KercodeWarTest extends TestCase
{
  CONST WEEKDAYS = [
    1 => 'Sunday',
    2 => 'Monday',
    3 => 'Tuesday',
    4 => 'Wednesday',
    5 => 'Thursday',
    6 => 'Friday',
    7 => 'Saturday'
  ];

  public function testWithValidWeekdayValue()
  {
    foreach (self::WEEKDAYS as $key => $value) {
      $this->assertEquals($value, KercodeWar::weekday($key));
    }
  }

  public function testWithInvalidWeekdayValue()
  {
    $this->assertEquals('Wrong, please enter a number between 1 and 7', KercodeWar::weekday('plop'));
  }

  public function testNumberInWeekend()
  {
    foreach (self::WEEKDAYS as $key => $value) {
      $bool = ($value === 'Saturday' || $value === 'Sunday');
      $this->assertEquals($bool, KercodeWar::isWeekend($key));
    }
  }
}
