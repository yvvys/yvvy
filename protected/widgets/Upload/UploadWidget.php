<?php

class UploadWidget extends CWidget
{
    public $type = null;
    public $image = null;
    public $return_id = null;
    public function run()
    {
        $assetUrl = Yii::app()->assetManager->publish(__DIR__ . DIRECTORY_SEPARATOR . '/resource');
        $uploadUrl = Yii::app()->createUrl('admin/resource/upload');
        $maxFileSize = ini_get('upload_max_filesize');
        if($this->return_id<>null){
            $return_id=$this->return_id;
        }else{
            $return_id=false;
        }
        $js = <<<ASSET_URL
        var ASSET_URL = '{$assetUrl}';
        var RETURN_ID = '{$return_id}';
        var UPLOAD_URL = '{$uploadUrl}';
        var MAX_FILE_SIZE = '{$maxFileSize}';
ASSET_URL;
        Yii::app()->clientScript->registerScript('assetUrl', $js, CClientScript::POS_HEAD);
        Yii::app()->clientScript->registerScriptFile($assetUrl . '/jquery.uploadify.min.js', CClientScript::POS_END);
        Yii::app()->clientScript->registerCssFile($assetUrl . '/uploadify.css');
     
        $image=$this->image;
        $type = $this->type;
     
        if($type=='more'){
            $this->render('moreUploadWidget', array('uploadUrl' => $uploadUrl,'image'=> $image,'return_id'=>$return_id));
        }else{
         $this->render('uploadWidget', array('uploadUrl' => $uploadUrl,'image'=> $image));
        }
    }
}

?>