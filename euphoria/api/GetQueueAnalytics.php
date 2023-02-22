<?php
include("euphoria.php");
?>
<!DOCTYPE html>
<html>
<head>
<head>
  <title>Call History</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">



	<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script>

</head>
<body>
<div class="container">
<h2>Any CallDetail Records</h2>
 <div class="row">
 <select class="form-select" aria-label="Default select example" style="float: right;" id ="calls-data">
  <option selected>Select</option>
  <option value="all-calls">Any CallDetail Records</option>
  <option value="all-history">Inbound Calling History</option>
</select>
   <div class="col-sm-12">
    <div class="table-responsive">
      <table class="table table-bordered" id ="example">
       <thead>
        <tr>
        <th>S.N</th>
         <th>Id</th>
         <th>Source</th>
         <th>Duration</th>
         <th>Caller ID</th>
         <th>User Agent </th>
         <th>Status</th>
         <th>DestChannel </th>
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
</div>
</div>
</body>
<script>

$(document).ready(function () {
    $('#example').DataTable();

    $('#calls-data').on('change',function(){
      var calls= $(this).val();
      if(calls == 'all-calls'){
        window.location.href = "http://localhost/euphoria/?flag="+calls;
      }
      if(calls == 'all-history'){
        window.location.href = "http://localhost/euphoria/history.php/?flag="+calls;
      }
    })
});
</script>
</html>