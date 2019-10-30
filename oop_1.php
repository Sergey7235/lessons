<?php 

class Car{
	public $name = 'Standart';
	public $color = 'blue';
	public $price = 20000;
	public $maxSpeed = 250;

	public function carOn(){
		echo('машина заведена');
	}

	public function speedUp(){
		echo('машина разгоняется');
	}

	public function stop(){
		echo('машина остановилась');
	}
}



$newCar = new Car();


echo $newCar->name;

$newCar->stop();

?>