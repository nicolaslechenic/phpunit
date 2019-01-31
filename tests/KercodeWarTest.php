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

  CONST FRENCH_WEEKDAYS = [
    1 => 'Dimanche',
    2 => 'Lundi',
    3 => 'Mardi',
    4 => 'Mercredi',
    5 => 'Jeudi',
    6 => 'Vendredi',
    7 => 'Samedi'
  ];

  public function testWithValidWeekdayValue()
  {
    foreach (self::WEEKDAYS as $key => $value) {
      $this->assertEquals($value, KercodeWar::weekday($key));
    }
  }

  public function testWithInvalidWeekdayValue()
  {
    $this->assertEquals('Wrng, please enter a number between 1 and 7', KercodeWar::weekday('plop'));
  }

  public function testFrenchWithValidWeekdayValue()
  {
    foreach (self::FRENCH_WEEKDAYS as $key => $value) {
      $this->assertEquals($value, KercodeWar::weekday($key, 'fr'));
    }
  }

  public function testFrenchWithInvalidWeekdayValue()
  {
    $this->assertEquals('Oups... Vous devez entrer un nombre compris entre 1 et 7', KercodeWar::weekday('plop', 'fr'));
  }

  public function testNumberIsWeekend()
  {
    foreach (self::WEEKDAYS as $key => $value) {
      $bool = ($value === 'Saturday' || $value === 'Sunday');
      $this->assertEquals($bool, KercodeWar::isWeekend($key));
    }
  }
}
