
<script type="text/javascript">
$(document).ready(function() {
$('#autoSearchText').autoSearchText({ width: 360, itemHeight: 150,minChar:1, datafn: getData, fn: alertMsg });
});
function alertMsg(vl){
	alert('你将要搜索的关键字是： '+vl);
}
/*加载数据*/
function getData(val) {
	var keyword=$("#autoSearchText").val();
	var arrData = new Array();
	if (val != "") {
		$.ajax({
			type: "post",
			async: false, //控制同步
			url: "<?php echo Yii::app()->createUrl('admin/api/index')?>?keyword="+keyword,
			data: "param=" + val,
			dataType: "json",
			cache: false,
			success: function(data) {
				for (var i = 0; i < data.length; i++) {
					//if (val == data[i].name.substring(0, val.length))
					arrData.push(data[i]);
				}
			},
			Error: function(err) {
			alert(err);
			}
		});
	}
	return arrData;
}




(function($) {
 var itemIndex = 0;

 $.fn.autoSearchText = function(options) {
 //以下为该插件的属性及其默认值
	 var deafult = {
	 width: 360, //文本框宽
	itemHeight: 150, // 下拉框高
	minChar: 1, //最小字符数(从第几个开始搜索)
	datafn: null, //加载数据函数
	fn: null //选择项后触发的回调函数
};
var textDefault = $(this).val();
var ops = $.extend(deafult, options);
$(this).width(ops.width);
var autoSearchItem = '<div id="autoSearchItem"><ul class="menu_v"></ul></div>';
$(this).after(autoSearchItem);
$('#autoSearchItem').width(372); //设置项宽
$('#autoSearchItem').height(ops.itemHeight); //设置项高
$(this).focus(function() {
	if ($(this).val() == textDefault) {
		$(this).val('');
		$(this).css('color', 'black');
	}
});
var itemCount = $('li').length; //项个数
/*鼠标按下键时，显示下拉框，并且划过项时改变背景色及赋值给输入框*/
$(this).bind('keyup', function(e) {
if ($(this).val().length >= ops.minChar) {
	var position = $(this).position();
	$('#autoSearchItem').css({ 'visibility': 'visible', 'left': position.left, 'top': position.top + 24 });
	
	var data = ops.datafn($(this).val());

	initItem($(this), data);
	var itemCount = $('li').length;
	switch (e.keyCode) {
		case 38: //上
			if (itemIndex > 1) {
				itemIndex--;
			}
			$('li:nth-child(' + itemIndex + ')').css({ 'background': 'blue', 'color': 'white' });
			$(this).val($('li:nth-child(' + itemIndex + ')').find('font').text());
		break;
		case 40: //下
			if (itemIndex < itemCount) {
				itemIndex++;
			}
			$('li:nth-child(' + itemIndex + ')').css({ 'background': 'blue', 'color': 'white' });
			$(this).val($('li:nth-child(' + itemIndex + ')').find('font').text());
		break;
		case 13: //Enter
			if (itemIndex > 0 && itemIndex <= itemCount) {
				$(this).val($('li:nth-child(' + itemIndex + ')').find('font').text());
				$('#autoSearchItem').css('visibility', 'hidden');
				ops.fn($(this).val());
			}
		break;
		default:
		break;
	}
}
});
/*点击空白处隐藏下拉框*/
$(document).click(function() {
	$('#autoSearchItem').css('visibility', 'hidden');
});
};
/*获取文本框的值*/
$.fn.getValue = function() {
	return $(this).val();
};
/*初始化下拉框数据,鼠标移过每项时，改变背景色并且将项的值赋值给输入框*/
function initItem(obj, data) {
var str = "";

if (data.length == 0) {

	$('#autoSearchItem ul').html('<div style="text-align:center;color:red;">无符合数据<div>');
}else {
	for (var i = 1; i <= data.length; i++) {
		str += "<li >编号：<span>" + data[i - 1].id + "</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em><font>名称：" + data[i - 1].name + "</font></li>";
	}
	$('#autoSearchItem ul').html(str);
}
/*点击项时将值赋值给搜索文本框*/
$('li').each(function() {
	$(this).bind('click', function() {
		obj.val($(this).find('span').text());
		$('#autoSearchItem').css('visibility', 'hidden');
	});
});
/*鼠标划过每项时改变背景色*/
$('.menu_v li').each(function() {
	$(this).hover(
		function() {
			$('li:nth-child(' + itemIndex + ')').css({ 'background': 'white', 'color': 'black' });
			itemIndex = $('li').index($(this)[0]) + 1;
			$(this).css({ 'background': 'blue', 'color': 'white' });
			obj.val($('li:nth-child(' + itemIndex + ')').find('font').text());
		},
		function() {
			$(this).css({ 'background': 'white', 'color': 'black' });
		}
	);
});
};
})(jQuery); 
</script>
<style>

