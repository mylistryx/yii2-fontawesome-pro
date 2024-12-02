<?php

namespace yii\fontawesome\assets;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/dist';

    public $css = [
        'css/all.css',
    ];

    public $js = [
        'js/all.js',
    ];

    public $publishOptions = [
        'only' => [
            'css/*',
            'js/*',
            'webfonts/*',
        ],
    ];
}
