<?php
$this->menu=array(
	array('label'=>'Создать страницу','icon'=>'plus-sign','url'=>array('create')),
);
?>

<h2>Страницы</h2>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
