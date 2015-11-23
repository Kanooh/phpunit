--TEST--
phpunit --repeat 3 --only-repeat-failed ../_files/DataProviderAlternateSuccessTest.php
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--repeat';
$_SERVER['argv'][3] = '3';
$_SERVER['argv'][4] = '--only-repeat-failed';
$_SERVER['argv'][5] = dirname(__FILE__).'/../_files/DataProviderAlternateSuccessTest.php';

require __DIR__ . '/../bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

F.S.SS

Time: %s, Memory: %sMb

There was 1 failure:

1) DataProviderAlternateSuccessTest::testAlternateSuccess with data set #0 ('even')
Failed at run 1.

/Users/pieterdc/Sites/phpunit-kanooh/tests/_files/DataProviderAlternateSuccessTest.php:17

FAILURES!
Tests: 3, Assertions: 0, Failures: 1, Skipped: 3.
