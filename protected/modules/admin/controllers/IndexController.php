<?php
class IndexController extends Controller
{
	//首页登录
	public function actionIndex()
	{
		//判断用户
		if(Yii::app()->user->isGuest)
		{
			$this->redirect(array('login'));
		}else{

			$this->render('index');
		}
	}
	//验证登录
	public function actionLogin()
	{
		//实例化登录验证类
		
		$model = new LoginForm() ;
		//判断
		if(isset($_POST['LoginForm']))
		{

			$model->attributes = $_POST['LoginForm'];
			//登录验证
			if($model->validate() && $model->login())
			{

				$this->redirect(Yii::app()->params['returnUrl']);
			}
		}
		$this->renderPartial('login',array('model'=>$model));
	}
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(array('index/login'));
	}
}

?>