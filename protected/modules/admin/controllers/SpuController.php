<?php
header("Content-type: text/html; charset=utf-8"); 
class SpuController extends Controller{

	public function actionIndex()
	{
		$criteria = new CDbCriteria();
		$criteria->order = 'spu_id DESC';

		$data = new CActiveDataProvider('Spu',array(
				'criteria' =>$criteria,
				'pagination'=>array(
					'pageSize'=>20
					)
			));

		$this->render('index',array('data'=>$data));
	}

	public function actionUpdate()
	{
		$id = Yii::app()->request->getParam('id');
		if(isset($id)){
			$model = Spu::model()->findByPk($id);
		}else{
			$model = new Spu;
		}

		if(isset($_POST['Spu']))
		{
			//var_dump($_POST['Spu']);die;
			$model->attributes = $_POST['Spu'];

			if($model->validate())
			{

				$data = Catalogue::model()->findByPk($_POST['Spu']['classfy_id']);
				$series = Series::model()->findByPk($_POST['Spu']['series_id']);
				$_POST['Spu']['classfy_name'] = $data['tree'];
				$_POST['Spu']['series_name'] = $series['name'];
				$model->attributes = $_POST['Spu'];

				if($model->save())
				{
					Yii::app()->user->setFlash('Info','创建SPU成功');
				}else{
					Yii::app()->user->setFlash('Info','创建SPU失败');
				}
				$this->redirect(array('index'));				
			}	
		}
		$this->render('update',array('model'=>$model));
	}

	public function actionDelete()
	{
		$id = Yii::app()->request->getParam('id');
		$result = Spu::model()->deleteBypK($id);
		
		if($result)
		{
			Yii::app()->user->setFlash('Info',' SPU删除成功');
		}else{
			Yii::app()->user->setFlash('Info',' SPU删除失败');
		}
		$this->redirect(array('index'));		
	}
}

?>