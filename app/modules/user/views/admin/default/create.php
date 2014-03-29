<?php
$this->menu=array(
	array('label'=>'Управление пользователями','icon'=>'wrench','url'=>array('index')),
);
?>

<h2>Создание пользователя</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>