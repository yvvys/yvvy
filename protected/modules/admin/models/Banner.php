<?php
/**
 * This is the model class for table "banner".
 *
 */
class Banner extends CActiveRecord
{
        /**
         * Returns the static model of the specified AR class.
         * @return Banner the static model class
         */
        public static function model($className=__CLASS__)
        {
            return parent::model($className);
        }
        /**
         * @return string the associated database table name
         */
        public function tableName()
        {
                return 'banner';
        }
        /**
         * @return array validation rules for model attributes.
         */
        public function rules()
        {
  
          return array(
                	   array('title,image', 'required'),
                );
        }
        /**
         * @return array relational rules.
         */
        public function relations()
        {
                // NOTE: you may need to adjust the relation name and the related
                // class name for the relations automatically generated below.
                return array(
                );
        }

        public static function bannerGroup(){
                $rec = array();
                $criteria = new CDbCriteria;
                $criteria->select = 't.banner_group';
                $criteria->condition = '';
                $criteria->group = 't.banner_group';
                $data=Banner::model()->findAll($criteria);
                for($i=0;$i<sizeof($data); $i++){
                 $rec[$data[$i]['banner_group']] = $data[$i]['banner_group'];
                }
                return $rec;
        }
     
    }