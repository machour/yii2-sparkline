<?php
/**
 * @link https://github.com/machour/yii2-sparkline
 * @license http://opensource.org/licenses/MIT
 */
namespace machour\sparkline;

use yii\web\AssetBundle;

/**
 *
 * SparklinePluginAsset
 *
 * @author Mehdi Achour <machour@gmail.com>
 */
class SparklineAsset extends AssetBundle
{
    public $sourcePath = '@bower/bower-jquery-sparkline/dist';

    public $js = ['jquery.sparkline.retina.js'];

    public $depends = [
        'yii\web\YiiAsset',
    ];

}
