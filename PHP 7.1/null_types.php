<?php

// Nullable types

// O '?' após o tipo de retorno permite valores nulos, tanto na entrada como na saída dos dados.


function soma($a): ?int
{
	return $a;
}

echo soma(null);

//var_dump(soma(null));

function multi(?float $a): ?float
{
	return $a;
}

var_dump(multi(null));