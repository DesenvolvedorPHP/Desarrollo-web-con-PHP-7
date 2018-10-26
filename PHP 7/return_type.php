<?php

// Declaração de tipos de retorno

declare(strict_types=1);


function funcA(bool $x):string
{
	return "Hello";
}

echo funcA(true);


/******* Exemplo com INT  *********/


function funcB(int $x):int
{
	return $x / 5;
}

echo funcB(25);


