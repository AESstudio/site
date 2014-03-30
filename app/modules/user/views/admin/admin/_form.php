<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'role',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Создать' : 'Сохранить',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
