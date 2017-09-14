<?php

return [
    'plugin'      => [
        'name'        => 'Socialite',
        'description' => 'Login using the Apis from Facebook, Github, Google for OctoberCMS',
    ],

    'settings'    => [
        'automatic_label'       => 'Automatic redirection',
        'automatic_comment'     => 'If you select this feature, the user will be redirected to the page that was at the time of logon is attempted.',
        'menu_label'            => 'Keys for Socialite',
        'menu_description'      => 'Configure the API keys of providers to be used by the Socialite plugin.',
        'social'                => 'Social',
        'client_id_label'       => 'App ID',
        'client_id_comment'     => 'Unique code of the application.',
        'client_secret_label'   => 'App Secret',
        'client_secret_comment' => 'The application secret key.',
        'activated'             => 'Enabled?',
        'activated_comment'     => 'Use this check box to enable or disable the setting.',
        'github_tab'            => 'GitHub',
        'facebook_tab'          => 'Facebook',
        'google_tab'            => 'Google',
        'twitter_tab'           => 'Twitter',
        'keywords'              => 'social login facebook google twitter github',
        'redirect_label'        => 'Successful registration',
        'redirect_comment'      => 'Page to which you want to redirect to the user once the meeting registration process has been carried out satisfactorily.',
        'scope_label'           => 'Scopes (Advanced)',
        'scope_comment'         => 'Leave blank to use the default.',
        'github_scope_doc'      => 'Documentation [https://developer.github.com/v3/oauth/#scopes]',
        'facebook_scope_doc'    => 'Documentation [https://developers.facebook.com/docs/facebook-login/permissions/v2.3]',
        'google_scope_doc'      => 'Documentation [https://developers.google.com/+/web/api/rest/oauth]',
        'callback_url_label'    => 'Callback URL',
        'callback_url_comment'  => 'The URL where the provider will redirect the user after giving access to the application.',
    ],

    'loginbutton' => [
        'name'        => 'Login buttons',
        'description' => 'Insert the configured buttons for login with social providers.'
    ],

    'list'        => [
        'social_provider' => 'Social Provider'
    ]
];
