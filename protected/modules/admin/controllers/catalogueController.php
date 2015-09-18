<?php
header("Content-type: text/html; charset=utf-8");   
class CatalogueController extends Controller
{
	//商品目录首页
	public function actionIndex()
	{
		$id = Yii::app()->request->getParam('id','0');
		$data = Catalogue::model()->getSon($id);
		$this->render('index',array('data'=>$data));
	}
	//商品目录创建
	public function actionCreate()
	{
		
		$model = new Catalogue;
		$data =  Catalogue::model()->getAll();

		if(isset($_POST['Catalogue']))
		{
			
			if(empty($_POST['Catalogue']['parent_id']))
			{
				$_POST['Catalogue']['parent_id'] = 0;
				$_POST['Catalogue']['tree'] = $_POST['Catalogue']['name'];
				$_POST['Catalogue']['level'] = 1;
				
			}else{
				//查找父目录的名称、层级、家谱树
				
				$result = $model->find(array('select'=>'name,level,tree','condition' => 'id='.$_POST['Catalogue']['parent_id'],
				));
				
				$_POST['Catalogue']['level'] = $result['level']+1;
				$_POST['Catalogue']['tree'] = $result['tree'].'>'.$_POST['Catalogue']['name'];
			}

			//表单内容压入模型
			$model->attributes = $_POST['Catalogue'];	
			//进行表单验证
			if($model->validate())
			{
				if($model->save())
				{
					Yii::app()->user->setFlash('Info','创建成功');
				}else{
					Yii::app()->user->setFlash('Info','创建失败');
				}
				$this->redirect(array('index'));
			}
		}
		$this->render('create',array('model'=>$model,'data'=>$data,'id'=>$id));
	}
	//更新编辑
	public function actionUpdate()
	{
		$id = Yii::app()->request->getParam('id');
		$model = Catalogue::model();
		$data = $model->findByPk($id);
		$select =  Catalogue::model()->getAll();

		if(isset($_POST['Catalogue']))
		{
			$name = $_POST['Catalogue']['name'];
			$describe = $_POST['Catalogue']['series'];
			$parent_id = $_POST['Catalogue']['parent_id'];
			$show = $_POST['Catalogue']['show'];

			$result = $model->updateByPk($id,array('name'=>$name,'series'=>$series,'parent_id'=>$parent_id,'show'=>$show)); 
			//进行表单验证
			if($result)
			{
				Yii::app()->user->setFlash('Info','修改成功');
			}else{
				Yii::app()->user->setFlash('Info','修改失败');
			}
			$this->redirect(array('index'));
			
		}

		$this->render('update',array('model'=>$model,'data'=>$data,'select'=>$select));
	}
	//删除
	public function actiondelete()
	{
		$id = Yii::app()->request->getParam('id');
		$result = 
		$result = Catalogue::model()->deleteByPk($id);
		if($result){
			Yii::app()->user->setFlash('Info','删除目录成功');
		}else{
			Yii::app()->user->setFlash('Info','删除目录失败');
		}
		$this->redirect(array('index'));
	}

}


?>