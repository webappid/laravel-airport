<?php
/**
 * Created by PhpStorm.
 * User: dyangalih
 * Date: 2019-02-14
 * Time: 02:33
 */

namespace WebAppId\Airport\Services\Params;

/**
 * Class AirportParam
 * @package WebAppId\Airport\Serivces\Params
 */
class AirportParam
{
    private $id;
    private $ident;
    private $type;
    private $name;
    private $latitude_deg;
    private $longitude_deg;
    private $elevation_ft;
    private $continent;
    private $iso_country;
    private $iso_region;
    private $municipality;
    private $scheduled_service;
    private $gps_code;
    private $iata_code;
    private $local_code;
    private $home_link;
    private $wikipedia_link;
    private $keywords;
    
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    
    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    
    /**
     * @return mixed
     */
    public function getIdent(): string
    {
        return $this->ident;
    }
    
    /**
     * @param string $ident
     */
    public function setIdent(string $ident): void
    {
        $this->ident = $ident;
    }
    
    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }
    
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }
    
    /**
     * @return mixed
     */
    public function getLatitudeDeg()
    {
        return $this->latitude_deg;
    }
    
    /**
     * @param mixed $latitude_deg
     */
    public function setLatitudeDeg($latitude_deg): void
    {
        $this->latitude_deg = $latitude_deg;
    }
    
    /**
     * @return mixed
     */
    public function getLongitudeDeg()
    {
        return $this->longitude_deg;
    }
    
    /**
     * @param mixed $longitude_deg
     */
    public function setLongitudeDeg($longitude_deg): void
    {
        $this->longitude_deg = $longitude_deg;
    }
    
    /**
     * @return mixed
     */
    public function getElevationFt()
    {
        return $this->elevation_ft;
    }
    
    /**
     * @param mixed $elevation_ft
     */
    public function setElevationFt($elevation_ft): void
    {
        $this->elevation_ft = $elevation_ft;
    }
    
    /**
     * @return mixed
     */
    public function getContinent()
    {
        return $this->continent;
    }
    
    /**
     * @param mixed $continent
     */
    public function setContinent($continent): void
    {
        $this->continent = $continent;
    }
    
    /**
     * @return mixed
     */
    public function getIsoCountry()
    {
        return $this->iso_country;
    }
    
    /**
     * @param mixed $iso_country
     */
    public function setIsoCountry($iso_country): void
    {
        $this->iso_country = $iso_country;
    }
    
    /**
     * @return mixed
     */
    public function getIsoRegion()
    {
        return $this->iso_region;
    }
    
    /**
     * @param mixed $iso_region
     */
    public function setIsoRegion($iso_region): void
    {
        $this->iso_region = $iso_region;
    }
    
    /**
     * @return mixed
     */
    public function getMunicipality()
    {
        return $this->municipality;
    }
    
    /**
     * @param mixed $municipality
     */
    public function setMunicipality($municipality): void
    {
        $this->municipality = $municipality;
    }
    
    /**
     * @return mixed
     */
    public function getScheduledService()
    {
        return $this->scheduled_service;
    }
    
    /**
     * @param mixed $scheduled_service
     */
    public function setScheduledService($scheduled_service): void
    {
        $this->scheduled_service = $scheduled_service;
    }
    
    /**
     * @return mixed
     */
    public function getGpsCode()
    {
        return $this->gps_code;
    }
    
    /**
     * @param mixed $gps_code
     */
    public function setGpsCode($gps_code): void
    {
        $this->gps_code = $gps_code;
    }
    
    /**
     * @return mixed
     */
    public function getIataCode()
    {
        return $this->iata_code;
    }
    
    /**
     * @param mixed $iata_code
     */
    public function setIataCode($iata_code): void
    {
        $this->iata_code = $iata_code;
    }
    
    /**
     * @return mixed
     */
    public function getLocalCode()
    {
        return $this->local_code;
    }
    
    /**
     * @param mixed $local_code
     */
    public function setLocalCode($local_code): void
    {
        $this->local_code = $local_code;
    }
    
    /**
     * @return mixed
     */
    public function getHomeLink()
    {
        return $this->home_link;
    }
    
    /**
     * @param mixed $home_link
     */
    public function setHomeLink($home_link): void
    {
        $this->home_link = $home_link;
    }
    
    /**
     * @return mixed
     */
    public function getWikipediaLink()
    {
        return $this->wikipedia_link;
    }
    
    /**
     * @param mixed $wikipedia_link
     */
    public function setWikipediaLink($wikipedia_link): void
    {
        $this->wikipedia_link = $wikipedia_link;
    }
    
    /**
     * @return mixed
     */
    public function getKeywords()
    {
        return $this->keywords;
    }
    
    /**
     * @param mixed $keywords
     */
    public function setKeywords($keywords): void
    {
        $this->keywords = $keywords;
    }
    
    
}