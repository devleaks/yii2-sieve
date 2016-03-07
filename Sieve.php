<?php

namespace devleaks\sieve;

use yii\base\InvalidConfigException;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\base\Widget;

/**
 * Sieve Widget based on Sieve jQuery plugin {@link http://rmm5t.github.io/jquery-sieve/)
 * @package devleaks\sieve
 *
 * @author Pierre M <devleaks.be@gmail.com>
 */
class Sieve extends Widget {
    /**
     * @var array the HTML attributes for the div tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [];

    /**
     * @var array Plugin options
     */
    public $pluginOptions = [
        'itemSelector' => 'div'
	];

	/**
	 * Initializes the object.
	 * This method is invoked at the end of the constructor after the object is initialized with the
	 * given configuration.
	 */
	public function init()
	{
	    //checks for the element id
	    if (!isset($this->options['id'])) {
	        $this->options['id'] = $this->getId();
	    }
	    parent::init();
	}

    /**
     * Render chosen select
     * @return string|void
     */
    public function run()
    {
        $this->registerAssets();
    }

    /**
     * Register client assets
     */
    protected function registerAssets()
    {
        $view = $this->getView();
        SieveAsset::register($view);
        $js = '$("#' . $this->options['id'] . '").sieve(' . $this->getPluginOptions() . ');';
        $view->registerJs($js, $view::POS_END);
    }

    /**
     * Return plugin options in json format
     * @return string
     */
    public function getPluginOptions()
    {
        return Json::encode($this->pluginOptions);
    }
}