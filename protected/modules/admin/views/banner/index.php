


		<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<h3 class="page-title">

							广告管理 <small>广告目录维护</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="<?php echo Yii::app()->homeUrl?>">首页</a> 

								<i class="icon-angle-right"></i>

							</li>

							<li>

								<a href="<?php echo Yii::app()->createUrl('admin/banner/index')?>">广告管理</a>

							</li>


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

								<div class="caption"><i class="icon-edit"></i>广告目录 </div>

							</div>

							<div class="portlet-body">

								<div class="clearfix">

									<div class="btn-group">

										<a href='<?php echo Yii::app()->createUrl('admin/banner/update')?>'><button id="sample_editable_1_new" class="btn green">

										创建新的广告 <i class="icon-plus"></i></button></a>



									</div>


									<!-- toolBar -->
									<div class="sub-title-box toolbar">
									    <div class="input-append">
									     <form action="<?php echo $this->createUrl($this->getAction()->id)?>" method="post" id="form1">
									        <div style="float: left">
									           
									            <?php 
									            
									            echo CHtml::dropDownList('type', $_GET['type'], Banner::bannerGroup(), array('empty'=>'--请选择--','class'=>'m-wrap','onchange'=>'changeType()')); 

									            ?>
									            
									        </div>
									        <div style="float: left">
									        
									            <?php echo CHtml::textField('keyword',$_GET['keyword'],
									                array('size'=>30,'class'=>'m-wrap','placeholder'=>'标题'))?>

									            <?php echo CHtml::submitButton('搜索',array('class'=>'btn blue','id'=>'search'))?>
									        
									        </div>
									        </form>	

									    </div>
									</div>
									<!-- toolBar -->

								</div>

								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">

									<thead>

										<tr>
											<th>标题</th>
											<th>分组</th>
											<th>图片</th>
											<th>排序</th>
											<th>描述</th>
											<th>操作</th>
										</tr>

									</thead>

									<tbody>
										<?php 

										foreach($dataProvider->getData() as $v){ 

											?>	
										<tr class="">

											<td class="center"><?php echo $v['title']?></td>

											<td class="center"><?php echo $v['banner_group']?></td>

											<td class="center"><?php echo $v['image']?></td>

											<td><?php echo $v['banner_order']?></td>

											<td><?php echo $v['introduce']?></td>

											
											<td><a href="<?php echo Yii::app()->createUrl('/admin/banner/update',array('banner_id'=>$v['banner_id']))?>">修改</a>| 

												<a href='javascript:if(confirm("确实要删除该内容吗?"))location="<?php echo  $this->createUrl('/admin/banner/delete',array('banner_id'=>$v['banner_id']))?>"'>删除</a></td>

										</tr>
										<?php 
										}
										?>
									</tbody>

								</table>

								<div class="pager-box ">
								<?php $this->widget('CLinkPager', array('cssFile'=>false,'header'=>'','pages' => $dataProvider->pagination));?>
								</div>
							</div>

						</div>

						<!-- END EXAMPLE TABLE PORTLET-->

					</div>

				</div>

				<!-- END PAGE CONTENT -->

			</div>

			<!-- END PAGE CONTAINER-->

		</div>