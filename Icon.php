<?php

namespace promo\icons;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;

class Icon extends Html
{
    /**
     * Composes icon HTML for Google Material-icons.
     * @param string $name icon short name, for example: 'home'
     * @param array $options the tag options in terms of name-value pairs.
     * @return string icon HTML.
     * @see https://material.io/icons/
     */
    public static function name($name, $options = [])
    {
        $tag = ArrayHelper::remove($options, 'tag', 'i');
        $cssClass = ArrayHelper::remove($options, 'class', 'material-icons');
        static::addCssClass($options, $cssClass);
        return static::tag($tag, $name, $options);
    }
}
