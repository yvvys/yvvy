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

			$model = User::model();
			if(isset($_POST['User']))
			{
				$user = $model->findByPk(Yii::app()->user->user_id);
				$_POST['User']['id'] = $user->id;
				$_POST['User']['username'] = $user->username;
				$_POST['User']['user_group'] = $user->user_group;	

				$model->attributes = $_POST['User'];

				if($model->validate()){
					//重新赋值
					$_POST['User']['password'] = md5($_POST['User']['password1']);
					$model->attributes = $_POST['User'];
					if($model->save())
					{
						$this->redirect(array('catalogue/index'));
					}
				}
			}

			$this->render('index',array('model'=>$model));
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