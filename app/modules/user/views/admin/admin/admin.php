<?php
$this->menu=array(
    array('label'=>'Список','icon'=>'list','url'=>array('index')),
	array('label'=>'Создать','icon'=>'plus-sign','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('user-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Управление пользователями</h2>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
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
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
