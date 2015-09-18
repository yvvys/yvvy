<?php
class ApiController extends Controller
{


	function actionIndex(){

		if (Yii::app()->request->isAjaxRequest) {	
			$data=Spu::spu_name();
	
			echo json_encode($data);
		}else{
			$this->render('index');

		}

	}
}