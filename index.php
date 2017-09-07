<?php
include 'src/ISS.php';
// $json = file_get_contents('https://api.wheretheiss.at/v1/satellites/25544');
// $obj = json_decode($json);

//echo 'latitude: '.$obj->latitude."<br>";
//echo 'longitude:'.$obj->longitude. '<br>';
$lat= $obj->latitude;
$lng= $obj->longitude;
//echo $lat."<br>";
//echo $lng;

$json2 = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?latlng='.$lat.','.$lng.'&key=AIzaSyDIwmMJXPEbNBbRc3ONvRZ9iWbI7XBoLQM');
$obj2 = json_decode($json2);
var_dump($obj2);
//echo $obj2['results'][0]['formatted_address'];
$res= $obj2->{'results'}[0]->{'formatted_address'};
echo 'ISS znajduje się w okolicy  ' . $res.'.';

?>
