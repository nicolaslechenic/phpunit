<?php
use Symfony\Component\Yaml\Yaml;

class KercodeWar {
  public function weekday($number, $lang='en') {
    $content = Yaml::parse(file_get_contents("{$lang}.yml"));

    eval(\Psy\sh());
  }

  public function isWeekend($number) {
    return ('Sunday' === self::weekday($number)) || ('Saturday' === self::weekday($number)) ? true : false;
  }
}
