<?php

return [

    //The key/name that is used for laravel's internal naming. You can change this if you want/need to. 
    //You will only need this when you call specific commands or referre manually to some views, translations or commands in code.
    'key' => 'admin',

    //If 'Active' is true this package will enable all provided routes and features. If 'Active' is false this package will do nothing except looking fancy.
    'active' => true,

    //The route that directs to the administration panel. You may change this if you want to. Will be automatically turned to lowercase so don't even try :-D
    'route' => 'administration',

    //Definition of the required models for further usage in the packge. You may wanna change these if you have custom ones.
    'models' => [
        'user' => \App\Models\User::class,
        'role' => \Spatie\Permission\Models\Role::class,
        'permission' => \Spatie\Permission\Models\Permission::class,
    ],

    //A list of all roles this package will recognise and create on setup if not existing already somehow.
    //Every role listed below will have it's own preset of permissions being generated during setup.
    //The first entry in this list is automatically assigned administrator rights
    'roles' => [
        'Admin',
        'User'
    ]
];