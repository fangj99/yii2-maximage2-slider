Widget for MaxImage2
====================
http://www.aaronvanderzwan.com/maximage/

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist insolita/yii2-maximage2slider-widget "*"
```

or add

```
"insolita/yii2-maximage2slider-widget": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= echo \insolita\maximage2slider\MaximageWidget::widget([
            'selector'=>'#maximage',
            'sliderOptions'=>['backgroundSize'=>"contain",
                'cycleOptions'=>[
                    'fx'=>'fadeZoom',
                    'speed'=>800,
                    'timeout'=>5000,
                    'pause'=>1,
                    'prev'=> '#arrow_left',
                    'next'=> '#arrow_right',
                    'pager'=> '#cycle-nav ul',
                    'pagerAnchorBuilder'=>new \yii\web\JsExpression('function(idx, slide){
                    var imgsrc = jQuery.Slides[idx].url;
                    return \'<li><a href="#" rel="nofollow"><img src=\' + imgsrc.replace("big","cover") + \' width="60" /></a></li>\';
                }')
                ],
                'onFirstImageLoaded'=>new \yii\web\JsExpression("function() {
                jQuery('#maximage').fadeIn('fast');
            }")
            ]
        ]); ?>
```