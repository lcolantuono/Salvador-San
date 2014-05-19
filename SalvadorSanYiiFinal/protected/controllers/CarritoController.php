<?php

class CarritoController extends Controller
{
	
	private $carrito = array();
	
	public function actionIndex()
	{
		$this->render('index');
	}

	// =========================================================
	
	public function actionAgregarCarrito()
	{		//exit('llego');		
		$idProducto = $_POST['idProducto']; 
		$cantidad = $_POST['cantidad'];
		if(!isset(Yii::app()->session['carrito'])){
			Yii::app()->session['carrito'] = array();
		}
		$this->carrito=Yii::app()->session['carrito'];
		if(isset($this->carrito[$idProducto])){
			$this->carrito[$idProducto][1]=$this->carrito[$idProducto][1]+$cantidad;
		}
		else {
		$this->carrito[$idProducto]=array($idProducto, $cantidad);
		}
		Yii::app()->session['carrito']=$this->carrito;
		//print_r($this->carrito[$idProducto][1]);
		//exit();
		$this->redirect(array('listarCarritoAjax'));		
	}
	
	// =========================================================

	public function actionListarCarrito()
	{
		if(isset(Yii::app()->session['carrito'])){
		$listaProductos = array();
		
		foreach (Yii::app()->session['carrito'] as $items){
			$producto = Productos::model()->findByPk($items[0]);
			$producto->cantidad=$items[1];
			$listaProductos[] = $producto;
		}

		$this->render('listarCarrito',array(
				'listaProductos'=>$listaProductos,
		));
		}
		else {
			throw new CHttpException('404','El carrito esta vacio');
		} 		
		//print_r(Yii::app()->session['carrito']);
	}
	
	// =========================================================
	
	public function actionListarCarritoAjax()
	{
		if(isset(Yii::app()->session['carrito'])){
			$listaProductos = array();
	
			foreach (Yii::app()->session['carrito'] as $items){
				$producto = Productos::model()->findByPk($items[0]);
				$producto->cantidad=$items[1];
				$listaProductos[] = $producto;
			}
			$this->layout = false;
			$this->render('listarCarritoAjax',array(
					'listaProductos'=>$listaProductos,
			));
		}
		else {
			throw new CHttpException('404','El carrito esta vacio');
		}
		//print_r(Yii::app()->session['carrito']);
	}
	
	// =========================================================
	
	public function actionLimpiar(){		
		
		Yii::app()->session->clear();		
	}
	
	// =========================================================
	
	public function actionComprar(){
		
		if(!Yii::app()->user->isGuest){

		if(isset(Yii::app()->session['carrito'])){
			
		$compra = new Compra();
		$compra->idUsuario = Yii::app()->user->getState('idUsuario');
		$compra->fechaCompra = date("Y-m-d H:i:s");		
		$compra->insert();
		
		foreach (Yii::app()->session['carrito'] as $items){			
			$itemsCompra = new Itemscompra();			
			$itemsCompra->idCompra = $compra->id_compra;			
			$itemsCompra->idProducto = $items[0];
			$itemsCompra->cantidad = $items[1];	
			$itemsCompra->insert();	
		} 
		$listaProductos = array();
		
		foreach (Yii::app()->session['carrito'] as $items){
			$producto = Productos::model()->findByPk($items[0]);
			$producto->cantidad=$items[1];
			$listaProductos[] = $producto;
		}
		
		$this->actionLimpiar(); // Limpio la sesion
		$this->render('comprar',array(
				'listaProductos'=>$listaProductos,
		));}



		else{
			throw new CHttpException('404','El carrito esta vacio');
		}
		
		} else {
			$this->redirect(Yii::app()->createUrl('/site/login'));
			
		}		
	}
	
	// =========================================================
	
	public function actionBorrarProducto($idProducto){	
// 		$listaProductos = array();		
// 		foreach (Yii::app()->session['carrito'] as $key=>$items){
// 			if($idProducto!=$items[0]){
// 				$listaProductos[] = $items;
// 			}			
// 		}		
// 		Yii::app()->session['carrito']=$listaProductos;

		$listaProductos=Yii::app()->session['carrito'];		
		if(isset($listaProductos[$idProducto]))
			unset($listaProductos[$idProducto]);
		Yii::app()->session['carrito']=$listaProductos;
		$this->redirect(array('listarCarrito'));
	}	
	
}