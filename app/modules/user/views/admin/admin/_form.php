<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'username',array('maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'email',array('maxlength'=>100)); ?>

	<?php if($model->isNewRecord)echo $form->passwordFieldRow($model,'password',array('maxlength'=>255)); ?>

    <?php echo $form->dropDownListRow($model, 'role', User::itemAlias('UserRole') ,array('prompt' => 'Выберите роль')); ?>

    <?php echo $form->dropDownListRow($model, 'status', User::itemAlias('UserStatus') ,array('prompt' => 'Выберите статус')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Создать' : 'Сохранить',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
