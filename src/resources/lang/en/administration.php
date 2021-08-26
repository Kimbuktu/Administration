<?php

return [
    'name' => 'Administration',
    'menu' => [
        'overview' => 'Overview',
        'users' => '{0} Users|{1} User|[2,*] Users|',
        'roles' => '{0} Roles|{1} Role|[2,*] Roles',
        'permissions' => '{0} Permissions|{1} Permission|[2,*] Permissions',
        'settings' => '{0} Settings|{1} Setting|[2,*] Settings',
    ],
    'notifications' => [
        'notification' => '{0} Notifications|{1} Notification|[2,*] Notifications',
        'information' => '{0} Notices|{1} Notice|[2,*] Notices',
        'warning' => '{0} Warnings|{1} Warning|[2,*] Warnings',
        'error' => '{0} Errors|{1} Errors|[2,*] Errors'
    ],
    'overview' => [
        'title' => 'Welcome to the Overview of the Administration',
        'subtitle' => 'This view should be checked regularly',
        'introduction' => 'Here you will find all <span class="px-2 rounded-lg bg-blue-500 text-white"> :Information </span>, <span class="px-2 rounded-lg bg-yellow-500 text-white">:Warning</span> and <span class="px-2 rounded-lg bg-red-500 text-white">:Error</span> of the system',
        'something_wrong' => 'If something is wrongly set or other problems arise, you will be informed here.'
    ]
];