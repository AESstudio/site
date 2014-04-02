<?php
$this->menu=array(
	array('label'=>'Список','icon'=>'list','url'=>array('index')),
	array('label'=>'Управление','icon'=>'wrench','url'=>array('admin')),
);
?>

<h2>Создание страницы</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>