<?php

/**
 * This is the model class for table "productos".
 *
 * The followings are the available columns in table 'productos':
 * @property integer $idProductos
 * @property string $titulo
 * @property string $descripcion
 * @property integer $stock
 * @property double $precio
 * @property string $fechayhora
 * @property integer $marca_idMarca
 * @property integer $categoria_idCategoria
 * @property integer $codigoBarra
 *
 * The followings are the available model relations:
 * @property Imagenes[] $imagenes
 * @property Itemscompra[] $itemscompras
 * @property Categoria $categoriaIdCategoria
 * @property Marca $marcaIdMarca
 */
class Productos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Productos the static model class
	 */
	
	public $cantidad;	
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'productos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('titulo, descripcion, stock, precio, fechayhora, marca_idMarca, categoria_idCategoria, codigoBarra', 'required'),
			array('stock, marca_idMarca, categoria_idCategoria, codigoBarra', 'numerical', 'integerOnly'=>true),
			array('precio', 'numerical'),
			array('titulo', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idProductos, titulo, descripcion, stock, precio, fechayhora, marca_idMarca, categoria_idCategoria, codigoBarra', 'safe', 'on'=>'search'),
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
			'imagenes' => array(self::HAS_MANY, 'Imagenes', 'productos_idProductos'),
			'itemscompras' => array(self::HAS_MANY, 'Itemscompra', 'idProducto'),
			'categoriaIdCategoria' => array(self::BELONGS_TO, 'Categoria', 'categoria_idCategoria'),
			'marcaIdMarca' => array(self::BELONGS_TO, 'Marca', 'marca_idMarca'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idProductos' => 'Id Productos',
			'titulo' => 'Titulo',
			'descripcion' => 'Descripcion',
			'stock' => 'Stock',
			'precio' => 'Precio',
			'fechayhora' => 'Fechayhora',
			'marca_idMarca' => 'Marca Id Marca',
			'categoria_idCategoria' => 'Categoria Id Categoria',
			'codigoBarra' => 'Codigo Barra',
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

		$criteria->compare('idProductos',$this->idProductos);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('stock',$this->stock);
		$criteria->compare('precio',$this->precio);
		$criteria->compare('fechayhora',$this->fechayhora,true);
		$criteria->compare('marca_idMarca',$this->marca_idMarca);
		$criteria->compare('categoria_idCategoria',$this->categoria_idCategoria);
		$criteria->compare('codigoBarra',$this->codigoBarra);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}