<?php  
// $string = 'sdf sdfs sdfsdf   oljkkt';

// $arr = explode(" ", $string); //Строку в массив
// $newStr = implode(' ', $arr);  //Массив в строку

$string = $_POST["digits"];

$arr = explode(" ", $string);

foreach ($arr as $value) {
	if (($value % 2)==0) {
		echo $value;
	}

	//echo $value;
}




// echo "<pre><
// print_r($arrDay[$day]);
// echo "</pre><br>";



?>







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
</head>
<body>
	


<form action="" method="post">
<!--	<select name="123">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		
	</select>
 -->


	<div>Введите числа через пробел <input type="text" name="digits"></div><br>
			<button>Считаем</button>
</form>




</body>
</html>