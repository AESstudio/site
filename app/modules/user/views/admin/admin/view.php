<?php
$this->menu=array(
    array('label'=>'Список','icon'=>'list','url'=>array('index')),
    array('label'=>'Создать','icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Редактировать','icon'=>'pencil','url'=>array('update','id'=>$model->id)),
	array('label'=>'Удалить','icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены, что хотите удалить данный элемент?')),
	array('label'=>'Управление','icon'=>'wrench','url'=>array('admin')),
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
