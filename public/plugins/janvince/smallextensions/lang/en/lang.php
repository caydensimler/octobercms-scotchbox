<?php

return [
    'plugin' => [
        'name' => 'Small Extensions',
        'description' => 'Extensions for Rainlab Blog and Pages',
        'category' => 'Small plugins',
    ],
    'labels' => [
        'wysiwyg_section' => 'WYSIWYG editor',
        'enable_wysiwyg' => 'Enable WYSIWYG editor for Rainlab.Blog plugin?',
        'enable_wysiwyg_description' => 'Replace default Markdown editor with Richtext.',
        'enable_wysiwyg_toolbar' => 'Custom editor toolbar buttons (leave blank for default set)',
        'enable_wysiwyg_toolbar_description' => '<p><small>Here you can change editor toolbar buttons. <a href="https://octobercms.com/docs/backend/forms#widget-richeditor" target="_blank">Look at avalable types.</a> Or you can try to <a href="https://www.froala.com/wysiwyg-editor/examples/custom-buttons" target="_blank">define your own custom buttons.</a></small></p>',
        'enable_featured_image' => 'Post featured image from media manager',
        'enable_featured_image_description' => 'Replace original featured images upload field with one selectable from Media manager. Twig: {{post.custom_fields.featured_image|media}}.',
        'enable_featured_image_meta' => 'Add title and description to image',
        'enable_featured_image_meta_description' => 'Twig: Title:{{post.custom_fields.featured_image_title|media}}, Description: {{post.custom_fields.featured_image_alt|media}}.',
        'enable_menu_notes' => 'Enable Menu notes',
        'enable_menu_notes_description' => 'Add a new Notes tab and field to Static Pages Menu items.',

        'enable_menu_image' => 'Enable Menu image',
        'enable_menu_image_description' => 'Allows to add image.',
        'enable_menu_color' => 'Enable Menu color',
        'enable_menu_color_description' => 'Allows to set color.',

        'enable_blog_author' => 'Enable change of post author',
        'enable_blog_author_description' => 'If checked, dropdown with list of activated administrators will be added to blog post form',

        'author' => 'Author',
        'author_comment' => 'Set author of this post',
        'author_empty' => 'Not set',


        'static_pages_section' => 'Extra fields',

        'hide_content' => 'Hide Content tab',
        'hide_content_description' => 'Hides Content tab when editing Static Page. Useful for those, who uses {variable} fields and are little bit confused with default secondary content tab.',

        'custom_fields_section' => 'Custom fields',
        'custom_fields_section_description' => '',

        'custom_fields_hint_title' => 'What are custom fields',
        'custom_fields_hint_line1' => 'Custom fields are added to Blog post edit page on <strong>More tab</strong>.',
        'custom_fields_hint_line2' => 'You can access custom fields values in Twig with eg. {{post.custom_fields.api_code}}.',
        'custom_fields_hint_line3' => 'You can easily <a target="_blank" href="https://octobercms.com/docs/plugin/localization#overriding">override custom fields names and comments</a>.',

        'custom_fields_hint_title2' => 'Limitations',
        'custom_fields_hint_line4' => 'Translation of labels is not working right now. I am looking for a solution.',

        'custom_fields_label' => 'Label for this field (to be used in Post form)',

        'custom_fields_api_code' => 'API code',
        'custom_fields_api_code_description' => '',

        'enable_custom_fields_api_code' => 'Add API code field',
        'enable_custom_fields_api_code_description' => 'Twig: {{post.custom_fields.api_code}}',

        'custom_fields_string' => 'Short text',
        'custom_fields_string_description' => '',
        'enable_custom_fields_string' => 'Add STRING',
        'enable_custom_fields_string_description' => 'Twig: {{post.custom_fields.string}}',

        'custom_fields_switch' => 'Switch',
        'custom_fields_switch_description' => '',
        'enable_custom_fields_switch' => 'Add SWITCH',
        'enable_custom_fields_switch_description' => 'Twig: {{post.custom_fields.switch}}',

        'custom_fields_datetime' => 'Date & Time',
        'custom_fields_datetime_description' => '',
        'enable_custom_fields_datetime' => 'Add DATE&TIME',
        'enable_custom_fields_datetime_description' => 'Twig: {{post.custom_fields.datetime}}',

        'custom_fields_image' => 'Image',
        'custom_fields_image_description' => '',
        'enable_custom_fields_image' => 'Add image',
        'enable_custom_fields_image_description' => 'Twig: {{post.custom_fields.featured_image|media}}',

        'pages_menu_items_hint_title' => 'Warning',
        'pages_menu_items_hint_line1' => 'There is a bug in Static pages plugin that prevents image to reapear after save and reopening of menu item.',
        'pages_menu_items_hint_line2' => 'Until fixed you can use <a target="_blank" href="https://github.com/rainlab/pages-plugin/pull/286">edited version of plugin</a>.',

        'custom_fields_featured_image' => 'Featured image',
        'custom_fields_featured_image_description' => '',

        'custom_fields_featured_image_title' => 'Featured image title',
        'custom_fields_featured_image_title_description' => '',
        'custom_fields_featured_image_alt' => 'Featured image description',
        'custom_fields_featured_image_alt_description' => '',

        'wysiwyg_section' => 'WYSIWYG editor',
        'media_section' => 'Media',
        'settings_section' => 'other settings',
        'custom_fields_section' => 'Custom fields',
        'menu_section' => 'Menu items',
        'static_page_section' => 'Page content',
        'server_info_section' => 'Server information',
        'twig_section' => 'Twig extensions',
        'twig_functions_allow' => 'Allow new functions',
        'twig_functions_allow_description' => 'Add new Twig functions. See documentation for detailed info.',

        'tab_blog' => 'Blog',
        'tab_blog_fields' => 'Blog custom fields',
        'tab_static_pages' => 'Static Pages',
        'tab_content' => 'Content',
        'tab_media' => 'Media',
        'tab_other' => 'Other',
        'tab_custom_fields' => 'Custom fields',
        'tab_system' => 'System info',
        'tab_twig' => 'Twig',

        'php_info_box' => 'PHP info',

    ],
    'blog' => [
        'label' => 'Blog',
        'description' => 'Extensions for Rainlab.Blog.',
    ],
    'static_menu' => [
        'notes' => 'Notes',
    'image' => 'Image',
    'color' => 'Color',
        'add_note' => 'Add a note to this menu item',
        'add_note_comment' => 'Add note to this menu item. It will be accessible from page/layout with: {{item.viewBag.note}}.',
        'add_image' => 'Add an image',
    'add_image_comment' => 'Saved image will not be shown here!',
        'add_color' => 'Add a color',
        'add_color_comment' => '',
    ],
    'permissions' => [
        'settings_tab' => 'Small Extensions',
        'settings_description' => 'Manage backend preferences.',
    ],
    'tabs' => [
        'custom_fields' => 'More',
    ]
];
