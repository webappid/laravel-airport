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


/**
 * Class AirportService
 * @package WebAppId\Airport\Tests\Feature\Services
 */
class AirportService
{
    private $container;
    
    public function __construct(Container $container)
    {
        return $this->container = $container;
    }
    
    /**
     * @param string $q
     * @param AirportRepository $airportRepository
     * @return object|null
     */
    public function getAirportLike(string $q, AirportRepository $airportRepository): ?object
    {
        return $this->container->call([$airportRepository, 'getAirportLike'], ['q' => $q]);
    }
    
    /**
     * @param string $countryCode
     * @param AirportRepository $airportRepository
     * @return Collection|null
     */
    public function getAllAirportByCountry(string $countryCode, AirportRepository $airportRepository): ?Collection
    {
        return $this->container->call([$airportRepository, 'getAllAirportByCountry'], ['countryCode' => $countryCode]);
    }
}