.autoSearchText{
border:solid 1px #CFCFCF;
height:20px;
color:Gray;
}
.menu_v{
margin:0;
padding:0;
line-height:20px;
font-size:12px;
list-style-type:none;
}
.menu_v li{
width: 360px;
margin:0;
padding:0;
line-height:20px;
font-size:14px;
list-style-type:none;
float:none;
}
.menu_v li span{
color:Red;
}
#autoSearchItem{
border:solid 1px #CFCFCF;
visibility:hidden;
position:absolute;
background-color:white;
overflow-y:auto;
} 
</style>



		<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<h3 class="page-title">

							sku管理

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="<?php echo Yii::app()->homeUrl?>">首页</a> 

								<i class="icon-angle-right"></i>

							</li>

						

							<li><a href="<?php echo Yii::app()->createUrl('admin/goods/index');?> ">商品信息</a></li>

						</ul>

						<!-- END PAGE TITLE & BREADCRUMB-->

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN EXAMPLE TABLE PORTLET-->

						<div class="portlet box blue">

							<div class="portlet-title">

								<div class="caption"><i class="icon-edit"></i>添加SKU</div>
								<?php if(Yii::app()->user->hasFlash('Info')){ 
										echo Yii::app()->user->getFlash('Info');
									};?>
							</div>

							<div class="portlet-body">

								<?php 

							
								$form = $this->beginWidget('CActiveForm',array('htmlOptions'=>array('enctype'=>"multipart/form-data")));

								?>
								<div class="portlet-body form form-horizontal">


								<!-- BEGIN FORM-->
									<div class="control-group">

										<?php echo $form->labelEx($model,'sku_id',array('class'=>'control-label'));?>
										<div class="controls">
										
											<?php echo $form->textField($model,'sku_id',array('class'=>'span6 '));?>
											<?php echo $form->error($model,'sku_id');?>											
										</div>

									</div>

									<div class="control-group">

										<?php echo $form->labelEx($model,'sku_name',array('class'=>'control-label'));?>
										<div class="controls">
										
											<?php echo $form->textField($model,'sku_name',array('class'=>'span6 '));?>
											<?php echo $form->error($model,'sku_name');?>											
										</div>

									</div>								
								
									<div class="control-group">

										<label for="Goods_spu_id" class="control-label required">SPU编号<span class="required">*</span></label>										<div class="controls">
										<input id="autoSearchText" class="span6" name="Goods[spu_id]" type="text" value="<?php echo $model->spu_id?>" />
							
																						
										</div>

									</div>



								
									<div class="control-group">

										<?php echo $form->labelEx($model,'price',array('class'=>'control-label')); ?>
										<div class="controls">
											<?php echo $form->textField($model,'price',array('class'=>'span6'));?> 
											<?php echo $form->error($model,'price');?>
											
										</div>
									</div>

									<div class="control-group">

										<?php echo $form->labelEx($model,'sku_num',array('class'=>'control-label')); ?>
										<div class="controls">
											<?php echo $form->textField($model,'sku_num',array('class'=>'span6'));?> 
											<?php echo $form->error($model,'sku_num');?>
											
										</div>
									</div>

											<div class="control-group">
								<?php echo $form->labelEx($model,'introduce',array('class'=>'control-label')); ?>
										<div class="controls">
										
											 <?php $this->widget('application.widgets.Ueditor.UeditorWidget',array('initialFrameHeight'=>'150')); ?>
               								 <textarea class="tff_ueditor" id="content" name="Goods[introduce]"  style="width:650px;height:800px;"><?php echo $model->introduce; ?></textarea>
										</div>

									</div>
										<div class="control-group">

										<?php echo $form->labelEx($model,'color_pic',array('class'=>'control-label')); ?>
										<div class="controls">
											<?php echo $form->textField($model,'color_pic',array('class'=>'span6'));?> 
											<input type="file" name="color_pic" />
											
											
										</div>

									</div>

									<div class="control-group">

										<?php echo $form->labelEx($model,'color',array('class'=>'control-label')); ?>
										<div class="controls">
											<?php echo $form->textField($model,'color',array('class'=>'span6'));?> 
											<?php echo $form->error($model,'color');?>
											
										</div>

									</div>

									<div class="control-group">

										<?php echo $form->labelEx($model,'material',array('class'=>'control-label')); ?>
										<div class="controls">
											<?php echo $form->textField($model,'material',array('class'=>'span6'));?> 
											<?php echo $form->error($model,'material');?>
											
										</div>
									</div>					
									<div class="control-group">

										<?php echo $form->labelEx($model,'specs',array('class'=>'control-label')); ?>
										<div class="controls">
											<?php echo $form->textField($model,'specs',array('class'=>'span6'));?> 
											<?php echo $form->error($model,'specs');?>
											
										</div>
									</div>

									<div class="control-group">
										
										<?php echo $form->labelEx($model,'image',array('class'=>'control-label')); ?>										
										<div class="controls">
											<?php $this->widget('application.widgets.Upload.UploadWidget',array('image'=>$model->image,'type'=>'more','return_id'=>'top_image'));?>
											<?php //echo CHtml::hiddenField('Goods[image]',$model->image,array('class' => 'span6','id'=>'Banner_pic')); ?>
					  							
										</div>

									</div>


									<div class="control-group">

										<?php echo $form->labelEx($model,'top_image',array('class'=>'control-label')); ?>
										<div class="controls">
											<?php echo $form->textField($model,'top_image',array('class'=>'span6','id'=>'top_image'));?> 
											<?php echo $form->error($model,'top_image');?>


											
										</div>
									</div>		

							
								<div class="control-group">
								<?php echo $form->labelEx($model,'content',array('class'=>'control-label')); ?>
										<div class="controls">
										
											 <?php $this->widget('application.widgets.Ueditor.UeditorWidget'); ?>
               								 <textarea class="tff_ueditor" id="content1" name="Goods[content]"  style="width:650px;height:800px;"><?php echo $model->content; ?></textarea>
										</div>

									</div>

									<div class="control-group">
										
										<label class="control-label">主展示</label>

										<div class="controls">

											<label class="radio">

											<input type="radio" name="Goods[is_top]" value="是"  />

											是

											</label>

											<label class="radio">

											<input type="radio" name="Goods[is_top]" value="否" checked />

											否

											</label> 
										</div>

									</div>

									<div class="form-actions">

										<button type="submit" class="btn blue">保存</button>

										<button type="button" class="btn">取消</button>                            

									</div>
								<?php $this->endWidget()?>	
							</div>

						</div>

						<!-- END EXAMPLE TABLE PORTLET-->

					</div>

				</div>

				<!-- END PAGE CONTENT -->

			</div>

			<!-- END PAGE CONTAINER-->

		</div>  