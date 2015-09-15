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

								<div class="caption"><i class="icon-edit"></i>添加SKU</div>

							</div>

							<div class="portlet-body">

								<?php $form = $this->beginWidget('CActiveForm')?>
								<div class="portlet-body form form-horizontal">

								<!-- BEGIN FORM-->
									<div class="control-group">

										<?php echo $form->labelEx($model,'sku_id',array('class'=>'control-label'));?>
										<div class="controls">
										
											<?php echo $form->textField($model,'sku_id',array('class'=>'span6 '));?>
											<?php echo $form->error($model,'shop_id');?>											
										</div>

									</div>							
								
									<div class="control-group">

										<?php echo $form->labelEx($model,'sku_name',array('class'=>'control-label')); ?>
										<div class="controls">
											<?php echo $form->textField($model,'sku_name',array('class'=>'span6'));?> 
											<?php echo $form->error($model,'sku_name');?>
											
										</div>

									</div>
									<div class="control-group">

										<?php echo $form->labelEx($model,'spu_id',array('class'=>'control-label')); ?>
										<div class="controls">
											<?php echo $form->textField($model,'spu_id',array('class'=>'span6'));?> 
											<?php echo $form->error($model,'spu_id');?>
											
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
											<?php $this->widget('application.widgets.Upload.UploadWidget',array('image'=>$model->image));?>
											<?php echo CHtml::hiddenField('Goods[image]',$model->image,array('class' => 'span6','id'=>'Banner_pic')); ?>
					  							
										</div>

									</div>

									<div class="control-group">
										
										<label class="control-label">是否头图</label>

										<div class="controls">

											<label class="radio">

											<input type="radio" name="Goods[is_top]" value="1"  />

											是

											</label>

											<label class="radio">

											<input type="radio" name="Goods[is_top]" value="0" checked />

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