<?php
namespace promo-pr\icons;

use yii\web\AssetBundle;

class IconsAsset extends AssetBundle
{
    public $sourcePath = "@promo-pr/icons/iconfont";
    public $css = [
        'material-icons.css'
    ];
}