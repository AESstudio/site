<?php
$this->menu=array(
    array('label'=>'Список','icon'=>'list','url'=>array('index')),
    array('label'=>'Создать','icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Просмотр','icon'=>'eye-open','url'=>array('view','id'=>$model->id)),
    array('label'=>'Управление','icon'=>'wrench','url'=>array('admin')),
);
?>

<h2>Редактирование пользователя № <?php echo $model->id; ?></h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>