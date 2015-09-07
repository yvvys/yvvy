<?php
class DaochuController extends Controller{ 

	public function actionIndex(){
		$sql="SELECT `auth_user`.`username` , `auth_user`.`first_name` , `auth_user`.`email` , `customer_userprofile`.`phoneNo` , `customer_userprofile`.`location`
		FROM `auth_user` , `customer_userprofile`
		WHERE auth_user.id = customer_userprofile.user_id && ( auth_user.email <> '' || customer_userprofile.phoneNo <> '' ) ";
		$data=Yii::app()->db->createCommand($sql)->queryall();
			
		foreach($data as $v){
			//print_r($v);exit;
			$model=new Daochu;
			$model->username=$v['username'];
			$model->first_name=$v['first_name'];
			$model->email=$v['email'];
			$model->phoneNo=$v['phoneNo'];
			$model->location=$v['location'];
			$model->save();

		}

	}


}
?>