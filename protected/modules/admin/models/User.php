<?php
class User extends CActiveRecord
{
	public $password1;
	public $password2;
	//返回方法
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	//返回数据库表
	public function tableName()
	{
		return 'user';
	}
	
	//建立模型标签
	public function attributeLabels()
	{
		return array(
			'password'  => '原始密码',
			'password1' => '新密码',
			'password2' => '确认密码'
		);
	}

	//建立规则
	public function rules()
	{
		return array(
			array('username','required','message'=>'用户名必填'),
			array('password','required','message'=>'用户名或密码错误'),
			array('password1','required','message'=>'新密码必填'),
			array('password1', 'length', 'min'=>6,'message'=>'密码长度至少为6位且有大小写和特殊字符'),
			array('password2','required','message'=>'新密码必填'),
			array('password2','check_passwd'),
			array('id','safe'),
			array('user_group','safe'),
			
			);
	}
	
	public function check_passwd()
	{
		if($this->password1 != $this->password2){
			$this->addError('password2','两次输入的密码不相符');
		}

	}
	
	
}
?>