<?php
class DataProviderAlternateSuccessTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider providerMethod
     */
    public function testAlternateSuccess($succeedOddOrEven)
    {
        $repeatCount = 1;
        if (array_key_exists('PHPUnit_RepeatedTest_RepeatCount', $_ENV)) {
            // Alternate based on which repeat count we're currently at.
            $repeatCount = $_ENV['PHPUnit_RepeatedTest_RepeatCount'];
        }
        if (($repeatCount + (int) ($succeedOddOrEven == 'even')) & 1) {
            return;
        } else {
            $this->fail('Failed at run ' . $repeatCount . '.');
        }
    }

    public static function providerMethod()
    {
        return array(
          array('even'),
          array('odd')
        );
    }
}
