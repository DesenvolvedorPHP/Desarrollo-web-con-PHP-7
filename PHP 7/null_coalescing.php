<?php

// Operador Null Coalescing


/*
 * Versões anteriors do PHP
 * $a = isset($_GET["a"]) ? $_GET["a"] : "Null";
*/


$a = $_GET["a"] ?? "Null";

echo $a;