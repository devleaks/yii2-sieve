<?php

namespace devleaks\sieve;

use yii\web\AssetBundle;

/**
 * @author Pierre M <devleaks.be@gmail.com>
 * @since 1.0
 */
class SieveAsset extends AssetBundle
{
    public $sourcePath = '@vendor/devleaks/yii2-sieve/dist/';

    public $js = [
        'jquery.sieve.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
