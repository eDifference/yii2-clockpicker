<?php

namespace faryshta\widgets;

use faryshta\assets\JqueryClockPicker as JqueryAsset;

/**
 * @inheritdoc
 */
class JqueryClockPicker extends BaseClockPicker
{
    /**
     * @inheritdoc
     */
    protected function registerAssets()
    {
        JqueryAsset::register($this->getView());
    }
}
