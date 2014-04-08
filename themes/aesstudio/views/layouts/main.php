<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title><?php echo Yii::app()->name; ?></title>
    <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/aesstudio.ico">
    <meta name="description" content="<?php echo CHtml::encode($this->pageDescription) ?>">
    <meta name="keywords" content="<?php echo CHtml::encode($this->pageKeywords) ?>">
    <meta name="author" content="Александр Сыроватский"/>


    <?php Yii::app()->bootstrap->register(); ?>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/sticky-footer-navbar.css"/>

    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/style.css"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/html5shiv.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="container">
    <div class="row-fluid">

        <div class="span5">
<!--            <a href="/"><h1>AES-Studio</h1></a>-->
            <a href="/"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/logo120.png" alt="AEStudio" /></a>
        </div>

        <div class="span5"></br>
            <h1><small>Создание сайтов Волгоград, Волжский</small></h1>
        </div>

        <div class="span2">
            <address>
                <strong>aesstudio@yandex.ru</strong><br>
                <strong>T : 8(937)533-92-06</strong><br>
                <strong>Skype: aesstudio</strong><br>
            </address>
        </div>

    </div>
</div>

<div class="navbar center" data-spy="affix" data-offset-top="120" style="top: 0px; left:0px; right:0px;">
    <div class="navbar-inner">
        <div class="row-fluid">
                        <ul class="nav">
                            <li class="divider-vertical"><a href="/">Главная</a></li>
                            <li class="divider-vertical"><a href="/company">О компании</a></li>
                            <li class="divider-vertical"><a href="/service">Услуги и цены</a></li>
                            <li class="divider-vertical"><a href="/portfolio">Портфолио</a></li>
                            <li class="divider-vertical"><a href="/contact">Контакты</a></li>
                        </ul>
        </div>
    </div>
</div>

<div class="container">
        <?php echo $content; ?>
</div>
<div id="footer">
<div class="container">
        <div class="row-fluid">
            <div class="span12">
                <div class="row-fluid">
                    <div class="span2">
                        <p>&copy; AES-Студия 2014</p>
                    </div>
                    <div class="span2">
                        <p>
                            Сайты</br>
                            <a href="/portfolio">Сайт Визитка</a>
                            <a href="/portfolio">Корпоративный сайт</a>
                            <a href="/portfolio">Интернет магазин</a>
                        </p>
                    </div>
                    <div class="span2">
                        <a href="/portfolio">Портфолио</a></br>
                    </div>
                    <div class="span2">
                        <a href="/contact">Контакты</a></br>
                    </div>
                    <div class="span2">
                        <a href="/company">О компании</a></br>
                    </div>
                    <div class="span2">
                        <address>
                            <strong>aesstudio@yandex.ru</strong><br>
                            <strong>T : 8(937)533-92-06</strong><br>
                            <strong>Skype: aesstudio</strong><br>
                        </address>
                    </div>
                </div>
                <hr>
                <p>Создание сайтов. Разработка сайтов. Заказ сайта, цена. Волжский. Волгоград</p>
            </div>
        </div>
</div>
</div>
</body>
</html>