	<?php 
	if(Yii::app()->user->hasFlash('success'))
		echo "<div class='showsuccess' >".Yii::app()->user->getFlash('success')."</div>"; 
	?>
    
 

		<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<h3 class="page-title">

							广告管理

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="<?php echo Yii::app()->homeUrl?>">首页</a> 

								<i class="icon-angle-right"></i>

							</li>

							<li>

								<a href="<?php echo Yii::app()->createUrl('admin/banner/index')?>">广告管理</a>

								<i class="icon-angle-right"></i>

							</li>

							<li><a href="#">广告添加</a></li>

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

								<div class="caption"><i class="icon-edit"></i>添加新广告</div>

							</div>

							<div class="portlet-body">

								<?php $form=$this->beginWidget('CActiveForm'); ?>
								<div class="portlet-body form form-horizontal">

								<!-- BEGIN FORM-->

								


									<div class="control-group">

										
										<label for="Catalogue_name" class="control-label required">标题 <span class="required">*</span>
										</label>										
										<div class="controls">
											<?php echo CHtml::textField('Banner[title]',$model->title,array('must' => 'yes','class' => 'span6'))?>
																			
										</div>

									</div>
									<div class="control-group">

										
										<label for="Catalogue_name" class="control-label required">链接 <span class="required">*</span></label>										<div class="controls">
											
										<?php 
											echo CHtml::textField('Banner[url]',$model->url,array('must' => 'yes','class' => 'span6'));
										
										?>		
																						
										</div>

									</div>

									<div class="control-group">

										
										<label for="Catalogue_name" class="control-label required">广告分组<span class="required">*</span></label>										
										<div class="controls">
											
											<?php echo CHtml::dropDownList('Banner[banner_group]',$model->banner_group, Banner::model()->bannerGroup() ,array('must' => 'yes','class' => '')).'或者创建新的分组:';?>
											<?php echo CHtml::textField('Banner[group_new]','',array('class' => 'itext w180'))?>
																						
										</div>

									</div>
									<div class="control-group">

										<label for="Catalogue_describe" class="control-label">描述</label>
										<div class="controls">
										
											<?php echo CHtml::textArea('Banner[introduce]',$model->introduce,array('class'=>'span6 ','row'=>'3'));?>
										</div>

									</div>



									<div class="control-group">

										
										<label for="Catalogue_name" class="control-label required">图片<span class="required">*</span></label>										
										<div class="controls">
											<?php $this->widget('application.widgets.Upload.UploadWidget',array('image'=>$model->image));?>
											<?php echo CHtml::hiddenField('Banner[image]',$model->image,array('class' => 'span6','id'=>'Banner_pic')); ?>
											
																						
										</div>

									</div>

									<div class="control-group">

										
										<label for="Catalogue_name" class="control-label required">排序 <span class="required">*</span></label>										<div class="controls">
											
										<?php 
											echo CHtml::textField('Banner[banner_order]',$model->banner_order,array('must' => 'yes','class' => 'span6'));
										
										?>		
																						
										</div>

									</div>

									<div class="form-actions">

										<button type="submit" class="btn blue">保存</button>

										<button type="button" class="btn">取消</button>                            

									</div>
								<?php $this->endWidget(); ?>	
							</div>

						</div>

						<!-- END EXAMPLE TABLE PORTLET-->

					</div>

				</div>

				<!-- END PAGE CONTENT -->

			</div>

			<!-- END PAGE CONTAINER-->

		</div>