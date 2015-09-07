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
			'describe' 	=> '描述'	,
			'classfy_id'=> '分类'	,
			'is_sale' 	=> '是否在售',
		);
	}

	public function rules()
	{
		return array(
			array('spu_id','required','message'=>'SPU 编号必填'),
			array('spu_name','required','message'=>'SPU 名称必填'),
			array('describe','safe'),
			array('classfy_id','required','message'=>'SPU 分类必选'),
			array('is_sale','required','message'=>'是否在售必选'),
			array('classfy_name','safe'),

		);

	}

}


?>