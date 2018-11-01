<?php

// Função intdiv

var_dump(intdiv(49.7,5));


var_dump(intdiv(PHP_INT_MAX, PHP_INT_MAX));

var_dump(intdiv(PHP_INT_MIN, PHP_INT_MIN));


var_dump(intdiv(-3,2));



// Fatal Error
var_dump(intdiv(1, 0));

