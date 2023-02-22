<?php 

$postData='<XML>
<Tenant>
    <Name>VantageDebt</Name>
    <Auth>033b21e5601ed34dcae60f85fecb314e</Auth>
</Tenant>
<ActionName>GetQueueAnalytics</ActionName>
<QueueName>Support-VantageDebt</QueueName>
<startDate>2021-04-01 </startDate>
<endDate>2021-04-01</endDate>
</XML>';
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.euphoria.co.za/Euphoria.Api.aspx',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 5000,
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
$queue = simplexml_load_string( $response );

?>