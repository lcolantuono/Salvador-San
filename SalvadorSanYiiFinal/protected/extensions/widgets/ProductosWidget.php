<?php
class ProductosWidget extends CWidget {
	
	public $order = 'fechayhora desc';
	
	public $limit=null;
	

	public function	run() {
		
	$productos=Productos::model()->findAll(array('limit'=>$this->limit,'order'=>$this->order));

	$this->render('index_Productos',array(
			'productos'=>$productos,
	));
	

}
}?>