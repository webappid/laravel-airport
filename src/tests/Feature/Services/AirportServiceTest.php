<?php
/**
 * Created by PhpStorm.
 * User: dyangalih
 * Date: 2019-02-14
 * Time: 15:39
 */

namespace WebAppId\Airport\Tests\Feature\Services;


use Illuminate\Contracts\Container\BindingResolutionException;
use WebAppId\Airport\Services\AirportService;
use WebAppId\Airport\Tests\TestCase;
use WebAppId\Airport\Tests\Unit\Repositories\AirportRepositoryTest;

class AirportServiceTest extends TestCase
{
    /**
     * @var AirportService
     */
    private $airportService;
    private $airportRepositoryTest;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        try {
            $this->airportService = $this->getContainer()->make(AirportService::class);
            $this->airportRepositoryTest = $this->getContainer()->make(AirportRepositoryTest::class);
        } catch (BindingResolutionException $e) {
            report($e);
        }
    }

    public function testGetAirportLike()
    {
        $this->airportRepositoryTest->bulkData();
        $key = ['a', 'i', 'u', 'e', 'o'];

        $randomIndexKey = $this->getFaker()->numberBetween(0, count($key) - 1);

        $result = $this->getContainer()->call([$this->airportService, 'getByNameLike'], ['q' => $key[$randomIndexKey]]);
        self::assertTrue($result->isStatus());
    }

    public function testGetAllAirportByCountry()
    {
        $key = ['AD', 'AE', 'AF', 'AG', 'AI', 'AL', 'AM', 'AO', 'AQ', 'AR', 'AS', 'AT', 'AU', 'AW', 'AZ', 'BA', 'BB', 'BD', 'BE', 'BF', 'BG', 'BH', 'BI', 'BJ', 'BL', 'BM', 'BN', 'BO', 'BQ', 'BR', 'BS', 'BT', 'BW', 'BY', 'BZ', 'CA', 'CC', 'CD', 'CF', 'CG', 'CH', 'CI', 'CK', 'CL', 'CM', 'CN', 'CO', 'CR', 'CU', 'CV', 'CW', 'CX', 'CY', 'CZ', 'DE', 'DJ', 'DK', 'DM', 'DO', 'DZ', 'EC', 'EE', 'EG', 'EH', 'ER', 'ES', 'ET', 'FI', 'FJ', 'FK', 'FM', 'FO', 'FR', 'GA', 'GB', 'GD', 'GE', 'GF', 'GG', 'GH', 'GI', 'GL', 'GM', 'GN', 'GP', 'GQ', 'GR', 'GT', 'GU', 'GW', 'GY', 'HK', 'HN', 'HR', 'HT', 'HU', 'ID', 'IE', 'IL', 'IM', 'IN', 'IO', 'IQ', 'IR', 'IS', 'IT', 'JE', 'JM', 'JO', 'JP', 'KE', 'KG', 'KH', 'KI', 'KM', 'KN', 'KP', 'KR', 'KW', 'KY', 'KZ', 'LA', 'LB', 'LC', 'LI', 'LK', 'LR', 'LS', 'LT', 'LU', 'LV', 'LY', 'MA', 'MC', 'MD', 'ME', 'MF', 'MG', 'MH', 'MK', 'ML', 'MM', 'MN', 'MO', 'MP', 'MQ', 'MR', 'MS', 'MT', 'MU', 'MV', 'MW', 'MX', 'MY', 'MZ', 'NA', 'NC', 'NE', 'NF', 'NG', 'NI', 'NL', 'NO', 'NP', 'NR', 'NU', 'NZ', 'OM', 'PA', 'PE', 'PF', 'PG', 'PH', 'PK', 'PL', 'PM', 'PR', 'PS', 'PT', 'PW', 'PY', 'QA', 'RE', 'RO', 'RS', 'RU', 'RW', 'SA', 'SB', 'SC', 'SD', 'SE', 'SG', 'SH', 'SI', 'SK', 'SL', 'SM', 'SN', 'SO', 'SR', 'SS', 'ST', 'SV', 'SX', 'SY', 'SZ', 'TC', 'TD', 'TF', 'TG', 'TH', 'TJ', 'TL', 'TM', 'TN', 'TO', 'TR', 'TT', 'TV', 'TW', 'TZ', 'UA', 'UG', 'UM', 'US', 'UY', 'UZ', 'VA', 'VC', 'VE', 'VG', 'VI', 'VN', 'VU', 'WF', 'WS', 'XK', 'YE', 'YT', 'ZA', 'ZM', 'ZW', 'ZZ'];

        $randomIndexKey = $this->getFaker()->numberBetween(0, count($key) - 1);

        $result = $this->getContainer()->call([$this->airportService, 'getByNameLike'], ['q' => '', 'isoCountry' => $key[$randomIndexKey]]);
        self::assertTrue($result->isStatus());

        /*
         * test for indonesia
         */

        $result = $this->getContainer()->call([$this->airportService, 'getByNameLike'], ['q' => '', 'isoCountry' => 'ID']);
        self::assertTrue($result->isStatus());
    }
}