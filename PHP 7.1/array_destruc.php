<?php

// Array Destructuring 

/*  old 
$array = [1, 2, 3];
list($a, $b, $c) = $array;
var_dump($a, $b, $c);
*/


$array = [1, 2, 3];
[$a, $b, $c] = $array;
var_dump($a, $b, $c);


$array2 = ['home1'=>'x', 'home2'=>'y'];
['home1'=>$var1, 'home2'=>$var2] = $array2;
print_r($var1);
