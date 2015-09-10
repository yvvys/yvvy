

        <input class="imagefile" id="jsup"  type="file"  name="files[]">
     
            <div style="max-width: 208px; max-height: 150px; line-height: 20px;" id="showimage" class="fileupload-preview fileupload-exists thumbnail">
                <?php
                    if($image){
                        echo '<img src="'.$image.'" />';
                    }
                ?>

            </div>
                          
<!-- js上传配置文件 -->
<script type="text/javascript">
    $(function() {
        $('#jsup').uploadify({
            //固定配置项
            'swf'				: ASSET_URL + '/uploadify.swf',    //指定上传控件的主体文件
            'uploader'			: UPLOAD_URL,  //指定服务器端上传处理文件
            'fileObjName'     	: 'file',
            'buttonImage'		: '', //上传处理文件按钮背景图片
            'width'				: 205,
            'height'			: 30,
            //'buttonClass'		: 'class', //上传class
            //'buttonText'      	: '上传文件',
            //其他配置项
            'fileSizeLimit'		: '2000',	//上传文件限制 0问无限制
            'queueSizeLimit'      : 1,
            'fileTypeDesc'		: 'Image Files', //文件类型
            'fileTypeExts'		: '*',	//文件后缀
            'onUploadSuccess' 	: uploadSuccess,
            'onUploadError'		: onUploadError,
            'onFallback' 		: function() {
                alert('未检测到兼容版本的Flash.');
            }
        });
        function uploadSuccess(file,data){
            
            var data = JSON.parse(data);
            
            if(data['code']==false){
                alert(data['msg']);
            }else{
                var url = data['msg'];
                content =  '<img width="205" src="'+url+'">';
                $('#showimage').html(content);
                $('#Banner_pic').val(url);
         
            }
        }
        function onUploadError(file){
            alert('上传失败，请联系管理员!');
        }
    });
</script>
