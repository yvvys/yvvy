<?php
class Goods extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function talbeName()
	{
		return 'goods';
	}

	public function attributeLabels()
	{
		return array(
			"spu_id"		=>"SPU编号",
			"sku_id"		=>"SKU编号",
  			"sku_name"		=>"SKU名称",
  			"price"			=>"价格",
  			"color"			=>"颜色",
  			"sku_num"		=>"数量", 
  			"material"		=>"材质", 
  			"specs"			=>"规格",
  			"image"			=>"图片",
  			"is_top"		=>"是否头图",
			);
	}

	public function rules()
	{
		return array(
			array("sku_id","checkSku",),
			array("spu_id","required","message"=>"SPU编号必填",),
			array("sku_name","required","message"=>"SKU名称必填",),
			array("price","safe",),
			array("color","required","message"=>"颜色必填",),
			array("sku_num","safe",),
			array("material","required","message"=>"材质必填",),
			array("specs","required","message"=>"规格必填",),
			array("image","safe",),
			array("is_top","safe",),
			);

	}

	public function checkSku()
	{
		if(!isset($this->sku_id))
		{
			$this->addError('sku_id','SKU编号必填');
		}
		
		$result = Goods::model()->findByPk($this->sku_id);
		if($result)
		{
			$this->addError('sku_id','SKU编号已存在');
		}
	}

	public function getId()
	{
		$data = $this::model()->findAll();
		$result = array();
		foreach($data as $v){
			$result[$v['sku_id']] = $v['sku_id'];
		}
		return $result;
	}


}

?>