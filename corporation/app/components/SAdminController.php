<?php
/**
 * Created by PhpStorm.
 * User: Электромеханики
 * Date: 27.03.14
 * Time: 21:37
 */

class SAdminController extends CController
{
    public $layout='application.modules.admin.views.layouts.main';

    /**
     * Top menu
     * @var array
     */
    public $menu=array();

    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $brandUrl;
}