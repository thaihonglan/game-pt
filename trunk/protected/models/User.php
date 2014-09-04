<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $id
 * @property string $facebook_login_id
 * @property string $gmail_login_id
 * @property string $name
 * @property string $avatar
 * @property string $location
 * @property string $working
 * @property string $create_date
 * @property integer $disable
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('disable', 'numerical', 'integerOnly'=>true),
			array('facebook_login_id, gmail_login_id, name, avatar', 'length', 'max'=>128),
			array('location, working', 'length', 'max'=>255),
			array('create_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, facebook_login_id, gmail_login_id, name, avatar, location, working, create_date, disable', 'safe', 'on'=>'search'),
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
			'facebook_login_id' => 'Facebook Login',
			'gmail_login_id' => 'Gmail Login',
			'name' => 'Name',
			'avatar' => 'Avatar',
			'location' => 'Location',
			'working' => 'Working',
			'create_date' => 'Create Date',
			'disable' => 'Disable',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('facebook_login_id',$this->facebook_login_id,true);
		$criteria->compare('gmail_login_id',$this->gmail_login_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('avatar',$this->avatar,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('working',$this->working,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('disable',$this->disable);

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
