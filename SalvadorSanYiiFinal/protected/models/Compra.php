<?php

/**
 * This is the model class for table "compra".
 *
 * The followings are the available columns in table 'compra':
 * @property string $metodoPago
 * @property integer $cantidaItems
 * @property double $montoTotal
 * @property integer $id_compra
 * @property integer $idUsuario
 * @property string $fechaCompra
 * @property integer $realizado
 *
 * The followings are the available model relations:
 * @property Usuarios $idUsuario0
 * @property Itemscompra[] $itemscompras
 */
class Compra extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Compra the static model class
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
		return 'compra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idUsuario, fechaCompra', 'required'),
			array('cantidaItems, idUsuario, realizado', 'numerical', 'integerOnly'=>true),
			array('montoTotal', 'numerical'),
			array('metodoPago', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('metodoPago, cantidaItems, montoTotal, id_compra, idUsuario, fechaCompra, realizado', 'safe', 'on'=>'search'),
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
			'idUsuario0' => array(self::BELONGS_TO, 'Usuarios', 'idUsuario'),
			'itemscompras' => array(self::HAS_MANY, 'Itemscompra', 'idCompra'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'metodoPago' => 'Metodo Pago',
			'cantidaItems' => 'Cantida Items',
			'montoTotal' => 'Monto Total',
			'id_compra' => 'Id Compra',
			'idUsuario' => 'Id Usuario',
			'fechaCompra' => 'Fecha Compra',
			'realizado' => 'Realizado',
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

		$criteria->compare('metodoPago',$this->metodoPago,true);
		$criteria->compare('cantidaItems',$this->cantidaItems);
		$criteria->compare('montoTotal',$this->montoTotal);
		$criteria->compare('id_compra',$this->id_compra);
		$criteria->compare('idUsuario',$this->idUsuario);
		$criteria->compare('fechaCompra',$this->fechaCompra,true);
		$criteria->compare('realizado',$this->realizado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}