<?php
header("Content-type: text/html; charset=utf-8"); 
class SpuController extends Controller{

	public function actionIndex()
	{
		$model = Spu::model();
		$data = $model->findAll();

		$this->render('index',array('model'=>$model,'data'=>$data));
	}

	public function actionCreate()
	{
		$model = new Spu();
		$data =  Catalogue::model()->getAll(1);
		if(isset($_POST['Spu']))
		{
			$_POST['Spu']['classfy_name'] = $data[$_POST['Spu']['classfy_id']];
			$model->attributes = $_POST['Spu'];
			
			if($model->validate())
			{
				//判断SPU是否存在
				if ($model::model()->findByPk($_POST['Spu']['spu_id'])){
					Yii::app()->user->setFlash('Info','SPU已存在');
					$this->redirect(array('index'));
				}


				if($model->save())
				{
					Yii::app()->user->setFlash('Info','SPU创建成功');
				}else{
					Yii::app()->user->setFlash('Info','SPU创建失败');
				}
				$this->redirect(array('index'));
			}

		}

		$this->render('create',array('model'=>$model,'data'=>$data));
	}

	public function actionUpdate()
	{
		$this->render('update');
	}

	public function actionDelete($id)
	{
		$this->render('delete');		
	}
}

?>