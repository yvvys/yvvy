<?php
class Shop extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'shop';
	}

	public function attributeLabels()
	{
		return array(
			'shop_id'  =>'门店编码',
  			'shop_name'=>'门店名称',
  			'region'   =>'所在省份',
  			'city' 	   =>'所在城市',
  			'address'  =>'详细地址',
  			'phone'    =>'电话',
  			'longitude'=>'经度',
  			'latitude' =>'纬度',
  			'image'	   =>'图片',
  			'baidu'    =>'百度链接',
			);

	}

	public function rules()
	{	
		return array(
			array('shop_id',	'required',	'message'=>'门店编码必填'),
			array('shop_name',	'required',	'message'=>'门店名称必填'),
			array('region',		'required',	'message'=>'所在省份必填'),
			array('city',		'required',	'message'=>'所在城市必填'),
			array('address',	'required',	'message'=>'详细地址必填'),
			array('phone',		'required',	'message'=>'电话必填'),
			array('longitude',	'required',	'message'=>'经度必填'),
			array('latitude',	'required',	'message'=>'纬度必填'),
			array('image',		'safe',		 			 ),
			array('baidu',		'safe',					 ),

			);
	}
}

?>