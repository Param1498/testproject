<div class="portlet box yellow">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs"></i>Calls Detail Records
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
						<select style="float: right;" class="form-select day-report-call-details" aria-label="Default select example">
							<option value="all" selected>Choose</option>
							<option value="daily">Daily</option>
							<option value="weekly">Weekly</option>
						</select>
						<!-- <input type="text" class ="graph" value=""> -->
							<table class="table table-bordered table-striped table-condensed flip-content example">
							<thead class="flip-content">
							<tr>
								<!-- <th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
								</th> -->
								<th>S.N</th>
								<th>uID</th>
								<th>Duration</th>
								<th>Source</th>
								<th>ChannelID</th>
								<th>DestChannel</th>
								<th>UserAgent</th>
								<th>StartTime </th>
								<th>Status </th>
							</tr>
							</thead>
							<tbody class="day-report-call-details"  id="day-report-call-details" >
							<?php

							$sn=1;
							$NOANSWER=0;
							$BUSY=0;
							$ANSWERED=0;
							$CANCELED=0;
							$grapharr=[];
							foreach($anyCallRecords as $key => $data){	
								if($data->Status == 'ANSWERED'){
									$ANSWERED= $ANSWERED+1;
								}else if($data->Status == 'BUSY'){
									$BUSY= $BUSY+1;
								}else if($data->Status == 'CANCELED'){
									$CANCELED= $CANCELED+1;
								}else if($data->Status == 'NO ANSWER'){
									$NOANSWER= $NOANSWER+1;
								}
							?>
							<tr>
							<td><?php echo $sn; ?></td>
							<td><?php echo $data->uID  ??''; ?></td>
							<td><?php echo $data->Duration ??''; ?></td>
							<td><?php echo $data->Source??''; ?></td>
							<td><?php echo $data->ChannelID??''; ?></td>
							<td><?php echo $data->DestChannel ??''; ?></td>
							<td><?php echo $data->UserAgent??''; ?></td>
							<td><?php echo $data->StartTime ??''; ?></td>
							<td><?php echo $data->Status ??''; ?></td>
							</tr>
							<?php
							$sn++;
							}	
							 array_push($grapharr,$ANSWERED,$BUSY,$CANCELED,$NOANSWER);
							?>
							</tbody>
							</table>
						</div>
					</div>