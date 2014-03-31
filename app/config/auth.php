<?php
/**
 * User: Alexandr
 * Date: 27.03.14
 * Time: 22:06
 */
return array(

    /* Разрешения */

    'adminPanel' => array(
        'type' => 0,    //CAuthItem::TYPE_OPERATION
        'description' => 'Доступ в админ панель',
        'bizRule' => null,
        'data' => null
    ),

    // Module User
        'indexUserAdmin' => array(
            'type' => 0,
            'description' => 'Доступ к списку пользователей',
            'bizRule' => null,
            'data' => null
        ),
        'viewUserAdmin' => array(
            'type' => 0,
            'description' => 'Доступ к просмотру пользователя',
            'bizRule' => null,
            'data' => null
        ),
        'createUserAdmin' => array(
            'type' => 0,
            'description' => 'Доступ к созданию пользователей',
            'bizRule' => null,
            'data' => null
        ),
        'updateUserAdmin' => array(
            'type' => 0,
            'description' => 'Доступ к редактированию пользователей',
            'bizRule' => null,
            'data' => null
        ),
        'adminUserAdmin' => array(
            'type' => 0,
            'description' => 'Доступ к управлению пользователей',
            'bizRule' => null,
            'data' => null
        ),
        'deleteUserAdmin' => array(
            'type' => 0,
            'description' => 'Доступ к удалению пользователей',
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
            3 => 'viewUserAdmin'
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