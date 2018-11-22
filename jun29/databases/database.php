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

$sql1 = "
    INSERT INTO products
    (title, price, amount) VALUES('Knyga', 4.32, 5) 
";

mysqli_query($db, $sql1);

$sql2 = "UPDATE products SET title = 'Bananas'
WHERE id > 2 AND title LIKE 'Kn_ga%'";

mysqli_query($db, $sql2);


$sql3 = "
    SELECT products.*, product_images.path
    FROM products
    LEFT JOIN product_images ON (
        products.id = product_images.product_id
        
    )
    WHERE title LIKE 'Ban%' AND id NOT IN(2, 4) AND product_images.id = 6
    ORDER BY id DESC
";


header('Location: database.php', true, 302);

$res = mysqli_query($db, $sql3);

print_r(mysqli_fetch_all($res));

$sql4 = "DELETE FROM products";
$sql4 = "TRUNCATE TABLE products";











