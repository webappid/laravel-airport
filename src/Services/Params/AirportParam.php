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
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    
    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }
    
    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    
    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    
    /**
     * @return float
     */
    public function getLatitudeDeg(): float
    {
        return $this->latitude_deg;
    }
    
    /**
     * @param float $latitude_deg
     */
    public function setLatitudeDeg(float $latitude_deg): void
    {
        $this->latitude_deg = $latitude_deg;
    }
    
    /**
     * @return float|null
     */
    public function getLongitudeDeg(): ?float
    {
        return $this->longitude_deg;
    }
    
    /**
     * @param float $longitude_deg
     */
    public function setLongitudeDeg(float $longitude_deg): void
    {
        $this->longitude_deg = $longitude_deg;
    }
    
    /**
     * @return int|null
     */
    public function getElevationFt(): ?int
    {
        return $this->elevation_ft;
    }
    
    /**
     * @param int $elevation_ft
     */
    public function setElevationFt(int $elevation_ft): void
    {
        $this->elevation_ft = $elevation_ft;
    }
    
    /**
     * @return string|null
     */
    public function getContinent(): ?string
    {
        return $this->continent;
    }
    
    /**
     * @param string $continent
     */
    public function setContinent(string $continent): void
    {
        $this->continent = $continent;
    }
    
    /**
     * @return string|null
     */
    public function getIsoCountry(): ?string
    {
        return $this->iso_country;
    }
    
    /**
     * @param string $iso_country
     */
    public function setIsoCountry(string $iso_country): void
    {
        $this->iso_country = $iso_country;
    }
    
    /**
     * @return string|null
     */
    public function getIsoRegion(): ?string
    {
        return $this->iso_region;
    }
    
    /**
     * @param string $iso_region
     */
    public function setIsoRegion(string $iso_region): void
    {
        $this->iso_region = $iso_region;
    }
    
    /**
     * @return string|null
     */
    public function getMunicipality(): ?string
    {
        return $this->municipality;
    }
    
    /**
     * @param string $municipality
     */
    public function setMunicipality(string $municipality): void
    {
        $this->municipality = $municipality;
    }
    
    /**
     * @return string|null
     */
    public function getScheduledService(): ?string
    {
        return $this->scheduled_service;
    }
    
    /**
     * @param string $scheduled_service
     */
    public function setScheduledService(string $scheduled_service): void
    {
        $this->scheduled_service = $scheduled_service;
    }
    
    /**
     * @return string|null
     */
    public function getGpsCode(): ?string
    {
        return $this->gps_code;
    }
    
    /**
     * @param string $gps_code
     */
    public function setGpsCode(string $gps_code): void
    {
        $this->gps_code = $gps_code;
    }
    
    /**
     * @return string|null
     */
    public function getIataCode(): ?string
    {
        return $this->iata_code;
    }
    
    /**
     * @param string $iata_code
     */
    public function setIataCode(string $iata_code): void
    {
        $this->iata_code = $iata_code;
    }
    
    /**
     * @return string|null
     */
    public function getLocalCode():?string
    {
        return $this->local_code;
    }
    
    /**
     * @param string $local_code
     */
    public function setLocalCode(string $local_code): void
    {
        $this->local_code = $local_code;
    }
    
    /**
     * @return string|null
     */
    public function getHomeLink():?string
    {
        return $this->home_link;
    }
    
    /**
     * @param string $home_link
     */
    public function setHomeLink(string $home_link): void
    {
        $this->home_link = $home_link;
    }
    
    /**
     * @return string|null
     */
    public function getWikipediaLink():?string
    {
        return $this->wikipedia_link;
    }
    
    /**
     * @param string $wikipedia_link
     */
    public function setWikipediaLink(string $wikipedia_link): void
    {
        $this->wikipedia_link = $wikipedia_link;
    }
    
    /**
     * @return string|null
     */
    public function getKeywords():?string
    {
        return $this->keywords;
    }
    
    /**
     * @param string $keywords
     */
    public function setKeywords(string $keywords): void
    {
        $this->keywords = $keywords;
    }
    
    
}