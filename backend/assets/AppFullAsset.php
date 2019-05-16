<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppFullAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "assets/plugins/datatables/dataTables.buttons.min.css",
        "assets/plugins/datatables/buttons.bootstrap.min.css",
        "assets/plugins/datatables/responsive.bootstrap.min.css",

    ];
    public $js = [
        "assets/plugins/datatables/jquery.dataTables.min.js",


    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
