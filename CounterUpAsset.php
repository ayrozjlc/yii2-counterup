<?php
namespace ayrozjlc\counterup;

use yii\web\AssetBundle;

class CounterUpAsset extends AssetBundle
{
    public $sourcePath = '@vendor/ayrozjlc/yii2-counterup/js';
    public $js = [
        'counter_init.js'
    ];

    public $depends = [
        'ayrozjlc\counterup\InitAsset'
    ];
}