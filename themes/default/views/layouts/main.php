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

<?php //$this->widget('bootstrap.widgets.TbNavbar', array(
//    'items' => array(
//        array(
//            'class' => 'bootstrap.widgets.TbMenu',
//            'items' => Pages::menu()
//        ),
//    ),
//)); ?>

<div class="container" id="page">
    <div class="row-fluid">
        <div class="span12">
            <div class="row-fluid">
                <div class="span10 offset1">

                    <div class="top">
                        <div class="row-fluid">
                            <div class="span1">
                                <p>Логотип</p>
                            </div>
                            <div class="span4">
                                <p>Название компании</p>
                            </div>
                            <div class="span4">
                                <p>Вид деятельности</p>
                            </div>
                            <div class="span3">
                                <p>Телефон</p>
                            </div>
                        </div>
                    </div>

                    <div class="navbar">
                        <div class="navbar-inner">
                            <div class="container">

                                <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </a>

                                <!-- Everything you want hidden at 940px or less, place within here -->
                                <div class="nav-collapse">
                                    <ul class="nav">
                                        <?php
                                        $arrayMenu = Pages::menu();
                                        foreach($arrayMenu as $arrayMenus)
                                        {
                                            echo '<li><a href="'.$arrayMenus['url'].'">'.$arrayMenus['label'].'</a></li>';
                                        }
                                        ?>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <?php echo $content; ?>

                    <div class="clear"></div>

                </div>
                <!-- page -->
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
