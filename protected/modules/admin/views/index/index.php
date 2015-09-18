			<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->   

				<div class="row-fluid">

					<div class="span12">

					<h3 class="page-title">

							修改密码

							 <small>你可以自己修改密码</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="index.html">首页</a> 

								<span class="icon-angle-right"></span>

							</li>

							<li>

								<a href="#">用户管理</a>

								<span class="icon-angle-right"></span>

							</li>

							<li><a href="#">修改密码</a></li>

						</ul>

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN SAMPLE FORM PORTLET-->   

						<div class="portlet box blue">

							<div class="portlet-title">

								<div class="caption"><i class="icon-reorder"></i>密码修改</div>

							</div>

							<div class="portlet-body form">

								<!-- BEGIN FORM-->

								<?php $form=$this->beginWidget('CActiveForm')?>
								<div class="portlet-body form form-horizontal">
									<div class="control-group">
										<?php echo $form->labelEx($model,'password',array('class'=>'control-label'))?>

										<div class="controls">

											<?php echo $form->passwordField($model,'password',array('class'=>'span6 m-wrap tooltips','data-original-title'=>'请输入密码',))?>
											<?php echo $form->error($model,'password')?>

										</div>

									</div>

									<div class="control-group">

										<?php echo $form->labelEx($model,'password1',array('class'=>'control-label'))?>

										<div class="controls">

											<?php echo $form->passwordField($model,'password1',array('class'=>'span6 m-wrap tooltips','data-original-title'=>'请输入新密码',))?>
											<?php echo $form->error($model,'password1')?>

										</div>

									</div>

									<div class="control-group">
										<?php echo $form->labelEx($model,'password2',array('class'=>'control-label'))?>

										<div class="controls">

											<?php echo $form->passwordField($model,'password2',array('class'=>'span6 m-wrap tooltips','data-original-title'=>'请输入新密码',))?>
											<?php echo $form->error($model,'password2')?> 

										</div>

									</div>

									
									<div class="form-actions">

										<button type="submit" class="btn blue">确认</button>

										<button type="button" class="btn">取消</button>                            

									</div>
								</div>
								<?php $this->endWidget()?>

								<!-- END FORM-->       

							</div>

						</div>

						<!-- END SAMPLE FORM PORTLET-->

					</div>

				</div>
			</div>
