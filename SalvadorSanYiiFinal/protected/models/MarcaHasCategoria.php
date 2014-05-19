<?php

/**
 * This is the model class for table "marca_has_categoria".
 *
 * The followings are the available columns in table 'marca_has_categoria':
 * @property integer $marca_idMarca
 * @property integer $categoria_idCategoria
 */
class MarcaHasCategoria extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MarcaHasCategoria the static model class
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
		return 'marca_has_categoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('marca_idMarca, categoria_idCategoria', 'required'),
			array('marca_idMarca, categoria_idCategoria', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('marca_idMarca, categoria_idCategoria', 'safe', 'on'=>'search'),
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
			'marca_idMarca' => 'Marca Id Marca',
			'categoria_idCategoria' => 'Categoria Id Categoria',
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

		$criteria->compare('marca_idMarca',$this->marca_idMarca);
		$criteria->compare('categoria_idCategoria',$this->categoria_idCategoria);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}