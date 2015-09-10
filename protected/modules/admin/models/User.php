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
	/*
	//建立模型标签
	public function attributeLabels()
	{
		return array(
			'password'  => '原始密码',
			'password1' => '新密码',
			'password2' => '确认密码'
		);
	}*/
	//建立规则
	public function rules()
	{
		return array(
			array('username','required','message'=>'用户名必填'),
			array('password','required','message'=>'用户名或密码错误'),
			);
	}
	/*
	public function check_passwd()
	{
		$userInfo = $this->find('username=:name',array(':name'=>Yii::app()->user->name));
		if(md5($this->password) != $userInfo->password)
		{
			$this->addError('password','原始密码错误');
		}

	}
	*/

}
?>