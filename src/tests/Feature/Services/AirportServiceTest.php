<?php
/**
 * Created by PhpStorm.
 * User: dyangalih
 * Date: 2019-02-14
 * Time: 15:39
 */

namespace WebAppId\Airport\Tests\Feature\Services;


use WebAppId\Airport\Services\AirportService;
use WebAppId\Airport\Tests\TestCase;
use WebAppId\Airport\Tests\Unit\Repositories\AirportRepositoryTest;

class AirportServiceTest extends TestCase
{
    private $airportService;
    private $airportRepositoryTest;
    
    /**
     * @return AirportService
     */
    public function airportService(): AirportService
    {
        if ($this->airportService == null) {
            $this->airportService = $this->getContainer()->make(AirportService::class);
        }
        return $this->airportService;
    }
    
    /**
     * @return AirportRepositoryTest
     */
    public function airportRepositoryTest(): AirportRepositoryTest
    {
        if ($this->airportRepositoryTest == null) {
            $this->airportRepositoryTest = $this->getContainer()->make(AirportRepositoryTest::class);
        }
        return $this->airportRepositoryTest;
    }
    
    protected function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }
    
    public function testGetAirportLike()
    {
        $this->airportRepositoryTest()->bulkData();
        $key = ['a', 'i', 'u', 'e', 'o'];
        
        $randomIndexKey = $this->getFaker()->numberBetween(0, count($key) - 1);
        
        $result = $this->getContainer()->call([$this->airportService(), 'getAirportLike'], ['q' => $key[$randomIndexKey]]);
        self::assertGreaterThanOrEqual(1, count($result));
    }
}