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
    public function registerAssets()
    {
        BootstrapAsset::register($this->getView());
    }
}
