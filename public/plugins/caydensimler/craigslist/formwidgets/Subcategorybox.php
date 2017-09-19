<?php namespace CaydenSimler\Craigslist\FormWidgets;

use Backend\Classes\FormWidgetBase;
use Config;

class SubcategoryBox extends FormWidgetBase {

	public function widgetDetails() {
		return [
			'name' => 'Subcategorybox',
			'description' => 'Field for adding sub categories.'
		];
	}

	public function render() {
		return $this->makePartial('widget');
	}


	public function loadAssets() {
		$this->addCss('css/select2.css');
		$this->addJs('js/select2.js');
	}


}