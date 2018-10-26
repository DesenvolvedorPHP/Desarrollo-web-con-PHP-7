<?php

// Declaração de tipos de retorno

declare(strict_types=1);


function funcA(bool $x):string
{
	return "Hello";
}

echo funcA(true);


/****************/


function funcB(int $x):int
{
	return $x / 5;
}

echo funcB(25);


