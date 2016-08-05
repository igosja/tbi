<?php

class User extends CActiveRecord
{
    const SCENARIO_SIGNUP = 'signup';
    const SCENARIO_LOGIN = 'login';

    public $error_login;
    public $password_repeat;

    public function tableName()
    {
        return 'user';
    }

    public function rules()
    {
        return array(
            array('username', 'required', 'on' => self::SCENARIO_LOGIN),
            array('password', 'required'),
            array('country_id, region_id', 'numerical', 'integerOnly' => true),
            array('email', 'email'),
            array('email', 'unique'),
            array('email, name, password_repeat, surname', 'required', 'on' => self::SCENARIO_SIGNUP),
            array('password', 'compare', 'compareAttribute' => 'password_repeat', 'on' => self::SCENARIO_SIGNUP),
            array('email, city, name, password, street, surname, username', 'length', 'max' => 255),
            array('zip', 'length', 'max' => 10),
            array('phone', 'length', 'max' => 50),
        );
    }

    public function attributeLabels()
    {
        return array(
            'country_id' => 'Страна',
            'city' => 'Город',
            'date_register' => 'Дата регистрации',
            'email' => 'Email',
            'name' => 'Имя',
            'password' => 'Пароль',
            'password_repeat' => 'Подтвердите пароль',
            'phone' => 'Телефон',
            'region_id' => 'Область',
            'street' => 'Улица, дом.',
            'surname' => 'Фамилия',
            'username' => 'Логин',
            'zip' => 'Индекс',
        );
    }

    protected function beforeSave()
    {
        if (parent::beforeSave()) {
            if ($this->isNewRecord) {
                $this->username = $this->email;
                $this->date_register = time();
                $this->password = $this->hashPassword($this->password);
            }
            return true;
        }
        return false;
    }

    public function relations()
    {
        return array(
            'country' => array(self::HAS_ONE, 'Country', array('id' => 'country_id')),
            'region' => array(self::HAS_ONE, 'Region', array('id' => 'region_id')),
        );
    }

    public function validatePassword($password)
    {
        return md5($password . md5('user-salt')) == $this->password;
    }

    public function hashPassword($password)
    {
        return md5($password . md5('user-salt'));
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
