<?php

namespace faryshta\widgets;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

/**
 * Class Clockpicker
 *
 * @package madand\clockpicker
 * @author Andriy Kmit' <dev@madand.net>
 */
abstract class BaseClockPicker extends InputWidget
{
    /**
     * @var array the HTML attributes for the widget container tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [];
    /**
     * @var array the options for the underlying Bootstrap JS plugin.
     * Please refer to the corresponding Bootstrap plugin Web page for possible options.
     * For example, [this page](http://getbootstrap.com/javascript/#modals) shows
     * how to use the "Modal" plugin and the supported options (e.g. "remote").
     */
    public $clientOptions = [];
    /**
     * @var array the event handlers for the underlying Bootstrap JS plugin.
     * Please refer to the corresponding Bootstrap plugin Web page for possible events.
     * For example, [this page](http://getbootstrap.com/javascript/#modals) shows
     * how to use the "Modal" plugin and the supported events (e.g. "shown").
     */
    public $clientEvents = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        if (empty($this->clientOptions['donetext'])) {
            $this->clientOptions['donetext'] = 'Done';
        }

        Html::addCssClass($this->options, 'form-control');
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->registerPlugin();
        if ($this->hasModel()) {
            return Html::activeTextInput(
                $this->model,
                $this->attribute,
                $this->options
            );
        }

        return Html::textInput($this->name, $this->value, $this->options);
    }

    /**
     * registers the required assets
     */
    abstract protected function registerAssets();

    protected function registerPlugin()
    {
        $this->registerAssets();

        $clientOptions = Json::htmlEncode($this->clientOptions);

        $this->view->registerJs(
            "jQuery('#{$this->options['id']}').clockpicker({$clientOptions});"
        );
        $this->registerClientEvents();
    }
    /**
     * Registers JS event handlers that are listed in [[clientEvents]].
     */
    protected function registerClientEvents()
    {
        if (!empty($this->clientEvents)) {
            $id = $this->options['id'];
            $js = '';
            foreach ($this->clientEvents as $event => $handler) {
                $js .= "jQuery('#$id').on('$event', $handler);";
            }
            $this->getView()->registerJs($js);
        }
    }
}
