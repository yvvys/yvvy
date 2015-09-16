	<?php 
	if(Yii::app()->user->hasFlash('success'))
		echo "<div class='showsuccess' >".Yii::app()->user->getFlash('success')."</div>"; 
	?>
    
 

		<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<h3 class="page-title">

							用户管理

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="<?php echo Yii::app()->homeUrl?>">首页</a> 

								<i class="icon-angle-right"></i>

							</li>

							<li>

								<a href="<?php echo Yii::app()->createUrl('admin/usergroup/index')?>">用户管理</a>

								<i class="icon-angle-right"></i>

							</li>

							<li><a href="<?php echo Yii::app()->createUrl('admin/usergroup/update')?>">帐号添加</a></li>

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

								<div class="caption"><i class="icon-edit"></i>帐号管理</div>

							</div>

							<div class="portlet-body">

								<?php $form=$this->beginWidget('CActiveForm'); ?>
								<div class="portlet-body form form-horizontal">

								<!-- BEGIN FORM-->
									<div class="control-group">

										
										<label for="Catalogue_name" class="control-label required">帐号 <span class="required">*</span>
										</label>										
										<div class="controls">
											<?php echo CHtml::textField('Usergroup[username]',$model->username,array('must' => 'yes','class' => 'span6'))?>
																			
										</div>

									</div>
									
								
									<div class="control-group">

										
										<label for="Catalogue_name" class="control-label required">密码 <span class="required">*</span>
										</label>										
										<div class="controls">
											<?php echo CHtml::PasswordField('Usergroup[password]','',array('must' => 'yes','class' => 'span6'))?>
												<?php echo CHtml::hiddenField('Usergroup[passwords]',$model->password,array('must' => 'yes','class' => 'span6'))?>
																			
										</div>

									</div>

									<div class="control-group">

										
										<label for="Catalogue_name" class="control-label required">权限 <span class="required">*</span>
										</label>										
										<div class="controls">
											
											<?php
											foreach($groupArr as $v){
												$data[$v[group_id]]=$v[group_name];
													
											}	
											 echo CHtml::checkBoxList('Usergroup[group]',json_decode($model->user_group,true),$data,
											 	array('template'=>'<span class="check">{input}{label}</span>','separator'=>'')); 
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