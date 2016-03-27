<?php

function addandreturn($num1, $num2) {
    return $num1 + $num2;
    echo 'I never get run!';
}

echo addandreturn(2, 3);

?> 
