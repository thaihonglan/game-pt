<?php

/**
 * This is the model class for table "screenshot".
 *
 * The followings are the available columns in table 'screenshot':
 * @property string $id
 * @property string $product_id
 * @property integer $os_id
 * @property string $path
 * @property string $sequence
 * @property integer $disable
 */
class Screenshot extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'screenshot';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id, os_id', 'required'),
			array('os_id, disable', 'numerical', 'integerOnly'=>true),
			array('product_id, sequence', 'length', 'max'=>10),
			array('path', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, product_id, os_id, path, sequence, disable', 'safe', 'on'=>'search'),
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
			'product_id' => 'Product',
			'os_id' => 'Os',
			'path' => 'Path',
			'sequence' => 'Sequence',
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
		$criteria->compare('product_id',$this->product_id,true);
		$criteria->compare('os_id',$this->os_id);
		$criteria->compare('path',$this->path,true);
		$criteria->compare('sequence',$this->sequence,true);
		$criteria->compare('disable',$this->disable);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Screenshot the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
