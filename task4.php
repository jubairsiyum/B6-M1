<?php
// Temperature Conversion
define("FACTOR", 9/5);
define("OFFSET", 32);

echo "Enter a temparature : ";
$temp = trim(fgets(STDIN));

echo "Convert to (1: Fahrenheit, 2: Celsius) : ";
$input = trim(fgets(STDIN));
switch ($input){
    case 1:
        $result = $temp * FACTOR * OFFSET;
        echo "Temperature: $result Degree Fahrenheit";
        break;
    case 2:
        $result = ($temp - OFFSET) * FACTOR;
        echo "Temperature: $result Degree Celsius";
        break;
    default:
        echo "OSTAD bhul input disen tohhhh!!!";
}