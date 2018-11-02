<?php

// Acesso a Constantes

class Car{
	
	const C_TYPE = "Normal";
	
	private const C_TYPEX = "X";
	
	protected const C_TYPEY = "Y";

	
}

$x = new Car();
$x::C_TYPE;