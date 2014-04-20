<?php
/**
 * Created by PhpStorm.
 * User: alexandr
 * Date: 03.04.14
 * Time: 16:03
 */

class ElfinderController extends CController
{

    public function filters()
    {
        return array(
            'accessControl',
        );
    }

    public function accessRules()
    {
        return array(
            array('allow',  // allow all roles to perform 'index' actions
                'actions'=>array('connector'),
                'roles'=>array('ElFinderConnector'),
            ),
            array('deny',
                'users'=>array('*'),
            ),
        );
    }

    public function actions()
    {
        return array(
            'connector' => array(
                'class' => 'ext.elFinder.ElFinderConnectorAction',
                'settings' => array(
                    'root' => Yii::getPathOfAlias('webroot') . '/uploads/',
                    'URL' => Yii::app()->baseUrl . '/uploads/',
                    'rootAlias' => 'Главная',
                    'mimeDetect' => 'none'
                )
            ),
        );
    }
}