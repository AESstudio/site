<?php
$this->menu=array(
    array('label'=>'Создать пользователя','icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Просмотр пользователя','icon'=>'eye-open','url'=>array('view','id'=>$model->id)),
    array('label'=>'Управление пользователями','icon'=>'wrench','url'=>array('index')),
);
?>

<h2>Редактирование пользователя № <?php echo $model->id; ?></h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>