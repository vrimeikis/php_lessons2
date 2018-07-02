<?php

echo time();

echo '<br>';

echo date('Y-m-d H:i:s');

echo '<br>';

echo date('r', 1530543322);

echo '<br>';

echo '--------------------------';

echo '<br>';

$date = new DateTime();
echo '<pre>';
print_r($date);
echo '</pre>';

echo '<br>';

echo $date->format('Y/m/d');

echo '<br>';

echo $date->modify('+ 1 day')->format('Y-m-d H:i:s');

echo '<br>';

$date1 = new DateTime();
$date1->modify('- 3 days');

echo '<pre>';
print_r($date->diff($date1));
echo '</pre>';
