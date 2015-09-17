	<?php 
	if(Yii::app()->user->hasFlash('success'))
		echo "<div class='showsuccess' >".Yii::app()->user->getFlash('success')."</div>"; 
	?>
    
 

		<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<h3 class="page-title">

							新闻管理

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="<?php echo Yii::app()->homeUrl?>">首页</a> 

								<i class="icon-angle-right"></i>

							</li>

							<li>

								<a href="<?php echo Yii::app()->createUrl('admin/news/index')?>">新闻管理</a>

								<i class="icon-angle-right"></i>

							</li>

							<li>新闻添加</li>

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

								<div class="caption"><i class="icon-edit"></i>添加新新闻</div>

							</div>

							<div class="portlet-body">

								<?php $form=$this->beginWidget('CActiveForm'); ?>
								<div class="portlet-body form form-horizontal">

								<!-- BEGIN FORM-->

								


									<div class="control-group">

										
										<label for="Catalogue_name" class="control-label required">标题 <span class="required">*</span>
										</label>										
										<div class="controls">
											<?php echo CHtml::textField('News[title]',$model->title,array('must' => 'yes','class' => 'span6'))?>
																			
										</div>

									</div>
									
									<div class="control-group">

										<label for="Catalogue_describe" class="control-label">详情</label>
										<div class="controls">
										
											 <?php $this->widget('application.widgets.Ueditor.UeditorWidget'); ?>
               								 <textarea class="tff_ueditor" id="content" name="News[content]"  style="width:650px;height:800px;"><?php echo $model->content; ?></textarea>
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