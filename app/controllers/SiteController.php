<?php


class SiteController extends Controller
{
    public $layout = '//layouts/column2';


    public function actionIndex()
    {
        $this->layout = '//layouts/column1';
        $this->render('index');
    }


    public function actionMini()
    {
        $this->layout = '//layouts/column2';
        $this->render('mini');
    }


    public function actionVizitka()
    {
        $this->layout = '//layouts/column2';
        $this->render('vizitka');
    }


    public function actionCorporation()
    {
        $this->layout = '//layouts/column2';
        $this->render('corporation');
    }


    public function actionE_Shop()
    {
        $this->layout = '//layouts/column2';
        $this->render('e_shop');
    }


    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }


    public function actionLogin()
    {
        $this->redirect('/login');
    }
}