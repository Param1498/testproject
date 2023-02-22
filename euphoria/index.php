<?php 
include('layouts/header.php');
include("euphoria.php");
include("AnyCallDetailRecords.php");

?>
<div class="loader-main" style="display:none">
  	<div class="loader-inner"></div>
</div>
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	
	<?php
  include('layouts/sidebar.php');
  ?>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		
		<div class="page-content">
			<?php  include('pages/InboundCallingHistory.php')   ?>;
			<!-- END DASHBOARD STATS -->
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
<!-- </div> -->
<?php   include('layouts/footer.php') ?>;
<script>

  $('.day-report').on('change',function(){

	var day = $(this).val();
		if(day == 'all'){
		$('.loader-main').hide();
		}else{
			$('.loader-main').show();
		}
	$('#mySpinner').addClass('spinner');
	$.ajax({
	type: "GET",
	url: "euphoria.php",
	dataType:"json",
	data: {
		day:day
		},
   success: function(response){
	// var html = $.parseJSON(response.alldata);
		console.log(response)
		$('.loader-main').hide();
		// debugger;
		$('#data-html').html(response.alldata);

		// $("#example").dataTable();
	}
	});

  });
//   AnyCallDetailRecords
  $('.day-report-call-details').on('change',function(){

	var day = $(this).val();
		if(day == 'all'){
		$('.loader-main').hide();
		}else{
			$('.loader-main').show();
		}
	$('#mySpinner').addClass('spinner');
		$.ajax({
	type: "GET",
	url: "AnyCallDetailRecords.php",
	dataType:"json",
	data: {
		day:day
		},
   success: function(response){
	// var html = $.parseJSON(response.alldata);
		console.log(response)
		$('.loader-main').hide();
		// debugger;
		// $('.graph').val(response.graph);
		$('#day-report-call-details').html(response.allCallsdata);
		$("#example").dataTable();
	}
	});
  });
  
  var callInbond = <?php echo json_encode($grapharr_inbond); ?>;
  var callDetailRecord = <?php echo json_encode($grapharr); ?>;

  const ctx = document.getElementById('myChart');
  const ctx2 = document.getElementById('myChart1');
  new Chart(ctx, {
    type: 'pie',
    data: {
      labels:  ['Answered', 'Busy', 'Canceled','No Answer'],
      datasets: [{
        label: '# of calls',
        data: callInbond,
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  // call detail graph
  
  new Chart(ctx2, {
    type: 'pie',
    data: {
      labels: ['Answered', 'Busy', 'Canceled','No Answer'],
      datasets: [{
        label: '# of calls',
        data: callDetailRecord,
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
