<?php
/**
 * Created by PhpStorm.
 * User: dyangalih
 * Date: 2019-02-14
 * Time: 15:32
 */

namespace WebAppId\Airport\Services;


use Illuminate\Container\Container;
use Illuminate\Database\Eloquent\Collection;
use WebAppId\Airport\Repositories\AirportRepository;
use WebAppId\Airport\Response\AirportListResponse;
use WebAppId\DDD\Services\BaseService;


/**
 * Class AirportService
 * @package WebAppId\Airport\Tests\Feature\Services
 */
class AirportService extends BaseService
{

    /**
     * @param string $q
     * @param AirportRepository $airportRepository
     * @param AirportListResponse $airportListResponse
     * @param string|null $isoCountry
     * @return AirportListResponse|null
     */
    public function getByNameLike(string $q, AirportRepository $airportRepository, AirportListResponse $airportListResponse, string $isoCountry = null): ?AirportListResponse
    {
        $result = $this->getContainer()->call([$airportRepository, 'getByNameLike'], ['q' => $q, 'isoCountry' => $isoCountry]);
        if (count($result) > 0) {
            $airportListResponse->setStatus(true);
            $airportListResponse->setMessage('Data Found');
            $airportListResponse->airportList = $result;
        } else {
            $airportListResponse->setStatus(false);
            $airportListResponse->setMessage('Data Not Found');
        }
        return $airportListResponse;
    }
}