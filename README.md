# Simple-PHP-Forecast.io

## A simple PHP library for forecast.io

This is a simple PHP library to use the [forecast.io](http://forecast.io) API. The idea is to get you started as quickly as possible. It uses cURL to get the weather information which you can then process however you like. You don't need anything special to use, just include the library in your project.

## Installation

Simply include the PHP library file in your code:

```PHP
include 'lib/forecastlib.php';
```

Inside this file, you will see this line:

```PHP
$my_api_key = '<INSERT_FORECAST.IO_API_KEY';
```

Replace the string with your personal API key and you can start making requests.

## How to use

All the information ends up in the `$result` array, so you can just take it and loop over it as you see fit. However, I have also included some variables and arrays with the most commonly needed information so you can save some time.

### Included variables and arrays

Variables include current weather information, while arrays include forecast information.

All variables contained in the "currently" array are included, but they might not be defined for each location, so make sure you add some error checking.

#### Variables

```PHP
$current_time
$current_weather_summary
$current_weather
$current_temperature
$current_apparent_temperature
$current_precip_intensity
$current_precip_probability
$current_precip_type
$current_humidity
$current_wind_speed
$current_wind_bearing
$current_visibility
$current_cloud_cover
$current_pressure
$current_dew_point
$current_ozone
```

#### Arrays

```PHP
$minutely_data_array;
$hourly_data_array;
$daily_data_array;
```

Simply loop through these to extract the information you are interested in.

## More documentation

For more information about the different options you can use and the format of the JSON response, please take a look at the [official API docs](https://developer.forecast.io/docs/v2).