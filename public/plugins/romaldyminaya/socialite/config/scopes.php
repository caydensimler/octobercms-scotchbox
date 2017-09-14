<?php 

/**
 * Social providers Scopes (Permissions)
 * github      https://developer.github.com/v3/oauth/#scopes
 * facebook    https://developers.facebook.com/docs/facebook-login/permissions/v2.3
 * google      https://developers.google.com/+/web/api/rest/oauth
 */
return [
    'facebook' => [
        'public_profile'            => 'public_profile',
        'user_friends'              => 'user_friends',
        'email'                     => 'email',
        'user_about_me'             => 'user_about_me',
        'user_actions.books'        => 'user_actions.books',
        'user_actions.fitness'      => 'user_actions.fitness',
        'user_actions.music'        => 'user_actions.music',
        'user_actions.news'         => 'user_actions.news',
        'user_actions.video'        => 'user_actions.video',
        'user_birthday'             => 'user_birthday',
        'user_education_history'    => 'user_education_history',
        'user_events'               => 'user_events',
        'user_games_activity'       => 'user_games_activity',
        'user_groups'               => 'user_groups',
        'user_hometown'             => 'user_hometown',
        'user_likes'                => 'user_likes',
        'user_location'             => 'user_location',
        'user_managed_groups'       => 'user_managed_groups',
        'user_photos'               => 'user_photos',
        'user_posts'                => 'user_posts',
        'user_relationships'        => 'user_relationships',
        'user_relationship_details' => 'user_relationship_details',
        'user_religion_politics'    => 'user_religion_politics',
        'user_status'               => 'user_status',
        'user_tagged_places'        => 'user_tagged_places',
        'user_videos'               => 'user_videos',
        'user_website'              => 'user_website',
        'user_work_history'         => 'user_work_history',
        'read_custom_friendlists'   => 'read_custom_friendlists',
        'read_insights'             => 'read_insights',
        'read_mailbox'              => 'read_mailbox',
        'read_page_mailboxes'       => 'read_page_mailboxes',
        'read_stream'               => 'read_stream',
        'manage_notifications'      => 'manage_notifications',
        'manage_pages'              => 'manage_pages',
        'publish_pages'             => 'publish_pages',
        'publish_actions'           => 'publish_actions'
    ],

    'github' => [
        'user'             => 'user',
        'user:email'       => 'user:email',
        'user:follow'      => 'user:follow',
        'public_repo'      => 'public_repo',
        'repo'             => 'repo',
        'repo_deployment'  => 'repo_deployment',
        'repo:status'      => 'repo:status',
        'delete_repo'      => 'delete_repo',
        'notifications'    => 'notifications',
        'gist'             => 'gist',
        'read:repo_hook'   => 'read:repo_hook',
        'write:repo_hook'  => 'write:repo_hook',
        'admin:repo_hook'  => 'admin:repo_hook',
        'admin:org_hook'   => 'admin:org_hook',
        'read:org'         => 'read:org',
        'write:org'        => 'write:org',
        'admin:org'        => 'admin:org',
        'read:public_key'  => 'read:public_key',
        'write:public_key' => 'write:public_key',
        'admin:public_key' => 'admin:public_key'
    ],

    'google' => [
        'plus.login'               => 'https://www.googleapis.com/auth/plus.login',
        'plus.profile.emails.read' => 'https://www.googleapis.com/auth/plus.profile.emails.read',
        'plus.me'                  => 'https://www.googleapis.com/auth/plus.me',
        'userinfo.profile'         => 'https://www.googleapis.com/auth/userinfo.profile',
        'userinfo.email'           => 'https://www.googleapis.com/auth/userinfo.email'
    ],
];