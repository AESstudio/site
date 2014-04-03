<?php
/**
 * Created by PhpStorm.
 * User: alexandr
 * Date: 03.04.14
 * Time: 15:56
 */

// controller for tinyMce
Yii::import('ext.tinymce.*');

class TinyMceController extends CController
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
            array('allow',  // allow all roles to perform 'compressor' actions
                'actions'=>array('compressor'),
                'roles'=>array('TinyMceCompressor'),
            ),
            array('allow',  // allow all roles to perform 'spellchecker' actions
                'actions'=>array('spellchecker'),
                'roles'=>array('TinyMceSpellchecker'),
            ),
            array('deny',
                'users'=>array('*'),
            ),
        );
    }

    public function actions()
    {
        return array(
            'compressor' => array(
                'class' => 'TinyMceCompressorAction',
                'settings' => array(
                    'compress' => true,
                    'disk_cache' => true,
                )
            ),
            'spellchecker' => array(
                'class' => 'TinyMceSpellcheckerAction',
            ),
        );
    }
}