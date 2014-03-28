<?php

return CMap::mergeArray(
    require(dirname(__FILE__).'/main.php'),
    array(
        'components' => array(
            'db'=>array(
                'class' => 'system.db.CDdConnection',
                'connectionString' => 'mysql:host=zaryavlz.ru;dbname=',
                'emulatePrepare' => true,
                'username' => '',
                'password' => '',
                'charset' => 'utf8',
                'schemaCachingDuration' => 60*60,
            ),
            'log' => array(
                'class' => 'CLogRouter',
                'routes' => array(
                    array(
                        'class' => 'CFileLogRoute',
                        'levels' => 'error, warning',
                    ),
                ),
            ),
            'session' =>array(
                'class' => 'CCacheHttpSession',
            ),
        ),
    )
);