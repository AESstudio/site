<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">
    <div class="span3">
        <ul class="nav nav-list">
            <li class="nav-header"><h4>Сайт Визитка</h4></li>
            <li><a href="/site/vizitka">Сайт визитка</a></li>
            <li class="divider"></li>

            <li class="nav-header"><h4>Корпоративный сайт</h4></li>
            <li><a href="/site/corporation">Корпоративный сайт</a></li>
            <li><a href="/site/e_shop">Интернет магазин</a></li>
            <li class="divider"></li>

            <li class="nav-header"><h4>Дизайн</h4></li>
            <li><a href="/design">Дизайн сайта</a></li>
            <li><a href="/logotype">Логотип. Фирменный стиль</a></li>
            <li><a href="/redesign">Редизайн</a></li>
            <li class="divider"></li>

            <li class="nav-header"><h4>Продвижение и поддержка</h4></li>
            <li><a href="/searchOptimization">Поисковая оптимизация</a></li>
            <li><a href="/support">Поддержка сайта</a></li>
            <li><a href="/advertising">Реклама</a></li>
        </ul></br>
    </div>
    <div class="span9">
            <div id="content">
                <?php echo $content; ?>
            </div>
    </div>
</div>
<?php $this->endContent(); ?>