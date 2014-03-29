<?php

return array(
    ''=>'site/index',
    'login'=>'user/login',
    'logout'=>'user/login/logout',
    'register'=>'user/register',
    'admin/<module:\w+>'=>'<module>/admin/default',
    'admin/<module:\w+>/<controller:\w+>'=>'<module>/admin/<controller>',
    'admin/<module:\w+>/<controller:\w+>/<action:\w+>'=>'<module>/admin/<controller>/<action>',
    'admin/<module:\w+>/<controller:\w+>/<action:\w+>/*'=>'<module>/admin/<controller>/<action>',
);