<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $idUsuarios
 * @property string $nombre
 * @property string $contrasenia
 * @property string $mail
 * @property integer $rol_idrol
 *
 * The followings are the available model relations:
 * @property Compra[] $compras
 * @property Rol $rolIdrol
 */
class Usuarios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
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
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, contrasenia, mail, rol_idrol', 'required'),
			array('rol_idrol', 'numerical', 'integerOnly'=>true),
			array('nombre, contrasenia, mail', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idUsuarios, nombre, contrasenia, mail, rol_idrol', 'safe', 'on'=>'search'),
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
			'compras' => array(self::HAS_MANY, 'Compra', 'idUsuario'),
			'rolIdrol' => array(self::BELONGS_TO, 'Rol', 'rol_idrol'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUsuarios' => 'Id Usuarios',
			'nombre' => 'Nombre',
			'contrasenia' => 'Contrasenia',
			'mail' => 'Mail',
			'rol_idrol' => 'Rol Idrol',
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

		$criteria->compare('idUsuarios',$this->idUsuarios);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('contrasenia',$this->contrasenia,true);
		$criteria->compare('mail',$this->mail,true);
		$criteria->compare('rol_idrol',$this->rol_idrol);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}