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
  			"color_pic"		=>"色板图",
  			"sku_num"		=>"数量", 
  			"material"		=>"材质", 
  			"specs"			=>"规格",
  			"image"			=>"图片",
  			"top_image"		=>'头图',
  			"is_top"		=>"主展示",
  			"introduce"		=>"简介",
  			"content"		=>"内容",

			);
	}

	public function rules()
	{
		return array(
			array("sku_id","checkSku",),
			array("spu_id","required","message"=>"SPU编号必填",),
			array("sku_name","required","message"=>"SKU名称必填",),
			array("color","required","message"=>"颜色必填",),
			array("material","required","message"=>"材质必填",),
			array("specs","required","message"=>"规格必填",),
			
			array('spk_id,spu_id,sku_name,price,sku_num,material,specs,is_top,image,top_image,color_pic,introduce,content',"safe",),
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