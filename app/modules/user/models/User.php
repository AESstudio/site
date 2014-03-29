<?php


class User extends BaseUser
{
    public $verifyCode;
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

    /**
     * @return bool
     */
    public function beforeSave()
    {
        // Set new password
        if ($this->new_password)
            $this->password = User::encodePassword($this->new_password);
        if($this->isNewRecord)
        {
            if(!$this->create_time)
                $this->create_time = date('Y-m-d H:i:s');
            if(!$this->last_visit)
                $this->last_visit = date('Y-m-d H:i:s');
            if(!$this->role)
                $this->role = 0;
            if(!$this->status)
                $this->status = 1;
        }
        return parent::beforeSave();
    }
}
