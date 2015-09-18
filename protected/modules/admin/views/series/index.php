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

							<li><a href="<?php echo Yii::app()->createUrl('admin/series/index')?>">商品系列</a></li>

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

								<div class="caption"><i class="icon-edit"></i>
								商品系列 
								<?php if(Yii::app()->user->hasFlash('Info')){ 
										echo Yii::app()->user->getFlash('Info');
									};?>
								</div>

							</div>

							<div class="portlet-body">

								<div class="clearfix">

									<div class="btn-group">

										<a href='<?php echo Yii::app()->createUrl('admin/series/update')?>'><button id="sample_editable_1_new" class="btn green">

										创建新的系列 <i class="icon-plus"></i></button></a>

										</button>

									</div>

								</div>

								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">

									<thead>

										<tr>

											<th>系列名</th>

											<th>所属目录</th>

											<th>编辑系列</th>

											<th>删除</th>

										</tr>

									</thead>

									<tbody>
										<?php foreach($data->getData() as $v){ ?>	
										<tr class="">

											<td class="center"><a href="#"><?php echo $v['name']?></a></td>

											<td class="center"><?php echo $v['parent_name']?></td>

											<td><a class="edit"><a href="<?php echo Yii::app()->createUrl('admin/series/update',array('id'=>$v['id']))?>">编辑</a></td>

											<td><a class="delete"><a href="<?php echo Yii::app()->createUrl('admin/series/delete',array('id'=>$v['id']))?>">删除</a></td>

										</tr>
										<?php }?>
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