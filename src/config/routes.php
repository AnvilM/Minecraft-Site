<?php


$routes = [
    [
        'Route' => '',
        'Controller' => 'Home',
        'Action' => 'Index',
        'Layout' => 'Default',
        'View' => 'Index',
        'Middlewares' => [
            'Guest'
        ]
    ],


    [
        'Route' => 'Signup',
        'Controller' => 'Auth',
        'Action' => 'SendMail',
        'Middlewares' => [
            'Guest'
        ]
    ],

    [
        'Route' => 'Signup/Confirm',
        'Controller' => 'Auth',
        'Action' => 'CheckToken',
        'Middlewares' => [
            'Guest'
        ]
    ],

    [
        'Route' => 'Login',
        'Controller' => 'Auth',
        'Action' => 'Login',
        'Middlewares' => [
            'Guest'
        ]
    ],


    [
        'Route' => 'Account',
        'Controller' => 'Account',
        'Action' => 'Index',
        'View' => 'Index',
        'Middlewares' => [
            'Auth'
        ]
    ],


    [
        'Route' => 'API/get.avatar',
        'Controller' => 'API',
        'Action' => 'get_avatar'
    ],

    [
        'Route' => 'API/get.skin',
        'Controller' => 'API',
        'Action' => 'get_skin'
    ],
   

];

return $routes;
