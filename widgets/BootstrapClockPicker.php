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
    protected function registerAssets()
    {
        BootstrapAsset::register($this->getView());
    }
}
