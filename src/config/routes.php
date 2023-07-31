<?php


$routes = [
    [
        'Route' => '',
        'Controller' => 'Home',
        'Action' => 'Index',
        'Layout' => 'Default',
        'View' => 'Index',
        'Title' => 'Главная',
        'Middlewares' => [
            'Auth'
        ]
    ],


    [
        'Route' => 'Signup',
        'Controller' => 'Auth',
        'Action' => 'SendMail',
    ],

    [
        'Route' => 'Signup/Confirm',
        'Controller' => 'Auth',
        'Action' => 'CheckToken',
    ],
   

];

return $routes;
