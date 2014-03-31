<?php


class User extends BaseUser
{
    /*
     * Статусы пользователей
     * */
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_BANNED = 2;
    const STATUS_DELETED = 3;

    /*
     * Роли пользователей
     * */
    const ROLE_USER = 0;
    const ROLE_ADMIN = 1;
    const ROLE_SUPERADMIN = 2;
    const ROLE_MODERATOR = 3;

    /**
     * @return string Префикс для пароля
     */
    const PASSWORD_PREFIX = 'ChIrIcA';

    public $verifyCode;
    public $mewPassword;
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


    public static function itemAlias($type, $code = NULL)
    {
        $_items = array(
            'UserStatus' => array(
                self::STATUS_ACTIVE => 'Активен',
                self::STATUS_INACTIVE => 'Неактивен',
                self::STATUS_BANNED => 'Забанен'
            ),
            'UserRole' => array(
                self::ROLE_USER => 'Пользователь',
                self::ROLE_MODERATOR => 'Модератор',
                self::ROLE_ADMIN => 'Админ',
                self::ROLE_SUPERADMIN => 'Супер-админ'
            ),
        );
        if (isset($code))
            return isset($_items[$type][$code]) ? $_items[$type][$code] : false;
        else
            return isset($_items[$type]) ? $_items[$type] : false;
    }

    /**
     * Set user password
     *
     * @param string $password
     */
    public function PasswordHash($password){
        return md5(self::PASSWORD_PREFIX.$password);
    }

    /**
     * @return bool
     */
    public function beforeSave()
    {
        if($this->isNewRecord)
        {
            $this->password = self::PasswordHash($this->password);

            $date = date('Y-m-d H:i:s');
            if(!$this->create_time)
                $this->create_time = $date;

            if(!$this->last_visit)
                $this->last_visit = $date;

            if(!$this->role)
                $this->role = 0;

            if(!$this->status)
                $this->status = 1;
        }
        return parent::beforeSave();
    }
}
