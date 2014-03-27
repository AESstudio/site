<?php
/**
 * User: Alexandr
 * Date: 27.03.14
 * Time: 22:06
 */
return array(
    'guest' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Guest',
        'bizRule' => null,
        'data' => null
    ),
    '4' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Пользователь',
        'children' => array(
            'guest', // унаследуемся от гостя
        ),
        'bizRule' => null,
        'data' => null
    ),
    '3' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Модератор',
        'children' => array(
            '4',
        ),
        'bizRule' => null,
        'data' => null
    ),
    '2' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Администратор',
        'children' => array(
            '3',
        ),
        'bizRule' => null,
        'data' => null
    ),
    '1' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Супер Администратор',
        'children' => array(
            '2',
        ),
        'bizRule' => null,
        'data' => null
    ),
);