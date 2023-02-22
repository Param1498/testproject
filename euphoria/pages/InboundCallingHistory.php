<div class="portlet box yellow">
						
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs"></i>Inbound Calling History
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<!-- <a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove"> -->
								</a>
							</div>
						</div>
					
						<div class="portlet-body flip-scroll">
						<!-- <div class="m-loader" style="width: 30px; display: inline-block;"></div> -->
						<select style="float: right;" class="form-select day-report" aria-label="Default select example">
							<option value="all" selected>Choose</option>
							<option value="daily">Daily</option>
							<option value="weekly">Weekly</option>
						</select>
						<div id="mySpinner"></div>
							<!-- <div class="m-loader m-loader--primary" style="width: 30px; display: inline-block;"></div> -->
							<table class="table table-bordered table-striped table-condensed flip-content example" id="example">
							<thead class="flip-content">
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
								DialedDID
								</th>
								<th>
								Duration
								</th>
								<th>
								Caller ID
								</th>
								<th>
								StartTime
								</th>
								<th>
								Status
								</th>
								<th>
								StatusDescription
								</th>
							</tr>
							</thead>
							<tbody class="data-html"  id="data-html">
							<?php
							
							$sn=1;
							$ANSWERED_INBOND=0;
							$BUSY_INBOND=0;
							$CANCELED_INBOND=0;
							$NOANSWER_INBOND=0;
							
							$grapharr_inbond=[];
							foreach($xml_snippet  as $key => $data){
								if($data->StatusDescription == 'Answered'){
									$ANSWERED_INBOND= $ANSWERED_INBOND+1;
								}else if($data->StatusDescription == 'Busy'){
									$BUSY_INBOND= $BUSY_INBOND+1;
								}else if($data->StatusDescription == 'Canceled'){
									$CANCELED_INBOND= $CANCELED_INBOND+1;
								}else if($data->StatusDescription == 'No answer'){
									$NOANSWER_INBOND= $NOANSWER_INBOND+1;
								}
							?>
							<tr>
							<td id ="yes"><?php echo $sn; ?></td>
							<td><?php echo $data->uID  ??''; ?></td>
							<td><?php echo $data->DialedDID ??''; ?></td>
							<td><?php echo $data->Duration??''; ?></td>
							<td><?php echo $data->CallerID??''; ?></td>
							<td><?php echo $data->StartTime ??''; ?></td>
							<td><?php echo $data->Status??''; ?></td>
							<td><?php echo $data->StatusDescription ??''; ?></td>
							</tr>
							<?php
							$sn++;
							}
							array_push($grapharr_inbond,$ANSWERED_INBOND,$BUSY_INBOND,$CANCELED_INBOND,$NOANSWER_INBOND);

							?>
							</tbody>
							</table>
						</div>
					</div>
					
                  <?php   include('pages/CallsDetailRecords.php'); ?>
                  <?php   include('pages/QueueAnalytics.php'); ?>

			<!-- END DASHBOARD STATS -->
                  <?php   include('pages/graphs.php'); ?>

		</div>