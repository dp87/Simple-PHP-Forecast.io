# Simple-PHP-Forecast.io

## A simple PHP library for forecast.io

This is a simple PHP library to use the [forecast.io](http://forecast.io) API. The idea is to get you started as quickly as possible. It uses cURL to get the weather information which you can then process however you like. You don't need anything special to use, just include the library in your project.

## Installation

Simply include the PHP library file in your code:

```PHP
include 'lib/forecastlib.php';
```

## How to use

All the information ends up in the `$result` array, so you can just take it and cycle over it as you see fit. However, I have also included some variables and arrays with the most commonly needed information so you can save some time.

### Included variables and arrays

Variables include current weather information (the ones I deemed more useful so you can get up and running quick), while arrays include forecast information.

#### Variables

```PHP
$current_weather
$current_temperature
$current_apparent_temperature
$current_precip_intensity
$current_precip_probability
$current_humidity
$current_windspeed
$current_visibility
$current_cloud_cover
$current_pressure
```

#### Arrays

```PHP
$minutely_data_array = $result['minutely'];

$hourly_data_array = $result['hourly'];

$daily_data_array = $result['daily'];
```

Simply cicle through these to extract the information you are interested in.

## More documentation

For more information about the different options you can use and the format of the JSON response, please take a look at the [official API docs](https://developer.forecast.io/docs/v2).