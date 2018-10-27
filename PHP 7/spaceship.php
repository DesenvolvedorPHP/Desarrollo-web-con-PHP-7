<?php

// Operador Spaceship - Comparação Combinada

echo "Integer:<br/> ";
echo 3<=>3; // 0
echo "</br>";
echo 2<=>3; // -1
echo "</br>";
echo 3<=>2; // 1

echo "</br>Float: ";
echo 3.4<=>3.4; //0

echo "</br>String:";
echo "a"<=>"b"; //-1

echo "</br>Array:";
echo [1,2,3]<=>[1,1]; //1


/*************/

function intCompare(int $x, int $y):int
{
	
	// PHP 5
	return ($x < $y) ? -1 :(($x > $y) ? 1 : 0);
	
	// PHP 7
	return ($x <=> $y);
}


echo "</br>Função: ".intCompare(2,2);

