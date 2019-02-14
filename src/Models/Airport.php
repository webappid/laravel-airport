<?php
/**
 * Created by PhpStorm.
 * User: dyangalih
 * Date: 2019-02-14
 * Time: 02:20
 */

namespace WebAppId\Airport\Models;


use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $table = 'airports';
    
    protected $fillable = ['id', 'ident', 'type', 'name', 'latitude_deg', 'longitude_deg', 'elevation_ft', 'continent', 'iso_country', 'iso_region', 'municipality', 'scheduled_service', 'gps_code', 'iata_code', 'local_code', 'home_link', 'wikipedia_link', 'keywords'];
}