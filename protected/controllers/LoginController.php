<?php
/**
 * 登录
 */
class LoginController extends Controller{
	
	public function actionIndex(){
		
		// p($userInfo->password);die;
		
		// var_dump(Yii::app()->db);
		$loginForm = new LoginForm();
		if(isset($_POST['LoginForm'])){
			$loginForm->attributes = $_POST['LoginForm'];

			if($loginForm->validate() && $loginForm->login() ){
				//echo Yii::app()->user->name;echo "<p>______________________</p>";
				//var_dump(Yii::app()->user);exit;
				
				Yii::app()->session['logintime'] = time();
				Yii::success("操作成功,3秒后挑战首页","index.php","3");
				exit;
			}
		}
		
		

		$this->render('index',array('loginForm'=>$loginForm));
	}
	public function actionOut(){//退出		
		Yii::app()->user->logout();  
		Yii::app()->session->clear();
		Yii::success("操作成功,3秒后挑战首页","index.php","3");
		exit;
	}
	public function actionRegister(){//注册
		
		$user = new Juser();
		
		if(isset($_POST['Juser'])){
			$checksename=Juser::model()->find('username=:username',array('username'=>$_POST['Juser']['username']));
			if(!empty($checksename)){
				echo "<script type='text/javascript'>alert('该邮箱已经注册!');history.go(-1);</script>";
				exit;	
			}
			$_POST['Juser']['seturl']=md5(time());
			$starturl='http://jijiaotong.com/index.php?r=login/yanzheng&merc='.$_POST['Juser']['seturl'].'&box='.md5($_POST['Juser']['password']);
			if(isset($_POST['Juser']['password']) && isset($_POST['Juser']['password2'])){
				
				$_POST['Juser']['password']=md5($_POST['Juser']['password']);
				$_POST['Juser']['password2']=md5($_POST['Juser']['password2']);
			}
			$user->attributes = $_POST['Juser'];

		if($user->save()){
			//$this->redirect(array('shenbao/teacherok'));
			/**发送激活邮件**/
			include("protected/extensions/PHPMailer/class.phpmailer.php");
			include("protected/extensions/PHPMailer/class.smtp.php");
			$message = '激活账号请点击!'.$starturl.'&id='.$user->attributes['id'];//内容
		
			$mailer = new PHPMailer();
			
			$mailer->Host = 'smtp.163.com';
			
			$mailer->IsSMTP();
			
			$mailer->SMTPAuth = true;
			
			$mailer->From = 'tujunoo@163.com';
			
			$mailer->AddReplyTo('tujunoo@163.com');
			
			//$mailer->AddAddress('1785522185@qq.com');//发送到邮箱
			$mailer->AddAddress('tujun@markorhome.com');//发送到邮箱
			
			$mailer->FromName = '无忧师训';//发送邮箱的名字
			
			$mailer->Username = 'tujunoo@163.com';    //这里输入发件地址的用户名
			
			$mailer->Password = '123456qQ';    //这里输入发件地址的密码
			
			//$mailer->SMTPDebug = true;   //设置SMTPDebug为true，就可以打开Debug功能，根据提示去修改配置
			$mailer->SMTPDebug = false;   //设置SMTPDebug为true，就可以打开Debug功能，根据提示去修改
			
			$mailer->CharSet = 'UTF-8';
			$title='无忧师训激活邮件';
			$mailer->Subject = Yii::t('demo', $title);
			
			$mailer->Body = $message;
			
			if(!$mailer->Send()) {
			
			 Yii::success("邮箱发送失败请用其他邮箱注册","index.php","3");
			
			} else {
			
			 Yii::success("注册成功请到邮箱激活帐号","index.php","3");
			
			}
	
		/**发送激活邮件end**/
	
			exit;
			}
		}
		$this->render('register',array('user'=>$user));
		
	}
	public function actions(){
		return array(
			'captcha'	=> array(
					'class'	=> 'system.web.widgets.captcha.CCaptchaAction',
					'height' => 80,
					'width'	 => 100,
					'minLength'=> 4,
					'maxLength'=> 4
	
				),
	
			);
	}
	public function actionYanzheng(){
		
		//merc=92eacb89ebe7fa068de464e1c32ac1ae&box=e10adc3949ba59abbe56e057f20f883e&id=10
		if(isset($_GET['id']) && isset($_GET['box']) && isset($_GET['merc']) ){
			$jsur=Juser::model()->find('id=:id && password=:box && seturl=:merc',array('id'=>$_GET['id'],'box'=>$_GET['box'],'merc'=>$_GET['merc']));
			if(!empty($jsur)){
				$id=intval($_GET['id']);
				$sql="update `juser` SET `start` = '1' WHERE `juser`.`id` ='{$id}'";
				$connection=Yii::app()->db;
				$command=$connection->createCommand($sql);
				if($command->execute()==1){
					Yii::success("已经激活帐号,3秒后跳转首页","index.php","3");
				}else{
					Yii::success("激活帐号失败,3秒后跳转首页","index.php","3");
				}
			}else{
				exit;
			}
		}
		
		//Yii::success("邮箱发送失败请用其他邮箱注册","index.php","3");
	}
	public function actionForget(){
		$user = new Forgets();
		
		
		if(isset($_POST['Forgets'])){
			$user->attributes = $_POST['Forgets'];
			if($user->validate()){
				$data=Juser::model()->find('username=:username',array(':username'=>$_POST['Forgets']['username']));
				
				if(!empty($data)){//该邮箱存在
					$rand=rand(1,999);
					$rand.=time();
					$rand=md5($rand);
					$starturl='http://jijiaotong.com/index.php?r=login/resets&merc='.$rand.'&id='.$data['id'];
					$message = '修改密码,请登录以下地址：'.$starturl;//内容
					
					include("protected/extensions/PHPMailer/class.phpmailer.php");
					include("protected/extensions/PHPMailer/class.smtp.php");
					
				
					$mailer = new PHPMailer();
					
					$mailer->Host = 'smtp.163.com';
					
					$mailer->IsSMTP();
					
					$mailer->SMTPAuth = true;
					
					$mailer->From = 'tujunoo@163.com';
					
					$mailer->AddReplyTo('tujunoo@163.com');
					
					$mailer->AddAddress($data['username']);//发送到邮箱
					
					$mailer->FromName = '无忧师训';//发送邮箱的名字
					
					$mailer->Username = 'tujunoo@163.com';    //这里输入发件地址的用户名
					
					$mailer->Password = '123456qQ';    //这里输入发件地址的密码
					
					//$mailer->SMTPDebug = true;   //设置SMTPDebug为true，就可以打开Debug功能，根据提示去修改配置
					$mailer->SMTPDebug = false;   //设置SMTPDebug为true，就可以打开Debug功能，根据提示去修改
					
					$mailer->CharSet = 'UTF-8';
					$title='无忧师训重置密码邮件';
					$mailer->Subject = Yii::t('demo', $title);
					
					$mailer->Body = $message;
					
					if(!$mailer->Send()) {
						Yii::success("邮箱发送信息失败！请重新提交信息","index.php","3"); 
						 exit;
					
					} else {
						$update['seturl']=$rand;
						Juser::model()->updateAll($update,"id=".$data['id']);
						$this->redirect(array('login/reset','username'=>$data['username']));
					}
							
				}else{//该邮箱不存在
					echo "";	
				}
					
				
			}
	
			
		}

	
	
		$this->render('forget',array('user','user'=>$user));
	}
	public function actionReset(){
		if(!empty($_GET['username'])){			
			$email=explode('@',$_GET['username']);
			$email='http://email.'.$email['1'];
			$this->render('reset',array('email'=>$email));
		}

	}
	public function actionResets(){
	
		if(isset($_GET['merc']) && isset($_GET['id'])){
			$id=intval($_GET['id']);		
			$data=Juser::model()->find('id=:id && seturl=:seturl',array(':id'=>$id,':seturl'=>$_GET['merc']));
			if(!empty($data)){
				$user = new Juser();
				
				if(isset($_POST['Juser']['password']) && isset($_POST['Juser']['password2'])){
					if($_POST['Juser']['password']==$_POST['Juser']['password2']){
							
						$update['password']=md5($_POST['Juser']['password']);
						$update['seturl']=time().rand(9,999);
						Juser::model()->updateAll($update,"id=".$data['id']);
						
						$this->render('resetok');
					}else{
					
						echo "<script type='text/javascript'>alert('密码输入不一致');history.go(-1);</script> ";
						exit;
				
						
					}
				}
		
				$this->render('resets',array('data'=>$data,'user'=>$user));
			}
		}
	
	}
	public function actionResetok(){
		$this->render('resetok');
	}

	public function actionWeibo(){//微博测试用
		
		// p($userInfo->password);die;
		
		// var_dump(Yii::app()->db);
		$loginForm = new LoginForm();
		if(isset($_POST['LoginForm'])){
			$loginForm->attributes = $_POST['LoginForm'];

			if($loginForm->validate() && $loginForm->login() ){
				//echo Yii::app()->user->name;echo "<p>______________________</p>";
				//var_dump(Yii::app()->user);exit;
				
				Yii::app()->session['logintime'] = time();
				Yii::success("操作成功,3秒后挑战首页","index.php","3");
				exit;
			}
		}
		
		

		$this->render('weibo',array('loginForm'=>$loginForm));
	}
	
}