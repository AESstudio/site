<?php

$this->menu=array(
    array('label'=>'Создать','icon'=>'plus-sign','url'=>array('create')),
    array('label'=>'Управление','icon'=>'wrench','url'=>array('admin')),
);
?>

<h2>Список пользователей</h2>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$dataProvider,
    'template'=>"{items}",
    'columns'=>array(
        array(
            'header' => '№',
            'value' => '$row+1',
        ),
        'username',
        'email',
        array(
            'name' => 'role',
            'value' => 'User::itemAlias("UserRole",$data->role)',
            'filter' => User::itemAlias("UserRole"),
        ),
        'create_time',
        'last_visit',
        array(
            'name' => 'status',
            'value' => 'User::itemAlias("UserStatus",$data->status)',
            'filter' => User::itemAlias("UserStatus"),
        ),
    ),
)); ?>