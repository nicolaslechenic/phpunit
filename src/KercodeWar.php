<?php
class KercodeWar {
  public function weekday($number) {
    if ($number >= 1 && $number <= 7) {
      switch ($number) {
        case 1:
          return 'Sunday';
          break;
        case 2:
          return 'Monday';
          break;
        case 3:
          return 'Tuesday';
          break;
        case 4:
          return 'Wednesday';
          break;
        case 5:
          return 'Thursday';
          break;
        case 6:
          return 'Friday';
          break;
        case 7:
          return 'Saturday';
          break;
      }
    } else {
      return 'Wrong, please enter a number between 1 and 7';
    }
  }

  public function isWeekend($number) {
    return ('Sunday' === self::weekday($number)) || ('Saturday' === self::weekday($number)) ? true : false;
  }
}
