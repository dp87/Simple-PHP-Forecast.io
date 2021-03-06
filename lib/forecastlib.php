<?php

# YOUR API KEY
##############

$my_api_key = '<INSERT_FORECAST.IO_API_KEY';

# OPTIONS
#########

# Possible values for units are [us, si, ca, uk2, auto]
$units = 'si';

# Possible values for language are [ar, bs, cs, de, el, en, es, fr, hr, hu, it, is, kw, nb, nl, pl, pt, ru, sk, sr, sv, tet, tr, uk, x-pig-latin, zh, zh-tw]
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

$current_time = $result['currently']['time'];
$current_weather_summary = $result['currently']['summary'];
$current_weather = $result['currently']['icon'];
$current_temperature = $result['currently']['temperature'];
$current_apparent_temperature = $result['currently']['apparentTemperature'];
$current_precip_intensity = $result['currently']['precipIntensity'];
$current_precip_probability = $result['currently']['precipProbability'];
$current_precip_type = $result['currently']['precipType'];
$current_humidity = $result['currently']['humidity'];
$current_wind_speed = $result['currently']['windSpeed'];
$current_wind_bearing = $result['currently']['windBearing'];
$current_visibility = $result['currently']['visibility'];
$current_cloud_cover = $result['currently']['cloudCover'];
$current_pressure = $result['currently']['pressure'];
$current_dew_point = $result['currently']['dewPoint'];
$current_ozone = $result['currently']['ozone'];

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