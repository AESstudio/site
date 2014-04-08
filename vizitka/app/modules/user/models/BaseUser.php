<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property integer $role
 * @property integer $create_time
 * @property integer $last_visit
 * @property integer $status
 */
class BaseUser extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            // Логин [[username]]
            array('username','required','on'=>array('register', 'admin-create', 'admin-update')),
            array('username','match','pattern'=>'/^[a-zA-Z0-9_-]+$/',
                'message' => 'Недопустимый логин. </br>Логин может состоять из латинских символов,
                цифр, дефиса или нижнего подчеркивания.',
                'on'=>array('register', 'admin-create', 'admin-update')),
            array('username','length','min'=>3,'max'=>50,'on'=>array('register', 'admin-create', 'admin-update')),
            array('username','unique','on'=>array('register', 'admin-create', 'admin-update')),

            // E-mail [[email]]
            array('email','required','on'=>array('register', 'admin-create', 'admin-update')),
            array('email','email','on'=>array('register', 'admin-create', 'admin-update')),
            array('email','length','max'=>100,'on'=>array('register', 'admin-create', 'admin-update')),
            array('email','unique','on'=>array('register', 'admin-create', 'admin-update')),

            // Пароль [[password]]
            array('password','required','on'=>array('register', 'admin-create', 'admin-update')),
            array('password','length','min'=>4,'max'=>50,'on'=>array('register', 'admin-create', 'admin-update')),

            // Подтверждение пароля [[repassword]]
            array('repassword','required','on'=>array('register', 'admin-create', 'admin-update')),
            array('repassword','compare','compareAttribute'=>'password',
                'message' => "Пароли не совпадают.",
                'on'=>array('register', 'admin-create', 'admin-update')
            ),

            // Роль [[role]]
            array('role','in','range'=>array_keys(User::itemAlias('UserRole')),'on'=>array('admin-create', 'admin-update')),

            // Статус [[status]]
            array('status','in','range'=>array_keys(User::itemAlias('UserStatus')),'on'=>array('admin-create', 'admin-update')),

            ///////////////////////
			array('role, create_time, last_visit, status', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, email, role, status', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Логин',
			'email' => 'Email',
			'password' => 'Пароль',
            'repassword' => 'Подтверждение пароля',
			'role' => 'Роль',
			'create_time' => 'Дата создания',
			'last_visit' => 'Последний визит',
			'status' => 'Статус',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('role',$this->role);
		$criteria->compare('create_time',$this->create_time);
		$criteria->compare('last_visit',$this->last_visit);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

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
}
