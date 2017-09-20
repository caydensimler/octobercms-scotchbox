<?php namespace CaydenSimler\Craigslist\Components;

use Cms\Classes\ComponentBase;
use CaydenSimler\Craigslist\Models\Subcategory;

class Subcategories extends ComponentBase {

	public function componentDetails(){
		return [
			'name' => 'Subcategories list',
			'description' => 'List of subcategories'
		];
	}

	public function defineProperties(){
		return [
			'results' => [
				'title' => 'Number of subcategories',
				'description' => 'How many subcategories do you want to display?',
				'default' => 0, 
				'validationPattern' => '^[0-9]+$',
				'validationMessage' => 'Only numbers allowed!'
			],

			'sortOrder' => [
				'title' => 'Sort subcategories',
				'description' => 'Sort the subcategories.',
				'type' => 'dropdown',
				'default' => 'name asc'
			]
		];
	}


	public function getSortOrderOptions() {
		return [
			'name asc' => 'Subcategory (ascending)',
			'name desc' => 'Subcategory (descending)'
		];
	}

	public function onRun(){
		$this->subcategories = $this->loadSubcategories();
	}

	protected function loadSubcategories() {
		$query = Subcategory::all();

		if($this->property('sortOrder') == 'name asc') {
			$query = $query->sortBy('subcategory');
		}		

		if($this->property('sortOrder') == 'name desc') {
			$query = $query->sortByDesc('subcategory');
		}



		if($this->property('results') > 0) {
			$query = $query->take($this->property('results'));
		}

		return $query;
	}




	public $subcategories;

}