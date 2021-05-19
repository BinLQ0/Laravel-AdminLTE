<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Path Template
    |--------------------------------------------------------------------------
    */
    'templates' => [
        'sidebar'   => 'adminlte::layouts.sidebar',
        'navbar'    => 'adminlte::layouts.navbar',
        'footer'    => 'adminlte::layouts.footer',
    ],

    /*
    |--------------------------------------------------------------------------
    | Sidebar Menu
    |--------------------------------------------------------------------------
    */
    'menus' => [
        'header' => [
            'text' => 'PROFILE'
        ],
        'item' => [
            'text'  => 'Logout',
            'url'   => 'route("logout")',
            'icon'  => 'fas fa-sign-out-alt'
        ]
    ],
];
