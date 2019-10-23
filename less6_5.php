<?php  
// $string = 'sdf sdfs sdfsdf   oljkkt';

// $arr = explode(" ", $string); //Строку в массив
// $newStr = implode(' ', $arr);  //Массив в строку


//echo $_POST;

$arr = [];
$j = 0;


$str = $_POST;


foreach ( as $value) {
	array_push($arr, $value);
	for ($i=1; $i < count($arr); $i++) { 
		if ($value == $arr[$i]) {
			array_push($arr, $value);
			$j++;
			$newArr['value'] = $j;
		}
	}
		
}



echo "<pre>";
print_r($newArr);
echo "</pre><br>";




?>







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
</head>
<body>
	


<form action="" method="post">


	<div>Введите строку: <input type="text" name="string"></div><br>
			<button>Go!</button>
</form>




</body>
</html>