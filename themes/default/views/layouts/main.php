<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="language" content="ru"/>
    <meta name="description" content="<?php echo CHtml::encode($this->metaDescription); ?>">
    <meta name="keywords" content="<?php echo CHtml::encode($this->metaKeywords); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/styles.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/sticky-footer-navbar.css"/>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<div class="container" id="page">
    <div class="row-fluid">
        <div class="span12">
            <div class="top">
                <div class="row-fluid">
                    <div class="span2">
                        <div class="well well-small">
                            <br><a href="/">Ваш Логотип</a><br><br><br>
                        </div>
                    </div>
                    <div class="span7">
                        <div class="well well-small">
                            <h2>Название компании</h2>
                            Вид деятельности
                        </div>
                    </div>
                    <div class="span3">
                        <div class="well well-small">
                            <p class="lead">
                                Телефон:<br>
                                8 (123) 45-67-890
                            </p>
                        </div>
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
                                echo Pages::menu(Yii::app()->getRequest()->getPathInfo());
                                ?>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <?php echo $content; //print_r(Yii::app()->getRequest()->getPathInfo())?>

            <div class="clear"></div>

        </div>
    </div>
</div>

<div id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <div class="row-fluid">
                    <div class="span10">
                        <ul class="nav nav-pills">
                            <?php
                            echo Pages::menu(Yii::app()->getRequest()->getPathInfo());
                            ?>
                        </ul>
                        AES-Studio &copy; <?php echo date('Y'); ?>
                    </div>
                    <div class="span2">
                        <p>
                            Телефон:</br>
                            8 (123) 45-67-890
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
</body>
</html>
