<?php
$this->menu=array(
    array('label'=>'Создать пользователя','icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Редактировать пользователя','icon'=>'pencil','url'=>array('update','id'=>$model->id)),
	array('label'=>'Удалить пользователя','icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены, что хотите удалить данный элемент?')),
	array('label'=>'Управление пользователями','icon'=>'wrench','url'=>array('index')),
);
?>

<h2>Просмотр пользователя № <?php echo $model->id; ?></h2>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'email',
		'password',
		'role',
		'create_time',
		'last_visit',
		'status',
	),
)); ?>
