<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {
    // Будем хранить id.
    protected $_id;

    // Данный метод вызывается один раз при аутентификации пользователя.
    public function authenticate(){
        // Производим стандартную аутентификацию, описанную в руководстве.
        $user = User::model()->find('LOWER(username)=?', array(strtolower($this->username)));
        if(($user===null) || (User::PasswordHash($this->password))!==$user->password) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else {
            // В качестве идентификатора будем использовать id, а не username
            $this->_id = $user->id;
            $user->last_visit = date('Y-m-d H:i:s');
            $user->save(false);
            // Далее логин нам не понадобится, зато имя может пригодится
            // в самом приложении. Используется как Yii::app()->user->name.
            $this->username = $user->username;

            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function getId(){
        return $this->_id;
    }
}