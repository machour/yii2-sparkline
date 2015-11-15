The jQuery sparkline assets and widget for Yii2.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist machour/yii2-sparkline "*"
```

or add

```
"machour/yii2-sparkline": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \machour\sparkline\Sparkline::widget([
    'data' => [1, 2, 3],
    'clientOptions' => [
        'type' => 'pie',
    ],
]); ?>
```
