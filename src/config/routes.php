<?php


$routes = [
    // Home
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

    // Login / Signup

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



    // Account

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
        'Route' => 'Account/Customization',
        'Controller' => 'Account',
        'Action' => 'Customization',
        'View' => 'Customization/Index',
        'Middlewares' => [
            'Auth'
        ]
    ],

    [
        'Route' => 'Account/Security',
        'Controller' => 'Account',
        'Action' => 'Security',
        'View' => 'Security/Index',
        'Middlewares' => [
            'Auth'
        ]
    ],



    [
        'Route' => 'Account/Security/Sessions',
        'Controller' => 'Account',
        'Action' => 'Security_Sessions',
        'View' => 'Security/Sessions/Index',
        'Middlewares' => [
            'Auth'
        ]
    ],

    [
        'Route' => 'Account/Security/Sessions/About',
        'Controller' => 'Account',
        'Action' => 'Security_Sessions_About',
        'View' => 'Security/Sessions/About',
        'Middlewares' => [
            'Auth'
        ]
    ],

    [
        'Route' => 'Account/Security/Sessions/Close',
        'Controller' => 'Account',
        'Action' => 'Security_Sessions_Close',
        'Middlewares' => [
            'Auth'
        ]
    ],

    [
        'Route' => 'Account/Security/Sessions/Close_All',
        'Controller' => 'Account',
        'Action' => 'Security_Sessions_Close_All',
        'Middlewares' => [
            'Auth'
        ]
    ],





    [
        'Route' => 'Account/Security/Password/Reset',
        'Controller' => 'Account',
        'Action' => 'Security_Password_Reset',
        'View' => 'Security/Password/Reset',
        'Middlewares' => [
            'Auth'
        ]
    ],

    [
        'Route' => 'Account/Security/Password/ResetPOST',
        'Controller' => 'Account',
        'Action' => 'Security_Password_ResetPOST',
        'Middlewares' => [
            'Auth'
        ]
    ],


    [
        'Route' => 'Account/Stats',
        'Controller' => 'Account',
        'Action' => 'Stats',
        'View' => 'Stats',
        'Middlewares' => [
            'Auth'
        ]
    ],

    [
        'Route' => 'Account/Logout',
        'Controller' => 'Account',
        'Action' => 'Logout',
        'Middlewares' => [
            'Auth'
        ]
    ],

    






    //API
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
