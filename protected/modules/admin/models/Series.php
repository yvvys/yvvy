<?php
class Series extends CActiveRecord
{
	public static  function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'series';
	}

	public function attributeLabels()
	{
		return array(
			'name'=>'系列名',
			'parent_id' =>'所属商品目录',
			);
	}

	public function rules()
	{
		return array(
			array('name','required','message'=>'系列名称必填'),
			array('parent_id','required','message'=>'所属商品目录必选'),
			array('parent_name','safe',),
		);
	}

	/*
	public function checkName()
	{
		if(!empty($this->name))
		{
			$this->addError('name','系列名称必填')
		}

		$result = Series::model()->find('name=:name',array('name'=>$this->name))

	}
	*/
	public function getAll()
    {
   		$result =  $this::model()->findAll(array('select'=>'id,name','order' => 'name',));
    	$data =array();
    	foreach($result as $v)
    	{
      		$data[$v['id']] = $v['name'];
    	}
    	return $data;
  	}
}


?>