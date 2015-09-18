	<?php
/**
 * 登录
 */
class TestController extends Controller{
	
	public function actionIndex(){
	include("protected/extensions/PHPMailer/class.phpmailer.php");
			include("protected/extensions/PHPMailer/class.smtp.php");
			$message = '激活账号请点击!';//内容
		
			$mailer = new PHPMailer();
			
			$mailer->Host = 'smtp.163.com';
			
			$mailer->IsSMTP();
			
			$mailer->SMTPAuth = true;
			
			$mailer->From = 'tujunoo@163.com';
			
			$mailer->AddReplyTo('tujunoo@163.com');
			
			$mailer->AddAddress('1785522185@qq.com');//发送到邮箱
			//$mailer->AddAddress('tujun@markorhome.com');//发送到邮箱
			
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
			echo 'a';
			// Yii::success("邮箱发送失败请用其他邮箱注册","index.php","3");
			
			} else {
				echo 'b';
			 //Yii::success("注册成功请到邮箱激活帐号","index.php","3");
			
			}
		}
	}