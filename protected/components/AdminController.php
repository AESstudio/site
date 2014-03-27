<?php
/**
 * Created by PhpStorm.
 * User: Электромеханики
 * Date: 27.03.14
 * Time: 21:37
 */

class AdminController extends CController
{
    public $layout='application.modules.admin.views.layouts.main';

    /**
     * Top menu
     * @var array
     */
    public $menu=array();

    /**
     * @var array
     */
    public $breadcrumbs=array();
}