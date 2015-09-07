<?php
class Goods extends CActionRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function talbeName()
	{
		return 'goods';
	}



}

?>