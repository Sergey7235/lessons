<?php
class User{
	protected $name;
	protected $age;

	public function setName($name){
		$this->name = $name;
	}
	public function getName($name){
		return $this->name;
	}
	public function setAge($age){
		$this->age = $age;
	}
	public function getAge($age){
		return $this->age;
	}

	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}



}


class Worker extends User{
	private $salary;
	public function getSalary($salary){
		return $this->salary;
	}

	public function __construct($name, $age, $salary)
	{
		parent::__construct($name, $age);
		$this->salary = $salary;
	}

	public function setSalary($salary){
		$this->salary = $salary;
	}

}




$worker_1 = new Worker('Иван', 25, 1000);


echo $worker_1->getName($name);



?>