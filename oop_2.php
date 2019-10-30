<?php 

class worker{
	public $name = 'name';
	public $age = 0;
	public $salary = 0;



}

$worker_1 = new worker();
$worker_1->name = 'Иван';
$worker_1->age = 25;
$worker_1->salary = 1000;

$worker_2 = new worker();
$worker_2->name = 'Вася';
$worker_2->age = 26;
$worker_2->salary = 2000;





echo $worker_1->salary + $worker_2->salary. '<br>';
echo $worker_1->age + $worker_2->age;

?>