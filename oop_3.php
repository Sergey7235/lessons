<?php 

class Worker{
	private $name = 'name';
	private $age = 0;
	private $salary = 0;

	public function setName($name){
		$this->name = $name;
	}
	public function getName(){
		return $this->name;
	}
	public function setAge($age){
		$this->age = $age;
	}
	public function getAge(){
		return $this->age;
	}
	public function setSalary($salary){
		$this->salary = $salary;
	}
	public function getSalary(){
		return $this->salary;
	}




}


$worker_1 = new Worker();
$worker_1->setName('Иван');
$worker_1->setAge(25);
$worker_1->setSalary(1000);

$worker_2 = new Worker();
$worker_2->setName('Вася');
$worker_2->setAge(26);
$worker_2->setSalary(2000);


echo $worker_1->getSalary() + $worker_2->getSalary(). '<br>';
echo $worker_1->getAge() + $worker_2->getAge();









?>