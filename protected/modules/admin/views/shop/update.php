		<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<h3 class="page-title">

							线下门店<small>&nbsp;&nbsp;&nbsp;&nbsp;添加线下门店</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="index.html">首页</a> 

								<i class="icon-angle-right"></i>

							</li>

							<li>

								<a href="#">特殊对象</a>

								<i class="icon-angle-right"></i>

							</li>

							<li><a href="#">线下门店</a></li>

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

								<div class="caption"><i class="icon-edit"></i>添加门店</div>

							</div>

							<div class="portlet-body">

								<?php $form = $this->beginWidget('CActiveForm')?>
								

								<!-- BEGIN FORM-->
									<div class="control-group">

										<?php echo $form->labelEx($model,'shop_id',array('class'=>'control-label'));?>
										<div class="controls">
										
											<?php echo $form->textField($model,'shop_id',array('class'=>'span6 '));?>
											<?php echo $form->error($model,'shop_id');?>											
										</div>

									</div>							
								
									<div class="control-group">

										<?php echo $form->labelEx($model,'shop_name',array('class'=>'control-label')); ?>
										<div class="controls">
											<?php echo $form->textField($model,'shop_name',array('class'=>'span6'));?> 
											<?php echo $form->error($model,'shop_name');?>
											
										</div>

									</div>
									<div class="control-group">

										<?php echo $form->labelEx($model,'region',array('class'=>'control-label')); ?>
										<div class="controls">
											<?php echo $form->textField($model,'region',array('class'=>'span6'));?> 
											<?php echo $form->error($model,'region');?>
											
										</div>

									</div>
									<div class="control-group">

										<?php echo $form->labelEx($model,'city',array('class'=>'control-label')); ?>
										<div class="controls">
											<?php echo $form->textField($model,'city',array('class'=>'span6'));?> 
											<?php echo $form->error($model,'city');?>
											
										</div>

									</div>
									<div class="control-group">

										<?php echo $form->labelEx($model,'address',array('class'=>'control-label')); ?>
										<div class="controls">
											<?php echo $form->textField($model,'address',array('class'=>'span6'));?> 
											<?php echo $form->error($model,'address');?>
											
										</div>
									</div>

									<div class="control-group">

										<?php echo $form->labelEx($model,'phone',array('class'=>'control-label')); ?>
										<div class="controls">
											<?php echo $form->textField($model,'phone',array('class'=>'span6'));?> 
											<?php echo $form->error($model,'phone');?>
											
										</div>
									</div>

									<div class="control-group">

										<?php echo $form->labelEx($model,'longitude',array('class'=>'control-label')); ?>
										<div class="controls">
											<?php echo $form->textField($model,'longitude',array('class'=>'span6'));?> 
											<?php echo $form->error($model,'longitude');?>
											
										</div>
									</div>					
									<div class="control-group">

										<?php echo $form->labelEx($model,'latitude',array('class'=>'control-label')); ?>
										<div class="controls">
											<?php echo $form->textField($model,'latitude',array('class'=>'span6'));?> 
											<?php echo $form->error($model,'latitude');?>
											
										</div>
									</div>
									<div class="control-group">
										
										<?php echo $form->labelEx($model,'image',array('class'=>'control-label')); ?>										
										<div class="controls">
											<?php $this->widget('application.widgets.Upload.UploadWidget',array('image'=>$model->image));?>
											<?php echo CHtml::hiddenField('Shop[image]',$model->image,array('class' => 'span6','id'=>'Banner_pic')); ?>
					  							
										</div>

									</div>

									<div class="control-group">

										<?php echo $form->labelEx($model,'baidu',array('class'=>'control-label')); ?>
										<div class="controls">
											<?php echo $form->textField($model,'baidu',array('class'=>'span6'));?> 
											<?php echo $form->error($model,'baidu');?>
											
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