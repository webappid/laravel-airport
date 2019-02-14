<?php
/**
 * Created by PhpStorm.
 * User: dyangalih
 * Date: 2019-02-14
 * Time: 02:30
 */

namespace WebAppId\Airport\Repositories;


use Illuminate\Database\QueryException;
use WebAppId\Airport\Models\Airport;
use WebAppId\Airport\Services\Params\AirportParam;

/**
 * Class AirportRepository
 * @package WebAppId\Airport\Repositories
 */
class AirportRepository
{
    /**
     * @param AirportParam $airportParam
     * @param Airport $airport
     * @return Airport|null
     */
    public function addAirport(AirportParam $airportParam, Airport $airport): ?Airport
    {
        try {
            $airport->id = $airportParam->getId();
            $airport->ident = $airportParam->getIdent();
            $airport->type = $airportParam->getType();
            $airport->name = $airportParam->getName();
            $airport->latitude_deg = $airportParam->getLatitudeDeg();
            $airport->longitude_deg = $airportParam->getLongitudeDeg();
            $airport->elevation_ft = $airportParam->getElevationFt();
            $airport->continent = $airportParam->getContinent();
            $airport->iso_country = $airportParam->getIsoCountry();
            $airport->iso_region = $airportParam->getIsoRegion();
            $airport->municipality = $airportParam->getMunicipality();
            $airport->scheduled_service = $airportParam->getScheduledService();
            $airport->gps_code = $airportParam->getGpsCode();
            $airport->iata_code = $airportParam->getIataCode();
            $airport->local_code = $airportParam->getLocalCode();
            $airport->home_link = $airportParam->getHomeLink();
            $airport->wikipedia_link = $airportParam->getWikipediaLink();
            $airport->keywords = $airportParam->getKeywords();
            $airport->save();
            return $airport;
        } catch (QueryException $queryException) {
            dd($queryException);
            report($queryException);
            return null;
        }
    }
    
    /**
     * @param string $ident
     * @param Airport $airport
     * @return Airport|null
     */
    public function getAirportByIdent(string $ident, Airport $airport): ?Airport
    {
        return $airport->where('ident', $ident)->first();
    }
    
    /**
     * @param string $ident
     * @param AirportParam $airportParam
     * @param Airport $airport
     * @return Airport|null
     */
    public function updateAirportByIdent(string $ident, AirportParam $airportParam, Airport $airport): ?Airport
    {
        $result = $this->getAirportByIdent($ident, $airport);
        if ($result != null) {
            try {
                $result->id = $airportParam->getId();
                $result->type = $airportParam->getType();
                $result->name = $airportParam->getName();
                $result->latitude_deg = $airportParam->getLatitudeDeg();
                $result->longitude_deg = $airportParam->getLongitudeDeg();
                $result->elevation_ft = $airportParam->getElevationFt();
                $result->continent = $airportParam->getContinent();
                $result->iso_country = $airportParam->getIsoCountry();
                $result->iso_region = $airportParam->getIsoRegion();
                $result->municipality = $airportParam->getMunicipality();
                $result->scheduled_service = $airportParam->getScheduledService();
                $result->gps_code = $airportParam->getGpsCode();
                $result->iata_code = $airportParam->getIataCode();
                $result->local_code = $airportParam->getLocalCode();
                $result->home_link = $airportParam->getHomeLink();
                $result->wikipedia_link = $airportParam->getWikipediaLink();
                $result->keywords = $airportParam->getKeywords();
                $result->save();
            } catch (QueryException $queryException) {
                report($queryException);
            }
        }
        return $result;
    }
    
    /**
     * @param string $q
     * @param Airport $airport
     * @param int $paginate
     * @return object|null
     */
    public function getAirportLike(string $q, Airport $airport, int $paginate = 12): ?object
    {
        return $airport
            ->where('name', 'LIKE', '%' . $q . '%')
            ->orWhere('local_code', 'LIKE', '%' . $q . '%')
            ->paginate($paginate);
    }
}