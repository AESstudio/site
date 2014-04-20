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
    private $_behaviorIDs = array();


    public function  init()
    {
        parent::init();
    }

    public function createAction($actionID)
    {
        $action = parent::createAction($actionID);
        if ($action !== null)
            return $action;
        foreach ($this->_behaviorIDs as $behaviorID) {
            $object = $this->asa($behaviorID);
            if ($object->getEnabled() && method_exists($object, 'action' . $actionID))
                return new CInlineAction($object, $actionID);
        }
    }

    public function attachBehavior($name, $behavior)
    {
        $this->_behaviorIDs[] = $name;
        parent::attachBehavior($name, $behavior);
    }
}