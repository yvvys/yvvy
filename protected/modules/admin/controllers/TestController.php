<?php
class TestController extends Controller
{


	function actionIndex(){

		if (Yii::app()->request->isAjaxRequest) {	
			$data=Spu::spu_name();
			//$data[]=array('id' =>1,'Code'=>'aasas' );
			//$data[]=array('id' =>2,'Code'=>'aaerc' );
			echo json_encode($data);
		}else{
			$this->render('index');

		}

	}
}