<?php

require("vendor/autoload.php");

use Martindilling\Sunny\Sunny;

$day = new Sunny(date("F j, Y, g:i a"), 'EST');
$day->setLocation(34.924867, -81.025078);

echo "<h1>". "Rock Hill, South Carolina" . "</h1>";
echo "The sun will rise at: " . $day->sunrise . "<br>";
echo "The sun will set at:  " . $day->sunset . "<br>";