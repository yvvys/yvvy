		<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<h3 class="page-title">

							特殊对象 <small>&nbsp;&nbsp;线下门店</small>

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

							<li><a href="<?php echo Yii::app()->createUrl('admin/shop')?>">线下门店</a></li>

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

								<div class="caption"><i class="icon-edit"></i>线下门店
								<?php if(Yii::app()->user->hasFlash('Info')){ 
										echo Yii::app()->user->getFlash('Info');
									};?>
								</div>

							</div>

							<div class="portlet-body">

								<div class="clearfix">

									<div class="btn-group">

										<a href='<?php echo Yii::app()->createUrl('admin/shop/update')?>'><button id="sample_editable_1_new" class="btn green">

										添加门店 <i class="icon-plus"></i></button></a>

										</button>

									</div>

								</div>

								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">

									<thead>

										<tr>

											<th>门店编号</th>

											<th>门店名称</th>

											<th>详细地址</th>

											<th>所在城市</th>

											<th>电话</th>

											<th>编辑</th>

											<th>删除</th>

										</tr>

									</thead>

									<tbody>
										<?php foreach($data->getData() as $v){?>
										<tr class="">

											<td class="center"><?php echo $v['shop_id']?></td>

											<td class="center"><?php echo $v['shop_name']?></td>

											<td class="center"><?php echo $v['address']?></td>

											<td class="center"><?php echo $v['city']?></td>

											<td class="center"><?php echo $v['phone'] ?></td>
											
											<td class="edit"><a href="<?php echo Yii::app()->createUrl('admin/shop/update',array('shop_id'=>$v['shop_id']))?>">编辑</a></td>

											<td class="delete"><a href='javascript:if(confirm("确实要删除该门店?"))location="<?php echo Yii::app()->createUrl('admin/shop/delete',array('shop_id'=>$v['shop_id']))?>"'>删除</a></td>

										</tr>
										<?php } ?>
									</tbody>
									
								</table>

							</div>

						</div>

						<!-- END EXAMPLE TABLE PORTLET-->

					</div>

				</div>

				<!-- END PAGE CONTENT -->

			</div>

			<!-- END PAGE CONTAINER-->

		</div>