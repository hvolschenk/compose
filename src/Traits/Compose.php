<?php
  namespace Hvolschenk\Traits;
  trait Compose {

    public static function compose($value, array $functions) {
      return array_reduce($functions, function($result, $function) {
        return call_user_func(['self', $function], $result);
      }, $value);
    }

  }
