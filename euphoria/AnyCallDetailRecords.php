<?php

if(isset($_GET['day'])){
	$day = $_GET['day'];
	if($day == 'daily'){
	$date = date('Y-m-d');
	$enddate = date('Y-m-d');
	}elseif($day == 'weekly'){
	$date = date('Y-m-d', strtotime('-7 days'));
	$enddate =  date('Y-m-d');
	}
  $postData = '<XML><Tenant>
	<Name>VantageDebt</Name>
	<Auth>033b21e5601ed34dcae60f85fecb314e</Auth>
</Tenant>
<ActionName>GetAnyCallDetailRecords</ActionName>
<pageSize>100</pageSize>
<startAt >0</startAt >
<startDate >'.$date.'</startDate >
<endDate >'.$enddate.'</endDate >
</XML>';

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.euphoria.co.za/Euphoria.Api.aspx',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_POSTFIELDS =>$postData,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: evh71n18'
  ),
));

$response = curl_exec($curl);
curl_close($curl);
$xml_snippet_call_details = simplexml_load_string( $response );
// return $xml_snippet;
$html='';
$sn=1;
foreach($xml_snippet_call_details as  $data){
	$html .= '<tr><td>'.$sn.'</td>";
	$html .= "<td>'.$data->uID.'</td>";
	$html .= "<td>'.$data->Source.'</td>";
	$html .= "<td>'.$data->Duration.'</td>";
	$html .= "<td>'.$data->CallerID.'</td>";
	$html .= "<td>'.$data->UserAgent.'</td>";
	$html .= "<td>'.$data->Status.'</td>";
	$html .= "<td>'.$data->DestChannel.'</td></tr>';
	$sn++;
	}
  
  // $graph=[100, 50, 30];
	echo json_encode(array('status' => true, 'allCallsdata'=> $html));
	// }
}else{
	$date = date('Y-m-d');
  $postData = '<XML><Tenant>
	<Name>VantageDebt</Name>
	<Auth>033b21e5601ed34dcae60f85fecb314e</Auth>
</Tenant>
<ActionName>GetAnyCallDetailRecords</ActionName>
<pageSize>1000</pageSize>
<startAt >0</startAt >
<startDate >'.$date.'</startDate >
<endDate >'.$date.'</endDate >
</XML>';
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.euphoria.co.za/Euphoria.Api.aspx',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_POSTFIELDS =>$postData,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: evh71n18'
  ),
));
$response = curl_exec($curl);
curl_close($curl);
$anyCallRecords = simplexml_load_string( $response );

}





?>


