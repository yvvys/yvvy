<?php
header("Content-type: text/html; charset=utf-8"); 
class ShopController extends Controller
{
	public function actionIndex()
	{
		$criteria = new CDbCriteria;

		$data = new CActiveDataProvider('shop',array(
			'criteria' =>$criteria,
			'pagination' =>array(
				'pageSize'=>20),

			));

		$this->render('index',array('data'=>$data));
	}
	
	public function actionUpdate()
	{
		$shop_id = Yii::app()->request->getParam('shop_id');
		$model = shop::model()->findByPk($shop_id);
		if(isset($shop_id)){
			$model = shop::model()->findByPk($shop_id);
		}else{
			$model = new Shop;
		}
		
		if(isset($_POST['Shop']))
		{
			$model->attributes = $_POST['Shop'];
			if($model->validate())
			{
				if($model->save())
				{
					Yii::app()->user->setFlash('Info','添加门店成功');
				}else{
					Yii::app()->user->setFlash('Info','添加门店失败');
				}
				$this->redirect(array('index'));
			}
		}
		$this->render('update',array('model'=>$model));
	}

	public function actionDelete()
	{
		$shop_id = Yii::app()->request->getParam('shop_id');
		$result = shop::model()->deleteByPk($shop_id);
		if($result)
		{
			Yii::app()->user->setFlash('Info','删除门店成功');
		}else{
			Yii::app()->user->setFlash('Info','删除门店失败');
		}

		$this->redirect(array('index'));
	}
}

?>