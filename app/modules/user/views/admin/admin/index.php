<?php

$this->menu=array(
    array('label'=>'Создать','icon'=>'plus-sign','url'=>array('create')),
    array('label'=>'Управление','icon'=>'wrench','url'=>array('admin')),
);
?>

<h2>Список пользователей</h2>

<?php $this->widget('bootstrap.widgets.TbListView',array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
)); ?>