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
								<?php if(Yii::app()->user->hasFlash('Info')){ 
										echo Yii::app()->user->getFlash('Info');
									};?>
								</div>

							</div>

							<div class="portlet-body">

								<div class="clearfix">

									<div class="btn-group">

										<a href='<?php echo Yii::app()->createUrl('admin/catalogue/create')?>'><button id="sample_editable_1_new" class="btn green">

										创建新的目录 <i class="icon-plus"></i></button></a>

										</button>

									</div>

								</div>

								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">

									<thead>

										<tr>

											<th>名字</th>

											<th>描述</th>

											<th>子目录个数</th>

											<th>编辑子目录</th>

											<th>添加子目录</th>

											<th>编辑目录</th>

											<th>删除</th>

										</tr>

									</thead>

									<tbody>
										<?php foreach($data as $v){ ?>	
										<tr class="">

											<td class="center"><a href="<?php echo Yii::app()->createUrl('admin/catalogue',array('id'=>$v['id']))?>"><?php echo $v['name']?></a></td>

											<td class="center"><?php echo $v['describe']?></td>

											<td class="center"><?php echo $v['num']?></td>

											<td><a class="edit"><a href="<?php echo Yii::app()->createUrl('admin/catalogue',array('id'=>$v['id']))?>">编辑子目录</a></td>

											<td><a class="add"><a href="<?php echo Yii::app()->createUrl('admin/catalogue/create',array('id'=>$v['id']))?>">添加子目录</a></td>

											<td><a class="edit"><a href="<?php echo Yii::app()->createUrl('admin/catalogue/update',array('id'=>$v['id']))?>">编辑</a></td>

											<td><a class="delete"><a href="<?php echo Yii::app()->createUrl('admin/catalogue/delete',array('id'=>$v['id']))?>">删除</a></td>

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