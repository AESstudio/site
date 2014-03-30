<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 27.03.14
 * Time: 22:16
 */

class WebUser extends CWebUser {
    private $_model = null;

    function getRole() {
        if($user = $this->getModel()){
            // в таблице User есть поле role
            return $user->role;
        }
    }

    private function getModel(){
        if (!$this->isGuest && $this->_model === null){
            $this->_model = User::model()->findByPk($this->id, array('select' => 'role'));
        }
        return $this->_model;
    }
}