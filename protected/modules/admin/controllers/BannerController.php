<?php
class BannerController extends Controller
{


	public function actionIndex(){
     		$criteria = new CDbCriteria(); 
			$criteria->order = 'banner_id desc'; 
			if(isset($_GET['search']) && $_GET['search'] != ''){
                $keyword = trim($_GET['search']);
                $criteria->addSearchCondition('banner_group', $keyword,true,'OR');
                $criteria->addSearchCondition('title', $keyword,true,'OR');    
            }
            $dataProvider=new CActiveDataProvider('Banner',array(
                'criteria'=>$criteria,
                 'pagination'=>array(
                        'pageSize'=>10,
                        ),
            ));
            $this->render('index',array(
                        'dataProvider'=>$dataProvider
            ));
            
	}

	public function actionUpdate(){

		$banner_id=Yii::app()->request->getParam('banner_id');
		$model=Banner::model()->findbypk($banner_id);
		if($_POST['Banner']){
			if($model == null){

				$model = new Banner;
			}
			
			$model->title 				=	$_POST['Banner']['title'];

			$model->image 				=	$_POST['Banner']['image'];
			$model->url 				=	$_POST['Banner']['url'];
			if($_POST['Banner']['group_new']){
				$model->banner_group 	=	$_POST['Banner']['group_new'];
			}else{
				$model->banner_group 	=	$_POST['Banner']['banner_group'];
			}	
			$model->active 				=	1;
			$model->introduce 			=	$_POST['Banner']['introduce'];
			$model->banner_order 		=	$_POST['Banner']['banner_order']>99 ? '99' : $_POST['Banner']['banner_order'];
			if($model->save()){
				$this->redirect($this->createUrl('banner/index',array('Banner_page'=>$_GET['Banner_page'])));
			}else{
				Yii::app()->user->setFlash('success','操作失败!');

			}	
		
		}
	
		$this->render('update',array('model'=>$model));

	}

	public function actionDelete(){
		$banner_id=Yii::app()->request->getParam('banner_id');
		$model=Banner::model()->findbypk($banner_id);
		if($model==null) throw new CHttpException(400,'该数据不存在！');
		Banner::model()->findByPk($banner_id)->delete();
		$this->redirect($this->createUrl('banner/index'));
	}

}
?>