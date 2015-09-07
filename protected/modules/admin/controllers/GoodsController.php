<?php
class GoodsController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionCreate()
	{
		$this->render('create');
	}

	public function actionUpdate($id)
	{
		$this->render('update');
	}

	public function actionDelete($id)
	{
		
	}

}
?>