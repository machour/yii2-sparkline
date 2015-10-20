<?php
/**
 * @link https://github.com/machour/yii2-sparkline
 * @license http://opensource.org/licenses/MIT
 */

namespace machour\sparkline;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;


/**
 * Sparkline
 *
 * @author Mehdi Achour <machour@gmail.com>
 */
class Sparkline extends Widget
{
    /**
     * @var array the HTML attributes for the widget container tag.
     */
    public $options = [];
    /**
     * @var array the options for the underlying Sparkline jQuery plugin.
     * Refer to the [Sparkline documentation](http://omnipotent.net/jquery.sparkline/#s-docs)
     * for a list of possible options.
     */
    public $clientOptions = [];
    /**
     * @var string the tag to generate
     */
    public $tag = 'span';
    /**
     * @var array the data to be displayed
     */
    public $data = [];


    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        echo Html::tag($this->tag, null, $this->options);
        $this->registerClientScript();
    }

    /**
     * Registers the required js files and script to initialize Sparkline
     */
    protected function registerClientScript()
    {
        $id = $this->options['id'];

        SparklineAsset::register($this->view);

        $this->view->registerJs(sprintf('$("#%s").sparkline(%s, %s)',
            $id,
            Json::encode($this->data),
            !empty($this->clientOptions) ? Json::encode($this->clientOptions) : '{}'
        ));
    }

}
