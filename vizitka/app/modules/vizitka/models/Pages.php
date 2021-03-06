<?php

/**
 * This is the model class for table "vizitka_pages".
 *
 * The followings are the available columns in table 'vizitka_pages':
 * @property integer $id
 * @property integer $author
 * @property string $title
 * @property string $url
 * @property string $created
 * @property string $updated
 * @property string $content
 * @property integer $status
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keywords
 */
class Pages extends CActiveRecord
{
    /*
     * Статусы страниц
     * */
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    private $_url;

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'vizitka_pages';
    }

    public static function itemAlias($type, $code = NULL)
    {
        $_items = array(
            'PagesStatus' => array(
                self::STATUS_ACTIVE => 'Активна',
                self::STATUS_INACTIVE => 'Не активна',
            ),
        );
        if (isset($code))
            return isset($_items[$type][$code]) ? $_items[$type][$code] : false;
        else
            return isset($_items[$type]) ? $_items[$type] : false;
    }

    /**
     * @return bool
     */
    public function beforeSave()
    {
        $date = date('Y-m-d H:i:s');

        if ($this->isNewRecord) {
            $this->created = $date;
            $this->updated = $date;
        }

        $this->updated = $date;
        $this->author = Yii::app()->user->id;

        return parent::beforeSave();
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            // Автор [[author]]
            array('author', 'numerical'),
            // Заголовок [[title]]
            array('title', 'required'),
            array('title', 'length', 'max' => 255),
            // URL [[url]]
            array('url', 'ext.translist.LocoTranslitFilter', 'translitAttribute' => 'title'),
            array('username', 'match', 'pattern' => '/^[a-zA-Z0-9_-]+$/',
                'message' => 'Недопустимый логин. </br>Логин может состоять из латинских символов,
                цифр, дефиса или нижнего подчеркивания.',
                'on' => array('register', 'admin-create', 'admin-update')),
            array('url', 'length', 'max' => 255),
            // Дата создания [[created]]
            //array('created','date'),
            // Дата редактирования [[updated]]
            //array('updated','date'),
            // Содержание страницы [[status]]
            array('content', 'required'),
            array('content', 'length', 'max' => 16777215),
            // Статус страницы [[status]]
            array('status', 'numerical'),
            // Мета данные [[meta_title]]
            array('meta_title', 'required'),
            array('meta_title', 'length', 'max' => 255),
            // Мета данные [[meta_description]]
            array('meta_description', 'required'),
            array('meta_description', 'length', 'max' => 255),
            // Мета данные [[meta_keywords]]
            array('meta_keywords', 'required'),
            array('meta_keywords', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, author, title, url, created, updated, content, status, meta_title, meta_description, meta_keywords', 'safe', 'on' => 'search'),
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
            'author_name' => array(self::BELONGS_TO, 'User', 'author'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'author' => 'Автор',
            'title' => 'Заголовок',
            'url' => 'Адрес страницы (URL)',
            'created' => 'Создана',
            'updated' => 'Обновлена',
            'content' => 'Содержание',
            'status' => 'Статус',
            'meta_title' => 'Заголовок страницы (TITLE)',
            'meta_description' => 'Описание страницы (DESCRIPTION)',
            'meta_keywords' => 'Ключевые слова (KEYWORDS)',
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

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('author', $this->author);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('url', $this->url, true);
        $criteria->compare('created', $this->created, true);
        $criteria->compare('updated', $this->updated, true);
        $criteria->compare('content', $this->content, true);
        $criteria->compare('status', $this->status);
        $criteria->compare('meta_title', $this->meta_title, true);
        $criteria->compare('meta_description', $this->meta_description, true);
        $criteria->compare('meta_keywords', $this->meta_keywords, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Pages the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function scopes()
    {
        return array(
            'published'=>array(
                'condition'=>'status = 1 AND status <= NOW()',
            ),
        );
    }

    public static function menu($url)
    {
        $models = self::model()->findAllByAttributes(array('status' => 1));

        $array = '';

        foreach ($models as $one) {
            if($url == $one['url']){
                $array .= '<li class="active"><a href="' . $one['url'] . '">' . $one['title'] . '</a></li>';
            }elseif($url == false){
                $array .= '<li class="active"><a href="' . $one['url'] . '">' . $one['title'] . '</a></li>';
                $url = ';';
            }else{
                $array .= '<li><a href="' . $one['url'] . '">' . $one['title'] . '</a></li>';
            }
        }

        return $array;
    }

    public function getUrl()
    {
        if ($this->_url === null)
            $this->_url = Yii::app()->createUrl('/'.$this->url);
        return $this->_url;
    }
}
