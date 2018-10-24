<?php

// Modo rigido - Modo Strict Types

declare(strict_types=1);

function rigida(int $x)
{
	return $x;
}


echo rigida(2018);


// Modo coercivo
//echo rigidaa("123");