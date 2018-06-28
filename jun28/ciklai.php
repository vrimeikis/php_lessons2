<?php

$var = 10;

$products = [
    [
        'title' => 'Knyga',
        'price' => 0.15,
    ],
    [
        'title' => 'Zaislas',
        'price' => 3.2,
    ]
];

json_decode(json_encode($products));

while ($var > 0) {
    echo $var, "<br>";
    $var--;
}

echo '<pre>';
for ($i = 0; $i < count($products); $i++) {
    print_r($products[$i]);
}

foreach ($products as $key => $product) {
    echo $key . ': ';
    print_r($product);
}

echo '</pre>';

$firstObject = new stdClass();
$firstObject->title = 'Knyga';
$firstObject->price = 0.15;

print_r($firstObject);

$secondObject = (object)[
    'title' => 'knyga',
    'price' => 0.15,
];

print_r($secondObject);


$var2 = (int)'8765iuyi7';





