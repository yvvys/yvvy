


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

								<a href="<?php echo Yii::app()->createUrl('admin/customer/index')?>">用户管理</a>

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

								<div class="caption"><i class="icon-edit"></i>用户目录 </div>

							</div>

							<div class="portlet-body">

								<div class="clearfix">

								


									<!-- toolBar -->
									<div class="sub-title-box toolbar">
									    <div class="input-append">
									     <form action="<?php echo $this->createUrl($this->getAction()->id)?>" method="post" id="form1">
									    
									        <div style="float: left">
									        
									            <?php echo CHtml::textField('keyword',$_GET['keyword'],
									                array('size'=>30,'class'=>'m-wrap','placeholder'=>'id/名称/手机'))?>

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
											<th>用户</th>
											<th>手机</th>
											<th>注册时间</th>
											<th>城市</th>
										
											<th>操作</th>
										</tr>

									</thead>

									<tbody>
										<?php 

										foreach($dataProvider->getData() as $v){ 

											?>	
										<tr class="">

											<td class="center"><?php echo $v['customer_name']?></td>

											<td class="center"><?php echo $v['ipone']?></td>

											<td class="center"><?php echo date('Y-m-d',$v['created'])?></td>

											<td><?php echo $v['city']?></td>


											
											<td>

												<a href='javascript:if(confirm("确实要删除该内容吗?"))location="<?php echo  $this->createUrl('/admin/customer/delete',array('customer_id'=>$v['customer_id']))?>"'>删除</a></td>

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