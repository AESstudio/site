<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="ru"/>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/styles.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/sticky-footer-navbar.css"/>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<!-- Begin page content -->
<div class="container">
    <div class="row-fluid">
        <div class="span4 offset4">
            <div class="news">
                <div class="letter">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="footer">
    <div class="container">
        Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
        All Rights Reserved.<br/>
        <?php echo Yii::powered(); ?>
    </div>
</div>
<!-- footer -->
</body>
</html>
