# Airport package for laravel

the data from this package based on https://openflights.org/data.html#airport

how to install:
1. install via composer `composer require webappid/laravel-airport`
2. seeding the data `webappid:airport:seed`

example get airport by country :

```
<?php
use WebAppId\Airport\Services\AirportService

class ExampleAirport{
   public function getAirPort(AirportService $airportService, Container $container){
      $result = $container->call([$airportService, 'getAllAirportByCountry'], ['countryCode' => '[country_code]']);
   }
}
```