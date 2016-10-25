<?php
namespace ayrozjlc\counterup;

use yii\web\AssetBundle;

class CounterUpAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $js = [
        'waypoints/lib/jquery.waypoints.min.js',
        'counterup/jquery.counterup.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}