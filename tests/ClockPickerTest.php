<?php
namespace faryshta\tests;

use faryshta\widgets\JqueryClockPicker;
use faryshta\widgets\BootstrapClockPicker;
/**
 * Test the functionality for the enum extension
 */
class ClockPickerTest extends TestCase
{
    public function testBootstrap()
    {
        $expected = <<<'HTML'
<input type="text" id="bs" class="form-control" name="hour" value="13:00">
HTML;

				$this->assertEquals($expected, BootstrapClockPicker::widget([
            'id' => 'bs',
            'name' => 'hour',
            'value' => '13:00'
        ]));
    }
    public function testJquery()
    {
        $expected = <<<'HTML'
<input type="text" id="jq" class="form-control" name="hour" value="13:00">
HTML;

				$this->assertEquals($expected, JqueryClockPicker::widget([
            'id' => 'jq',
            'name' => 'hour',
            'value' => '13:00'
        ]));
    }
}
