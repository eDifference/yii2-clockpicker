<?php

namespace faryshta\widgets;

use faryshta\assets\BootstrapClockPicker as BootstrapAsset;

/**
 * @inheritdoc
 */
class BootstrapClockPicker extends BaseClockPicker
{
    /**
     * @inheritdoc
     */
    protected function registerAssets()
    {
        BootstrapAsset::register($this->getView());
    }
}
