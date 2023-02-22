<?php 
include("euphoria.php");
include('layouts/header.php');
?>

<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	
	<?php
  include('layouts/sidebar.php');
  ?>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="row">
				<input type="hidden" name="flag" value="all-calls">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue-madison">
						<div class="visual">
							<i class="fa fa-comments"></i>
						</div>
						<div class="details">
							<div class="number">
								 0
							</div>
							<div class="desc">
								 New Feedbacks
							</div>
						</div>
						<a class="more" href="#">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="details">
							<div class="number">
								
							</div>
							<div class="desc">
								 Total Profit
							</div>
						</div>
						<a class="more" href="#">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="number">
								
							</div>
							<div class="desc">
								 New Orders
							</div>
						</div>
						<a class="more" href="#">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-plum">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="number">
								0
							</div>
							<div class="desc">
								 Brand Popularity
							</div>
						</div>
						<a class="more" href="#">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
			</div>
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Any Call Detail Records							</div>
						</div>
						<div class="portlet-body">
							
							<table class="table table-striped table-bordered table-hover example">
							<thead>
							<tr>
								<!-- <th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
								</th> -->
								<th>S.N</th>
								<th>Id</th>
								<th>Source</th>
								<th>Duration</th>
								<th>Caller ID</th>
								<th>User Agent </th>
								<th>Status</th>
								<th>DestChannel </th>
							</tr>
							</thead>
							<tbody>
							<?php

							$sn=1;
							foreach($xml_snippet as $data){
							?>
							<tr>
							<td><?php echo $sn; ?></td>
							<td><?php echo $data->uID  ??''; ?></td>
							<td><?php echo $data->Source ??''; ?></td>
							<td><?php echo $data->Duration??''; ?></td>
							<td><?php echo $data->CallerID??''; ?></td>
							<td><?php echo $data->UserAgent ??''; ?></td>
							<td><?php echo $data->Status??''; ?></td>
							<td><?php echo $data->DestChannel ??''; ?></td>
							</tr>
							<?php
							$sn++;
							}
							?>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
				
			</div>
		
			<div class="clearfix">
			</div>
			
			<div class="clearfix">
			</div>
	
			<div class="clearfix">
			</div>
			
		</div>
	</div>
	<!-- END CONTENT -->
	<!-- BEGIN QUICK SIDEBAR -->
    <a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
   
<!-- END QUICK SIDEBAR -->
</div>
<?php   include('layouts/footer.php') ?>;
