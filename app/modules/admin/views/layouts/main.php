<?php /* @var $this Controller */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="ru"/>

    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/admin/styles.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/admin/sticky-footer-navbar.css"/>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php
$this->widget('bootstrap.widgets.TbNavbar', array(
    'type' => 'inverse',
    'brand' => 'Админ панель',
    'brandUrl' => '/admin',
    'items' => array(
        array(
            'class' => 'bootstrap.widgets.TbMenu',
            'items' => array(
                array('label' => 'Пользователи', 'url' => '/admin/user/admin'),
                array('label' => 'Категории', 'url' => '/admin/category/admin/tree'),
            ),
        ),
        array(
            'class' => 'bootstrap.widgets.TbMenu',
            'htmlOptions' => array('class' => 'pull-right'),
            'items' => array(
                array('label' => 'К сайту', 'url' => '/'),
                array('label' => 'Выйти (' . Yii::app()->user->name . ')', 'url' => array('/logout'), 'visible' => !Yii::app()->user->isGuest)
            ),
        ),
    ),
));
?>

<div class="container" id="page">

    <?php if (isset($this->brand) && isset($this->brandUrl)): ?>
        <div class="navbar">
            <div class="navbar-inner">
                <?php if (isset($this->brand)): ?>
                    <a class="brand" href="<?php echo $this->brandUrl; ?>"><?php echo $this->brand; ?></a>
                <?php endif ?>
                <?php $this->widget('bootstrap.widgets.TbMenu', array(
                    'type' => 'pills',
                    'htmlOptions' => array('class' => 'pull-right'),
                    'items' => $this->menu,
                )); ?>
            </div>
        </div>
    <?php endif ?>

    <?php echo $content; ?>

</div>
<!-- page -->
<div id="footer">
    <div class="container">
        <p>
            <a href="aesstudio.ru">AES-Studio</a> &copy; <?php echo '2014'/*.date('Y')*/; ?>
        </p>
    </div>
</div>
<!-- footer -->
</body>
</html>
