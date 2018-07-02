<?php

session_start();

echo '<pre>';

$_SESSION['one'] = 'lasbas';

print_r($_SESSION);

echo '<pre>';

session_destroy();
