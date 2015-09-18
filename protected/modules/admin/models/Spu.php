<?php
class Spu extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
			return parent::model($className);
	}

	public function tableName()
	{
		return 'spu';
	}

	public function attributeLabels()
	{
		return array(
			'spu_id' 	=> 'SPU 编号',
			'spu_name' 	=> 'SPU 名称',
			'classfy_id'=> '分类'	,
			'is_sale' 	=> '是否在售',
			'series_id' => '系列',
		);
	}

	public function rules()
	{
		return array(
			array('spu_id','checkSpu'),
			array('spu_name','required','message'=>'SPU 名称必填'),
			array('classfy_id','required','message'=>'SPU 分类必选'),
			array('is_sale','required','message'=>'是否在售必选'),
			array('classfy_name','safe'),
			array('series_id','safe'),
			array('series_name','safe'),

		);

	}


	public function checkSpu()
	{

		if(empty($this->spu_id)){
			$this->addError('spu_id','SPU ID必填');
		}else{
			$result = Spu::model()->findByPk($this->spu_id);
			if($result){
			$this->addError('spu_id','SPU 已存在 请重新输入');			
			}
		}	
	}


	public function classfy_name()
	{
		  $rec = array();
                $criteria = new CDbCriteria;
                $criteria->select = 't.classfy_name';
                $criteria->condition = '';
                $data=Spu::model()->findAll($criteria);
                for($i=0;$i<sizeof($data); $i++){
                 $rec[$data[$i]['classfy_name']] = $data[$i]['classfy_name'];
                }
                return $rec;
	}

	public function spu_name($keyword=null)
	{
		  $rec = array();
                $criteria = new CDbCriteria;
                $criteria->select = 't.spu_id,t.spu_name';
                if($keyword<>null){
	                $keyword = trim($_POST['keyword']);
	                $criteria->addSearchCondition('classfy_name', $keyword,true,'OR');  
	                $criteria->addSearchCondition('spu_name', $keyword,true,'OR');  
	            }
                $criteria->condition = '';
                $data=Spu::model()->findAll($criteria);
                for($i=0;$i<sizeof($data); $i++){
                	$rec[$i][id]=$data[$i]['spu_id'];
                	$rec[$i][name]=$data[$i]['spu_name'];

               //  $rec[$data[$i]['spu_id']] = $data[$i]['spu_name'];
                }
                return $rec;
	}


}


?>