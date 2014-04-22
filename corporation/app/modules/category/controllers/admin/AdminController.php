<?php

class AdminController extends SAdminController
{

    public $brand='Категории';
    public $brandUrl='/admin/category/admin/tree';

    public function init()
    {
        parent::init();
        Yii::app()->errorHandler->errorAction='/admin/default/error';
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow',  // allow all roles to perform 'index' actions
                'actions'=>array('tree'),
                'roles'=>array('treeCategoryAdmin'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }

    public function behaviors()
    {
        return array(
            'jsTreeBehavior' => array('class' => 'application.behaviors.JsTreeBehavior',
                'modelClassName' => 'Category',
                'form_alias_path' => 'application.modules.category.views.admin.admin._form',
                'view_alias_path' => 'application.modules.category.views.admin.admin.view',
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
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id)
    {
        $model=User::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
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
