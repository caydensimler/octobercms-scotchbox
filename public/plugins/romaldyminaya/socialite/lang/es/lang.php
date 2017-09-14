<?php

return [
    'plugin'      => [
        'name'        => 'Socialite',
        'description' => 'Inicio de sesión utilizando la Apis de Facebook, Github, Google para OctoberCMS',
    ],

    'settings'    => [
        'automatic_label'       => 'Redireccionamiento automático',
        'automatic_comment'     => 'Si activa esta funcionalidad, el usuario sera redireccionado a la página que se encontraba al momento de intentar realizar el inicio de sesión.',
        'menu_label'            => 'Llaves para Socialite',
        'menu_description'      => 'Configura las API keys de los proveedores para ser usadas por el plugin Socialite.',
        'social'                => 'Social',
        'client_id_label'       => 'App ID',
        'client_id_comment'     => 'Código único de la aplicación.',
        'client_secret_label'   => 'App Secret',
        'client_secret_comment' => 'Llave secreta de la aplicación.',
        'activated'             => 'Activado?',
        'activated_comment'     => 'Utilice esta casilla para activar o desactivar la configuración.',
        'github_tab'            => 'GitHub',
        'facebook_tab'          => 'Facebook',
        'google_tab'            => 'Google',
        'twitter_tab'           => 'Twitter',
        'keywords'              => 'social login facebook google twitter github',
        'redirect_label'        => 'Registro Exitoso',
        'redirect_comment'      => 'Página a la cual se desea redireccionar al usuario luego de que el proceso de registro de sesión se haya efectuado satisfactoriamente.',
        'scope_label'           => 'Scopes (Avanzado)',
        'scope_comment'         => 'Dejar en blanco para usar los definidos por defecto.',
        'github_scope_doc'      => 'Documentación [https://developer.github.com/v3/oauth/#scopes]',
        'facebook_scope_doc'    => 'Documentación [https://developers.facebook.com/docs/facebook-login/permissions/v2.3]',
        'google_scope_doc'      => 'Documentación [https://developers.google.com/+/web/api/rest/oauth]',
        'callback_url_label'    => 'Callback URL',
        'callback_url_comment'  => 'La URL al a cual el proveedor redireccionará el usuario luego de haberle dado acceso a la aplicación.',
    ],

    'loginbutton' => [
        'name'        => 'Botones de Inicio',
        'description' => 'Inserta los botones configurados para realizar el inicio de sesión con los proveedores sociales.'
    ],

    'list'        => [
        'social_provider' => 'Proveedor Social'
    ]
];
