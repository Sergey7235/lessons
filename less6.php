<?php  
// $string = 'sdf sdfs sdfsdf   oljkkt';

// $arr = explode(" ", $string); //Строку в массив
// $newStr = implode(' ', $arr);  //Массив в строку

$_POST["number_WD"];



// echo "<pre>";
// print_r($arr);
// echo "</pre><br>";

// echo "<pre>";
// echo $_POST["number_WD"];
// echo "</pre><br>";

//echo $_POST;

$arrDay = ['Понедельник','Вторник','Среда', 'Четверг','Пятница', 'Суббота', 'Воскресенье'];


	
// echo "<pre>";

// print_r($arrDay[$day]);
// echo "</pre><br>";



$day = $_POST["number_WD"] - 1;

echo $arrDay[$day];



?>







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
</head>
<body>
	


<form action="" method="post">
	<!-- <select name="123">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		
	</select>
 -->


	<div>Введите номер дня недели: <input type="text" name="number_WD"></div><br>
			<button>Регистрация</button>
</form>




</body>
</html>