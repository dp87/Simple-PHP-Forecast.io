<?php

# YOUR API KEY
##############

$my_api_key = '<INSERT_FORECAST.IO_API_KEY';

# OPTIONS
#########

$units = 'si';
$language = 'en';

# COORDINATES
#############

$latitude = 51;
$longitude = 32;

$url = "https://api.forecast.io/forecast/$my_api_key/$latitude,$longitude?units=$units&lang=$lang";

$json_data = file_get_contents($url);
$result = json_decode($json_data, TRUE); # All the information ends up in the $result array

# CURRENT WEATHER DATA
######################

$current_weather = $result['currently']['summary'];
$current_temperature = $result['currently']['temperature'];
$current_apparent_temperature = $result['currently']['apparentTemperature'];
$current_precip_intensity = $result['currently']['precipIntensity'];
$current_precip_probability = $result['currently']['precipProbability'];
$current_humidity = $result['currently']['humidity'];
$current_windspeed = $result['currently']['windSpeed'];
$current_visibility = $result['currently']['visibility'];
$current_cloud_cover = $result['currently']['cloudCover'];
$current_pressure = $result['currently']['pressure'];

# MINUTELY FORECAST
###################

$minutely_data_array = $result['minutely'];

# HOURLY FORECAST
#################

$hourly_data_array = $result['hourly'];

# DAILY FORECAST
################

$daily_data_array = $result['daily'];

?>