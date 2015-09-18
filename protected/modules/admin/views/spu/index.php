		<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<h3 class="page-title">

							商品管理 <small>商品目录维护</small>

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

							<li><a href="<?php echo Yii::app()->createUrl('admin/spu/index')?>">SPU管理</a></li>

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

								<div class="caption"><i class="icon-edit"></i>SPU管理 
								<?php if(Yii::app()->user->hasFlash('Info')){ 
										echo Yii::app()->user->getFlash('Info');
									};?>
								</div>

							</div>

							<div class="portlet-body">

								<div class="clearfix">

									<div class="btn-group">

										<a href='<?php echo Yii::app()->createUrl('admin/spu/update')?>'><button id="sample_editable_1_new" class="btn green">

										创建SPU <i class="icon-plus"></i></button></a>

										</button>

									</div>

								</div>

								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">

									<thead>

										<tr>

											<th>SPU编号</th>

											<th>SKU名称</th>

											<th>系列</th>

											<th>商品分类</th>

											<th>在售</th>

											<th>编辑</th>

											<th>删除</th>

										</tr>

									</thead>

									<tbody>
										<?php foreach($data->getData() as $v){?>
										<tr class="">

											<td class="center"><?php echo $v['spu_id']?></td>

											<td class="center"><?php echo $v['spu_name']?></td>

											<td class="center"><?php echo $v['series_name']?></td>

											<td class="center"><?php echo $v['classfy_name']?></td>

											<td class="center"><?php echo $v['is_sale']?  "是" : "否";?></td>
											
											<td class="edit"><a href="<?php echo Yii::app()->createUrl('admin/spu/update',array('id'=>$v['spu_id']))?>">编辑</a></td>

											<td class="delete"><a href="<?php echo Yii::app()->createUrl('admin/spu/delete',array('id'=>$v['spu_id']))?>">删除</a></td>

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