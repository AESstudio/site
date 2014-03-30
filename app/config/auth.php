<?php
/**
 * User: Alexandr
 * Date: 27.03.14
 * Time: 22:06
 */
return array(

    /* Разрешения */

    'adminPanel' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => 'Доступ в админ панель',
        'bizRule' => null,
        'data' => null
    ),

    // Module User
        'indexUserAdmin' => array(
            'type' => CAuthItem::TYPE_OPERATION,
            'description' => 'Доступ к списку пользователей',
            'bizRule' => null,
            'data' => null
        ),
        'viewUserAdmin' => array(
            'type' => CAuthItem::TYPE_OPERATION,
            'description' => 'Доступ к просмотру пользователя',
            'bizRule' => null,
            'data' => null
        ),
        'createUserAdmin' => array(
            'type' => CAuthItem::TYPE_OPERATION,
            'description' => 'Доступ к созданию пользователей',
            'bizRule' => null,
            'data' => null
        ),
        'updateUserAdmin' => array(
            'type' => CAuthItem::TYPE_OPERATION,
            'description' => 'Доступ к редактированию пользователей',
            'bizRule' => null,
            'data' => null
        ),
        'adminUserAdmin' => array(
            'type' => CAuthItem::TYPE_OPERATION,
            'description' => 'Доступ к управлению пользователей',
            'bizRule' => null,
            'data' => null
        ),
        'deleteUserAdmin' => array(
            'type' => CAuthItem::TYPE_OPERATION,
            'description' => 'Доступ к удалению пользователей',
            'bizRule' => null,
            'data' => null
        ),

    /* Роли */
    'guest' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Гость',
        'bizRule' => null,
        'data' => null
    ),
    '0' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Пользователь',
        'children' => array(
            'guest', // унаследуемся от гостя
        ),
        'bizRule' => null,
        'data' => null
    ),
    '1' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Модератор',
        'children' => array(
            '0',
            'adminPanel',
            'indexUserAdmin',
            'viewUserAdmin'
        ),
        'bizRule' => null,
        'data' => null
    ),
    '2' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Администратор',
        'children' => array(
            '1',
            'createUserAdmin',
            'updateUserAdmin',
            'adminUserAdmin'
        ),
        'bizRule' => null,
        'data' => null
    ),
    '3' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Супер Администратор',
        'children' => array(
            '2',
            'deleteUserAdmin'
        ),
        'bizRule' => null,
        'data' => null
    ),
);