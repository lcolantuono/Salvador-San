<?php

/**
 * This is the model class for table "imagenes".
 *
 * The followings are the available columns in table 'imagenes':
 * @property integer $idImagenes
 * @property string $imagen
 * @property integer $productos_idProductos
 *
 * The followings are the available model relations:
 * @property Productos $productosIdProductos
 */
class Imagenes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Imagenes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'imagenes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('productos_idProductos', 'required'),
			array('productos_idProductos', 'numerical', 'integerOnly'=>true),
			array('imagen', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idImagenes, imagen, productos_idProductos', 'safe', 'on'=>'search'),
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
			'productosIdProductos' => array(self::BELONGS_TO, 'Productos', 'productos_idProductos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idImagenes' => 'Id Imagenes',
			'imagen' => 'Imagen',
			'productos_idProductos' => 'Productos Id Productos',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idImagenes',$this->idImagenes);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('productos_idProductos',$this->productos_idProductos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}