<?php
namespace promo\icons;

use yii\web\AssetBundle;

class IconsAsset extends AssetBundle
{
    public $sourcePath = "@promo/icons/iconfont";
    public $css = [
        'material-icons.css'
    ];
}