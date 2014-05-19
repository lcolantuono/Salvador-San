<?php

class AdministradorController extends Controller
{
	public function actionIndex()
	{
		if (Yii::app()->user->checkAccess("admin"))
		$this->render('index');
		else
			$this->redirect(Yii::app()->baseUrl);
	}
	/*
	public function accessRules()
	{
		return array(
				array('deny', // allow authenticated user to perform 'create' and 'update' actions
						'users'=>array('admin'),
				)
		);
	}
	// Uncomment the following methods and override them if needed
	
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}