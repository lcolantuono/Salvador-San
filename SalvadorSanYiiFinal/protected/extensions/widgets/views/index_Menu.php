<?php 
$menu = array();
$items = array();

$menu[]=array('label'=>'Inicio', 'url'=>array('/site/index'));

$todasMarcas = Marca::model()->findAll();

/*@var $marca Marca */
foreach ($todasMarcas as $marca){
	foreach ($marca->categorias as $categoria){		
		/*@var $categoria Categoria */
		$items[]=array('label'=>$categoria->categoria, 'url'=>array('/productos/index&marca_idMarca='.$marca->idMarca.'&categoria_idCategoria='.$categoria->idCategoria));
	}
	$menu[]=array('label'=>$marca->marca.'<span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"),'items'=>$items);
	unset($items); /*vacio el array*/
	$items = array();
}

$menu[]=array('label'=>'Nuestro Local', 'url'=>array('/site/page', 'view'=>'local'));
$menu[]=array('label'=>'Contacto', 'url'=>array('/site/contact'));
$menu[]=array('label'=>'Login', 'url'=>array('/site/login'),'visible'=>Yii::app()->user->isGuest);
$menu[]=array('label'=>'Logout ('.Yii::app()->user->getState('NombreApellido').')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest);



$this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>$menu,
                )); ?>