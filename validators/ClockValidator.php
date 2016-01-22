<?php

namespace faryshta\validators;

class ClockValidator extends \yii\validators\RegularExpressionValidator
{
    /**
     * Regular Expression that admits values form 00:00 to 23:59;
     */
    const TWENTYFOURHOUR_PATTERN = '/^([01]\d|2[0-3]):[0-5]\d$/';

    /**
     * Regular Expression that admits values form 12:00AM to 11:59PM;
     */
    const TWELVEHOUR_PATTERN = '/^([0][1-9]|1[0-2]):[0-5]\d[AP]M$/';

    /**
     * @var boolean determines if true it will use the `self::TWELVEHOUR_PATTERN`
     * for validation, else it will use `self::TWENTYFOURHOUR_PATTERN`
     * @see https://github.com/weareoutman/clockpicker#options
     */
    public $twelvehour = false;

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->pattern = $this->twelvehour
            ? self::TWELVEHOUR_PATTERN
            : self::TWENTYFOURHOUR_PATTERN;
        parent::init();
    }
}
