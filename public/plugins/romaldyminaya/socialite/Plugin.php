<?php namespace RomaldyMinaya\Socialite;

use App;
use Backend;
use System\Classes\PluginBase;
use Illuminate\Foundation\AliasLoader;
use RainLab\User\Controllers\Users as UsersController;
use Illuminate\Support\Facades\Log;

/**
 * Socialite Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * @var boolean Determine if this plugin should have elevated privileges.
     */
    public $elevated = true;

    /**
     * @var array Plugin dependencies
     */
    public $require = ['RainLab.User','October.Drivers'];

    /**
     * @var array Plugin configured social providers
     */
    public static $providers = ['google', 'facebook', 'github'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'romaldyminaya.socialite::lang.plugin.name',
            'description' => 'romaldyminaya.socialite::lang.plugin.description',
            'author'      => 'Romaldy Minaya',
            'icon'        => 'icon-sign-in',
            'homepage'    => 'https://github.com/romaldyminaya'
        ];
    }

    public function boot()
    {
        if(!$this->dependenciesExist())
        {
            return;
        }

        UsersController::extendFormFields(function($widget, $model, $context) {
            
            if (!$model instanceof \RainLab\User\Models\User) return;

            $widget->addTabFields([
                'rs_provider' => [
                    'label'   => 'romaldyminaya.socialite::lang.list.social_provider',
                    'tab'     => 'romaldyminaya.socialite::lang.plugin.name',
                    'span'    => 'left',
                    'disabled'  => true
                ]
            ], 'primary');
        });

        UsersController::extendListColumns(function($widget, $model) {
            if (!$model instanceof \RainLab\User\Models\User) return;

            $widget->addColumns([
                'social_login' => [
                    'label'      => 'romaldyminaya.socialite::lang.list.social_provider',
                    'select'     => 'rs_provider',
                    'searchable' => true
                ]
            ]);
        });
    }

    public function register()
    {
        App::register('Laravel\Socialite\SocialiteServiceProvider');

        $alias = AliasLoader::getInstance();
        $alias->alias('Socialite', 'Laravel\Socialite\Facades\Socialite');
    }

    public function registerComponents()
    {
        return [
            'RomaldyMinaya\Socialite\Components\LoginButton'       => 'socialiteLoginbuttons'
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'romaldyminaya.socialite::lang.settings.menu_label',
                'description' => 'romaldyminaya.socialite::lang.settings.menu_description',
                'category'    => 'romaldyminaya.socialite::lang.settings.social',
                'icon'        => 'icon-key',
                'class'       => 'RomaldyMinaya\Socialite\Models\Settings',
                'order'       => 500,
                'permissions' => ['rainlab.users.*'],
                'keywords'    => 'romaldyminaya.socialite::lang.settings.keywords'
            ]
        ];
    }

    public function registerMarkupTags()
    {
        return [
            'functions' => [
                'route' => [$this, 'signInRoute'],
            ]
        ];
    }

    /**
     * Return the sign in route for the specified provider
     */
    public function signInRoute($provider)
    {
        return route('socialiteSignIn',$provider);
    }

    protected function dependenciesExist()
    {
        if (!class_exists('RainLab\User\Controllers\Users')) {
            Log::notice('Need to install RainLab.User dependency');
            Log::notice('Need to install October.Drivers dependency');
            
            return false;
        }else{
            return true;
        }
    }
}