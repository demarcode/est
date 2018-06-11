<?php

    $city=$_GET['city'];
    
    $city=str_replace(" ", "", $city);

    $contents=file_get_contents("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");

    preg_match('/Weather Today (.*?) <\/span>/s', $contents, $matches);
    
    
    echo $matches[1];

?>
