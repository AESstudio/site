<?php
/**
 * Created by PhpStorm.
 * User: Электромеханики
 * Date: 23.04.14
 * Time: 9:30
 */
echo '<h2>Все категории</h2>';

echo JsTreeBehavior::printULTree();

//print_r(Category::menu());


/*$this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'list',
    'items'=> array(JsTreeBehavior::printULTree())
));*/