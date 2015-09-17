<?php
header("Content-type: text/html; charset=utf-8"); 
class GoodsController extends Controller
{
	public function actionIndex()
	{
		$criteria = new CDbCriteria();
		$criteria->order = "sku_id desc";

		if(!empty($_POST['sku_id']) || !empty($_POST['sku_name']))
		{
			$sku_id  = trim($_POST['sku_id']);
			$criteria->addSearchCondition('sku_id',$sku_id,true,'OR');
			$sku_name= trim($_POST['sku_name']);
			$criteria->addSearchCondition('sku_name',$sku_name,true,'OR');
		}

		$data = new CActiveDataProvider('goods',array(
			'criteria' => $criteria,
			'pagination'=>array(
				'pageSize'=>20,
				),
			));
		$this->render('index',array('data'=>$data));
	}

	public function actionUpdate()
	{
		$sku_id = Yii::app()->request->getParam('sku_id');
		if(isset($sku_id))
		{
			$model = goods::model()->findByPk($sku_id);
		}else{
			$model = new goods;
		}

		if(isset($_POST["Goods"]))
		{
			if($_POST[moreimage]){
				$_POST[Goods][image]=json_encode($_POST[moreimage]);
			}else{
				$_POST[Goods][image]='';	
			}
			$model->attributes = $_POST["Goods"];

			if($model->validate())
			{

				if($model->save())
				{
					Yii::app()->user->setFlash('Info','创建SKU成功');
				}else{
					Yii::app()->user->setFlash('Info','创建SKU失败');
				}
				$this->redirect(array('index'));
			}
		}


		$this->render('update',array('model'=>$model));
	}

	public function actionDelete()
	{
		$sku_id = Yii::app()->request->getParam('sku_id');
		$result = Goods::model()->deleteByPk($sku_id);

		if($result)
		{
			Yii::app()->user->setFlash('Info','删除SKU成功');
		}else{
			Yii::app()->user->setFlash('Info','删除SKU失败');
		}

		$this->redirect(array('index'));	
	}

}
?>