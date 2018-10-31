<?php

// Closure Call

class ClasseX
{
	private $x = 1;
}

$getABC = function(){
	return $this->x;
};


// Antigamente
//$getX = $getABC->bindTo(new ClasseX, "ClasseX"); 
//echo $getX();


// Novo
$getX = function(){
	return $this->x;
};
echo $getX->call(new ClasseX);