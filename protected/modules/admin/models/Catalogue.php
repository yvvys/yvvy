<?php
class Catalogue extends CActiveRecord
{
  //定义静态模型
  public static function model($className=__CLASS__)
  {
      return parent::model($className);
  }
  //定义表
  public function talbeName()
  {
      return 'catalogue';
  }

  //定义标签
  public function attributeLabels()
  {
      return array(
        'name'      => '名称',
        'describe'  => '描述',
        'parent_id' => '分类',
        'show'      => '前台显示',
        );
  }
 //定义规则
  public function rules(){
      return array(
        array('name','required','message'=>'名称必填'),
        array('parent_id','required','message'=>'分类必选'),
        array('describe','safe',),
        array('level','safe',),
        array('tree','safe',),
        );

  }

  //获取家谱树
  public function getAll()
  {
    $result =  $this::model()->findAll(array('select'=>'id,tree','order' => 'tree',));
    foreach($result as $v)
    {
      $data[$v['id']] = $v['tree'];
    }
    return $data;
  } 

  //获取子孙树以及子目录的个数
  public function getSon($id)
  {
    $result = array();
    $son = $this::model()->findAll('parent_id=:id',array(':id'=>$id));
    foreach($son as $v){
      $num = $this::model()->count('parent_id=:id',array(':id'=>$v['id']));
      array_push($result,array('id'=>$v['id'],'name'=>$v['name'],'describe'=>$v['describe'],'num'=>$num));
    }
    return $result;
  }
  
}


?>