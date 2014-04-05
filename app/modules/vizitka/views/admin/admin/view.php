<?php
$this->menu=array(
	array('label'=>'Список','icon'=>'list','url'=>array('index')),
	array('label'=>'Создать','icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Редактировать','icon'=>'edit','url'=>array('update','id'=>$model->id)),
	array('label'=>'Удалить','icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены, что хотите удалить данный элемент?')),
);
?>

<h2>Просмотр Pages № <?php echo $model->id; ?></h2>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'author',
		'title',
		'url',
		'created',
		'updated',
		'content',
		'status',
		'meta_title',
		'meta_description',
		'meta_keywords',
	),
)); ?>
