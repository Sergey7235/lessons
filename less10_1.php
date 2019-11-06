<!-- 
На __construct

Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата). Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта (вот так: new Worker(имя, возраст) ). Сделайте также public методы getName, getSalary.

Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты.
 -->


<?php
class Worker{
	private $name;
	private $salary;
	public function __construct($name, $age, $salary)
	{
		$this->name = $name;
		$this->age = $age;
		$this->salary = $salary;
	}

	public function getName($name){
		return $this->name;

	}
	public function getSalary($salary){
		return $this->salary;
	}



}




$Worker_1 = new Worker('Дима', 25, 1000);


echo $Worker_1->age * $Worker_1->getSalary($salary);


?>