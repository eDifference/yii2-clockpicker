<?php

namespace faryshta\widgets;

use faryshta\assets\ClockPickerJquery as JqueryAsset;

/**
 * @inheritdoc
 */
class ClockPickerJquery extends ClockPicker
{
    /**
     * @inheritdoc
     */
    public function registerAssets()
    {
        JqueryAsset::register($this->getView());
    }
}
