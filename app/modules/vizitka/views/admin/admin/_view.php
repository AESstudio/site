<div class="btn-toolbar">
    <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'size'=>'large',
        'buttons'=>array(
            array('label'=>$data->title,'icon'=>'file','items'=>array(
                array('label'=>'Просмотр','icon'=>'eye-open','url'=>array('view','id'=>$data->id)),
                array('label'=>'Редактировать','icon'=>'edit','url'=>array('update','id'=>$data->id)),
                '---',
                array('label'=>'Удалить','icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$data->id),'confirm'=>'Вы уверены, что хотите удалить данный элемент?')),
            )),
        ),
    )); ?>
</div>