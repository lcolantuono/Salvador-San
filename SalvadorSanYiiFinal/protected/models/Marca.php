<?php

/**
 * This is the model class for table "marca".
 *
 * The followings are the available columns in table 'marca':
 * @property integer $idMarca
 * @property string $marca
 *
 * The followings are the available model relations:
 * @property Categoria[] $categorias
 * @property Productos[] $productoses
 */
class Marca extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Marca the static model class
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
		return 'marca';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('marca', 'required'),
			array('marca', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idMarca, marca', 'safe', 'on'=>'search'),
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
			'categorias' => array(self::MANY_MANY, 'Categoria', 'marca_has_categoria(marca_idMarca, categoria_idCategoria)'),
			'productoses' => array(self::HAS_MANY, 'Productos', 'marca_idMarca'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idMarca' => 'Id Marca',
			'marca' => 'Marca',
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

		$criteria->compare('idMarca',$this->idMarca);
		$criteria->compare('marca',$this->marca,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}