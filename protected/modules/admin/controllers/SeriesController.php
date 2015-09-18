<?php
header("Content-type: text/html; charset=utf-8"); 
class SeriesController extends  Controller
{
	public function actionIndex()
	{
		$criteria = new CDbCriteria();
		$criteria->order = "id desc";

		$data = new CActiveDataProvider('Series',array(
				'criteria'=>$criteria,
				'pagination' =>array(
					'pageSize'=>20,
					),
				));
		$this->render('index',array('data'=>$data));
	}

	public function actionUpdate()
	{
		$id = Yii::app()->request->getParam('id');
		if(isset($id)){
			$model = Series::model()->findByPk($id);
		}else{
			$model = new Series;
		}

		if(isset($_POST['Series']))
		{
			$data = Catalogue::model()->findByPk($_POST['Series']['parent_id']);
			
			$_POST['Series']['parent_name'] = $data['tree'];
			$model->attributes = $_POST["Series"];

			if($model->validate())
			{
				if($model->save())
				{
					Yii::app()->user->setFlash('Info','创建商品系列成功');
				}else{
					Yii::app()->user->setFlash('Info','创建商品系列失败');
				}
				$this->redirect(array('index'));				
			}	
		}

		$this->render('update',array('model'=>$model));


	}

	public function actionDelete()
	{

		$id=Yii::app()->request->getParam('id');
		$result = Series::model()->deleteByPk($id);
		
		if($result)
		{
			Yii::app()->user->setFlash('Info','删除商品系列成功');
		}else{
			Yii::app()->user->setFlash('Info','删除商品系列失败');
		}
		$this->redirect(array('index'));	

	}
}

?>