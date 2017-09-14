<?php

App::before(function ($request) {

    /*
     * Defines the entry point to be used by the Socialite Plugin
     */
    Route::get('rs/socialite/{provider}/auth/login', [
        'as' => 'socialiteSignIn', 
        'uses' => 'RomaldyMinaya\Socialite\Http\Controllers\AuthController@execute'
    ]);

    /*
     * Defines callback url
     */
    Route::get('rs/socialite/{provider}/auth/callback', [
        'as' => 'socialiteCallback', 
        'uses' => 'RomaldyMinaya\Socialite\Http\Controllers\AuthController@callback'
    ]);
});