<?php

return array(

    'login'=>'user/login',
    'logout'=>'user/login/logout',
    'register'=>'user/register/register',
    'admin'=>'admin/default/index',
    'sitemap.xml'=>'sitemap/default/index',

    // Административный раздел
    'admin/<module:\w+>'=>'<module>/admin/default',
    'admin/<module:\w+>/<controller:\w+>'=>'<module>/admin/<controller>',
    'admin/<module:\w+>/<controller:\w+>/<action:\w+>'=>'<module>/admin/<controller>/<action>',
    'admin/<module:\w+>/<controller:\w+>/<action:\w+>/*'=>'<module>/admin/<controller>/<action>',
);