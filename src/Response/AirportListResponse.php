<?php


namespace WebAppId\Airport\Response;


use Illuminate\Database\Eloquent\Collection;
use WebAppId\DDD\Controllers\BaseController;

/**
 * @author: Dyan Galih<dyan.galih@gmail.com>
 * Date: 07/01/20
 * Time: 16.41
 * Class AirportListResponse
 * @package WebAppId\Airport\Response
 */
class AirportListResponse extends BaseController
{
    /**
     * @var Collection
     */
    public $airportList;
}