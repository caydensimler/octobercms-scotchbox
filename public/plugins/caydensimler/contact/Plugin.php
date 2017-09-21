<?php namespace CaydenSimler\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase {


    public function registerComponents() {
    	return [
    		'CaydenSimler\Contact\Components\ContactForm' => 'contactForm'
    	];
    }

    public function registerSettings() {

    }
}
