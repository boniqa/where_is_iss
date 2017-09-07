<?php

class Geocode
{

    private $new_json2;

    public function findLocation($lat, $lng)
    {
      $json2 = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?latlng='.$lat.','.$lng.'&key=AIzaSyDIwmMJXPEbNBbRc3ONvRZ9iWbI7XBoLQM');
      $this->new_json2 = json_decode($json2);
      // var_dump($this->new_json2);

      if ($this->new_json2->status == 'ZERO_RESULTS')
      {

        return 'We have lost it! Maybe next time!';
      }
      else {
        return 'The ISSs location is:  '. $this->new_json2->{'results'}[0]->{'formatted_address'};
      }
    }

}
