<?php
class CustomerController extends Controller {
	public function actionIndex(){
			$criteria = new CDbCriteria(); 
			$criteria->order = 'customer_id desc'; 
			
			if(isset($_POST[yt0]) && $_POST[yt0]!= ''){
		
                $keyword = trim($_POST['keyword']);
                $criteria->addSearchCondition('customer_name', $keyword,true,'OR');  
                $criteria->addSearchCondition('ipone', $keyword,true,'OR');  
                $criteria->addSearchCondition('customer_id', $keyword,true,'OR');  
              
            }

            $dataProvider=new CActiveDataProvider('Customer',array(
                'criteria'=>$criteria,
                 'pagination'=>array(
                        'pageSize'=>10,
                        ),
            ));
            $this->render('index',array(
                        'dataProvider'=>$dataProvider
            ));
	}
	public function actionDelete(){
		$customer_id=Yii::app()->request->getParam('customer_id');
		
		//if($model==null) throw new CHttpException(400,'该数据不存在！');
		Banner::model()->findByPk($customer_id)->delete();
		$this->redirect($this->createUrl('customer/index'));
	}


}