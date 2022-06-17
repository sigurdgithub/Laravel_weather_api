<?php

return [

    /**
     * Get a free Open Weather Map API key : https://openweathermap.org/price.
     *
     */

    'api_key' => '5dd765a29b95b2e058dfd9f33a1dbd0d', // get an API key

    /**
     * Library https://openweathermap.org/current#multi
     *
     */

    'lang' => 'en',

    'date_format' => 'd/m/Y',
    'time_format' => 'h:i A',
    'day_format' => 'l',

    /**
     * Units: available units are c, f, k. (k is default)
     *
     * For temperature in Fahrenheit (f) and wind speed in miles/hour, use units=imperial
     * For temperature in Celsius (c) and wind speed in meter/sec, use units=metric
     */

    'temp_format' => 'c',
];
