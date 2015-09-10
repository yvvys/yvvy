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
		$data =  Catalogue::model()->getAll();
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

	public function actionUpdate($id)
	{
		$model = spu::model();
		$data = $model->findByPk($id);
		//查询所有的商品目录
		$select = Catalogue::model()->getAll();
		if(isset($_POST['Spu']))
		{
			//从商品目录表中 查找该SPU对应的商品目录
			$classfy = Catalogue::model()->findByPk($_POST['Spu']['classfy_id']);
			//填充数据库字段
			$_POST['Spu']['spu_id'] = $id;
			$_POST['Spu']['classfy_name'] = $classfy['tree'];
			//压入数据 并验证
			$model->attributes = $_POST['Spu'];
			if($model->validate())
			{
				
				$spu_name = $_POST['Spu']['spu_name'];
				$classfy_id = $_POST['Spu']['classfy_id'];
				$classfy_name = $_POST['Spu']['classfy_name'];
				$describe = $_POST['Spu']['describe'];
				$is_sale  = $_POST['Spu']['is_sale'];
				$result = $model->updateByPk($id,array('spu_name'=>$spu_name,'is_sale'=>$is_sale,'describe'=>$describe,'classfy_id'=>$classfy_id,'classfy_name'=>$classfy_name));
				
				if($result)
				{
					Yii::app()->user->setFlash('Info',' SPU修改成功');
				}else{
					Yii::app()->user->setFlash('Info',' SPU修改失败');
				}
				$this->redirect(array('index'));				

			}
		
		}


		$this->render('update',array('model'=>$model,'data'=>$data,'select'=>$select));
	}

	public function actionDelete($id)
	{
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