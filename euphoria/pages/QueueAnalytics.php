<?php include('realTimeQueue.php') ?>
<div class="portlet box blue">
  <div class="portlet-title">
    <div class="caption">
      <i class="fa fa-cogs"></i>Queue Analytics
    </div>
    <div class="tools">
      <a href="javascript:;" class="collapse"></a>
      <!-- <a href="#portlet-config" data-toggle="modal" class="config"></a><a href="javascript:;" class="reload"></a><a href="javascript:;" class="remove"> --></a>
    </div>
  </div>
  <div class="portlet-body">
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
       <!-- END PAGE TITLE & BREADCRUMB-->
		<div class="col-md-6">
			<!-- BEGIN SAMPLE TABLE PORTLET-->
				<div class="portlet box blue">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-cogs"></i>Call Distribution
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse">
							</a>
						</div>
					</div>
					<div class="portlet-body">
						<div class="table-scrollable">
							<table class="table table-hover">
							<thead>
							<tr>
								<th>
								Sr.no
								</th>
								<th>
								TotalAnswered
								</th>
								<th>
								TotalAbandoned
								</th>
								<th>
								TotalCalls
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
								1
								</td>
								<td>
								<?php echo $queue->CallDistribution->Summary->TotalAnswered; ?>

								</td>
								<td>
								<?php echo $queue->CallDistribution->Summary->TotalAnswered; ?>

								</td>
								<td>
								<?php echo $queue->CallDistribution->Summary->TotalAnswered; ?>
								</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
				</div>
			<!-- END SAMPLE TABLE PORTLET-->
		</div>
		<div class="col-md-6">
			<!-- BEGIN SAMPLE TABLE PORTLET-->
				<div class="portlet box blue">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-cogs"></i>QueueEntryPositions
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse">
							</a>
						</div>
					</div>
					<div class="portlet-body">
						<div class="table-scrollable">
							<table class="table table-hover">
							<thead>
							<tr>
								<th>
										#
								</th>
								<th>
										First Name
								</th>
								<th>
										Last Name
								</th>
								<th>
										Username
								</th>
								<th>
										Status
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
										1
								</td>
								<td>
										Mark
								</td>
								<td>
										Otto
								</td>
								<td>
										makr124
								</td>
								<td>
									<span class="label label-sm label-success">
									Approved </span>
								</td>
							</tr>
							<tr>
								<td>
										2
								</td>
								<td>
										Jacob
								</td>
								<td>
										Nilson
								</td>
								<td>
										jac123
								</td>
								<td>
									<span class="label label-sm label-info">
									Pending </span>
								</td>
							</tr>
							<tr>
								<td>
										3
								</td>
								<td>
										Larry
								</td>
								<td>
										Cooper
								</td>
								<td>
										lar
								</td>
								<td>
									<span class="label label-sm label-warning">
									Suspended </span>
								</td>
							</tr>
							<tr>
								<td>
										4
								</td>
								<td>
										Sandy
								</td>
								<td>
										Lim
								</td>
								<td>
										sanlim
								</td>
								<td>
									<span class="label label-sm label-danger">
									Blocked </span>
								</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
				</div>
			<!-- END SAMPLE TABLE PORTLET-->
		</div>
		<div class="col-md-6">
			<!-- BEGIN SAMPLE TABLE PORTLET-->
				<div class="portlet box blue">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-cogs"></i>QueueAbandonments
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse">
							</a>
						</div>
					</div>
					<div class="portlet-body">
						<div class="table-scrollable">
							<table class="table table-hover">
							<thead>
							<tr>
								<th>
										#
								</th>
								<th>
										First Name
								</th>
								<th>
										Last Name
								</th>
								<th>
										Username
								</th>
								<th>
										Status
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
										1
								</td>
								<td>
										Mark
								</td>
								<td>
										Otto
								</td>
								<td>
										makr124
								</td>
								<td>
									<span class="label label-sm label-success">
									Approved </span>
								</td>
							</tr>
							<tr>
								<td>
										2
								</td>
								<td>
										Jacob
								</td>
								<td>
										Nilson
								</td>
								<td>
										jac123
								</td>
								<td>
									<span class="label label-sm label-info">
									Pending </span>
								</td>
							</tr>
							<tr>
								<td>
										3
								</td>
								<td>
										Larry
								</td>
								<td>
										Cooper
								</td>
								<td>
										lar
								</td>
								<td>
									<span class="label label-sm label-warning">
									Suspended </span>
								</td>
							</tr>
							<tr>
								<td>
										4
								</td>
								<td>
										Sandy
								</td>
								<td>
										Lim
								</td>
								<td>
										sanlim
								</td>
								<td>
									<span class="label label-sm label-danger">
									Blocked </span>
								</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
				</div>
			<!-- END SAMPLE TABLE PORTLET-->
		</div>
		<div class="col-md-6">
			<!-- BEGIN SAMPLE TABLE PORTLET-->
				<div class="portlet box blue">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-cogs"></i>AgentAttempts
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse">
							</a>
						</div>
					</div>
					<div class="portlet-body">
						<div class="table-scrollable">
							<table class="table table-hover">
							<thead>
							<tr>
								<th>
										#
								</th>
								<th>
										First Name
								</th>
								<th>
										Last Name
								</th>
								<th>
										Username
								</th>
								<th>
										Status
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
										1
								</td>
								<td>
										Mark
								</td>
								<td>
										Otto
								</td>
								<td>
										makr124
								</td>
								<td>
									<span class="label label-sm label-success">
									Approved </span>
								</td>
							</tr>
							<tr>
								<td>
										2
								</td>
								<td>
										Jacob
								</td>
								<td>
										Nilson
								</td>
								<td>
										jac123
								</td>
								<td>
									<span class="label label-sm label-info">
									Pending </span>
								</td>
							</tr>
							<tr>
								<td>
										3
								</td>
								<td>
										Larry
								</td>
								<td>
										Cooper
								</td>
								<td>
										lar
								</td>
								<td>
									<span class="label label-sm label-warning">
									Suspended </span>
								</td>
							</tr>
							<tr>
								<td>
										4
								</td>
								<td>
										Sandy
								</td>
								<td>
										Lim
								</td>
								<td>
										sanlim
								</td>
								<td>
									<span class="label label-sm label-danger">
									Blocked </span>
								</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
				</div>
			<!-- END SAMPLE TABLE PORTLET-->
		</div>
		<div class="col-md-6">
			<!-- BEGIN SAMPLE TABLE PORTLET-->
				<div class="portlet box blue">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-cogs"></i>AnswerTimes
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse">
							</a>
						</div>
					</div>
					<div class="portlet-body">
						<div class="table-scrollable">
							<table class="table table-hover">
							<thead>
							<tr>
								<th>
										#
								</th>
								<th>
										First Name
								</th>
								<th>
										Last Name
								</th>
								<th>
										Username
								</th>
								<th>
										Status
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
										1
								</td>
								<td>
										Mark
								</td>
								<td>
										Otto
								</td>
								<td>
										makr124
								</td>
								<td>
									<span class="label label-sm label-success">
									Approved </span>
								</td>
							</tr>
							<tr>
								<td>
										2
								</td>
								<td>
										Jacob
								</td>
								<td>
										Nilson
								</td>
								<td>
										jac123
								</td>
								<td>
									<span class="label label-sm label-info">
									Pending </span>
								</td>
							</tr>
							<tr>
								<td>
										3
								</td>
								<td>
										Larry
								</td>
								<td>
										Cooper
								</td>
								<td>
										lar
								</td>
								<td>
									<span class="label label-sm label-warning">
									Suspended </span>
								</td>
							</tr>
							<tr>
								<td>
										4
								</td>
								<td>
										Sandy
								</td>
								<td>
										Lim
								</td>
								<td>
										sanlim
								</td>
								<td>
									<span class="label label-sm label-danger">
									Blocked </span>
								</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
				</div>
			<!-- END SAMPLE TABLE PORTLET-->
		</div><div class="col-md-6">
			<!-- BEGIN SAMPLE TABLE PORTLET-->
				<div class="portlet box blue">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-cogs"></i>AgentCallActivity
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse">
							</a>
						</div>
					</div>
					<div class="portlet-body">
						<div class="table-scrollable">
							<table class="table table-hover">
							<thead>
							<tr>
								<th>
										#
								</th>
								<th>
										First Name
								</th>
								<th>
										Last Name
								</th>
								<th>
										Username
								</th>
								<th>
										Status
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
										1
								</td>
								<td>
										Mark
								</td>
								<td>
										Otto
								</td>
								<td>
										makr124
								</td>
								<td>
									<span class="label label-sm label-success">
									Approved </span>
								</td>
							</tr>
							<tr>
								<td>
										2
								</td>
								<td>
										Jacob
								</td>
								<td>
										Nilson
								</td>
								<td>
										jac123
								</td>
								<td>
									<span class="label label-sm label-info">
									Pending </span>
								</td>
							</tr>
							<tr>
								<td>
										3
								</td>
								<td>
										Larry
								</td>
								<td>
										Cooper
								</td>
								<td>
										lar
								</td>
								<td>
									<span class="label label-sm label-warning">
									Suspended </span>
								</td>
							</tr>
							<tr>
								<td>
										4
								</td>
								<td>
										Sandy
								</td>
								<td>
										Lim
								</td>
								<td>
										sanlim
								</td>
								<td>
									<span class="label label-sm label-danger">
									Blocked </span>
								</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
				</div>
			<!-- END SAMPLE TABLE PORTLET-->
		</div>
      </div>
	  
    </div>
  </div>
</div>