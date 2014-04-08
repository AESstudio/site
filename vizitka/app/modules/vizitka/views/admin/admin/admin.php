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
	$.fn.yiiGridView.update('pages-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Управление Страницами</h2>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'pages-grid',
    'type'=>'striped bordered condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
        array(
            'header' => '№',
            'value' => '$row+1',
        ),
        array(
            'name' => 'author',
            'value' => '$data->author_name->username',
            'filter' => User::all(),
        ),
		'title',
		'url',
		'created',
		'updated',
		//'content',
        array(
            'name' => 'status',
            'value' => 'Pages::itemAlias("PagesStatus",$data->status)',
            'filter' => Pages::itemAlias("PagesStatus"),
        ),
		//'meta_title',
		//'meta_description',
		//'meta_keywords',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
