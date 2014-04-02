<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'pages-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255)
    ); ?>

	<?php echo $form->textFieldRow($model,'url',array('class'=>'span5','maxlength'=>255,
        'hint'=>'Если URL не указывать, он создастся автоматически (только английские буквы).')); ?>


    <?php echo $form->textAreaRow($model,'content',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

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
<?php $this->widget('application.extensions.tinymce.SladekTinyMce'); ?>

    <script>
        tinymce.init({
            selector: "textarea#Pages_content",
            menubar: false,
            width: 900,
            height: 300,
            toolbar1: "undo redo | bold | italic underline | alignleft aligncenter alignright alignjustify ",
            toolbar2: "outdent indent | hr | sub sup | bullist numlist | formatselect fontselect fontsizeselect | cut copy paste pastetext pasteword | search replace ",

        });
    </script>

    <script type="text/javascript">

        tinymce.init({
            selector: "textarea#Contracts_contractData",
            theme: "modern",
            width: 900,
            height: 300,
            language:'ru',
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            content_css: "css/content.css",
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
            style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ]
        });
    </script>

