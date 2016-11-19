<?php
namespace promo-pr\yii2-icons;

use yii\web\AssetBundle;

class IconsAsset extends AssetBundle
{
    public $sourcePath = "@promo-pr/icons/iconfont";
    public $css = [
        'material-icons.css'
    ];
}