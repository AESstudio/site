<?php
$this->breadcrumbs=array(
	'Pages'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Список Pages','icon'=>'list','url'=>array('index')),
	array('label'=>'Создать Pages','icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Редактировать Pages','icon'=>'pencil','url'=>array('update','id'=>$model->id)),
	array('label'=>'Удалить Pages','icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены, что хотите удалить данный элемент?')),
	array('label'=>'Управление Pages','icon'=>'wrench','url'=>array('admin')),
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
