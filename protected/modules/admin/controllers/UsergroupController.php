<?php

class UsergroupController extends Controller{
	function actionIndex(){
			$criteria = new CDbCriteria(); 
			$criteria->order = 'id desc'; 
			
			if(isset($_POST[yt0]) && $_POST[yt0]!= ''){
		
                $keyword = trim($_POST['keyword']);
                $criteria->addSearchCondition('username', $keyword,true,'OR');  
                
                $criteria->addSearchCondition('id', $keyword,true,'OR');
                
            }
            $groupArr = UserGroup::model()->findall(array('select'=>array('group_id','group_name')));
            foreach($groupArr as $v){
				$data[$v[group_id]]=$v[group_name];
													
			}	
            $dataProvider=new CActiveDataProvider('User',array(
                'criteria'=>$criteria,
                 'pagination'=>array(
                        'pageSize'=>10,
                        ),
            ));
            $this->render('index',array(
                        'dataProvider'=>$dataProvider,'data'=>$data
            ));

	}

	public function actionUpdate(){
		
		$id=Yii::app()->request->getParam('id');

		$model=User::model()->findbypk($id);
		
		if($_POST['Usergroup']){

			if($model == null){

				$model = new User;
			}
			$model->username 			=	$_POST['Usergroup']['username'];
			$model->password 			=	count($_POST['Usergroup']['password'])>0 ? md5($_POST['Usergroup']['password']) : $_POST['Usergroup']['passwords'];
			$model->user_group 			=	json_encode($_POST['Usergroup']['group']);
		
			if($model->save()){
				$this->redirect($this->createUrl('usergroup/index',array('Banner_page'=>$_GET['Banner_page'])));
			}else{
				Yii::app()->user->setFlash('success','操作失败!');

			}	
		
		}
		$groupArr = UserGroup::model()->findall(array('select'=>array('group_id','group_name')));
		$this->render('update',array('model'=>$model,'groupArr'=>$groupArr));

	}

	public function actionDelete(){
		$id=Yii::app()->request->getParam('id');
		
		//if($model==null) throw new CHttpException(400,'该数据不存在！');
		User::model()->findByPk($id)->delete();
		$this->redirect($this->createUrl('usergroup/index'));
	}



}