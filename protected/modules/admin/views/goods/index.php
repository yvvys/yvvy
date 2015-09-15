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

										<a href='<?php echo Yii::app()->createUrl('admin/goods/update')?>'><button id="sample_editable_1_new" class="btn green">

										创建新的目录 <i class="icon-plus"></i></button></a>


									</div>

								</div>
									<div class="sub-title-box toolbar">
									    <div class="input-append">
									     <form action="<?php echo $this->createUrl($this->getAction()->id)?>" method="post" id="form1">
									        <div style="float: left">
									           
									            <?php 
									            
									            echo CHtml::dropDownList('sku_id',$_POST['sku_id'], Goods::model()->getId(), array('empty'=>'--请选择--','class'=>'m-wrap')); 

									            ?>
									            
									        </div>
									        <div style="float: left">
									        
									            <?php echo CHtml::textField('sku_name',$_POST['sku_name'],
									                array('size'=>30,'class'=>'m-wrap','placeholder'=>"sku名称"))?>

												<button id="search" class="btn bule">
												搜索
												</button>
									        
									        </div>
									        </form>	

									    </div>
									</div>

								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">

									<thead>

										<tr>

											<th>SKU编号</th>

											<th>SKU名称</th>

											<th>所属SPU</th>

											<th>图片</th>

											<th>颜色</th>

											<th>材质</th>

											<th>规格</th>

											<th>是否头图</th>

											<th>编辑</th>

											<th>删除</th>

										</tr>

									</thead>

									<tbody>
									<?php foreach($data->getData() as $v) { ?>
										
										<tr class="">

											<td class="center"><a href=""><?php echo $v['sku_id']?></a></td>

											<td class="center"><?php echo $v['sku_name']?></td>

											<td class="center"><?php echo $v['spu_id']?></td>

											<td class="center"><?php echo $v['image']?></td>

											<td class="center"><?php echo $v['color']?></td>

											<td class="center"><?php echo $v['material']?></td>

											<td class="center"><?php echo $v['specs']?></td>

											<td class="center"><?php echo $v['is_top']? '是':'否';?></td>

											<td class="edit"><a href="<?php echo Yii::app()->createUrl('admin/goods/update',array('sku_id'=>$v['sku_id']));?>">编辑</a></td>

											<td class="delete"><a href='javascript:if(confirm("确实要删除该SKU?"))location="<?php echo  $this->createUrl('goods/delete',array('sku_id'=>$v['sku_id']))?>"'>删除</a></td>
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