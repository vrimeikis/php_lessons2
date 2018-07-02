<?php

setcookie('one', 'labas', time() + 10);

echo '<pre>';

print_r($_COOKIE);


echo '</pre>';
echo $_COOKIE['one'];


//unset($_COOKIE['one']);
setcookie('one', '', -1);
