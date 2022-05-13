<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "/app/css/bootstrap-scss/bootstrap-grid.min.css",
        "/app/libs/slick/slick.css",
        "/app/libs/wow/css/libs/animate.css",
        "/app/css/style.min.css",
        "/app/css/media.min.css",
        "/app/libs/fancybox/jquery.fancybox.min.css"
        ];
    public $js = [
        "/app/libs/jquery/jquery.min.js",
        "/app/libs/slick/slick.min.js",
        "/app/libs/wow/dist/wow.min.js",
        "/app/libs/wow/dist/wow.min.js",
        "/app/libs/jquery.svg.package/jquery.svg.js",
        "/app/libs/jquery.svg.package/jquery.svgdom.js",
        "https://unpkg.com/sweetalert/dist/sweetalert.min.js",
        "/app/js/map.js",
        "/app/js/message.js",
        "/app/js/main.js",
        "libs/fancybox/jquery.fancybox.min.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
