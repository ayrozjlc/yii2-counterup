# Yii2 Counter-Up

AssetBundle for jQuery Counter-Up Plugin https://github.com/NawaraGFX/Counter-Up

## Installation

####Composer

```
composer require --prefer-dist "ayrozjlc/yii2-counterup:*"
```

or add

```
"ayrozjlc/yii2-counterup": "dev-master"
```

to the ```require``` section of your `composer.json` file.

## Usage

in view (for example: ```@app/views/layouts/main.php```)

```php
// ...
use ayrozjlc\counterup\CounterUpAsset;
// ...
CounterUpAsset::register($this);
```

or add to your ```assets/AppAsset.php```

```php
public $depends = [
    // ...
    '\ayrozjlc\counterup\CounterUpAsset',
];
```

Add the class "counter" to the number that will be given the animation:

```php
<span class="counter"> 1000 </ span>
```
