<?php

class SliderWidget extends CWidget {
	
	public function	run() {
		//exit('aca');
		/*$dataProvider=new CActiveDataProvider('Categoria');
		$this->render('index',array(
				'dataProvider'=>$dataProvider,
		));*/
		$slider=Slider::model()->findAll();
		$this->render('index_Slider',array(
				'slider'=>$slider
		));
	}

}
?>