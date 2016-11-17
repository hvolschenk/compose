# Compose
PHP function composition class

Example usage:

```php
<?php
  namespace Test\Test;
  require('vendor/autoload.php');
  use Hvolschenk\Utils\Compose;

  class Tester {

    public static function go() {
      return Compose::compose(
        'Result: ',
        Compose::addClassNames('Test\Test\Tester', ['addA', 'addB', 'addC'])
      );
    }

    public static function addA(string $string) {
      return "{$string}a";
    }

    public static function addB(string $string) {
      return "{$string}b";
    }

    public static function addC(string $string) {
      return "{$string}c";
    }

  }

  $tester = new Tester();
  echo $tester->go(); // Result: abc

?>
```

or

```php
<?php
  namespace Test\Test;
  require('vendor/autoload.php');
  use Hvolschenk\Utils\Compose;

  class Tester {

    public static function circumference($radius) {
      return Compose::compose(
        $radius,
        Compose::addClassNames('Test\Test\Tester', ['multiply', 'pi'])
      );
    }

    public static function multiply(int $number) {
      return $number * 2;
    }

    public static function pi(int $number) {
      return $number * 3.14;
    }

  }

  $tester = new Tester();
  echo $tester->circumference(1); // 6.28
  echo $tester->circumference(3); // 18.48

?>
```
