<?php namespace RomaldyMinaya\Socialite\Models;

use Model;
use Cms\Classes\Page;
use Config;

/**
 * Settings Model
 */
class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'romaldyminaya_socialite_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    /**
     * Here we initialize the default data
     */
    public function initSettingsData()
    {        
        $providers = \RomaldyMinaya\Socialite\Plugin::$providers;

        foreach($providers as $provider)
        {
            $this->{$provider} = ['callback_url' => route('socialiteCallback', $provider)];
        }
    }

    public function getLoggedInRedirectOptions ()
    {
        return Page::getNameList();
    }

    public function facebookScopes ($keyValue = null, $fieldName = null)
    {
        return Config::get('romaldyminaya.socialite::scopes.facebook');
    }

    public function githubScopes ($keyValue = null, $fieldName = null)
    {
        return Config::get('romaldyminaya.socialite::scopes.github');
    }

    public function googleScopes ($keyValue = null, $fieldName = null)
    {
        return Config::get('romaldyminaya.socialite::scopes.google');
    }
}