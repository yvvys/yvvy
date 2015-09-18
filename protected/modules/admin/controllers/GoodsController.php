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
		$id = Yii::app()->request->getParam('id');
		if($id)
		{

			$model = goods::model()->findByPk($id);

		}else{
			$model = new goods;
		}

		if(isset($_POST["Goods"]))
		{
			if($_FILES[color_pic]){
				$color_pic=$this->Upload($_FILES[color_pic]);
				if($color_pic<>false) $_POST["Goods"]["color_pic"]=$color_pic;
			}
			
			if(!$_POST[Goods][top_image]){

				$_POST[Goods][top_image]=$_POST[moreimage][0];
			}
			if($_POST[moreimage]){
				$_POST[Goods][image]=json_encode($_POST[moreimage]);
			}else{
				$_POST[Goods][image]='';	
			}
		
	
			$model->attributes = $_POST["Goods"];

		
			if($model->validate() && $model->save())
			{
				
				Yii::app()->user->setFlash('Info','创建SKU成功');
					
			}else{
					
				Yii::app()->user->setFlash('Info','创建SKU失败');
			}
			$this->redirect(array('index'));
			
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


	public function Upload($file)
    {
        $path='/uploads/images/'.date('Y-m');
       $Folder = $_SERVER['DOCUMENT_ROOT'].$path; // Relative to the root
       if(!file_exists($Folder )){
            if(!mkdir($Folder)){
                echo json_encode(array('code'=>false,'msg'=>'文件夹创建失败'));
            }
       }
       if (!empty($file) ) {

            $tempFile = $file['tmp_name'];
            $fileParts = pathinfo($file['name']);
            $image_name=$this->giveName($fileParts['extension']);
            $targetFile = rtrim($Folder,'/') . '/' . $image_name;
           
            $fileTypes = array('jpg','jpeg','gif','png'); // File extensions
            $image=$path.'/'.$image_name;
            if (in_array($fileParts['extension'],$fileTypes)) {
                move_uploaded_file($tempFile,$targetFile);
           
                return $image;
            } else {
             return false;
            }
        }
   
    }

    function giveName($type){
        $pic=time().rand(1,9999);
        $picname=md5($pic).'.'.$type;
        return $picname;
    }

}
?>