<?php

namespace insolita\maximage2slider;

use yii\helpers\Json;

/**
 * This is just an example.
 */
class MaximageWidget extends \yii\base\Widget
{
    /**
     * @var string $selector jquery-selector
     **/
    public $selector;
    /**
     * @var array $sliderOptions  @see http://blog.aaronvanderzwan.com/2012/07/maximage-2-0/
     **/
    public $sliderOptions=[];
    public function init()
    {
        parent::init();
        $view = $this->getView();
        MaximageAsset::register($view);
        $script = '';
        $options =!empty($this->sliderOptions)?Json::encode($this->sliderOptions):'';
        $script .= "$('$this->selector').pgwSlider($options);" . PHP_EOL;
        $view->registerJs($script);
    }
}
