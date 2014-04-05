<?php
$this->pageTitle = 'Создание страницы';
$this->menu=array(
	array('label'=>'Список','icon'=>'list','url'=>array('index')),
);
?>

<h2>Создание страницы</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>