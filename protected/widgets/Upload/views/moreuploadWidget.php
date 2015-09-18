

        <input class="imagefile" id="jsup"  type="file"  name="files[]">
     
            <div  id="showimage">
                <?php
                    if($image){
                        $image=json_decode($image,ture);
                        $str='';
                        if($return_id<>false){
                            $str="<div>设为主图</div>";
                        }
                        foreach($image as $v){
                            echo '<span id="moreimage">'.$str.'<img src="'.$v.'" /><dt>删除</dt><input type="hidden" value="'.$v.'" name="moreimage[]" /></span>';
                        }
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
                var str='';
                if(RETURN_ID != false){
                    var str='<div>设为主图</div>';
                }
                var url = data['msg'];
                content =  '<span id="moreimage">'+str+'<img width="150" height="150" src="'+url+'"><dt>删除</dt><input type="hidden" value="'+url+'" name="moreimage[]" /></span>';
                $('#showimage').append(content);
            }
        }
     

        $("#moreimage dt").live("click",function(){
           $(this).parent('span').remove();
        })
        <?php
            if($return_id<>false){
        ?>
            $("#moreimage div").live("click",function(){
                var image=$(this).parent('span').find('input').val();
                $("#<?php echo $return_id?>").val(image);
              
            })
        <?php
        }
        ?>
        function onUploadError(file){
            alert('上传失败，请联系管理员!');
        }
    });
</script>
