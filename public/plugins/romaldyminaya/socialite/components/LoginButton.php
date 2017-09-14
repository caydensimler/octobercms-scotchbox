<?php namespace RomaldyMinaya\Socialite\Components;

use Cms\Classes\ComponentBase;
use RomaldyMinaya\Socialite\Models\Settings;

class LoginButton extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'romaldyminaya.socialite::lang.loginbutton.name',
            'description' => 'romaldyminaya.socialite::lang.loginbutton.description'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->addCss('assets/css/bootstrap-social.css');
        $this->addCss('assets/css/font-awesome.css');
        $this->prepareVars();
    }

    public function prepareVars()
    {
        $this->providers = $this->page['providers'] = Settings::instance()->toArray();
    }
}