<?php

namespace faryshta\widgets;

use faryshta\assets\ClockPickerBootstrap as BootstrapAsset;

/**
 * @inheritdoc
 */
class BootstrapClockPicker extends ClockPicker
{
    /**
     * @inheritdoc
     */
    public function registerAssets()
    {
        BootstrapAsset::register($this->getView());
    }
}
