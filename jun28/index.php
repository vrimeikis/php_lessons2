<?php

declare(strict_types = 1);

$first = 5;
$second = 6;

$rez1 = $first + $second;

echo $first;
echo "<br>";
echo $second;
echo "<br>";

echo $rez1;
echo "<br>";

$rez2 = $first - $second;
echo $rez2;
echo "<br>";

$rez3 = $first * $second;
echo $rez3;
echo "<br>";

$rez4 = $first / $second;
echo $rez4;
echo "<br>";

$rez5 = $second % $first;
echo $rez5;
echo "<br>";

echo $first ** 3;

echo "<br>";

echo sqrt($first);

echo "<br>";
echo 'text' . 5;

echo 'trex', '      ', 'jyft', 7, 'hgdry';
echo "<br>";

$text = 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.';

echo substr($text, 10, 100);
