<?php

/**
 * This is the model class for table "itemscompra".
 *
 * The followings are the available columns in table 'itemscompra':
 * @property integer $idItemCompra
 * @property integer $idCompra
 * @property integer $idProducto
 * @property integer $cantidad
 *
 * The followings are the available model relations:
 * @property Compra $idCompra0
 * @property Productos $idProducto0
 */
class Itemscompra extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Itemscompra the static model class
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
		return 'itemscompra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idCompra, idProducto, cantidad', 'required'),
			array('idCompra, idProducto, cantidad', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idItemCompra, idCompra, idProducto, cantidad', 'safe', 'on'=>'search'),
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
			'idCompra0' => array(self::BELONGS_TO, 'Compra', 'idCompra'),
			'idProducto0' => array(self::BELONGS_TO, 'Productos', 'idProducto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idItemCompra' => 'Id Item Compra',
			'idCompra' => 'Id Compra',
			'idProducto' => 'Id Producto',
			'cantidad' => 'Cantidad',
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

		$criteria->compare('idItemCompra',$this->idItemCompra);
		$criteria->compare('idCompra',$this->idCompra);
		$criteria->compare('idProducto',$this->idProducto);
		$criteria->compare('cantidad',$this->cantidad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}