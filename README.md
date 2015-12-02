# clockpicker asset for Yii2
Yii2 wrapper for [clockpicker](https://github.com/weareoutman/clockpicker) (clock-like time picker) plugin.


## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
composer require --prefer-dist "faryshta/yii2-clockpicker:*"
```

or add

```
"faryshta/yii2-clockpicker": "*"
```

to the `require` section of your `composer.json` file.

If you want to use the Bootstrap ClockPicker you need to include the
`yiisoft/yii2-bootstrap` extension

```bash
composer require --prefer-dist "yiisoft/yii2-bootstrap:*"
```

or add

```
"yiisoft/yii2-bootstrap": "*"
```


## Usage

### Jquery

In the view file register the asset:

```php
use farystha\widgets\JqueryClockPicker;


// with ActiveForm
echo $form->field($model, 'attribute')->widget(JqueryClockPicker::className() [
    // extra configuration
]);

// without ActiveForm and with model.
echo JqueryClockPicker::widget([
    'model' => $person,
    'attribute' => 'gender',
]);

```

### Bootstrap

In the view file register the asset:

```php
use farystha\widgets\BootstrapClockPicker;


// with ActiveForm
echo $form->field($model, 'attribute')->widget(BootstrapClockPicker::className() [
    // extra configuration
]);

// without ActiveForm and with model.
echo BootstrapClockPicker::widget([
    'model' => $person,
    'attribute' => 'gender',
]);

```

## Documentation

This library doesn't define anything new, the widgets behavior is very similar to [\\yii\\bootstrap\\Widget](http://www.yiiframework.com/doc-2.0/yii-bootstrap-widget.html) which can be used as documentation for the widget classes.

The JS options can be passed using the `$clientOptions` property and the events
can be declared using the `$clientEvents` property. (The documentation on all the
options and events supported by clockpicker can be found here.)[http://weareoutman.github.io/clockpicker/]

## License

The BSD License (BSD). Please see [License File](LICENSE.md) for more information.
