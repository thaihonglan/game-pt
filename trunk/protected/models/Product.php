<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property string $id
 * @property string $name
 * @property string $description
 * @property integer $product_type_id
 * @property string $video
 * @property string $avatar
 * @property string $author
 * @property string $download
 * @property double $rating
 * @property string $rate_count
 * @property string $from_source
 * @property string $bundle_id
 * @property string $package_name
 * @property string $tag
 * @property string $create_date
 * @property string $lastup_date
 * @property integer $disable
 */
class Product extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, product_type_id', 'required'),
			array('product_type_id, disable', 'numerical', 'integerOnly'=>true),
			array('rating', 'numerical'),
			array('name, avatar, author, from_source, package_name', 'length', 'max'=>128),
			array('download, rate_count', 'length', 'max'=>10),
			array('bundle_id, tag', 'length', 'max'=>255),
			array('description, video, create_date, lastup_date', 'safe'),
			array('id, name, description, product_type_id, video, avatar, author, download, rating, rate_count, from_source, bundle_id, package_name, tag, create_date, lastup_date, disable', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'description' => 'Description',
			'product_type_id' => 'Product Type',
			'video' => 'Video',
			'avatar' => 'Avatar',
			'author' => 'Author',
			'download' => 'Download',
			'rating' => 'Rating',
			'rate_count' => 'Rate Count',
			'from_source' => 'From Source',
			'bundle_id' => 'Bundle',
			'package_name' => 'Package Name',
			'tag' => 'Tag',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('product_type_id',$this->product_type_id);
		$criteria->compare('video',$this->video,true);
		$criteria->compare('avatar',$this->avatar,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('download',$this->download,true);
		$criteria->compare('rating',$this->rating);
		$criteria->compare('rate_count',$this->rate_count,true);
		$criteria->compare('from_source',$this->from_source,true);
		$criteria->compare('bundle_id',$this->bundle_id,true);
		$criteria->compare('package_name',$this->package_name,true);
		$criteria->compare('tag',$this->tag,true);
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
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
