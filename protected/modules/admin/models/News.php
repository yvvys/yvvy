<?php
/**
 * This is the model class for table "banner".
 *
 */
class News extends CActiveRecord
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
                return 'news';
        }
        /**
         * @return array validation rules for model attributes.
         */
        public function rules()
        {
  
          return array(
                	   array('title,content', 'required'),
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

   
     
    }