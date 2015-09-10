<?php
class NewsController extends Controller
{


	public function actionIndex(){
     		$criteria = new CDbCriteria(); 
			$criteria->order = 'created desc'; 
			if(isset($_POST[yt0]) && $_POST[yt0]!= ''){
                $keyword = trim($_POST['keyword']);
                $criteria->addSearchCondition('title', $keyword,true,'OR');  
            }
            $dataProvider=new CActiveDataProvider('News',array(
                'criteria'=>$criteria,
                 'pagination'=>array(
                        'pageSize'=>10,
                        ),
            ));

            $this->render('index',array(
                        'dataProvider'=>$dataProvider
            ));
            
	}

public function actionUpdate(){

        $news_id=Yii::app()->request->getParam('news_id');
        $model=News::model()->findbypk($news_id);
        if($_POST['News']){
            if($model == null){

                $model = new News;
            }
            
            $model->title                   =   $_POST['News']['title'];
            if($news_id){
                $model->updated                 =   time();
            }else{
                $model->created                 =   time();
            }
            
            $model->content                 =   $_POST['News']['content'];
            $model->issuer                  =   Yii::app()->user->name;
            if($model->save()){
                $this->redirect($this->createUrl('news/index',array('News_page'=>$_GET['News_page'])));
            }else{
                Yii::app()->user->setFlash('success','操作失败!');

            }   
        
        }
    
        $this->render('update',array('model'=>$model));

    }

    public function actionDelete(){
        $news_id=Yii::app()->request->getParam('news_id');
        News::model()->findByPk($news_id)->delete();    
         $this->redirect($this->createUrl('news/index'));
    }



}

    ?>