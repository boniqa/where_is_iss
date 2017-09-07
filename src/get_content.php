<?php
include 'src/ISS.php';
include 'src/Geocode.php';

function get_content() {

  $iss= new ISS();
  $lat= $iss->getLatitude();
  $lng= $iss->getLongitude();

  $new= new Geocode();
  $result= $new->findLocation($lat, $lng);
  return $result;
}
