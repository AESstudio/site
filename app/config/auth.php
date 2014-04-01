<?php
/**
 * User: Alexandr
 * Date: 27.03.14
 * Time: 22:06
 */
$moduleUser = require(dirname(__FILE__).'/authModule/moduleUser.php');
$moduleVizitka = require(dirname(__FILE__).'/authModule/moduleVizitka.php');

$auth = array(

    /* Разрешения */

    'adminPanel' => array(
        'type' => 0,    //CAuthItem::TYPE_OPERATION
        'description' => 'Доступ в админ панель',
        'bizRule' => null,
        'data' => null
    ),


    /* Роли */
    'guest' => array(
        'type' => 2,    //TYPE_ROLE
        'description' => 'Гость',
        'bizRule' => null,
        'data' => null
    ),
    0 => array(
        'type' => 2,
        'description' => 'Пользователь',
        'bizRule' => null,
        'data' => null,
        'children' => array(
            0 => 'guest', // унаследуемся от гостя
        ),
    ),
    3 => array(
        'type' => 2,
        'description' => 'Модератор',
        'bizRule' => null,
        'data' => null,
        'children' => array(
            0 => 0,
            1 => 'adminPanel',
            2 => 'indexUserAdmin',
            3 => 'viewUserAdmin',
            4 => 'indexVizitkaAdmin',
            5 => 'viewVizitkaAdmin',
            6 => 'createVizitkaAdmin',
            7 => 'updateVizitkaAdmin',
            8 => 'adminVizitkaAdmin',
            9 => 'deleteVizitkaAdmin'
        ),
    ),
    1 => array(
        'type' => 2,
        'description' => 'Администратор',
        'bizRule' => null,
        'data' => null,
        'children' => array(
            0 => 3,
            1 => 'createUserAdmin',
            2 => 'updateUserAdmin',
            3 => 'adminUserAdmin',
            4 => 'deleteUserAdmin'
        ),
    ),
    2 => array(
        'type' => 2,
        'description' => 'Супер Администратор',
        'bizRule' => null,
        'data' => null,
        'children' => array(
            0 => 1,
        ),
    ),
);

$result = array_merge(
    $moduleUser,
    $moduleVizitka,
    $auth
);

return $result;