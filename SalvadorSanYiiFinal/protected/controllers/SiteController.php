<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */

	public $lugar=false;
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
			'search'=>array(
				'class'=>'ext.esearch.SearchAction',
				'model'=>'Post',
				'attributes'=>array('title', 'tags', 'content'),
			),
			'coco'=>array(
				'class'=>'CocoAction',
			),
				array('allow', // allow authenticated user to perform 'create' and 'update' actions
						'actions' => array('create', 'index', 'upload'),
						'users' => array('*'),
				),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->lugar=true;
		$this->layout='//layouts/categorias';
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				//mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				
				Yii::import('application.extensions.phpmailer.JPhpMailer');
				$mail = new JPhpMailer;
				$mail->IsSMTP();
				//$mail->Host = 'smtp.gmail.com';
				$mail->Host = 'smtp.googlemail.com:465';
				$mail->SMTPSecure = "ssl";
				$mail->SMTPAuth = true;
				$mail->Username = 'SalvadorSanNqn2@gmail.com';
				$mail->Password = 'manchareal2013';
				$mail->SetFrom($model->email, 'Salvador San');
				$mail->Subject = $model->subject;
				$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
				$mail->MsgHTML('<h1>Salvador San</h1><h2>'.$model->name.'</h2></br><b>Mensaje:</b> '.$model->body);
				$mail->AddAddress('SalvadorSanNqn2@gmail.com', 'Lucas C');
				$mail->Send();


				Yii::app()->user->setFlash('contact','Gracias por contactarse con nosotros. En seguida le responderemos.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login()){
				//exit('valida');
				$this->redirect(Yii::app()->user->returnUrl);
			}
			//exit('no');
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
}