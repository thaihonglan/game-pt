<?php

/**
 * This is the model class for table "source_file".
 *
 * The followings are the available columns in table 'source_file':
 * @property string $id
 * @property string $product_id
 * @property integer $os_id
 * @property string $version
 * @property string $path
 * @property string $data_folder
 * @property string $data_path
 * @property string $download
 * @property string $from_source
 * @property string $create_date
 * @property string $lastup_date
 * @property integer $disable
 */
class SourceFile extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'source_file';
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
			array('product_id, download', 'length', 'max'=>10),
			array('version', 'length', 'max'=>32),
			array('path, data_path', 'length', 'max'=>128),
			array('data_folder', 'length', 'max'=>16),
			array('from_source', 'length', 'max'=>255),
			array('create_date, lastup_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, product_id, os_id, version, path, data_folder, data_path, download, from_source, create_date, lastup_date, disable', 'safe', 'on'=>'search'),
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
			'version' => 'Version',
			'path' => 'Path',
			'data_folder' => 'Data Folder',
			'data_path' => 'Data Path',
			'download' => 'Download',
			'from_source' => 'From Source',
			'create_date' => 'Create Date',
			'lastup_date' => 'Lastup Date',
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
		$criteria->compare('version',$this->version,true);
		$criteria->compare('path',$this->path,true);
		$criteria->compare('data_folder',$this->data_folder,true);
		$criteria->compare('data_path',$this->data_path,true);
		$criteria->compare('download',$this->download,true);
		$criteria->compare('from_source',$this->from_source,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('lastup_date',$this->lastup_date,true);
		$criteria->compare('disable',$this->disable);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SourceFile the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
