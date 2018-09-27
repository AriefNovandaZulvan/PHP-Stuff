<?php
//-------------------- this is JSON from Android... they passing parameter here
$json = json_decode(file_get_contents('php://input'), true);
$data = $json['data'];
//-------------------- Fetch your JSON here
foreach($data as &$detail)
{
  $key = $detail['key'];
  $details = $details['detail'];
  $type = $detail['type'];
}

//-------------------- Here is send
$url = 'http:yourURL';
$myvars = '$key=' . $key'&$details=' . $details . '&$type=' . $type ;

$ch = curl_init($url);
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
//-------------------- Get the response and print it
$response = curl_exec( $ch );
echo $response;

?>
