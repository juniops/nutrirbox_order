<?php

namespace common\angle_theme;

use yii\web\AssetBundle;

class AngleAsset extends AssetBundle
{
    public $sourcePath = '@common/angle_theme';
    public $js = [
        'vendor/modernizr/modernizr.custom.js',
        'vendor/popper.js/dist/umd/popper.js',
        'vendor/bootstrap/dist/js/bootstrap.js',
        'vendor/js-storage/js.storage.js',
        'vendor/jquery.easing/jquery.easing.js',
        'vendor/animo/animo.js',
        'vendor/screenfull/dist/screenfull.js',
        'vendor/jquery-localize/dist/jquery.localize.js',
        'js/app.js',
    ];
    public $css = [
        'vendor/font-awesome/css/font-awesome.css',
        'vendor/simple-line-icons/css/simple-line-icons.css',
        'vendor/animate.css/animate.css',
        'vendor/whirl/dist/whirl.css',
        'vendor/bootstrap/dist/css/bootstrap.css',
        'css/app.css'
    ];
    public $depends = [
    ];
}

