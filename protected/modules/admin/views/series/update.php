		<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<h3 class="page-title">

							SPU管理<small>&nbsp;&nbsp;&nbsp;&nbsp;SPU添加</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="index.html">首页</a> 

								<i class="icon-angle-right"></i>

							</li>

							<li>

								<a href="#">商品管理</a>

								<i class="icon-angle-right"></i>

							</li>

							<li><a href="#">SPU管理</a></li>

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

								<div class="caption"><i class="icon-edit"></i>创建新目录</div>

							</div>

							<div class="portlet-body">

								<?php $form=$this->beginWidget('CActiveForm'); ?>
								<div class="portlet-body form form-horizontal">

								<!-- BEGIN FORM-->
									<div class="control-group">

										
										<?php echo $form->labelEx($model,'name',array('class'=>'control-label')); ?>
										<div class="controls">
											
											<?php echo $form->textField($model,'name',array('class'=>'span6 '));?> 
											<?php echo $form->error($model,'name');?>
											
										</div>

									</div>							
								
									<div class="control-group">

										<?php echo $form->labelEx($model,'parent_id',array('class'=>'control-label '));?>

										<div class="controls">

											<?php echo $form->dropDownList($model,'parent_id',Catalogue::model()->getALL(),array('class'=>'span6','prompt'=>'-----请选择-----','options'=>array($model->parent_id=>array('selected'=>true))));?>
											<?php echo $form->error($model,'parent_id');?>

										</div>

									</div>

									<div class="form-actions">

										<button type="submit" class="btn blue">保存</button>

										<a href='<?php echo Yii::app()->createUrl('admin/series')?>'><button type="button" class="btn">取消</button></a>                            

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