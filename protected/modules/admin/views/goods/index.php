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

							<li><a href="#">商品目录维护</a></li>

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

								<div class="caption"><i class="icon-edit"></i>商品目录 
								<?php if(Yii::app()->user->hasFlash('success')){ 
										echo Yii::app()->user->getFlash('success');
									};?>
								</div>

							</div>

							<div class="portlet-body">

								<div class="clearfix">

									<div class="btn-group">

										<a href='<?php echo Yii::app()->createUrl('admin/goods/create')?>'><button id="sample_editable_1_new" class="btn green">

										创建新的目录 <i class="icon-plus"></i></button></a>

										</button>

									</div>

								</div>

								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">

									<thead>

										<tr>

											<th>SPU编号</th>

											<th>SKU编号</th>

											<th>SKU名称</th>

											<th>头图</th>

											<th>商品状态</th>

											<th class='center'>品牌</th>

											<th>操作</th>

										</tr>

									</thead>

									<tbody>
										
										<tr class="">

											<td class="center"><a href=""></a></td>

											<td class="center"></td>

											<td class="center"></td>

											<td><a class="edit"><a href=""></a></td>

											<td><a class="add"><a href=""></a></td>

											<td><a class="edit"><a href=""></a></td>

											<td><a class="delete">删除</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="delete">编辑</a></td>

										</tr>

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