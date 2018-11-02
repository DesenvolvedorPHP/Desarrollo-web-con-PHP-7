<?php

// Multiplas exceptions


class MyE extends Exception {}

class MyE2 extends Exception {}


class Car
{
	public function drive($m=1)
	{
		try{
			if ($m == 10){
				throw new MyE("Error...1");
			}
			
			if ($m == 7){
				throw new MyE2("Error...E 2");
			}
			
			echo "driving...";
			
		}catch(MyE | MyE2 $e){
			echo "Error while driving";
		}
		
		
	}
}

$car = new Car;
$car->drive();
//$car->drive(7);
//$car->drive(10);

