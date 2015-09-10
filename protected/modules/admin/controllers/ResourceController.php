<?php


class ResourceController extends Controller
{
    /**
     * 处理上传的控制器接口
     */
    public function actionUpload()
    {
        $path='/uploads/images/'.date('Y-m');
       $Folder = $_SERVER['DOCUMENT_ROOT'].$path; // Relative to the root
       if(!file_exists($Folder )){
            if(!mkdir($Folder)){
                echo json_encode(array('code'=>false,'msg'=>'文件夹创建失败'));
            }
       }
       if (!empty($_FILES) ) {
            $file=$_FILES[file];
            $tempFile = $file['tmp_name'];
            $fileParts = pathinfo($file['name']);
            $image_name=$this->giveName($fileParts['extension']);
            $targetFile = rtrim($Folder,'/') . '/' . $image_name;
            $a=json_encode($_FILES);
            $fileTypes = array('jpg','jpeg','gif','png'); // File extensions
            $image=$path.'/'.$image_name;
            if (in_array($fileParts['extension'],$fileTypes)) {
                move_uploaded_file($tempFile,$targetFile);
                echo json_encode(array('code'=>true,'msg'=>$image));
            } else {
                echo json_encode(array('code'=>false,'msg'=>'错误的上传类型'));
            }
        }
   
    }

    function giveName($type){
        $pic=time().rand(1,9999);
        $picname=md5($pic).'.'.$type;
        return $picname;
    }
    public function actionUploadFile()
    {
     
    }

}