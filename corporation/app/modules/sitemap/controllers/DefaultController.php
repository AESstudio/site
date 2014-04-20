<?php

Yii::import('application.modules.vizitka.*');
Yii::import('application.modules.vizitka.models.*');
class DefaultController extends BaseController
{
    const ALWAYS = 'always';
    const HOURLY = 'hourly';
    const DAILY = 'daily';
    const WEEKLY = 'weekly';
    const MONTHLY = 'monthly';
    const YEARLY = 'yearly';
    const NEVER = 'never';

    public function actionIndex()
    {
        $items = array();

        //Page
        $items = array_merge($items, array(array(
            'models' => Pages::model()->published()->findAll(),
            'changefreq' => self::DAILY,
            'priority' => 0.8,
        )));

        header("Content-type: text/xml");

        $this->renderPartial('index', array(
            'items'=>$items,
            'host'=>Yii::app()->request->hostInfo,
        ));
    }
}