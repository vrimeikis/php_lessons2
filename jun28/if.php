<?php

$var = 6;

if ($var == 1) {
    echo 'one';
} elseif ($var == 2){
    echo 'two';
} else {
    echo 'no';
}

return $var ? $var : (true ? 'true' : 'false');
