<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$dataProvider,
    'template'=>"{items}",
    'columns'=>array(
        array(
            'header' => '№',
            'value' => '$row+1',
        ),
        'username',
        'email',
        'role',
        'create_time',
        'last_visit',
        'status'
    ),
)); ?>