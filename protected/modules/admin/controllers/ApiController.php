<?php
class ApiController extends Controller
{


	function actionIndex(){

	//	if (Yii::app()->request->isAjaxRequest) {	
			$keyword=Yii::app()->request->getParam('keyword');
			if(!$keyword) $keyword=Null;
			$data=Spu::spu_name($keyword);
	
			echo json_encode($data);
	//	}else{
	//		echo json_encode(array('code'=>'false','msg'=>'错误的请求方式'));

	//	}

	}
}