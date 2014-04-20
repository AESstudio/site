<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="ru"/>

    <?php Yii::app()->bootstrap->register(); ?>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/styles.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/sticky-footer-navbar.css"/>

</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'items' => array(
        array(
            'class' => 'bootstrap.widgets.TbMenu',
            'items' => array(
                array('label' => 'Home', 'url' => array('/site/index')),
                array('label' => 'Login', 'url' => array('/login'), 'visible' => Yii::app()->user->isGuest),
                array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/logout'), 'visible' => !Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>
<div class="container" id="page">
    <div class="row-fluid">
        <div class="span12">

            <?php if (isset($this->breadcrumbs)): ?>
                <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <div class="clear"></div>

        </div>
    </div>
</div>

<div id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
                All Rights Reserved.<br/>
                <?php echo Yii::powered(); ?>

            </div>
        </div>
    </div>
</div>
</body>
</html>
