<?php

namespace faryshta\widgets;

use faryshta\assets\ClockPickerBootstrap as BootstrapAsset;

/**
 * @inheritdoc
 */
class ClockPickerBootstrap extends ClockPicker
{
    /**
     * @inheritdoc
     */
    protected function registerAssets()
    {
        BootstrapAsset::register($this->getView());
    }
}
