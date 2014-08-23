<?php
/**
 * Created by PhpStorm.
 * User: Insolita
 * Date: 23.08.14
 * Time: 14:37
 */

namespace insolita\maximage2slider;


use yii\web\AssetBundle;

class MaximageAsset extends AssetBundle{
    public $sourcePath = '@vendor/insolita/yii2-maximage2slider-widget/assets/lib';

    public $css = [];
    public $js=[];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function  init(){
        $this->js[] = YII_DEBUG ? 'js/jquery.cycle.all.js' : 'js/jquery.cycle.all.min.js';
        $this->js[] = YII_DEBUG ? 'js/jquery.maximage.js' : 'js/jquery.maximage.min.js';
        $this->css[] = YII_DEBUG ? 'css/jquery.maximage.css' : 'css/jquery.maximage.min.css';
    }
} 