<?php

class Continent{
  public $nameContinent;
  public function __construct($continent)
  {
    $this->nameContinent = $continent;
  }
  function getMyLocation(){
    echo('Mi trovo in ' . $this->nameContinent);
  }
}

class Country extends Continent {
    public $nameCountry;
    public $nameContinent;
    public function __construct ( $continent, $country){
        $this->nameContinent = $continent;
        $this->nameCountry = $country;
    }
    function getMyLocation(){
        echo('Mi trovo in ' . $this->nameContinent .  ' ' . $this->nameCountry);
      }
}

class Region extends Country{
    public $nameRegion;
    public $nameCountry;
    public $nameContinent;
    public function __construct($continent, $country, $region){
        $this->nameContinent = $continent;
        $this->nameCountry = $country;
        $this->nameRegion = $region;
        
    }
    function getMyLocation(){
        echo('Mi trovo in ' . $this->nameContinent .  ' ' .  $this->nameCountry . ' ' . $this->nameRegion);
      }
}

class Province extends Region{
    public $nameProvince;
    public $nameRegion;
    public $nameCountry;
    public $nameContinent;
    public function __construct( $continent, $country, $region, $province){
        $this->nameProvince = $province;
        $this->nameContinent = $continent;
        $this->nameCountry = $country;
        $this->nameRegion = $region;
    }
    function getMyLocation(){
        echo('Mi trovo in ' . $this->nameContinent .  ' ' . $this->nameCountry . ' ' . $this->nameRegion . ' ' . $this->nameProvince);
      }
}

class City extends Province{
    public $nameCity;
    public $nameProvince;
    public $nameRegion;
    public $nameCountry;
    public $nameContinent;
    public function __construct( $continent, $country, $region, $province, $city){
        $this->nameCity = $city;
        $this->nameProvince = $province;
        $this->nameContinent = $continent;
        $this->nameCountry = $country;
        $this->nameRegion = $region;
    }
    function getMyLocation(){
        echo('Mi trovo in ' . $this->nameContinent . ' ' . $this->nameCountry . ' ' . $this->nameRegion . ' ' . $this->nameProvince . ' ' . $this->nameCity);
      }
}

class Street extends City{
    public $nameStreet;
    public $nameCity;
    public $nameProvince;
    public $nameRegion;
    public $nameCountry;
    public $nameContinent;
    public function __construct( $continent, $country, $region, $province, $city, $street){
        $this->nameStreet = $street;
        $this->nameCity = $city;
        $this->nameProvince = $province;
        $this->nameContinent = $continent;
        $this->nameCountry = $country;
        $this->nameRegion = $region;
    }
    function getMyLocation(){
        echo('Mi trovo in ' . $this->nameContinent . ' ' . $this->nameCountry . ' ' . $this->nameRegion . ' ' . $this->nameProvince .  ' ' . $this->nameCity . ' ' . $this->nameStreet);
    }
}

$myLocation = new Street('Europa', 'Italia', 'Lazio', 'Roma', 'Ladispoli', 'Via Torino 10A');


$myLocation->getMyLocation();
