<?php namespace CaydenSimler\Craigslist;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerFormWidgets() {
        return [
            'CaydenSimler\Craigslist\FormWidgets\Subcategorybox' => [
                'label' => 'Subcategorybox field',
                'code' => 'subcategorybox'
            ]
        ];
    }

    public function registerSettings()
    {
    }


}
