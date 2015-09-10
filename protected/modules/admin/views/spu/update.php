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

								<div class="caption"><i class="icon-edit"></i>SPU编辑</div>

							</div>

							<div class="portlet-body">

								<?php $form=$this->beginWidget('CActiveForm'); ?>
								<div class="portlet-body form form-horizontal">

								<!-- BEGIN FORM-->
									<div class="control-group">

										
										<?php echo $form->labelEx($model,'spu_id',array('class'=>'control-label')); ?>
										<div class="controls">
										
											<h4 class="span6 m-wrap" name="Spu[spu_id]" type="text"> <?php echo $data['spu_id']?> </h4>
										
										</div>

									</div>							
								
									<div class="control-group">

										<?php echo $form->labelEx($model,'spu_name',array('class'=>'control-label')); ?>
										<div class="controls">
											<?php echo $form->textField($model,'spu_name',array('class'=>'span6','value'=>$data['spu_name']));?> 
											<?php echo $form->error($model,'spu_name');?>
											
										</div>

									</div>

									<div class="control-group">

										<?php echo $form->label($model,'describe',array('class'=>'control-label'));?>

										<div class="controls">

											<?php echo $form->textArea($model,'describe',array('class'=>'span6 ','value'=>$data['describe'],'row'=>'3'));?>

										</div>

									</div>
									<div class="control-group">

										<?php echo $form->labelEx($model,'classfy_id',array('class'=>'control-label '));?>

										<div class="controls">

											<?php echo $form->dropDownList($model,'classfy_id',$select,array('class'=>'span6','prompt'=>'-----顶级分类-----','options'=>array($data['classfy_id']=>array('selected'=>true))));?>

										</div>

									</div>

									<div class="control-group">
										
										<label class="control-label">是否在售</label>

										<div class="controls">


											<label class="radio">

											<input type="radio" name="Spu[is_sale]" <?php  if($data['is_sale'] == 1 ){ echo 'checked';}?> value="1" />

											是

											</label>

											<label class="radio">

											<input type="radio" name="Spu[is_sale]" <?php  if($data['is_sale'] == 0 ){ echo 'checked';}?> value="0" />

											否

											</label> 

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