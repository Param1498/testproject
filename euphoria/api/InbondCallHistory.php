<?php 
include('layouts/header.php');
include("euphoria.php");
?>

<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	
	<?php
//   include('layouts/sidebar.php');
  ?>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			STATS
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Inbound Calling History</div>
						</div>
						<div class="portlet-body">
							
							<table class="table table-striped table-bordered table-hover example">
							<thead>
							<tr>
								<!-- <th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
								</th> -->
								<th>
									 Sr.no
								</th>
								<th>
									 ID
								</th>
								<th>
								Source
								</th>
								<th>
								Duration
								</th>
								<th>
								Caller ID
								</th>
								<th>
								StatusDescription
								</th>
								<th>
								Status
								</th>
								<th>
								StartTime
								</th>
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
							<td><?php echo $data->StatusDescription ??''; ?></td>
							<td><?php echo $data->Status??''; ?></td>
							<td><?php echo $data->StartTime ??''; ?></td>
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
