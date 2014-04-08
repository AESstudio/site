<?php
/**
 * Created by PhpStorm.
 * User: Alexandr Syrovatskii
 * Date: 11.01.14
 * Time: 1:54
 */

class PortfolioController extends Controller
{
    public $layout = '//layouts/column2';

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }
}