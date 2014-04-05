<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Авторизация';
?>



<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

<h2>Авторизация</h2>

<?php echo $form->errorSummary($model); ?>

<div class="text-error"><?php echo $form->error($model, 'username'); ?></div>
<?php
echo $form->textField($model, 'username', array(
    'class' => 'input-block-level',
    'placeholder' => "Логин",
));
?>


<div class="text-error"><?php echo $form->error($model, 'password'); ?></div>
<?php
echo $form->passwordField($model, 'password', array(
    'class' => 'input-block-level',
    'placeholder' => "Пароль",
));
?>

<?php echo $form->checkboxRow($model, 'rememberMe'); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>'Войти',
        )); ?>
	</div>

<?php $this->endWidget(); ?>

