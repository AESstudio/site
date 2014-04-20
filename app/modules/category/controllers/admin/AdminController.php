<?php

class AdminController extends SAdminController
{
    public function   init()
    {
        parent::init();
        Yii::app()->errorHandler->errorAction='/admin/default/error';
    }

//    /**
//     * @return array action filters
//     */
//    public function filters()
//    {
//        return array(
//            'accessControl', // perform access control for CRUD operations
//        );
//    }
//
//    /**
//     * Specifies the access control rules.
//     * This method is used by the 'accessControl' filter.
//     * @return array access control rules
//     */
//    public function accessRules()
//    {
//        return array(
//            array('allow',  // allow all roles to perform 'index' actions
//                'actions'=>array('tree'),
//                'roles'=>array('indexCategoryAdmin'),
//            ),
//            array('deny',  // deny all users
//                'users'=>array('*'),
//            ),
//        );
//    }

    public function behaviors()
    {
        return array(
            'jsTreeBehavior' => array('class' => 'application.behaviors.JsTreeBehavior',
                'modelClassName' => 'Category',
                'form_alias_path' => 'application.modules.category.views.category._form',
                'view_alias_path' => 'application.modules.category.views.category.view',
                'label_property' => 'name',
                'rel_property' => 'name'
            )
        );
    }

    /**
     * Lists all models.
     */
    public function actionTree()
    {
        $this->render('tree');
    }


    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'category-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
