<?php
/**
 * Created by PhpStorm.
 * User: dyangalih
 * Date: 2019-02-14
 * Time: 02:30
 */

namespace WebAppId\Airport\Repositories;

use Illuminate\Database\QueryException;
use Illuminate\Pagination\LengthAwarePaginator;
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
    public function store(AirportParam $airportParam, Airport $airport): ?Airport
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
            report($queryException);
            return null;
        }
    }
    
    /**
     * @param string $ident
     * @param Airport $airport
     * @return Airport|null
     */
    public function getByIdent(string $ident, Airport $airport): ?Airport
    {
        return $airport->where('ident', $ident)->first();
    }
    
    /**
     * @param string $ident
     * @param AirportParam $airportParam
     * @param Airport $airport
     * @return Airport|null
     */
    public function updateByIdent(string $ident, AirportParam $airportParam, Airport $airport): ?Airport
    {
        $result = $this->getByIdent($ident, $airport);
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
     * @param string $isoCountry
     * @param int $paginate
     * @return LengthAwarePaginator|null
     */

    public function getByNameLike(string $q, Airport $airport, ?string $isoCountry, int $paginate = 12): ?LengthAwarePaginator
    {
        return $airport
            ->where(function ($query) use ($q) {
                return $query
                    ->where('name', 'LIKE', '%' . $q . '%')
                    ->orWhere('iata_code', 'LIKE', '%' . $q . '%');
            })
            ->where('type', 'LIKE', '%_airport')
            ->where('scheduled_service', 'yes')
            ->when($isoCountry != null, function ($query) use ($isoCountry) {
                return $query->where('iso_country', '=', $isoCountry);
            })
            ->paginate($paginate);
    }

    /**
     * @param string $q
     * @param string|null $isoCountry
     * @param Airport $airport
     * @return int
     */
    public function getAllByNameLikeCount(string $q, ?string $isoCountry, Airport $airport): int
    {
        return $airport
            ->where(function ($query) use ($q) {
                return $query
                    ->where('name', 'LIKE', '%' . $q . '%')
                    ->orWhere('iata_code', 'LIKE', '%' . $q . '%');
            })
            ->where('type', 'LIKE', '%_airport')
            ->where('scheduled_service', 'yes')
            ->when($isoCountry != null, function ($query) use ($isoCountry) {
                return $query->where('iso_country', '=', $isoCountry);
            })
            ->count();
    }

    
    /**
     * @param string $iataCode
     * @param Airport $airport
     * @return Airport|null
     */
    public function getByIataCode(string $iataCode, Airport $airport): ?Airport
    {
        return $airport->where('iata_code', $iataCode)->first();
    }
}