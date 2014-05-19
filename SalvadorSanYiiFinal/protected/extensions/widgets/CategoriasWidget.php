<?php

class CategoriasWidget extends CWidget {
	
	public function	run() {
		//exit('aca');
		/*$dataProvider=new CActiveDataProvider('Categoria');
		$this->render('index',array(
				'dataProvider'=>$dataProvider,
		));*/
		if(isset($_GET['marca_idMarca'])){
			$idMarca=$_GET['marca_idMarca'];
		}else{
			$idMarca='';
		}
		$categorias=Categoria::model()->findAll();
		$this->render('index',array(
				'categorias'=>$categorias,'idMarca'=>$idMarca
		));
	}

}
?>