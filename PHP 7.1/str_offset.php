<?php

// Strings com offset negativo


//$result = substr("abcdef", -3, 1);
//echo $result;

$z = "abcdef";
echo $z[-1];

echo "<br/><hr><br/>";


$test = "abcdef abcdef";
$result = strpos($test, "c", -8);

echo $result;

