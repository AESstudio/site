<?php

class CategoryController extends BaseController
{
    public function   init()
    {
        parent::init();
    }

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
