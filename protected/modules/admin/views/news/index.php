


		<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<h3 class="page-title">

							新闻管理 

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="<?php echo Yii::app()->homeUrl?>">首页</a> 

								<i class="icon-angle-right"></i>

							</li>

							<li>

								<a href="<?php echo Yii::app()->createUrl('admin/news/index')?>">新闻管理</a>

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

								<div class="caption"><i class="icon-edit"></i>新闻目录 </div>

							</div>

							<div class="portlet-body">

								<div class="clearfix">

									<div class="btn-group">

										<a href='<?php echo Yii::app()->createUrl('admin/news/update')?>'><button id="sample_editable_1_new" class="btn green">

										创建新的新闻 <i class="icon-plus"></i></button></a>



									</div>


									<!-- toolBar -->
									<div class="sub-title-box toolbar">
									    <div class="input-append">
									     <form action="<?php echo $this->createUrl($this->getAction()->id)?>" method="post" id="form1">
									   
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
											<th>创建时间</th>
											<th>修改时间</th>
											<th>发布人</th>
										
											<th>操作</th>
										</tr>

									</thead>

									<tbody>
										<?php 

										foreach($dataProvider->getData() as $v){ 

											?>	
										<tr class="">

											<td class="center"><a href="<?php echo Yii::app()->createUrl('admin/news',array('news_id'=>$v['news_id']))?>"><?php echo $v['title']?></a></td>

											<td class="center"><?php echo date('Y-m-d H:i:s',$v['created'])?></td>

											<td class="center"><?php echo date('Y-m-d H:i:s',$v['updated'])?></td>

											<td><?php echo $v['issuer']?></td>

									

											
											<td><a href="<?php echo Yii::app()->createUrl('/admin/news/update',array('news_id'=>$v['news_id']))?>">修改</a>| 

												<a href='javascript:if(confirm("确实要删除该内容吗?"))location="<?php echo  $this->createUrl('/admin/news/delete',array('news_id'=>$v['news_id']))?>"'>删除</a></td>

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