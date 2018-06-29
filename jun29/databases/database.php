<?php

$db = mysqli_connect(
    'localhost',
    'homestead',
    'secret',
    'php2_data'
);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
} else {
    echo 'It works!';
}


$sql = "
    CREATE TABLE IF NOT EXISTS products (
      `id` INT(11) UNSIGNED AUTO_INCREMENT,
      `title` VARCHAR(100) NOT NULL,
      `price` FLOAT(8, 2) NOT NULL DEFAULT '0.00',
      `amount` INT(11) UNSIGNED,
      PRIMARY KEY (`id`),
      INDEX (`title`)
    ) ENGINE = 'InnoDB' CHARACTER SET utf8";

mysqli_query($db, $sql);














