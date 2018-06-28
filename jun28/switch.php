<?php

$var = 3;

switch (getNumber()) {
    case 1:
        echo 'one';
        break;
    case 2:
        echo 'two';
        break;
    case 3:
        echo 'three';
        break;
    default:
        echo 'some else number';
        break;
}

function getNumber()
{
    return 3;
}
