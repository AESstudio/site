<?php

return CMap::mergeArray(
    require(dirname(__FILE__).'/main.php'),
    array(
        'modules'=>array(
            'gii'=>array(
                'class'=>'system.gii.GiiModule',
                'password'=>false,
                'ipFilters'=>array('127.0.0.1','::1'),
                'generatorPaths'=>array(
                    'bootstrap.gii',
                ),
            ),
        ),
        'components' => array(
            'db'=>array(
                'connectionString' => 'mysql:host=localhost;dbname=yii',
                'emulatePrepare' => true,
                'username' => 'root',
                'password' => 'pass123',
                'charset' => 'utf8',
                'enableProfiling' => true,
                'enableParamLogging' => true,
            ),
            'log'=>array(
                'class'=>'CLogRouter',
                'routes'=>array(
                    array(
                        // направляем результаты профайлинга в ProfileLogRoute (отображается
                        // внизу страницы)
                        'class'=>'CProfileLogRoute',
                        'levels'=>'profile',
                        'enabled'=>true,
                    ),
                ),
            ),
        ),
    )
);