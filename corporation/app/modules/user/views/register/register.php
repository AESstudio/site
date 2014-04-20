<?php
?>

<h2>Регистрация</h2>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
    'id'=>'user-form',
    'enableAjaxValidation'=>false,
)); ?>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model,'username'); ?>

<?php echo $form->textFieldRow($model,'email'); ?>

<?php echo $form->passwordFieldRow($model,'password'); ?>

<?php echo $form->passwordFieldRow($model,'repassword'); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType'=>'submit',
        'type'=>'primary',
        'label'=>'Регистрация',
    )); ?>
</div>

<?php $this->endWidget(); ?>
