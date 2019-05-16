<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets/css/bootstrap.min.css',
        'assets/css/core.css',
        'assets/css/components.css',
        'assets/css/icons.css',
        'assets/css/pages.css',
        'assets/css/menu.css',
        'assets/css/responsive.css',
        'assets/js/modernizr.min.js',
    ];
    public $js = [
//        "assets/js/bootstrap.min.js",
        "assets/js/detect.js",
        "assets/js/fastclick.js",

        "assets/js/jquery.slimscroll.js",
        "assets/js/jquery.blockUI.js",
        "assets/js/waves.js",
        "assets/js/wow.min.js",
        "assets/js/jquery.nicescroll.js",
        "assets/js/jquery.scrollTo.min.js",

        "assets/plugins/jquery-knob/jquery.knob.js",

        "assets/plugins/raphael/raphael-min.js",


        "assets/js/jquery.core.js",
        "assets/js/jquery.app.js",
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
