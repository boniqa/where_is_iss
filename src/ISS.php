<?php

class ISS
{
    private $latitude;
    private $longitude;
    private $new_json;

    public function __construct()
    {
          $json = file_get_contents('https://api.wheretheiss.at/v1/satellites/25544');
          $this->new_json = json_decode($json);
          //var_dump($this->new_json);
    }

    public function getLatitude()
    {
        return $this->new_json->latitude;
    }

    public function getLongitude()
    {
      return $this->new_json->longitude;

    }

}
