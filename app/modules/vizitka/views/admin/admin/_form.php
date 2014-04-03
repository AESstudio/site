<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'pages-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255)
    ); ?>

	<?php echo $form->textFieldRow($model,'url',array('class'=>'span5','maxlength'=>255,
        'hint'=>'Если URL не указывать, он создастся автоматически (только английские буквы).')); ?>


    <?php //echo $form->textAreaRow($model,'content',array('rows'=>20, 'cols'=>50, 'class'=>'span8')); ?>
    <?php
        $this->widget('ext.tinymce.TinyMce', array(
            'model' => $model,
            'attribute' => 'content',
            // Optional config
            'compressorRoute' => 'tinyMce/compressor',
            'spellcheckerUrl' => array('tinyMce/spellchecker'),
            // or use yandex spell: http://api.yandex.ru/speller/doc/dg/tasks/how-to-spellcheck-tinymce.xml
            //'spellcheckerUrl' => 'http://speller.yandex.net/services/tinyspell',
                'fileManager' => array(
                    'class' => 'ext.elFinder.TinyMceElFinder',
                    'connectorRoute'=>'elfinder/connector',
                ),
            'htmlOptions' => array(
                'rows' => 20,
                'cols' => 60,
            ),
        ));
    ?>
    <?php echo $form->dropDownListRow($model, 'status', Pages::itemAlias('PagesStatus') ,array('prompt' => 'Выберите статус')); ?>

    <h3>SEO параметры</h3>

	<?php echo $form->textAreaRow($model,'meta_title',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textAreaRow($model,'meta_description',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textAreaRow($model,'meta_keywords',array('class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Сохранить' : 'Сохранить',
		)); ?>
	</div>



<?php $this->endWidget(); ?>