<?php namespace CaydenSimler\Craigslist\FormWidgets;

use Backend\Classes\FormWidgetBase;
use Config;
use CaydenSimler\Craigslist\Models\Subcategory;

class SubcategoryBox extends FormWidgetBase {

	public function widgetDetails() {
		return [
			'name' => 'Subcategorybox',
			'description' => 'Field for adding subcategories.'
		];
	}

	public function render() {

		$this->prepareVars();
		// dump($this->vars['selectedValues']);

		return $this->makePartial('widget');

	}

	public function prepareVars(){
		$this->vars['id'] = $this->model->id;
		$this->vars['subcategories'] = Subcategory::all()->lists('subcategory', 'id');
		$this->vars['name'] = $this->formField->getName().'[]';

		if(!empty($this->getLoadValue())) {
			$this->vars['selectedValues'] = $this->getLoadValue();
		} else {
			$this->vars['selectedValues'] = [];
		}

	}

	public function slugify($text) {
		$text = preg_replace('~[^\pL\d]+~u', '-', $text);
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
		$text = preg_replace('~[^-\w]+~', '', $text);
		$text = str_replace("/", "\\\\", $text);
		$text = trim($text, '-');
		$text = preg_replace('~-+~', '', $text);
		$text = strtolower($text);
		if (empty($text)) {
			return 'n-a';
		}
		return $text;
	}

	public function getSaveValue($subcategories){

		$newArray = [];
		foreach ((array) $subcategories as $subcategoryID) {
			
			if (!is_numeric($subcategoryID)) {
				$newSubcategory = new Subcategory;

				$newSubcategory->subcategory = $subcategoryID;
				$newSubcategory->slug = $this->slugify($subcategoryID);
				$newSubcategory->save();
				$newArray[] = $newSubcategory->id;
			} else {
				$newArray[] = $subcategoryID;
			}

		}

		return $newArray;
	}

	public function loadAssets() {

		$this->addCss('css/select2.css');
		$this->addJs('js/select2.js');

	}



}