<?php
/**
 * @link https://github.com/MadAnd/yii2-clockpicker
 * @copyright Copyright (c) 2015 Andriy Kmit' <dev@madand.net>
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace faryshta\assets;

use yii\web\AssetBundle;

class ClockPickerBoostrap extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/bower/clockpicker/dist';

    /**
     * @inheritdoc
     */
    public $css = ['jquery-clockpicker.css'];

    /**
     * @inheritdoc
     */
    public $js = ['jquery-clockpicker.js'];

    /**
     * @inheritdoc
     */
    public $depends = ['yii\web\JqueryAsset'];
}
