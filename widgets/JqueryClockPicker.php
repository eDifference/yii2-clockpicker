<?php

namespace faryshta\widgets;

use faryshta\assets\ClockPickerJquery as JqueryAsset;

/**
 * @inheritdoc
 */
class JqueryClockPicker extends ClockPicker
{
    /**
     * @inheritdoc
     */
    public function registerAssets()
    {
        JqueryAsset::register($this->getView());
    }
}
